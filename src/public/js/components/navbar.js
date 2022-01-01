const iconBtnMobile = document.querySelector(".icon-btn-mobile");

function changeIcon() {
	if (iconBtnMobile.classList.contains("fa-bars")) {
		iconBtnMobile.classList.add("fa-times");
		iconBtnMobile.classList.remove("fa-bars");
	} else {
		iconBtnMobile.classList.remove("fa-times");
		iconBtnMobile.classList.add("fa-bars");
	}
}

function handlerNav(element) {
	if (element.checked) {
		changeIcon();
	} else {
		changeIcon();
	}
}
