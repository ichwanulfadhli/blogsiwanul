$(document).ready(function () {
    // Function to load random image
    function randomBackground() {
        // List of images
        var images = [
            'background-1.jpg',
            'background-2.jpg',
            'background-3.jpg',
            'background-4.jpg',
            'background-5.jpg',
            'background-6.jpg',
        ];

        // Full path
        var url = window.location.origin + "/blogsiwanul_project/blogsiwanul/" + "/assets/img/";
        // Output from the image array index
        var output = images[Math.floor(Math.random() * images.length)];

        // Returning the result
        return url + output;

    }

    // Displaying random background image on page load if selector "background" is exists
    if(document.getElementById("background")){
        document.getElementById("background").style.backgroundImage = "url(" + randomBackground(1, 6) + ")";
    }

    // Go to selected section when the parameter exists on url
    $(document).ready(function () {
        if (window.location.href.indexOf("aboutMe") > -1) {
            $("html, body").animate({
                scrollTop: $('.aboutMe').offset().top
            }, 1000, 'easeInOutExpo');
        }
        else if (window.location.href.indexOf("recentBlog") > -1) {
            $("html, body").animate({
                scrollTop: $('.recentBlog').offset().top
            }, 1000, 'easeInOutExpo');
        }
    });

    // Function to scroll to each section on the page
    $(function () {
        $(".scroll-to").click(function () {
            var section = $(this).attr("id");

            if ($('.' + section).length !== 0) {
                $("html, body").animate({
                    scrollTop: $('.' + section).offset().top
                }, 1000, 'easeInOutExpo');
            }
        });
    });

    // On scroll window, will display "To Top Button"
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 535) {
            // jQuery fade in animation
            $("#toTop").fadeIn(350);
        } else if ($(this).scrollTop() <= 300) {
            // jQuery fade out animation
            $("#toTop").fadeOut(350);
        }
    });

    // Function scroll to top
    $("#toTop").click(function () {
        if(window.location.hash){
            window.history.replaceState({}, document.title, "/");
        }
        // Scrolling animation
        $("html, body").animate({
            scrollTop: 0
        }, 1000, 'easeInOutExpo');
    });
});