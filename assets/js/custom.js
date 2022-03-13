(function($) {

  'use strict';

    $(document).ready(function() {

      console.log('working');

      //Smooth Scroll
      $( '.navbar a' ).on( 'click', function(e){
        var href = $(this).attr( 'href' );
        $( 'html, body' ).animate({
          scrollTop: $( href ).offset().top
        }, '300' );
        e.preventDefault();

      });

      //Animate on scroll
      AOS.init();

      // Validate Form
      $("form[name='contactForm']").validate({
        rules: {
          name: "required",
          email: {
            required: true,
            email: true
          },
          message: "required"
        },
        messages: {
          name: "Please enter your name",
          email: "Please enter a valid email address",
          message: "Please enter a message"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });


      // Circle Progress Bar
      function animateElements() {
          $('.progressbar').each(function() {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle').attr('data-percent');
            var fillColor;
            var percentage = parseInt(percent, 10) / parseInt(100, 10);
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.first.circle').circleProgress({
                startAngle: -Math.PI / 2,
                value: percent / 100,
                size: 160,
                thickness: 12,
                emptyFill: "#dfe8ed",
                fill: {
                  color: '#30bae7'
                }
              }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('div').text((stepValue * 100).toFixed() + "%");
              }).stop();

              $(this).find('.second.circle').circleProgress({
                startAngle: -Math.PI / 2,
                value: percent / 100,
                size: 160,
                thickness: 12,
                emptyFill: "#dfe8ed",
                fill: {
                  color: '#d74680'
                }
              }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('div').text((stepValue * 100).toFixed() + "%");
              }).stop();

              $(this).find('.third.circle').circleProgress({
                startAngle: -Math.PI / 2,
                value: percent / 100,
                size: 160,
                thickness: 12,
                emptyFill: "#dfe8ed",
                fill: {
                  color: '#15c7a8'
                }
              }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('div').text((stepValue * 100).toFixed() + "%");
              }).stop();

              $(this).find('.fourth.circle').circleProgress({
                startAngle: -Math.PI / 2,
                value: percent / 100,
                size: 160,
                thickness: 12,
                emptyFill: "#dfe8ed",
                fill: {
                  color: '#eb7d4b'
                }
              }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('div').text((stepValue * 100).toFixed() + "%");
              }).stop();
            }
          });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);




        // init Isotope
        var $container = $('.portfolio-container .portfolio-gallery').isotope({
           itemSelector: '.portfolio',
           layoutMode: 'fitRows'
         });

        $(".filter-group .btn").click(function() {
            $(".filter-group .btn").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".portfolio-gallery").isotope({
                filter: selector
            });
            return false;
        });

        //****************************
        // Isotope Load more button
        //****************************
        var initShow = 4; //number of items loaded on init & onclick load more button
        var counter = initShow; //counter for load more button
        var iso = $container.data('isotope'); // get Isotope instance

        loadMore(initShow); //execute function onload

        function loadMore(toShow) {
          $container.find(".hidden").removeClass("hidden");

          var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
            return item.element;
          });
          $(hiddenElems).addClass('hidden');
          $container.isotope('layout');

          //when no more to load, hide show more button
          if (hiddenElems.length == 0) {
            jQuery("#load-more").hide();
          } else {
            jQuery("#load-more").show();
          };

        }

        //append load more button
        $container.after('<button type="button" id="load-more" class="btn btn3d btn-green">LOAD MORE PROJECTS</button>');

        //when load more button clicked
        $("#load-more").click(function() {
          if ($('#filterContainer').data('clicked')) {
            //when filter button clicked, set initial value for counter
            counter = initShow;
            $('#filterContainer').data('clicked', false);
          } else {
            counter = counter;
          };

          counter = counter + initShow;

          loadMore(counter);
        });

        //when filter button clicked
        $("#filterContainer").click(function() {
          $(this).data('clicked', true);

          loadMore(initShow);
        });





      });



})(jQuery);