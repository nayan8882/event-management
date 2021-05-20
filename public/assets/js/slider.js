// testinomial slider 

$('.test-owl').owlCarousel({
    rtl:true,
    loop:true,
    margin:0,
    nav:false,
    autoplay:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// category slider

$('.cat-owl').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    // navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    autoplay: false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.owl-blog').owlCarousel({
    rtl:true,
    loop:true,
    margin:15,
    nav:true,
    autoplay:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.pro-owl').owlCarousel({
    rtl:true,
    loop:true,
    margin:15,
    nav:false,
    autoplay:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
