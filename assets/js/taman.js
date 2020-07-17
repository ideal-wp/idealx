/* Disable Links if there class .isDisabled*/
/* Disable Links if there class .isDisabled*/
window.onload = function () {
  var divs = document.querySelectorAll(".uk-video iframe");
  for (var i = 0; i < divs.length; i++) {
    divs[i].setAttribute("uk-uk-responsive", "");
    divs[i].removeAttribute("allow", "");
    divs[i].setAttribute("width", "100%");
    divs[i].setAttribute("height", "100%");
  }
};
jQuery(document).on("keyup", function (e) {
  var modal = UIkit.modal(".uk-modal");
  if (e.keyCode === 27 && modal.isActive()) {
    modal.hide();
  }
});

jQuery(document).ready(function ($) {
  $(".postform").select2();
  $.fn.select2.defaults.set("theme", "bootstrap");
  $("select").select2({
    theme: "bootstrap",
  });

  $(".dropdown-toggle").focus(function () {
    $(this).addClass("uk-open");
    $(this).next("div").addClass("uk-open");
  });

  $("ul .uk-navbar-dropdown-nav li:last-child a").keydown(function () {
    $(this).parentsUntil(".dropdown-toggle").removeClass("uk-open");
  });

  $(".uk-parent a").focus(function () {
    $(this).next(".uk-dropdown").addClass("uk-open");
  });

  $(".more-link").focus(function () {
    $(this).next("span").focus();
  });
});
