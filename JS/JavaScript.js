TweenMax.to(".overlay h1", 4, {
            opacity: 0,
            y: -60,
            ease: Expo.easeInOut
      })

      TweenMax.to(".overlay", 2, {
            delay: 1,
            top: "-100%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".logo", 1, {
            delay: 2.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".nav ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.staggerFrom(".social-media ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.from(".side-strip", 2, {
            delay: 2.4,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row", 2, {
            delay: 2.4,
            opacity: 0,
            x: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row h6", 2, {
            delay: 3,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row p", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header h1", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header p", 2, {
            delay: 3.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header button", 2, {
            delay: 3.6,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".services", 2, {
            delay: 4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".social", 2, {
            delay: 4.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      var t1 = new TimelineMax({paused: true});

      t1.to(".one", 0.8, {
           y: 6,
           rotation: 45,
           ease: Expo.easeInOut
      });
      t1.to(".two", 0.8, {
           y: -6,
           rotation: -45,
           ease: Expo.easeInOut,
           delay: -0.8
      });

      t1.to(".menu", 2, {
           top: "0%",
           ease: Expo.easeInOut,
           delay: -2
      });

      t1.staggerFrom(".menu ul li", 2, {x: -200, opacity: 0, ease:Expo.easeOut}, 0.3);

      t1.reverse();
      $(document).on("click", ".toggle-btn", function() {
           t1.reversed(!t1.reversed());
      });
      $(document).on("click", "a", function() {
           t1.reversed(!t1.reversed());
      });
