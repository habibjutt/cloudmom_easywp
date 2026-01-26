
$(document).on('ready', function () {
    $("#container").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
    });
});


$(document).ready(function() {
    // $('.nav-item .click').on("click", function() {
    //     // var id = $(this).attr('href');
    //     $(".icon1").toggleClass('fa-plus fa-minus');
    // })
    // $('.nav-item .click1').on("click", function() {
    //     $(".icon").toggleClass('fa-plus fa-minus');
    // })
    $(window).load(function() {
        $slideshow.slick('refresh');
    });


    $('.testi-slider .slider-body').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        prevArrow: $('.left-move'),
        nextArrow: $('.right-move'),
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },{
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: false,
                }
            },
        ]
        });
        $('.member-slider').slick({
            dots: false,
            autoplay: true,
            arrows: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
                responsive: [
                    {
                    breakpoint: 991,
                    settings: {
                        autoplay: true,
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                    },{
                        breakpoint: 524,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          dots: false,
                          infinite: true,
                  
                        }
                    },
                ]
        });

    $slideshow = $('.banner-slider').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
});








