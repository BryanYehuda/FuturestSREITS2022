const btnNavMobile = document.querySelector(".btn-nav-mobile");
const btnBackNavMobile = document.querySelector(".back-btn-navbar-mobile");
const navLinksMobile = document.querySelector(".navbar-links-mobile");

btnNavMobile.addEventListener("click", () => {
  navLinksMobile.style.transform = "translateX(0)";
});

btnBackNavMobile.addEventListener("click", () => {
  navLinksMobile.style.transform = "translateX(-100%)"
});
