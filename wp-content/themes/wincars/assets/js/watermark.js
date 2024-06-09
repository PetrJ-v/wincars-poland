let uploads = document.getElementById('uploaud'),
	imagesWrapper = document.getElementById('watermark-images'),
	dwnldBtn = document.getElementById('get-wm-archive'),
	resetBtnSpan = document.querySelector('.upload-input__text');

uploads.addEventListener('change', () => {
	let fileCounts = uploads.files.length,
		currentImageCountOnPage = document.querySelectorAll('.watermark__img').length,
		tottalCount = fileCounts + currentImageCountOnPage;
	if (tottalCount == 1) {
		resetBtnSpan.textContent = 'Избрано е 1 изображение';
	} else if (tottalCount > 1) {
		resetBtnSpan.textContent = `Избрани са ${tottalCount} изображения`;
	}
	else {
		resetBtnSpan.textContent = '0 избрани изображения';
	}

	// let resetBtnTextSingle = 'Избрано е 1 изображение',
	// 	resetBtnTextMultiple = 'Избрани са 10 изображения';
	if (fileCounts > 0) {
		Object.values(uploads.files).forEach(imgFile => {
			const imgURL = URL.createObjectURL(imgFile);
			let uploadedImg = document.createElement("img");

			uploadedImg.src = imgURL;
			let imgBlock = document.createElement("div");
			imgBlock.className = 'watermark__img';
			imgBlock.append(uploadedImg);
			imagesWrapper.append(imgBlock);
		});
		dwnldBtn.disabled = false;
	}
})

dwnldBtn.addEventListener('click', () => {
	let imagesDiv = document.querySelectorAll('.watermark__img'),
		imagesDivArr = Array.from(imagesDiv);

	/**
	 * Convert image in dataUrl format back to file
	 * @param {string} dataurl
	 * @param {string} filename
	 * @returns
	 */
	let dataURLtoFile = (dataurl, filename) => {
		var arr = dataurl.split(","),
			mime = arr[0].match(/:(.*?);/)[1],
			bstr = atob(arr[arr.length - 1]),
			n = bstr.length,
			u8arr = new Uint8Array(n);
		while (n--) {
			u8arr[n] = bstr.charCodeAt(n);
		}
		return new File([u8arr], filename, { type: mime });
	}

	/**
	 * Save image like it is, without zip
	 * @param {Object} readyToDownload - an object with all the necessary data to save image (name and url)
	 */
	let saveSingleImage = (readyToDownload) => {
		const link = document.createElement('a');
		link.download = readyToDownload.name;
		link.href = readyToDownload.imgDataUrl;
		link.click();
		link.delete;
	}

	/**
	 * Save zip archive with images
	 * @param {Array} readyToDownload - an array of objects with all the necessary data to save image (name and blob)
	 */
	let saveImageArchive = (readyToDownload) => {
		let zip = new JSZip(),
			folder = zip.folder();

		readyToDownload.forEach((imageObj) => {
			let fileName = imageObj.name,
				currentImageFile = dataURLtoFile(imageObj.imgDataUrl, fileName);

			// Назначение строки ниже пока не понял
			// let imageFile = new File([imageBlob], imagesNames[index]);

			folder.file(fileName, currentImageFile);
		})

		folder.generateAsync({ type: "blob" }).then(content => saveAs(content, 'Wincars images'));
	}

	let getImagesData = imagesDivArr.map((imageDiv, index) => {
		return new Promise(resolve => {
			html2canvas(imageDiv, {
				scrollY: (window.pageYOffset * -1),
				scale: 1
			})
				.then(canvas => {
					return new Promise(resolve => {
						canvas.toBlob((imgBlob) => {
							let data = {
								canvas: canvas,
								imgBlob: imgBlob
							}
							resolve(data);
						})
					})
				})
				.then(result => {
					let imageObj = {
						name: uploads.files[index].name,
						imgDataUrl: result.canvas.toDataURL("image/jpeg", 1.0), //"image/jpeg"
						imgBlob: result.imgBlob
					}
					resolve(imageObj);
				})
		})
	})

	Promise.all(getImagesData).then((imagesArrayData) => {
		if (imagesArrayData.length == 1) {
			saveSingleImage(imagesArrayData[0])
		}
		if (imagesArrayData.length > 1) {
			saveImageArchive(imagesArrayData)
		}
	})
})


let resetBtn = document.getElementById('reset-btn');
resetBtn.addEventListener('click', async () => {
	let images = document.querySelectorAll('.watermark__img');

	images.forEach(item => {
		item.remove();
	})
	dwnldBtn.disabled = true;
	uploads.value = '';
	resetBtnSpan.textContent = 'Изберете изображения';
})
