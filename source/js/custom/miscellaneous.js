
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
    normalizeScroll: true,
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
    delay: 0.4,
    duration: 1,
    stagger: 0.1,
    ease: Power4.easeOut,
  }),
  // onLeaveBack: batch => gsap.set(batch, {opacity: 0, y: 100, overwrite: true})
  });
   ScrollTrigger.addEventListener("refreshInit", () => gsap.set(".stagger-animation", {y: 0}));

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

  // gsap.utils.toArray(".has-scroll-to-section-links a").forEach(function (button, i) {
  //   button.addEventListener("click", (e) => {
  //     var id = e.target.getAttribute("href");
  //     console.log(id);
  //     smoother.scrollTo(id, true, "top top");
  //     e.preventDefault();
  //   });
  // });

  // document.querySelectorAll("a[href^='#']").forEach((a) => {
  //   a.addEventListener("click", (e) => {
  //     e.preventDefault();
  //     ScrollSmoother.get().scrollTo(a.hash, true);
  //     window.history.pushState({}, "", a.hash);
  //   });
  // });

  /* eslint-disable */






gsap.config({
  nullTargetWarn: false
});

// put your code here

//scroll to
// Detect if a link's href goes to the current page
function getSamePageAnchor(link) {
  if (
    link.protocol !== window.location.protocol ||
    link.host !== window.location.host ||
    link.pathname !== window.location.pathname ||
    link.search !== window.location.search
  ) {
    return false;
  }

  return link.hash;
}

// Scroll to a given hash, preventing the event given if there is one
function scrollToHash(hash, e) {
  const elem = hash ? document.querySelector(hash) : false;
  if (elem) {
    if (e) e.preventDefault();
    ScrollSmoother.get().scrollTo(elem, true);
  }
}

// If a link's href is within the current page, scroll to it instead
document.querySelectorAll(".sub-menu li a[href], .has-scroll-to-section-links a[href]").forEach((a) => {
  a.addEventListener("click", (e) => {
    scrollToHash(getSamePageAnchor(a), e), console.log("click and scrolled");
    $( this ).toggleClass( 'js-active' );
    $( '.nav-wrapper' ).toggleClass( 'js-active' );
    $( 'body' ).toggleClass( 'js-popup-active' );
  });

});

document.querySelectorAll(".sub-menu li a[href^='#'], .has-scroll-to-section-links a[href^='#']").forEach((a) => {
  a.addEventListener("click", (e) => {
    e.preventDefault();
    scrollToHash(a.hash);
    window.history.pushState({}, "", a.hash);
    $( this ).toggleClass( 'js-active' );
    $( '.nav-wrapper' ).toggleClass( 'js-active' );
    $( 'body' ).toggleClass( 'js-popup-active' );
  });

});

window.addEventListener("load", refreshScroll);

function refreshScroll() {
  document.querySelector("#wrapper").scrollTop = 0;
  window.scrollTo(0, 0);
  ScrollTrigger.refresh();
  console.log("refresh", window.location.hash);
  // Scroll to the element in the URL's hash on load
  scrollToHash(window.location.hash);
}

scrollToHash(window.location.hash);


  window.addEventListener("load", (e) => {
    if (window.location.hash) {
      ScrollSmoother.get().scrollTo(window.location.hash, true);
    }
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
const quotes = document.querySelectorAll(".heading-animation");
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

  if ($(".header-logo").length) {
    TweenMax.from( ".header-logo", 1, {
      delay: 0.1,
      opacity: 0,
      duration: 0.4,
      y: -20,
      ease: Expo.easeInOut,
    });
  }

  if ($(".header-nav-toggle").length) {
    TweenMax.to( ".header-nav-toggle", 1, {
      delay: 0.2,
      opacity: 1,
      duration: 0.4,
      y: 0,
      ease: Expo.easeInOut,
    });
  }

  if ($(window).width() > 1200) {

    if ($(".header-secondary").length) {
      TweenMax.staggerFrom(
        ".header-secondary .has-animation",
        1, {
          delay: 0.2,
          opacity: 0,
          duration: 0.4,
          y: -20,
          ease: Expo.easeInOut,
        },
        0.1
      );
    }
    if ($(".header-nav").length) {
      TweenMax.staggerFrom(
        ".header-nav .has-animation",
        1, {
          delay: 0.3,
          opacity: 0,
          duration: 0.4,
          y: -20,
          ease: Expo.easeInOut,
        },
        0.1
      );
    }
  }

  function hide(elem) {
    gsap.set(elem, {autoAlpha: 0});
  }

  function loadLottie() {
    var animation1Data = document.getElementsByClassName("border-animation-1");
    function animationOne(animation1Data) {
      var animation = bodymovin.loadAnimation({
        container: animation1Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-1.json'
      });
      ScrollTrigger.create({
        trigger: animation1Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation1,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation1 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation1Data.length; i++) {
      animationOne(animation1Data[i]);
    }

    var animation2Data = document.getElementsByClassName("border-animation-2");
    function animationTwo(animation2Data) {
      var animation = bodymovin.loadAnimation({
        container: animation2Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-2.json'
      });
      ScrollTrigger.create({
        trigger: animation2Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation2,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation2 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation2Data.length; i++) {
      animationTwo(animation2Data[i]);
    }

    var animation3Data = document.getElementsByClassName("border-animation-3");
    function animationThree(animation3Data) {
      var animation = bodymovin.loadAnimation({
        container: animation3Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-3.json'
      });
      ScrollTrigger.create({
        trigger: animation3Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation3,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation3 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation3Data.length; i++) {
      animationThree(animation3Data[i]);
    }

    var animation4Data = document.getElementsByClassName("border-animation-4");
    function animationFour(animation4Data) {
      var animation = bodymovin.loadAnimation({
        container: animation4Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-4.json'
      });
      ScrollTrigger.create({
        trigger: animation4Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation4,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation4 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation4Data.length; i++) {
      animationFour(animation4Data[i]);
    }

    var animation5Data = document.getElementsByClassName("border-animation-5");
    function animationFive(animation5Data) {
      var animation = bodymovin.loadAnimation({
        container: animation5Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-5.json'
      });
      ScrollTrigger.create({
        trigger: animation5Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation5,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation5 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation5Data.length; i++) {
      animationFive(animation5Data[i]);
    }

    var animation6Data = document.getElementsByClassName("border-animation-6");
    function animationSix(animation6Data) {
      var animation = bodymovin.loadAnimation({
        container: animation6Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-6.json'
      });
      ScrollTrigger.create({
        trigger: animation6Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation6,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation6 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation6Data.length; i++) {
      animationSix(animation6Data[i]);
    }

    var animation7Data = document.getElementsByClassName("border-animation-7");
    function animationSeven(animation7Data) {
      var animation = bodymovin.loadAnimation({
        container: animation7Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-7.json'
      });
      ScrollTrigger.create({
        trigger: animation7Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation7,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation7 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation7Data.length; i++) {
      animationSeven(animation7Data[i]);
    }

    var animation8Data = document.getElementsByClassName("border-animation-8");
    function animationEight(animation8Data) {
      var animation = bodymovin.loadAnimation({
        container: animation8Data,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        rendererSettings: {
          preserveAspectRatio: 'none', // Supports the same options as the svg element's
        },
        path: '/wp-content/themes/mubadala-energy/json/border-animation-8.json'
      });
      ScrollTrigger.create({
        trigger: animation8Data,
        markers:false,
        start: "20px 80%",
        immediateRender: false,
        toggleActions:"play null reset reset",
        onEnter: playanimation8,
        onComplete: () => ScrollTrigger.refresh(),
      })
      function playanimation8 (animData) {
        animation.play();
      }
    }
    for (var i = 0; i < animation8Data.length; i++) {
      animationEight(animation8Data[i]);
    }

  }
  loadLottie();

document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
}
$(document).ready(function(){
// wait until window is loaded - all images, styles-sheets, fonts, links, and other media assets
    // OPTIONAL - waits til next tick render to run code (prevents running in the middle of render tick)
    window.requestAnimationFrame(function() {
      init();
      setupSplits();
      alert("Hello! I am an alert box!!");
    });
});
