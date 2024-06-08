let uploads = document.getElementById('oploaud'),
	imagesWrapper = document.getElementById('watermark-images'),
	dwnldBtn = document.getElementById('get-wm-archive');

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

	const promises = imagesDivArr.map(async (imageDiv) => {
			html2canvas(imageDiv, {
				scrollY: (window.pageYOffset * -1)
			}).then(function (canvas) {
				if (imagesDivArr.length == 1) {
					const link = document.createElement('a');
					link.download = 'collage.png';
					link.href = canvas.toDataURL();
					link.click();
					link.delete;
				}
				if (imagesDivArr.length > 1) {
					let zip = new JSZip(),
						folder = zip.folder();
				}
			})
	})
	const imagesBlobs = await Promise.all(promises);


	imagesBlobs.forEach((imageBlob, index) => {
		// Назначение строки ниже пока не понял
		// let imageFile = new File([imageBlob], imagesNames[index]);
		folder.file(uploads.files[index], imageBlob);
	})

	// folder.generateAsync({ type: "blob" }).then(content => saveAs(content, 'Wincars images'));

})
