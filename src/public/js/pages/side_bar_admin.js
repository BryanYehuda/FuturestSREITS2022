const inBtnMobile = document.querySelector("input.btn-nav-mobile");
const iconBtnMobile = document.querySelector("i.btn-nav-mobile");

inBtnMobile.addEventListener("click", () => {
    if (iconBtnMobile.classList.contains("bi-chevron-double-right")) {
        iconBtnMobile.classList.remove("bi-chevron-double-right");
        iconBtnMobile.classList.add("bi-chevron-double-left");
    }
    else {
        iconBtnMobile.classList.add("bi-chevron-double-right");
        iconBtnMobile.classList.remove("bi-chevron-double-left");
    }
})
