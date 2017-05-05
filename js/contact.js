function modal() {
	var btn = document.querySelector('.js-btn'),
		modal = document.querySelector('.js-modal');
	btn.onclick = function() {
		modal.classList.toggle('open');
	}
}