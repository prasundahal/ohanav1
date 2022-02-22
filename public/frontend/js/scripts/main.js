//Menu On Hover

$('body').on('mouseenter mouseleave', '.nav-item', function (e) {
    if ($(window).width() > 750) {
        var _d = $(e.target).closest('.nav-item');
        _d.addClass('show');
        setTimeout(function () {
            _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
        }, 1);
    }
});
// End Menu On Hover 

// Start My cart show on hover 

(function () {

    $("#cart").on("click", function () {
        $(".shopping-cart").fadeToggle("fast");
    });

})();

// End My cart show on Hover

// Our Team Starts
$('.slick-slider-category').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 325,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Our Team Ends



// Product Detail Slider Starts
$('.product-detail-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 3,
                      }
        },
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 3,
                      }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 4,
                      }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
          
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
          
                dots: true
            }
        },
        {
            breakpoint: 325,
            settings: {
                slidesToShow: 1,
          
                dots: true
            }
        }
    ]
});
// Product Detail Slider Ends

// Product Detail Ads Slider Starts
$('.product-detail-ads-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
  
});
// Product Detail Ads Slider Ends