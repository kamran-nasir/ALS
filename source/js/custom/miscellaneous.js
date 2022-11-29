
// Check if user scrolled
////////////////////////////////////////////////
let pageScroll = function () {
	let scroll = $( window ).scrollTop();
	const siteHeader = document.querySelector( '.site-header' );
	if ( siteHeader ) {
		if ( scroll > 0 ) {
			siteHeader.classList.add( 'js-fixed' );
		} else {
			siteHeader.classList.remove( 'js-fixed' );
		}
	}
};
// need to run once, as sometimes the page is already scrolled down on load
pageScroll();
// run on scroll


window.addEventListener( 'scroll', pageScroll );

// Register GSAP
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);


function init(){
  const smoother = ScrollSmoother.create({
    wrapper: "#wrapper",
    content: "#content",
    smooth: 2,
    smoothTouch: 0,
    effects: true,
    // normalizeScroll: true,
    ignoreMobileResize: true,
    scroller: null
   });

   const modalScroll = {
		_handler: e => {
			let node = e.target;
			while (node && node.scrollHeight <= node.clientHeight) node = node.parentNode;
			node && node !== document.body && node !== document.documentElement && e.stopPropagation();
		},
		enable: () => document.addEventListener("wheel", modalScroll._handler, { passive: true, capture: true }),
    disable: () => document.removeEventListener("wheel", modalScroll._handler)
	};


  $('.team-member-btn').magnificPopup({
    type: 'inline',
    midClick: true,
    fixedContentPos: true,
    mainClass: 'mfp-fade',
    closeOnBgClick: false,
    callbacks: {
      beforeClose: function () {
        modalScroll.disable();
        smoother.paused(false);
        $('body, html, #wrapper').removeClass('overflow-hidden');
      },
    },
  });

  $(".image-link").magnificPopup({
    type: "image",
    closeBtnInside: true,
    closeOnContentClick: true,
    tLoading: "", // remove text from preloader
    closeOnBgClick: 'false',
    enableEscapeKey: 'false',
    /* don't add this part, it's just to disable cache on image and test loading indicator */
    callbacks: {
      beforeChange: function () {
        this.items[0].src = this.items[0].src + "?=" + Math.random();
      },
    },
  });


  $('.team-member-btn').click(function(e){
    e.preventDefault();
    modalScroll.enable();
    smoother.paused(true);
  });



  if ($(".vertical-scrolling-section").length) {
    const duration = 250;
    const pinDistance = 1000;
    $(".content-box").last().addClass("last");
    ScrollTrigger.create({
      trigger: '.start-trigger',
      pin: '.bg-pin',
      pinSpacing: true,
      start: "top top",
      endTrigger: '.last',
      end: 'bottom bottom',
      onComplete: () => ScrollTrigger.refresh(),
      onEnter: () => {
        $( "body" ).addClass( "animation-enter" );
      },
      onLeave: () => {
        $( "header" ).addClass( "scrolled-header" );
        $( "body" ).removeClass( "animation-enter" );
      },
      onLeaveBack: () => {
        $( "body" ).removeClass( "animation-enter" );
      },

      onEnterBack: () => {
        $( "header" ).removeClass( "scrolled-header" );
        $( "body" ).addClass( "animation-enter" );
      },
    });

    gsap.utils.toArray('.banner-with-overlay-content-box-section .content-box').forEach(step => {
      ScrollTrigger.create({
        trigger: step,
        start: 'center 80%',
        end: 'center 20%',
        toggleClass: 'active',
        scroller: ".content-box",
        onEnter: () => {
          $( step ).addClass( "active" );
        },
        onEnterBack: () => {
          $( step ).addClass( "active" );
        },
        onLeave: () => {
          $( step ).addClass( "active" );
        },
      });
    });



    ScrollTrigger.matchMedia({
      // desktop
      "(min-width: 768px)": function() {
        gsap.utils.toArray('.vertical-slider-section .text-col').forEach(slide => {
          ScrollTrigger.create({
            trigger: slide,
            start: 'top 200px',
            end: 'center 100%',
            toggleClass: 'active',
            onEnter: () => {
              $( slide ).addClass( "active" );
            },
            onEnterBack: () => {
              $( slide ).removeClass( "active" );
            },
          });
        });
        gsap.utils.toArray('.vertical-slider-section .content-box').forEach(slide => {
          ScrollTrigger.create({
            trigger: slide,
            start: 'top 150px',
            end: 'center top',
            toggleClass: 'active',
          });
        });
        gsap.utils.toArray('.vertical-slider-section .content-box').forEach(bottomBox => {
          ScrollTrigger.create({
            trigger: bottomBox,
            start: "20px 100%",
            end: "10% 90%",
            toggleClass: 'col-active',
          });
        });

        gsap.utils.toArray('.vertical-slider-section .text-col').forEach(BottomTextCol => {
          ScrollTrigger.create({
            trigger: BottomTextCol,
            start: "20px 100%",
            end: "10% 90%",
            toggleClass: 'col-active-row',
          });
        });
      },

      // mobile
      "(max-width: 767px)": function() {
        gsap.utils.toArray('.vertical-slider-section .text-col').forEach(slide => {
          ScrollTrigger.create({
            trigger: slide,
            start: 'top 100px',
            end: 'center 100%',
            toggleClass: 'active',
            onEnter: () => {
              $( slide ).addClass( "active" );
            },
            onEnterBack: () => {
              $( slide ).removeClass( "active" );
            },
          });
        });
        gsap.utils.toArray('.vertical-slider-section .content-box').forEach(slide => {
          ScrollTrigger.create({
            trigger: slide,
            start: 'top 100px',
            end: 'center top',
            toggleClass: 'active',
          });
        });
        gsap.utils.toArray('.vertical-slider-section .content-box').forEach(bottomBox => {
          ScrollTrigger.create({
            trigger: bottomBox,
            start: "20px 100%",
            end: "10% 90%",
            toggleClass: 'col-active',
          });
        });

        gsap.utils.toArray('.vertical-slider-section .text-col').forEach(BottomTextCol => {
          ScrollTrigger.create({
            trigger: BottomTextCol,
            start: "20px 100%",
            end: "10% 90%",
            toggleClass: 'col-active-row',
          });
        });
      },
    });
  }


  let sections = gsap.utils.toArray(".fade-animation");
  sections.forEach((el) => {
    gsap.from(el, {
      autoAlpha: 0,
      duration: 0.8,
      y: 100,
      scrollTrigger: {
        trigger: el,
        start: "20px 80%",
        toggleActions: "play none none none"
      }
    });
  });

  let fadeRight = gsap.utils.toArray(".fade-right");
  fadeRight.forEach((el) => {
    gsap.from(el, {
      autoAlpha: 0,
      x: 100,
      duration: 0.8,
      scrollTrigger: {
        trigger: el,
        start: "20px 80%",
        toggleActions: "play none none none"
      }
    });
  });

  let fadeLeft = gsap.utils.toArray(".fade-left");
  fadeLeft.forEach((el) => {
    gsap.from(el, {
      autoAlpha: 0,
      x: -100,
      duration: 0.8,
      scrollTrigger: {
        trigger: el,
        start: "20px 80%",
        toggleActions: "play none none none"
      }
    });
  });

  let fadeLeftBig = gsap.utils.toArray(".fade-left-big");
  fadeLeftBig.forEach((el) => {
    gsap.from(el, {
     autoAlpha: 0,
      x: 300,
      duration: 0.8,
      delay: 1,
      scrollTrigger: {
        trigger: el,
        start: "20px 80%",
        toggleActions: "play none none none"
      }
    });
  });

  var classes = ['top', 'middle', 'low'];
  $(function() {
    var target = $('.image-and-text-columns-section');
    target.each(function(index) {
      $(this).addClass(classes[index % 3]);
    });
  });

  ScrollTrigger.batch(".stagger-by-row", {
    onEnter: elements => {
      gsap.from(elements, {
        autoAlpha: 0,
        y: 200,
        delay: 0.4,
        duration: 1,
        stagger: 0.1,
        ease: Power4.easeOut,
      });
    },
    once: true
  });
  if ($(window).width() > 1200) {
    ScrollTrigger.create({
      trigger: ".sidebar-sticky",
      pin: true,
      start: "top +=20%",
    });
  }
  ScrollTrigger.create({
    trigger: '.vertical-scrolling-section',
    pin: '.skip-btn-wrapper',
    pinSpacing: true,
    start: "top top",
    endTrigger: '.last',
    end: 'bottom bottom',
  });
}
const heroheroQuotes = document.querySelectorAll(".hero-heading-animation");
const quotes = document.querySelectorAll(".heading-animation");
const textAnimations = document.querySelectorAll(".text-animation");
function setupSplits() {
  quotes.forEach(quote => {
    // Reset if needed
    gsap.from(quote, {
      autoAlpha: 0,
      duration: 0.8,
      y: 100,
      ease: Power4.easeOut
    });
    if(quote.anim) {
      quote.anim.progress(1).kill();
      quote.split.revert();
    }

    quote.split = new SplitText(quote, {
      type: "lines,words,chars",
      linesClass: "split-line"
    });

    // Set up the anim
    quote.anim = gsap.from(quote.split.chars, {
      scrollTrigger: {
        trigger: quote,
        start: "20px 80%",
      },
      autoAlpha: 0,
      duration: 0.6,
      ease: "circ.out",
      y: 100,
      stagger: 0.02,
      toggleActions: "play none none none"
    });

  });

  heroheroQuotes.forEach(heroQuote => {
    // Reset if needed
    gsap.from(heroQuote, {
      autoAlpha: 0,
      duration: 0.8,
      y: 100,
      ease: Power4.easeOut
    });
    if(heroQuote.anim) {
      heroQuote.anim.progress(1).kill();
      heroQuote.split.revert();
    }

    heroQuote.split = new SplitText(heroQuote, {
      type: "lines,words,chars",
      linesClass: "split-line"
    });

    // Set up the anim
    heroQuote.anim = gsap.from(heroQuote.split.chars, {
      scrollTrigger: {
        trigger: heroQuote,
        start: "20px 80%",
      },
      autoAlpha: 0,
      delay: 2.4,
      duration: 0.6,
      ease: "circ.out",
      y: 100,
      stagger: 0.02,
      toggleActions: "play none none none"
    });

  });

  textAnimations.forEach(textAnimation => {
    textAnimation.childSplit = new SplitText(textAnimation, {
      type: "lines",
      linesClass: "split-child"
    });
    textAnimation.parentSplit = new SplitText(textAnimation, {
      // type: "lines",
      linesClass: "split-parent"
    });
    // Set up the anim
    textAnimation.anim = gsap.from(textAnimation.childSplit.lines, {
      scrollTrigger: {
        trigger: textAnimation,
        start: "20px 80%",
      },
      duration: 1.5,
      delay: 1,
      yPercent: 100,
      ease: "power4",
      stagger: 0.1
    });
  });

  const childSplit = new SplitText(".hero-text-animation", {
    type: "lines",
    linesClass: "split-child"
  });
  const parentSplit = new SplitText(".hero-text-animation", {
    // type: "lines",
    linesClass: "split-parent"
  });

  gsap.from(childSplit.lines, {
    duration: 1.5,
    delay: 3,
    yPercent: 100,
    ease: "power4",
    stagger: 0.1
  });



  gsap.utils.toArray(".stagger-animation").forEach((element, i) => {
    gsap.from(element, {
      y: 200,
      scrollTrigger: {
        trigger: element,
        start: "20px 80%",
        toggleActions: "play none none none"
      }
    });
  });

  ScrollTrigger.batch(".stagger-animation", {
  onEnter: batch => gsap.to(batch, {
    y: 0,
    autoAlpha: 1,
    stagger: {each: 0.5, grid: [1, 9]},
    overwrite: true,
    duration: 1,
    delay: 1.5,
    stagger: 0.1,
    ease: Power4.easeOut,
  }),
  // onLeaveBack: batch => gsap.set(batch, {opacity: 0, y: 100, overwrite: true})
  });




   ScrollTrigger.addEventListener("refreshInit", () => gsap.set(".stagger-animation", {y: 0}));
   if ($(".home").length) {
  TweenMax.to(".overlay", 2, {
    delay: 1,
    top: "-100%",
    ease: Expo.easeInOut
  });
  TweenMax.to(".overlay>img", 2, {
    opacity: 0,
    y: -60,
    ease: Expo.easeInOut
  });
  TweenMax.from(".header-logo", 1, {
    delay: 2.4,
    opacity: 0,
    y: -20,
    ease: Expo.easeInOut
  });
  TweenMax.from(".banner-box", 1, {
    delay: 1.5,
    duration: 1,
    scale: 1.5,
    ease: Linear.easeInOut,
  });
  TweenMax.staggerFrom(".header-primary-parent-menu li", 1, {
    delay: 2.4, opacity: 0, y: -20, ease: Expo.easeInOut
  }, 0.2);

  TweenMax.staggerFrom("header .social-links li", 1, {
    delay: 2.8, opacity: 0, y: -20, ease: Expo.easeInOut
  }, 0.2);
}

  if ($(".home").length) {
    TweenMax.to( ".header-nav-toggle", 1, {
      delay: 2.4,
      opacity: 1,
      duration: 0.4,
      x: -10,
      ease: Expo.easeInOut,
    });
  }

  $(".counts").each(function(index, element) {
    var count = $(this),
        zero = {val:0},
        num = count.data("number"),
        split = (num + "").split("."),
        decimals = split.length > 1 ? split[1].length : 0;

      gsap.to(zero, {
        val: num,
        duration: 3,
        scrollTrigger: element,
        onUpdate: function() {
          count.text(zero.val.toFixed(decimals));
        }
      });
});



document.querySelectorAll('.js-ticker').forEach(ticker => {

  var speed = 50;

  $('.js-ticker li').wrapAll('<span class="ticker-items">');

  var tickerWidth = $('ul').width();
  tickerItemsWidth = $('.ticker-items').eq(0).width();

  var spanWidth = $('.js-ticker span').width();

  $('.js-ticker span').eq(0).clone().appendTo('.js-ticker');
  $('.js-ticker span').eq(0).clone().appendTo('.js-ticker');
  $('.js-ticker span').wrapAll('<span class="ticker-wrapper">');

  var tickerWraper = '.ticker-wrapper';
  var transformX;
  var progressX;
  gsap.set( '.ticker-wrapper' , {x: -tickerItemsWidth } );
  var wrapWidth = tickerItemsWidth * 3;

  var initDuration = tickerWidth/speed;
  var loopDuration = spanWidth/speed;
  var tl = gsap.timeline({repeat:-1});

      tl.to( tickerWraper , 0 , {
        x: -tickerItemsWidth,
        ease: "none"
      } );
      tl.to( tickerWraper , loopDuration , {
        x: -tickerItemsWidth * 2,
        ease:  "none",
        onUpdate: function(){
           // console.log('onUpdate= ', tl.progress());
        }
      } );

 });


 const cursor = document.querySelector(".cursor");
 const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
 const mouse = { x: pos.x, y: pos.y };
 const speed = 1;

 const xSet = gsap.quickSetter(cursor, "x", "px");
 const ySet = gsap.quickSetter(cursor, "y", "px");

 window.addEventListener("pointermove", e => {
   mouse.x = e.x;
   mouse.y = e.y;
 });

 gsap.set(".cursor", {xPercent: -50, yPercent: -50});
 gsap.ticker.add(() => {
   const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio());
   pos.x += (mouse.x - pos.x) * dt;
   pos.y += (mouse.y - pos.y) * dt;
   xSet(pos.x);
   ySet(pos.y);
 });

 $(".lr_scroll .swiper-slide").hover(function() {
     $('.cursor').addClass('lr_scroll');
 }, function() {
     $('.cursor').removeClass('lr_scroll');
 });

}
window.requestAnimationFrame(function() {
  init();
  setupSplits();
});
$(document).ready(() => {
  $("#lightgallery").lightGallery({
    pager: true,
    download: false,
    share: false,
    zoom: false,
    fullScreen: false,
    autoPlay: false
  });
});
