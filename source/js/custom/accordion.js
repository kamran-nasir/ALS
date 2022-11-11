gsap.delayedCall(1, myFunction, ["param1", "param2"]);

function myFunction(param1, param2) {
  $(".accordion-panel").on("click", ".accordion__header", function () {
    $(".accordion__body").slideUp().removeClass("flipInX");
    $(".accordion__button").removeClass("fa-minus");
    if ($(this).next().is(":hidden")) {
      $(this).next().slideDown().addClass("flipInX");
      $(this).find(".accordion__button").addClass("fa-minus");
    } else {
      $(this).next().slideUp();
      $(this).find(".accordion__button").addClass("fa-plus");
    }
  });
  ScrollTrigger.refresh();
}