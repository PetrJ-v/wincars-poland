let uploads = document.getElementById('oploaud'),
	imagesWrapper = document.getElementById('watermark-images'),
	dwnldBtn = document.getElementById('get-wm-archive'),
	readyToDownload = [];

uploads.addEventListener('change', () => {
	if (uploads.files.length > 0) {
		// console.log(uploads.files[0]);
		Object.values(uploads.files).forEach(imgFile => {
			const imgURL = URL.createObjectURL(imgFile);
			let uploadedImg = document.createElement("img");

			uploadedImg.src = imgURL;
			let imgBlock = document.createElement("div");
			imgBlock.className = 'watermark__img';
			imgBlock.append(uploadedImg);
			imagesWrapper.append(imgBlock);
		});
		dwnldBtn.classList.add('visible');
	}
})

dwnldBtn.addEventListener('click', async () => {
	let imagesDiv = document.querySelectorAll('.watermark__img'),
		imagesDivArr = Array.from(imagesDiv);

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
			// console.log(imageObj);
			// Назначение строки ниже пока не понял
			// let imageFile = new File([imageBlob], imagesNames[index]);

			folder.file(imageObj.name, imageObj.imgBlob);
		})

		folder.generateAsync({ type: "blob" }).then(content => saveAs(content, 'Wincars images'));
	}

	const promises = imagesDivArr.map(async (imageDiv, index) => {
		html2canvas(imageDiv, {
			scrollY: (window.pageYOffset * -1)
		}).then(function (canvas) {
			let imageObj = {
				name: uploads.files[index].name,
				imgDataUrl: canvas.toDataURL("image/jpeg"), //"image/jpeg"
				// imgBlob:
			}
			canvas.toBlob((blob) => {
				imageObj.imgBlob = blob;
			})
			readyToDownload.push(imageObj);
		})
	})

	if (readyToDownload.length == 1) {
		saveSingleImage(readyToDownload[0])
	}
	if (readyToDownload.length > 1) {
		saveImageArchive(readyToDownload)
	}
})
