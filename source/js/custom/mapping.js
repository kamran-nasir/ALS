$(document).ready(function (e) {
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
  function toggleDDL() {
    document.getElementById("assets-map-countries").classList.toggle("show");
    document.getElementById("assets-ddl-arrow").classList.toggle("ddl-up");
    document.getElementById("assets-ddl-btn").classList.toggle("ddl-opened");
  }
  $(".dropbtn").on("click", function (e) {
    e.stopPropagation();
    toggleDDL();
  });
  $(".assets-image-map__pins .pin").on("click", function () {
    $(".dropbtn .assets-coutry-active").text(
      $(this).find(".pin__active").text()
    );
  });
  $(".dropdown .pin").on("click", function () {
    $(".dropbtn .assets-coutry-active").text(
      $(this).find(".pin__active").text()
    );
    toggleDDL();

    $(".assets-image-map__pins .nav-item").removeClass("active");
    $(`[href='${$(this).attr("href")}']`)
      .parent(".nav-item")
      .addClass("active");
  });
  // Close the dropdown if the user clicks outside of it
  window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      // var dropdownsArrow = document.getElementsByClassName("ddl-arrow");
      // var dropdownsBtn = document.getElementsByClassName("dropbtn");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];

        if (openDropdown.classList.contains("show")) {
          openDropdown.classList.remove("show");
          document
            .getElementById("assets-ddl-arrow")
            .classList.toggle("ddl-up");
          document
            .getElementById("assets-ddl-btn")
            .classList.toggle("ddl-opened");
        }
      }
      // for (i = 0; i < dropdownsArrow.length; i++) {
      //   var openDDLAroow = dropdownsArrow[i];

      //   if (openDDLAroow.classList.contains("ddl-up")) {
      //     openDDLAroow.classList.remove("ddl-up");
      //   }
      // }
      // for (i = 0; i < dropdownsBtn.length; i++) {
      //   var openDropdownBtn = dropdownsBtn[i];

      //   if (openDropdownBtn.classList.contains("ddl-opened")) {
      //     openDropdownBtn.classList.remove("ddl-opened");
      //   }
      // }
    }
  };
});
