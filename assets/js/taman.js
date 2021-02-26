/* Disable Links if there class .isDisabled*/
/* Disable Links if there class .isDisabled*/
window.onload = function () {
    var idealx_divs = document.querySelectorAll(".uk-video iframe");
    for (var i = 0; i < idealx_divs.length; i++) {
        idealx_divs[i].setAttribute("uk-uk-responsive", "");
        idealx_divs[i].removeAttribute("allow", "");
        idealx_divs[i].setAttribute("width", "100%");
        idealx_divs[i].setAttribute("height", "100%");
    }
};
jQuery(document).on("keyup", function (e) {
    var idealx_modal = UIkit.modal(".uk-modal");
    if (e.keyCode === 27 && idealx_modal.isActive()) {
        idealx_modal.hide();
    }
});

jQuery(document).ready(function ($) {
    $(".postform").select2();
    $.fn.select2.defaults.set("theme", "bootstrap");
    $("select").select2({
        theme: "bootstrap",
    });



    $(".more-link").focus(function () {
        $(this).next("span").focus();
    });
});


jQuery(document).ready(function () {

    jQuery(document).ready(function ($) {
        $('ul.sf-menu').supersubs({
            minWidth: 12, // minimum width of submenus in em units
            maxWidth: 27, // maximum width of submenus in em units
            extraWidth: 1 // extra width can ensure lines don't sometimes turn over
            // due to slight rounding differences and font-family
        }).superfish({
            delay: 1000, // one second delay on mouseout
            animation: { opacity: 'show', height: 'show' }, // fade-in and slide-down animation
            speed: 'normal', // faster animation speed
            autoArrows: true // disable generation of arrow mark-up
        });


    });

    jQuery('ul.sf-menu').supersubs({
        minWidth: 12, // minimum width of submenus in em units
        maxWidth: 27, // maximum width of submenus in em units
        extraWidth: 1 // extra width can ensure lines don't sometimes turn over
        // due to slight rounding differences and font-family
    }).superfish(); // call supersubs first, then superfish, so that subs are
    // not display:none when measuring. Call before initialising
    // containing tabs for same reason.
});


//Fix: Pressing tab key after the last item of menu focus should be on the cancel button
function idealx_fix__tabKey() {
    // add all the elements inside idealx_modal which you want to make focusable
    const focusableElements =
        'a,button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
    const idealx_modal = document.querySelector('#m-t-offcanvas'); // select the idealx_modal by it's id

    const firstFocusableElement = idealx_modal.querySelectorAll(focusableElements)[0]; // get first element to be focused inside idealx_modal
    const focusableContent = idealx_modal.querySelectorAll(focusableElements);
    const lastFocusableElement = focusableContent[focusableContent.length - 1]; // get last element to be focused inside idealx_modal


    document.addEventListener('keydown', function (e) {
        let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

        if (!isTabPressed) {
            return;
        }

        if (e.shiftKey) { // if shift key pressed for shift + tab combination
            if (document.activeElement === firstFocusableElement) {
                lastFocusableElement.focus(); // add focus for the last focusable element
                e.preventDefault();
            }
        } else { // if tab key is pressed
            if (document.activeElement === lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
                firstFocusableElement.focus(); // add focus for the first focusable element
                e.preventDefault();
            }
        }
    });

    firstFocusableElement.focus();
}
idealx_fix__tabKey();