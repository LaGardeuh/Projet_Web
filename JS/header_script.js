var profileTab = document.querySelector(".profile-tab");
var profileDropdown = document.querySelector(".profile-dropdown");

profileTab.addEventListener("click", function() {
  profileDropdown.classList.toggle("show");
});

window.onclick = function(event) {
  if (!event.target.matches(".profile-tab")) {
    var dropdowns = document.getElementsByClassName("profile-dropdown");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
}
