const toggler = document.querySelector("#nav-toggler");
const navMobile = document.querySelector(".mobile-menu");
const navUser = document.querySelector("#nav-user")

navUser.innerHTML = "Sr(a) " + sessionStorage.getItem("username")

toggler.onclick = () => {
  if (navMobile.classList.contains("active"))
    navMobile.classList.remove("active");
  else navMobile.classList.add("active");
};
