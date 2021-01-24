$('.up').fadeOut(0);

const slides = document.querySelectorAll('.slide');
  const next = document.querySelector('#next');
  const over = document.querySelector('.slider-over');
  const prev = document.querySelector('#prev');
  let auto = true; // Auto scroll
  const intervalTime = 4000;
  let slideInterval;

  $('#lock').click( ()=> {
    if (auto == true) {
      auto = false;
      clearInterval(slideInterval);
    } else {
      auto = true;
      slideInterval = setInterval(nextSlide, intervalTime);
    }
    $('#lock').toggleClass("active");
  });

  function isInView(el) {
    var rect = el.getBoundingClientRect();           // absolute position of video element
    return !(rect.top > $(window).height() || rect.bottom < 0);   // visible?
  }
  
  $(document).on("scroll", function() {
    $( "video" ).each(function() {
      if (isInView($(this)[0])) {                    // visible?
        return false;
      }
      else {
        if (!$(this)[0].paused) $(this)[0].pause();  // pause if not paused
      }
    });  
  });

  const nextSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for next slide
    if (current.nextElementSibling) {
      // Add current to next sibling
      current.nextElementSibling.classList.add('current');
    } else {
      // Add current to start
      slides[0].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
  };

  const prevSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for prev slide
    if (current.previousElementSibling) {
      // Add current to prev sibling
      current.previousElementSibling.classList.add('current');
    } else {
      // Add current to last
      slides[slides.length - 1].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
  };

  // Button events
  next.addEventListener('click', e => {
    nextSlide();
    if (auto) {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, intervalTime);
    }
  });
  over.addEventListener('click', e => {
    nextSlide();
    if (auto) {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, intervalTime);
    }
  });

  prev.addEventListener('click', e => {
    prevSlide();
    if (auto) {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, intervalTime);
    }
  });

  // Auto slide
  if (auto) {
    // Run next slide at interval time
    slideInterval = setInterval(nextSlide, intervalTime);
  }

$(document).ready(() => {

  $('.intro').fadeOut(2000);
  $('body').removeClass("fixed");

  

  $(".ham").click(function () {
    $(this).stop().toggleClass("active");
    $('.mobile-menu').stop().toggleClass("active");
    $('body').stop().toggleClass("fixed");
  });

  // Find the initial scroll top when the page is loaded.
  var initScrollTop = $(window).scrollTop();

  // Set the image's vertical background position based on the scroll top when the page is loaded.
  $('body').css({
    'background-position-y': (initScrollTop / 75) + '%'
  });

  // When the user scrolls...
  $(window).scroll(function () {

    // Find the new scroll top.
    var scrollTop = $(window).scrollTop();

    // Set the new background position.
    $('body').css({
      'background-position-y': (scrollTop / 75) + '%'
    });



  });

  var scrollLink = $('.scroll');
  const logo = $('.logo');
  const up = $('.up');

  up.click(() => {
    $('body,html').animate({
      scrollTop: $('body').stop().offset().top
    }, 700);
  });

  //logo && up
  logo.click(() => {
    if ($(window).scrollTop() > 0) {
      $('body,html').animate({
        scrollTop: $('body').stop().offset().top
      }, 700);
    } else {
      return false;
    }
  });

  //smoth scroll
  scrollLink.click(function (e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 700);
  });

  //active links
  $(window).scroll(function () {

    var scrollbarLocation = $(this).scrollTop();

    if(scrollbarLocation > 100) {
      up.fadeIn();
    } else {
      up.fadeOut();
    }

    scrollLink.each(function () {
      var sectionOffset = $(this.hash).offset().top;

      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass('now');
        $(this).parent().siblings().removeClass('now')
      }
    })
  })

  const $cursor = $(".cursor");

  // Track mouse movement
  function moveCursor(e) {
    $cursor.css({
      left: e.pageX,
      top: e.pageY - $("html").scrollTop()
    });
  }
  $(window).on("mousemove", moveCursor);

  /**
   * Particles
   */
  if (document.body.animate) {
    // Generate particles when user clicks inside the body
    document.querySelector("body").addEventListener("click", particlePop);
  }

  function particlePop(e) {
    // Create 12 particles
    for (let i = 0; i < 2; i++) {
      createParticle(e.clientX, e.clientY);
    }

    // Remove active class from cursor, in case someone rage clicks
    $cursor.removeClass("cursor--clicked");

    // Add the active class to start the cursor animation
    $cursor.addClass("cursor--clicked");

    // Remove the active class after 500ms
    setTimeout(function () {
      $cursor.removeClass("cursor--clicked");
    }, 500);
  }

  function createParticle(x, y) {
    const particle = document.createElement("particle");
    document.body.appendChild(particle);

    // Calculate a random size
    const size = Math.floor(Math.random() * 30 + 20);
    particle.style.width = `${size}px`;
    particle.style.height = `${size}px`;
    // Generate a random color in a blue/purple palette

    // Generate a random x & y destination within a distance of 125px from the mouse
    const destinationX = x + (Math.random() - 0.5) * 2 * 125;
    const destinationY = y + (Math.random() - 0.5) * 2 * 125;

    // Store the animation in a variable as we will need it later
    const animation = particle.animate(
      [{
          // Set the origin position of the particle
          // We offset the particle with half its size to center it around the mouse
          transform: `translate(-50%, -50%) translate(${x}px, ${y}px)`,
          opacity: 1
        },
        {
          // We define the final coordinates as the second keyframe
          transform: `translate(${destinationX}px, ${destinationY}px)`,
          opacity: 1,
          width: 0,
          height: 0
        }
      ], {
        // Set a random duration from 1500ms to 750ms
        duration: Math.random() * 1500 + 750,
        easing: "cubic-bezier(0, .9, .57, 1)",
        // Delay every particle with a random value of 100ms
        delay: Math.random() * 100
      }
    );

    // When the animation is complete, remove the element from the DOM
    animation.onfinish = () => {
      particle.remove();
    };
  }


})