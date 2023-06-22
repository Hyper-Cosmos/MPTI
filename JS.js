function activateNavbarItem() {
  var navbar = document.querySelector("nav");
  var navbarItems = navbar.querySelectorAll("a");

  for (var i = 0; i < navbarItems.length; i++) {
    navbarItems[i].addEventListener("mouseover", function() {
      this.classList.add("active");
    });
    navbarItems[i].addEventListener("mouseout", function() {
      this.classList.remove("active");
    });
  }
}

activateNavbarItem();

