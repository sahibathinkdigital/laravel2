$(function () {
    "use strict";

    var wind = $(window);

    /* =============================================================================
    -----------------------------  Smooth Scroll nav   -----------------------------
    ============================================================================= */

    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: "linear", // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: "active", // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -75, // offste (in px) for fixed top navigation
    });

    /* =============================================================================
    --------------------------------  Navbar Menu   --------------------------------
    ============================================================================= */

    $(".navbar .dropdown").hover(
        function () {
            $(this).find(".dropdown-menu").addClass("show");
        },
        function () {
            $(this).find(".dropdown-menu").removeClass("show");
        }
    );

    $(".navbar .dropdown-item").hover(
        function () {
            $(this).find(".dropdown-side").addClass("show");
        },
        function () {
            $(this).find(".dropdown-side").removeClass("show");
        }
    );

    $(".navbar .search-form").on("click", ".search-icon", function () {
        $(".navbar .search-form").toggleClass("open");

        if ($(".navbar .search-form").hasClass("open")) {
            $(".search-form .close-search").slideDown();
        } else {
            $(".search-form .close-search").slideUp();
        }
    });

    $(".navbar").on("click", ".navbar-toggler", function () {
        $(".navbar .navbar-collapse").toggleClass("show");
    });

    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar.change .logo> img");

        if (bodyScroll > 300) {
            navbar.addClass("nav-scroll");
            logo.attr("src", "assets/imgs/logo-dark.png");
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr("src", "assets/imgs/logo-light.png");
        }
    });

    function noScroll() {
        window.scrollTo(0, 0);
    }

    $(".navbar .menu-icon").on("click", function () {
        $(".hamenu").addClass("open");

        $(".hamenu").animate({ left: 0 });
    });

    $(".hamenu .close-menu, .one-scroll .menu-links .main-menu > li").on(
        "click",
        function () {
            $(".hamenu")
                .removeClass("open")

                .animate({ left: "-100%" });
            $(
                ".hamenu .menu-links .main-menu .dmenu, .hamenu .menu-links .main-menu .sub-dmenu"
            ).removeClass("dopen");
            $(
                ".hamenu .menu-links .main-menu .sub-menu, .hamenu .menu-links .main-menu .sub-menu2"
            ).slideUp();
        }
    );

    $(".hamenu .menu-links .main-menu > li").on("mouseenter", function () {
        $(this).removeClass("hoverd").siblings().addClass("hoverd");
    });

    $(".hamenu .menu-links .main-menu > li").on("mouseleave", function () {
        $(this).removeClass("hoverd").siblings().removeClass("hoverd");
    });

    $(".main-menu > li .dmenu").on("click", function () {
        $(this)
            .parent()
            .parent()
            .find(".sub-menu")
            .toggleClass("sub-open")
            .slideToggle();
        $(this).toggleClass("dopen");
    });

    $(".sub-menu > ul > li .sub-dmenu").on("click", function () {
        $(this)
            .parent()
            .parent()
            .find(".sub-menu2")
            .toggleClass("sub-open")
            .slideToggle();
        $(this).toggleClass("dopen");
    });

    /* =============================================================================
    ------------------------------  Interactive work   -----------------------------
    ============================================================================= */

    $(".inter-links-center .links-text li").on("mouseenter", function () {
        var tab_id = $(this).attr("data-tab");
        $(".links-text li").removeClass("current");
        $(this).addClass("current");

        $(".links-img .img").removeClass("current");
        $("#" + tab_id).addClass("current");

        if ($(this).hasClass("current")) {
            return false;
        }
    });

    $(".inter-links-center .links-text li").on("mouseleave", function () {
        $(".links-text li").removeClass("current");
        $(".links-img .img").removeClass("current");
    });

    $(".inter-links-center .links-text li").on("mouseenter", function () {
        $(this).removeClass("no-active").siblings().addClass("no-active");
    });

    $(".inter-links-center .links-text li").on("mouseleave", function () {
        $(".inter-links-center .links-text li").removeClass("no-active");
    });

    /* =============================================================================
    ------------------------------  Data Background   ------------------------------
    ============================================================================= */

    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css(
                "background-image",
                "url(" + $(this).data("background") + ")"
            );
        }
    });

    var pageSectionColor = $(".bg-solid-color, section");
    pageSectionColor.each(function (indx) {
        var color = $(this).attr("data-solid-color");

        if ($(this).attr("data-solid-color")) {
            $(this).css("background-color", color);
        }
    });

    /* =============================================================================
    ------------------------------  Interactive work   -----------------------------
    ============================================================================= */

    $(".inter-fixed-text .links-img .img").on("mouseenter", function () {
        var tab_id = $(this).attr("data-tab");
        $(".links-img .img").removeClass("current");
        $(this).addClass("current");

        $(".links-text li").removeClass("current");
        $("#" + tab_id).addClass("current");

        if ($(this).hasClass("current")) {
            return false;
        }
    });

    $(".inter-fixed-text .links-img .img").on("mouseleave", function () {
        $(".links-text li").removeClass("current");
        $(".links-img .img").removeClass("current");
    });

    /* =============================================================================
    -----------------------------------  Tabs  -------------------------------------
    ============================================================================= */

    $("#tabs .tab-links").on("click", ".item-link", function () {
        var tab_id = $(this).attr("data-tab");

        $("#tabs .tab-links .item-link").removeClass("current");
        $(this).addClass("current");

        $(".tab-content").hide();
        $("#" + tab_id).show();
    });

    $("#tabs-fade .tab-links").on("click", ".item-link", function () {
        var tab2_id = $(this).attr("data-tab");

        $("#tabs-fade .tab-links .item-link").removeClass("current");
        $(this).addClass("current");

        $(".tab-content").fadeOut();
        $("#" + tab2_id).fadeIn();
    });

    /* ===============================  Work Tabs  =============================== */

    $(".portfolio-tab .cluom").on("mouseenter", function () {
        var tab_id = $(this).attr("data-tab");
        $(".portfolio-tab .cluom").removeClass("current");
        $(this).addClass("current");

        $(".portfolio-tab .glry-img .tab-img ").removeClass("current");
        $("#" + tab_id).addClass("current");

        if ($(this).hasClass("current")) {
            return false;
        }
    });

    /* ===============================  Team Tabs  =============================== */

    $(".team-tab .cluom").on("mouseenter", function () {
        var tab_id = $(this).attr("data-tab");
        $(".team-tab .cluom").removeClass("current");
        $(this).addClass("current");

        $(".team-tab .glry-img .tab-img ").removeClass("current");
        $("#" + tab_id).addClass("current");

        if ($(this).hasClass("current")) {
            return false;
        }
    });

    /* =============================================================================
    ---------------------------------  Tolltip  ------------------------------------
    ============================================================================= */

    $("[data-tooltip-tit]")
        .hover(
            function () {
                $('<div class="div-tooltip-tit"></div>')
                    .text($(this).attr("data-tooltip-tit"))
                    .appendTo("body")
                    .fadeIn();
            },
            function () {
                $(".div-tooltip-tit").remove();
            }
        )
        .mousemove(function (e) {
            $(".div-tooltip-tit").css({
                top: e.pageY + 10,
                left: e.pageX + 20,
            });
        });

    $("[data-tooltip-sub]")
        .hover(
            function () {
                $('<div class="div-tooltip-sub"></div>')
                    .text($(this).attr("data-tooltip-sub"))
                    .appendTo("body")
                    .fadeIn();
            },
            function () {
                $(".div-tooltip-sub").remove();
            }
        )
        .mousemove(function (e) {
            $(".div-tooltip-sub").css({
                top: e.pageY + -20,
                left: e.pageX + 30,
            });
        });

    /* =============================================================================
    ------------------------------  Parallax Items   -----------------------------
    ============================================================================= */

    // Get the target elements
    const parallaxTargets = document.querySelectorAll(".parallax");

    // Get the mouse position
    let mouseX = 0;
    let mouseY = 0;
    document.addEventListener("mousemove", function (event) {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });

    // Update the target elements' position on each animation frame
    let rafId = null;
    function updateParallax() {
        // Loop through each target element
        parallaxTargets.forEach((target) => {
            // Get the target's speed
            let speed = target.dataset.speed;

            // Calculate the new position based on the mouse position and speed
            let x = (window.innerWidth / 2 - mouseX) * speed;
            let y = (window.innerHeight / 2 - mouseY) * speed;
            target.style.transform = `translate3d(${x / 10}rem, ${
                y / 10
            }rem, 0)`;
        });

        // Schedule the next animation frame
        rafId = requestAnimationFrame(updateParallax);
    }

    // Start the parallax animation
    updateParallax();

    /* =============================================================================
    -----------------------------  Trigger Plugins  --------------------------------
    ============================================================================= */

    /* ========== Sticky ========== */

    $(".sticky-item").stick_in_parent();

    /* ========== YouTubePopUp ========== */

    $("a.vid").YouTubePopUp();

    /* ========== parallaxie ========== */

    $(".parallaxie").parallaxie({
        speed: 0.8,
        size: "cover",
    });

    /* ========== paroller ========== */

    $(".my-paroller").paroller();

    /* ========== magnificPopup ========== */

    $(".popup-img , .gallery").magnificPopup({
        delegate: ".popimg",
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    /* =========== justifiedGallery =========== */

    $(".justified-gallery").justifiedGallery({
        rowHeight: 400,
        lastRow: "nojustify",
        margins: 15,
    });

    /* =========== hover3d =========== */

    $(".hover3d").hover3d({
        selector: ".hover3d-child",
        invert: true,
    });

    /* ===========  Splitting  =========== */

    Splitting();
});

/* =============================================================================
-----------------------------  cursor Animation  -----------------------------
============================================================================= */

(function () {
    const link = document.querySelectorAll(".hover-this");
    const cursor = document.querySelector(".cursor");

    const animateit = function (e) {
        const hoverAnim = this.querySelector(".hover-anim");
        const { offsetX: x, offsetY: y } = e,
            { offsetWidth: width, offsetHeight: height } = this,
            move = 25,
            xMove = (x / width) * (move * 2) - move,
            yMove = (y / height) * (move * 2) - move;
        hoverAnim.style.transform = `translate(${xMove}px, ${yMove}px)`;
        if (e.type === "mouseleave") hoverAnim.style.transform = "";
    };

    const editCursor = (e) => {
        const { clientX: x, clientY: y } = e;
        cursor.style.left = x + "px";
        cursor.style.top = y + "px";
    };

    const applyCursorEffects = () => {
        if (window.innerWidth > 768) {
            // Adjust the width as per your requirement for desktop view
            link.forEach((b) => b.addEventListener("mousemove", animateit));
            link.forEach((b) => b.addEventListener("mouseleave", animateit));
            window.addEventListener("mousemove", editCursor);

            $("a, .cursor-pointer").hover(
                function () {
                    $(".cursor").addClass("cursor-active");
                },
                function () {
                    $(".cursor").removeClass("cursor-active");
                }
            );
        } else {
            link.forEach((b) => b.removeEventListener("mousemove", animateit));
            link.forEach((b) => b.removeEventListener("mouseleave", animateit));
            window.removeEventListener("mousemove", editCursor);
        }
    };

    // Initial check
    applyCursorEffects();

    // Re-apply the check on window resize
    window.addEventListener("resize", applyCursorEffects);
})();

/* =============================================================================
////////////////////////////////////////////////////////////////////////////////
============================================================================= */

$(window).on("load", function () {
    /* =============================================================================
    -----------------------------  isotope Masonery   ------------------------------
    ============================================================================= */

    $(".gallery").isotope({
        itemSelector: ".items",
    });

    // isotope
    $(".gallery2").isotope({
        // options
        itemSelector: ".items",
        masonry: {
            // use element for option
            columnWidth: ".width2",
        },
    });

    var $gallery = $(".gallery , .gallery2").isotope();

    $(".filtering").on("click", "span", function () {
        var filterValue = $(this).attr("data-filter");
        $gallery.isotope({ filter: filterValue });
    });

    $(".filtering").on("click", "span", function () {
        $(this).addClass("active").siblings().removeClass("active");
    });

    /* =============================================================================
    -----------------------------  Contact Valdition   -----------------------------
    ============================================================================= */

    $("#contact-form").validator();

    $("#contact-form").on("submit", function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = "alert-" + data.type;
                    var messageText = data.message;

                    var alertBox =
                        '<div class="alert ' +
                        messageAlert +
                        ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                        messageText +
                        "</div>";
                    if (messageAlert && messageText) {
                        $("#contact-form").find(".messages").html(alertBox);
                        $("#contact-form")[0].reset();
                    }
                },
            });
            return false;
        }
    });
});

/* =============================================================================
-----------------------------  Button scroll up   ------------------------------
============================================================================= */

$(document).ready(function () {
    "use strict";

    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength) / height;
        progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(".progress-wrap").addClass("active-progress");
        } else {
            jQuery(".progress-wrap").removeClass("active-progress");
        }
    });
    jQuery(".progress-wrap").on("click", function (event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, duration);
        return false;
    });
});

/* =============================================================================
--------------------------------  Fade Header   --------------------------------
============================================================================= */

$(window).scroll(function () {
    var scrolled = $(this).scrollTop();
    $(".fixed-slider .caption").css({
        transform: "translate3d(0, " + -(scrolled * 0.2) + "px, 0)",
        opacity: 1 - scrolled / 600,
    });
});

/* =============================================================================
-------------------------------  Wow Animation   -------------------------------
============================================================================= */

wow = new WOW({
    animateClass: "animated",
    offset: 100,
});
wow.init();

/* =============================================================================
////////////////////////////////////////////////////////////////////////////////
============================================================================= */

$(function () {
    var width = $(window).width();
    if (width > 991) {
        ("use strict");

        var wind = $(window);

        /* =============================================================================
        -------------------------------  Smooth Footer   -------------------------------
        ============================================================================= */

        // gsap.set(".footer-container", { yPercent: -50 });
        // const uncover = gsap.timeline({ paused: true });
        // uncover.to(".footer-container", { yPercent: 0, ease: "none" });

        // ScrollTrigger.create({
        //     trigger: "main",
        //     start: "bottom bottom",
        //     end: "+=50%",
        //     animation: uncover,
        //     scrub: true,
        // });

        /* =============================================================================
        -----------------------------  Portfolio Fixed  --------------------------------
        ============================================================================= */

        wind.on("scroll", function () {
            $(".portfolio-fixed .sub-bg .cont").each(function () {
                var bottom_of_object =
                    $(this).offset().top + $(this).outerHeight();
                var bottom_of_window =
                    $(window).scrollTop() + $(window).height();
                var tab_id = $(this).attr("data-tab");
                if (bottom_of_window > bottom_of_object) {
                    $("#" + tab_id).addClass("current");
                    $(this).addClass("current");
                } else {
                    $("#" + tab_id).removeClass("current");
                    $(this).removeClass("current");
                }
            });
        });
    }
});

$(function () {
    var width = $(window).width();
    if (width < 991) {
        ("use strict");

        $(".navbar .navbar-nav").on("click", ".nav-link", function () {
            $(".navbar .navbar-nav .dropdown .dropdown-menu").removeClass(
                "show"
            );

            $(this).parent().find(".dropdown-menu").addClass("show");
        });
    }
});

// // Home screen animation
// main text revel animation
// var clutter = "";

// // Split the text content and create spans
// document
//     .querySelector(".about-title")
//     .textContent.split(" ")
//     .forEach(function (dets) {
//         if (dets !== "") clutter += ' <span class="word">' + dets + "</span>";
//         // console.log(clutter)
//         // console.log(dets);
//     });

// // Set the innerHTML of .about-title to the new spans
// document.querySelector(".about-title").innerHTML = clutter;

// // Initialize GSAP ScrollTrigger
// gsap.registerPlugin(ScrollTrigger);

// gsap.to(".about-title > span", {
//     scrollTrigger: {
//         trigger: ".about-title > span",
//         start: "10% 50%",
//         end: "200% 100%",
//         scroller: "body",
//         scrub: 5,
//         markers: true,
//     },
//     stagger: 0.2,
//     color: "#080808",
// });

// var clutter = "";

// // Split the text content and create spans for each word
// document
//     .querySelector(".about-title")
//     .textContent.split(" ")
//     .forEach(function (dets) {
//         if (dets !== "") clutter += ' <span class="word">' + dets + "</span>";
//     });

// // Set the innerHTML of .about-title to the new spans
// document.querySelector(".about-title").innerHTML = clutter;

// // Initialize GSAP ScrollTrigger
// gsap.registerPlugin(ScrollTrigger);

// // Create a new, dynamic animation effect
// gsap.fromTo(
//     ".about-title > span",
//     {
//         opacity: 0,
//         scale: 0.8,
//         rotationY: 90, // Start with a 90-degree rotation
//         x: -100, // Start off-screen to the left
//     },
//     {
//         opacity: 1,
//         scale: 1,
//         rotationY: 0, // Rotate to normal position
//         x: 0, // Move to original position
//         duration: 1.5,
//         ease: "power4.out",
//         scrollTrigger: {
//             trigger: ".about-title",
//             start: "top 80%", // Animation triggers when the section is 80% from the top of the viewport
//             end: "bottom 40%",
//             scrub: 2,
//             // markers: true, // Use markers for debugging, can be removed in production
//             toggleActions: "play none none reset",
//         },
//         stagger: {
//             each: 0.1, // Delay each word reveal
//             from: "start",
//         },
//     }
// );

// normal text revel effect (do not remove)

// var clutter = "";

// // Split the text content and create spans for each word
// document
//     .querySelector(".about-title")
//     .textContent.split(" ")
//     .forEach(function (dets) {
//         if (dets !== "") clutter += ' <span class="word">' + dets + "</span>";
//     });

// // Set the innerHTML of .about-title to the new spans
// document.querySelector(".about-title").innerHTML = clutter;

// // Initialize GSAP ScrollTrigger
// gsap.registerPlugin(ScrollTrigger);

// // Create a new sliding and blur effect
// gsap.fromTo(
//     ".about-title > span",
//     {
//         opacity: 0,
//         x: 100, // Start off-screen to the right
//         filter: "blur(10px)", // Start with a heavy blur
//         color: "#ffffff", // Start with white color
//     },
//     {
//         opacity: 1,
//         x: 0, // Slide to the original position
//         filter: "blur(0px)", // Remove blur effect
//         color: "#080808", // Change to black color
//         duration: 1.2,
//         ease: "power3.out",
//         scrollTrigger: {
//             trigger: ".about-title",
//             start: "top 80%", // Animation triggers when section reaches 80% from the top of the viewport
//             end: "bottom 20%",
//             scrub: 3,
//             markers: true, // Use markers for debugging, remove in production
//             toggleActions: "play none none reset",
//         },
//         stagger: {
//             each: 0.15, // Delay each word reveal slightly
//             from: "center", // Animate words from the center of the text outwards
//         },
//     }
// );

// text blur revel effect
// var clutter = "";

// // Split the text content and create spans for each word
// document
//     .querySelector(".about-title")
//     .textContent.split(" ")
//     .forEach(function (dets) {
//         if (dets !== "") clutter += ' <span class="word">' + dets + "</span>";
//     });

// // Set the innerHTML of .about-title to the new spans
// document.querySelector(".about-title").innerHTML = clutter;

// // Initialize GSAP ScrollTrigger
// gsap.registerPlugin(ScrollTrigger);

// // Create a new sliding and blur effect starting from the first line
// gsap.fromTo(
//     ".about-title > span",
//     {
//         opacity: 0,
//         x: 100, // Start off-screen to the right
//         filter: "blur(10px)", // Start with a heavy blur
//         color: "#ffffff", // Start with white color
//     },
//     {
//         opacity: 1,
//         x: 0, // Slide to the original position
//         filter: "blur(0px)", // Remove blur effect
//         color: "#080808", // Change to black color
//         duration: 1.2,
//         ease: "power3.out",
//         scrollTrigger: {
//             trigger: ".about-title",
//             start: "top 100%", // Animation triggers when section reaches 80% from the top of the viewport
//             end: "bottom 20%",
//             scrub: 3,
//             markers: true, // Use markers for debugging, remove in production
//             toggleActions: "play none none reset",
//         },
//         stagger: {
//             each: 0.15, // Delay each word reveal slightly
//             from: "start", // Animate words from the first word downwards
//         },
//     }
// );
