const iconBtnMobile = document.querySelector(".icon-btn-mobile");

function changeIcon() {
	if (iconBtnMobile.classList.contains("bi-list")) {
		iconBtnMobile.classList.add("bi-x-lg");
		iconBtnMobile.classList.remove("bi-list");
	} else {
		iconBtnMobile.classList.remove("bi-x-lg");
		iconBtnMobile.classList.add("bi-list");
	}
}

function handlerNav(element) {
	if (element.checked) {
		changeIcon();
	} else {
		changeIcon();
	}
}
