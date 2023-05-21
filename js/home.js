const form = document.querySelector(".sorting form");
const selectSort = document.querySelector(".sorting select");
const sortOptions = document.querySelectorAll(".sorting option");

document.addEventListener("DOMContentLoaded", (e) => {
	const queryArray = location.search.split("?").join("").split("&");
	let sortOption;
	let orderOption;
	queryArray.forEach((q) => {
		const queryString = q.split("=");
		if (queryString[0] === "sort") {
			sortOption = queryString[1];
		} else if (queryString[0] === "order") {
			orderOption = queryString[1];
		}
	});
	if (sortOption && orderOption) {
		const value = `${sortOption}/${orderOption}`;
		const option = document.querySelector(`.sorting option[value="${value}"]`);
		option.setAttribute("disabled", true);
		option.setAttribute("selected", true);
	} else {
		sortOptions[0].setAttribute("disabled", true);
		sortOptions[0].setAttribute("selected", true);
	}
});

selectSort.addEventListener("change", (e) => {
	const value = e.target.value.split("/");
	const locationSearch = urlQueries("sort", value[0], location.search);
	const query = urlQueries("order", value[1], locationSearch);
	const url = location.href.split("?")[0];
	window.location.href = `${url}?${query}`;
});

function urlQueries(key, val, urlSearch) {
	const queryArray = urlSearch.split("?").join("").split("&");
	if (queryArray[0]) {
		for (let i = 0; i < queryArray.length; i++) {
			const queryString = queryArray[i].split("=");
			if (queryString[0] === key) {
				queryArray.splice(i, 1);
			}
		}
		const q = `${key}=${val}`;
		queryArray.push(q);
		return queryArray.join("&");
	} else {
		return `${key}=${val}`;
	}
}
