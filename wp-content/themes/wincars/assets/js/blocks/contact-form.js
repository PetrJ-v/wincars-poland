document.addEventListener('DOMContentLoaded', function () {
	let policyCheckbox = () => {
		let contactFormWrappers = document.querySelectorAll('.contact-form');

		contactFormWrappers.forEach((contactFormWrapper) => {
			let label = contactFormWrapper.querySelector('.policy label')

			label.addEventListener('click', function (event) {
				// Disabling standard label behavior to prevent double event fire
				event.preventDefault();

				let input = label.querySelector('input[type="checkbox"]');
				input.checked = !input.checked;
				if (input.checked) {
					label.classList.add('checked');
				} else {
					label.classList.remove('checked');
				}
			});
		})
	}
	policyCheckbox();
});
