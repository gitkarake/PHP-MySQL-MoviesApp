document.addEventListener("DOMContentLoaded", (e) => {
	const genres = document.querySelectorAll(
		".genres-container .checkbox-holder input"
	);
	genres.forEach((gen) => {
		gen.addEventListener("change", (e) => {
			if (e.target.checked) {
				e.target.closest(".checkbox-holder").classList.add("active");
			} else {
				e.target.closest(".checkbox-holder").classList.remove("active");
			}
		});
	});
});
