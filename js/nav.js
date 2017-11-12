var siebar_resize_width = 300,
mobile_size = 1493,
menu_closed = true;

if (window.innerWidth <= mobile_size) {
    set_mobile();

}
else {
    set_desktop();
}

function set_mobile() {
    //start page
    /*   $("#start-page-image div").css("left",0);
    $("#start-page-image div").css("min-width","100%");*/

    $("header").addClass("mobile");
    $(".sidebar-toggle").addClass("mobile");
    $("header").css("left", -siebar_resize_width)
    $(".content-wrapp").css("margin-left", 0)
}

function set_desktop() {
    close_menu();
    //start page
    /*$("#start-page-image div").css("left","16%");
    $("#start-page-image div").css("min-width","85%");*/

    $("header").removeClass("mobile");
    $(".sidebar-toggle").removeClass("mobile");
    $(".content-wrapp").css("margin-left", "17%");
    $("header").css("left", 0)
}

function open_menu() {
    $("header").css("left", 0);
    $(".sidebar_overlay").css("opacity", 0.75);
    $(".sidebar_overlay").css("z-index", 101);
    $(".sidebar-hamburger").addClass("is-active");
    menu_closed = false;
}

function close_menu() {
    $("header").css("left", -siebar_resize_width);
    $(".sidebar_overlay").css("opacity", 0);
    $(".sidebar_overlay").css("z-index", -1);
    $(".sidebar-hamburger").removeClass("is-active");
    menu_closed = true;
}

$(window).bind('resize', function () {

    if (typeof sizewait != 'undefined') {
        clearTimeout(sizewait);
    }

    sizewait = setTimeout(function () {
        if (window.innerWidth <= mobile_size) {
            set_mobile();

        }
        else {
            set_desktop();
        }
    }, 200);
});


$( document ).ready(function() {
    $(".sidebar-toggle").click(function () {
        if (window.innerWidth <= mobile_size && menu_closed) {
            open_menu();
        }
    
        else if (window.innerWidth <= mobile_size && !menu_closed) {
            close_menu();
        }
        $(".no-transition").removeClass("no-transition");
    });

    $("#main a").each(function() {
        console.log(this.href)
        if(this.href == window.location.href)
            $(this).addClass("active")
    })
});


