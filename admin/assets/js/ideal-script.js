/* Disable Links if there class .isDisabled*/
window.onload = function() {
  var divs = document.querySelectorAll('.isDisabled');
  for (var i = 0; i < divs.length; i++) {
      divs[i].removeAttribute('href');
      divs[i].setAttribute('aria-disabled', 'true');
  }
}


