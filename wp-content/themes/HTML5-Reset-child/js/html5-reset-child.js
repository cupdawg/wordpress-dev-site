$(document).ready(function () {
    // if mobile width when loaded, hide menu
    if ($(window).width() < 768) {
        $("#nav ul").addClass("hidden");
    }
    // add nested toggle buttons
    $('ul.children').before('<button type="button" class="btn btn-default btn-lg nested-toggle"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></button>');

    //add a button toggle, hide or show
    $('.responsive-toggle').click(function () {
        $("#nav ul").toggleClass("hidden");
    });

    // hide or unhide the window
    $(window).resize(function () {
        // IF the wondow is 768px or greater, remove any hidden class from the menu
        if ($(window).width() >= 768) {
            $("#nav ul").removeClass("hidden");
        }
        else {
            $("#nav ul").addClass("hidden");
        }
    });
});