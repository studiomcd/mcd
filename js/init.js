jQuery(document).ready(function($) {
   
    /* Our construction kit for converting SiteOrigin applied classes to Rellax and ScrollTrigger ready data attributes */
    $('.rellaxinitimg').each(function(){
        var $this = $(this);
        var $rellaxdata = '2';
        if($this.hasClass('rellaxspeed1')) {
            $rellaxdata = '1';
        } else if($this.hasClass('rellaxspeed2')) {
            $rellaxdata = '2';
        } else if($this.hasClass('rellaxspeed3')) {
            $rellaxdata = '3';
        } else if($this.hasClass('rellaxspeed-1')) {
            $rellaxdata = '-1';
        } else if($this.hasClass('rellaxspeed-2')) {
            $rellaxdata = '-2';
        } else if($this.hasClass('rellaxspeed-3')) {
            $rellaxdata = '-3';
        }
        $this.find('img').addClass('rellax').attr('data-rellax-speed', $rellaxdata);
    });
    
    $('.scrolltriggerrow').each(function(){
        var $this = $(this);
        $this.attr('data-scroll','');
    });
    
    $('.scrolltriggerimg').each(function(){
        var $this = $(this);
        $this.find('img').addClass('fadeanim vfadetotopsmall');
    });
    

    /* Open mobile navigation */
    $(document).on('click', '.nav-toggle', function(e) {
        e.preventDefault();
        // hide any open menus
        $('.popup-nav:visible').fadeOut(200).toggleClass('visible');
        var menu = $(this).attr('data-menu');
        $(menu).fadeIn(200).toggleClass('visible').toggleAttr('aria-hidden','true','false');
        if($('body').hasClass('projectslider-active')) {
            $('#projectsnav-container .slider').slick('refresh');
        }
    });
    /* Close mobile navigation */
    $(document).on('click', '.nav-close', function(e) {
        e.preventDefault();
        var menu = $(this).attr('data-menu');
        $(menu).fadeOut(200).toggleClass('visible').toggleAttr('aria-hidden','true','false');
    });
    
    /* Our fade animation on navigation */
    $(document).on('mouseover mouseout', '.mob-topnav li a', function(e) {
        $('.mob-topnav li a').not(this).each(function(){
            $(this).toggleClass('fadeout');
        });
    });
    
    /* Sticky sidebars */
    if ($('.sidebarbg #sidebar').is(':visible')) {
        // Stick our articles utility bar to the top 
        $('.sidebarbg #sidebar').scrollToFixed({
            limit: function() {
                var limit = $('#main-footer').offset().top;
                if ($('.offsetfooter').length) { limit = limit - $('.offsetfooter').innerHeight() - $(this).innerHeight(); }
                return limit;
            },
            bottom: 0,
            offsets: true,
            removeOffsets: false,
            preUnfixed: function() {
                $(this).addClass('unfixed');  
            },
            preFixed: function() {
                $(this).removeClass('unfixed');
            },
            zIndex: 999
        });
    }
    
    /* Detect scroll position and update our floating sidebar nav as needed. Make sure all rows within section start with the same ID */
    $(document).on('scroll', onScroll);
    
    function onScroll(e) {
        var scrollPos = $(document).scrollTop(),
        currLink = [];
        $('#sidebar a.jumplink').each(function(i) {
            currLink[i] = $(this);
            var refElement = currLink[i].attr('href');
            refElement = refElement.split('#')[1];
            $('*[id^='+refElement+']').each(function (o, el) {
                var idBoxes = $(el);
                if (idBoxes.position().top <= scrollPos && idBoxes.position().top + idBoxes.height() > scrollPos) {
                    $('#sidebar a.jumplink').removeClass("active");
                    currLink[i].addClass("active");
                }
            });
        });
        if ($('body:not(.post-type-archive-cspf_project) #featured-project, #main-footer, #project-casestudy').position().top <= scrollPos && $('body:not(.post-type-archive-cspf_project) #featured-project, #main-footer, #project-casestudy').position().top + $('body:not(.post-type-archive-cspf_project) #featured-project, #main-footer, #project-casestudy').height() > scrollPos) {
            $('#sidebar a.jumplink').removeClass("active");
        }
    }
    
    /* Our ajax page loading for fading transition */
    $('.animsition').animsition({
        inClass: 'fade-in',
		outClass: 'fade-out',
		inDuration: 900,
		outDuration: 500,
        linkElement: 'a:not([target="_blank"]):not([href^="#"]):not(".ias")',
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'page-loading',
        loadingInner: '',
        transition: function(url){ window.location.href = url; }
    });
    
    $('body').on('animsition.inEnd', function(){
        $(this).addClass('loaded');
        // ensure everything is loaded, THEN load Rellax & slick
        var rellax = new Rellax('.rellax', {
            center: true,
        });

    });
    
    /* scrollTrigger gives us a "visible" class to animate items in */
    var trigger = new ScrollTrigger({
        centerVertical: true,
        once: true,
    });
    
    // Homepage slider
    $('#homepage-slideshow .slider').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 500,
        slidesToShow: 1,
        fade: true
    });
    
    // AJAX INFINITE SCROLL
	if ($('.ajaxy').length) {
        var ias = $.ias({
            container:  '.ajaxy',
            item:       '.ajax-item',
            pagination: '#nav-below',
            next:       '#nav-below .nav-previous a'
        });
        ias.extension(new IASSpinnerExtension({
            // This is why we get the variable for stylesheet URI in the functions.php file.
            src: directory_uri.stylesheet_directory_uri + '/images/loading_grey.svg'
        }));
        ias.extension(new IASPagingExtension());
        ias.extension(new IASHistoryExtension({
            prev: '#nav-below .nav-next a'
        }));
        ias.extension(new IASTriggerExtension({
            text: 'Load more', // optionally
            textPrev: 'Load more', // optionally
            html: '<div class="ias-trigger ias-trigger-next" style="text-align: center; cursor: pointer;"><a class="ias uc">{text}</a></div>',
            htmlPrev: '<div class="ias-trigger ias-trigger-prev" style="text-align: center; cursor: pointer;"><a class="ias uc">{text}</a></div>',
        }));
        ias.on('render', function(items) {
            /* Here's all our filtering if something's selected already */
            $('#filter-warning').hide();
            if ($(".filter-nav .filter-me a:not('.reset').active").length) {
                var thisfilter = $('.filter-nav .filter-me a.active').data('filter'); // get current filter
                var $items = $(items);
                var counter = 0; // counter to ensure we're actually going to show anything
                $items.each(function() {
                    if ($(this).hasClass(thisfilter)) {
                        // this is shown already - do nothing to it but,
                        counter++; // add to our counter, something's shown
                    } else {
                        // this is hidden
                        $(this).addClass('hidden'); // add class with !important to force it hiding
                    }
                });
                // If counter is 0, we didn't return anything... let the viewer know
                if(counter === 0) {
                    $('#filter-warning').show('fast');
                }
            }
        });
        ias.on('loaded', function(data, items) {
            trigger.bind(items);
        });
	}
    
    // Init Instafeed
    if($('#instafeed').length) {
        // Have to use a listener to refresh slick slider on mobile
        $('#instafeed').onCreate('.i-image', function() {
            if($('body').hasClass('insta-slider')) {
                $('#instafeed').slick('refresh');
            }
        });
        // Fetch our instagram feed
        SaladSpinner({
            userId: '8e3cbab0470ea3b82dd29b305d5ed14d32960d27',
            users: [24911501],
            sortBy: 'likes.count',
            links: true,
            resolution: 'low_resolution',
            id: 'instafeed',
            limit: 8,
            template: '<div class="i-image"><a href="<%= link %>" target="_blank"><img src="<%= url %>" /></a></div>',
        }).show();
        
    }
    
    // On the homepage, let's append our animated line after the links */
    $('#homepage-content .text-block a:not(.cta-button)').append('<span class="line black vlinegrow vdelay6"></span>');

    
    // Our filteration! (used on News page)
    if ($('.filter-nav').length) {
        
        $(document).on('click', '.filter-nav .filter-me a', function(e) {
            e.preventDefault();
            // Hide/reset everything
            $('#filter-warning').hide();
            $('.ajaxy').hide();
            $('.ajaxy .ajax-item').removeClass('hidden');
            // Grab the selected filter
            var thisfilter = $(this).data('filter');
            // Is this the reset?
            if ($(this).hasClass('reset')) {
                $('.filter-nav .filter-me a').not(this).removeClass('active');
                $('.ajaxy .ajax-item').removeClass('hidden');
            // Otherwise let's prepare the correct posts
            } else {
                $('.ajaxy .ajax-item').addClass('hidden');
                // Turn off any already active filters
                $('.filter-nav .filter-me a').not(this).removeClass('active');
                // Any posts found? Show 'em by taking off the hidden class.
                if ($('.ajaxy .ajax-item.' + thisfilter).length) {
                    $('.ajaxy .ajax-item.' + thisfilter).removeClass('hidden');
                // Otherwise tell the viewer that nothing matched.
                } else {
                    $('#filter-warning').fadeIn('fast');
                }
            }
            // Show the posts!!!
            $('.ajaxy').fadeIn('fast');
		  
            // Make the selection active
            $(this).toggleClass('active');
            $('html, body').animate({scrollTop: $('#article-nav').offset().top}, 300);
            // We did it, hooray!
        });
    }
    
    /* Our video wrappers for responsive layout */
	$('iframe[src*="youtube.com"]').wrap('<div class="youtubeWrapper" />'); 
	$('iframe[src*="vimeo.com"]').wrap('<div class="vimeoWrapper" />');
	$('iframe[src*="instagram.com"]').wrap('<div class="instagramWrapper" />');
	
    // polyfill for IE object-fit: contain
    objectFitImages(null, {watchMQ: true});
    
    // Buggyfill for mobile viewport units
    window.viewportUnitsBuggyfill.init(/*{force: true}*/);
    
    /* Anchor links - thank you Ian Clark! http://jsfiddle.net/ianclark001/rkocah23/ */
    (function(document, history, location) {
      var HISTORY_SUPPORT = !!(history && history.pushState);
    
      var anchorScrolls = {
        ANCHOR_REGEX: /^#[^ ]+$/,
        OFFSET_HEIGHT_PX: -10,
    
        /**
         * Establish events, and fix initial scroll position if a hash is provided.
         */
        init: function() {
          this.scrollIfAnchor(location.hash);
          $('body').on('click', 'a', $.proxy(this, 'delegateAnchors'));
        },
    
        /**
         * Return the offset amount to deduct from the normal scroll position.
         * Modify as appropriate to allow for dynamic calculations
         */
        getFixedOffset: function() {
          return this.OFFSET_HEIGHT_PX;
        },
    
        /**
         * If the provided href is an anchor which resolves to an element on the
         * page, scroll to it.
         * @param  {String} href
         * @return {Boolean} - Was the href an anchor.
         */
        scrollIfAnchor: function(href, pushToHistory) {
          var match, anchorOffset;
    
          if(!this.ANCHOR_REGEX.test(href)) {
            return false;
          }
    
          match = document.getElementById(href.slice(1));
    
          if(match) {
            anchorOffset = $(match).offset().top - this.getFixedOffset();
            $('html, body').animate({ scrollTop: anchorOffset});
    
            // Add the state to history as-per normal anchor links
            if(HISTORY_SUPPORT && pushToHistory) {
              history.pushState({}, document.title, location.pathname + href);
            }
          }
    
          return !!match;
        },
    
        /**
         * If the click event's target was an anchor, fix the scroll position.
         */
        delegateAnchors: function(e) {
          var elem = e.currentTarget;
    
          if(this.scrollIfAnchor(elem.getAttribute('href'), true)) {
            e.preventDefault();
          }
        }
      };
    
    $(document).ready($.proxy(anchorScrolls, 'init'));
    })(window.document, window.history, window.location);
          
    
    // tablet breakpoint js 
    enquire.register("screen and (max-width:767px)", {
        match : function() {
            // Init instagram slideshow!
            $('#instafeed').slick({
                arrows: true,
                dots: false,
                autoplay: false,
                centerMode: true,
                centerPadding: '50px',
                variableWidth: true,
                slidesToShow: 1,
                slide: '.i-image'
            });
            $('body').addClass('insta-slider');
        },
        unmatch : function() {
            // kill featured projects slider
            $('#instafeed').slick('unslick');
            $('body').removeClass('insta-slider');
        }
    });
    
    /* Toggle attribute function - thanks https://gist.github.com/mathiasbynens/298591 (first comment) */
	$.fn.toggleAttr = function(attr, attr1, attr2) {
	  return this.each(function() {
	    var self = $(this);
	    if (self.attr(attr) == attr1)
		 self.attr(attr, attr2);
	    else
		 self.attr(attr, attr1);
	  });
	};

    //Isotope Masonry Grid   	
    var $isocontainer = $('#portfolio-container');
	//var $window = $(window);
    
    $isocontainer.imagesLoaded(function(){
        $isocontainer.isotope({
            itemSelector : '.grid-item',
            layoutMode: 'masonry',
            masonry: { columnWidth: '.grid-sizer', gutter: '.gutter-sizer' }
        });
    });
	
    //filter
    $('span.portfolioFilter').click(function(e){
        e.preventDefault();
        $('span.portfolioFilter.current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-pfilter');
        $isocontainer.isotope({
            filter: selector,
            itemSelector : '.grid-item',
            layoutMode: 'masonry',
            masonry: { columnWidth: '.grid-sizer', gutter: '.gutter-sizer' }
        });
    });
    
    //Isotope Masonry Grid  - Individual Portfolio                    
    var $singlecontainer = $('#individual-portfolio');
    
    $singlecontainer.imagesLoaded(function(){
        $singlecontainer.isotope({
            itemSelector : '.grid-item',
            layoutMode: 'masonry',
            masonry: { columnWidth: '.grid-sizer', gutter: '.gutter-sizer' }
        });
    });
   
   $('a.gallery').featherlightGallery({
        previousIcon: 'Previous',
        nextIcon: 'Next',
        openSpeed:    300,
        closeSpeed:   300
    });
   
   $('a.gallery').click(function(e){
        e.preventDefault();
    });   

});



