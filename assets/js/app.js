// jQuery code
jQuery(document).ready(function ($) { ////////////// window after load functions

    ////////////// Preloader
    // function preLoader(){
    //     $("#preload svg").addClass('change-fill-color');
    //     $("#preload").addClass('on2');
    //     $("#preload").addClass('on5').fadeIn();
    // }
    // preLoader();
    // setTimeout(function(){
    //     $("#preload").fadeOut();
    // }, 5000);

    ////////////// Youtube Player init
    function loadYTPlayer() {
        if(typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            ////////////// init all players
            window.onYouTubePlayerAPIReady = function () {
                initVideoBannerPlayer();
                initBeforeFooterVideo();
                initShowReelVideo();
                initGalleryVideo();
            };
        }
    }

    function initVideoBannerPlayer() {
        let players = document.querySelectorAll('.video-full-screen-banner-youtube .player');
        for (let i = 0; i < players.length; i++){
            let player;
            let wrapper = players[i].parentNode;

            player = new YT.Player(players[i], {
                height: '100%',
                width: '100%',
                videoId: players[i].getAttribute('data-video-id'),
                playerVars: {
                    'modestbranding': 1,
                    'autohide': 1,
                    'showinfo': 0,
                    'controls': 0,
                    'mute': 1,
                    'playsinline': 1,
                    'loop': 1,
                    'rel':0
                },
                events: {
                    'onReady': onPlayerReady = (player, event) => {
                        player.target.playVideo();
                    },
                    'onStateChange': onPlayerStateChange = (event) => {
                        if (event.data === YT.PlayerState.PLAYING) {
                            setTimeout(function () {
                                wrapper.querySelector('.poster').classList.add('hidden');
                            }, 100);
                        }

                        if (event.data === YT.PlayerState.ENDED) {
                            player.playVideo(); 
                        }
                    }
                }
            });
        }
    }

    function initBeforeFooterVideo() {
        let players = document.querySelectorAll('.main-video-before-footer .video');
        for (let i = 0; i < players.length; i++){
            let player;
            let wrapper = players[i].parentNode;

            player = new YT.Player(players[i], {
                height: '100%',
                width: '100%',
                videoId: players[i].getAttribute('data-video-id'),            
                playerVars: {
                    'autoplay': 1,
                    'controls': 0,
                    'disablekb': 1,
                    'fs': 0,
                    'loop': 1,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'mute': 0,
                    'autohide': 1
                  },
                events: {
                    'onReady': onPlayerReady = (player, event) => {
                        player.target.pauseVideo();
                        $('.toggle-play-button').click(function(){
                            player.target.playVideo();
                            $(this).hide();
                        });
                    },
                    'onStateChange': onPlayerStateChange = (event) => {
                        
                        if (event.data === YT.PlayerState.PLAYING) {
                            
                        }
                    }
                }
            });
        }
    }

    function initShowReelVideo() {
        let players = document.querySelectorAll('.video-lighthouse-button  .video-wrap');
        for (let i = 0; i < players.length; i++){
            let player;
            let wrapper = players[i].parentNode;

            player = new YT.Player(players[i], {
                height: '100%',
                width: '100%',
                videoId: players[i].getAttribute('data-video-id'),            
                playerVars: {
                    'autoplay': 1,
                    'controls': 1,
                    'disablekb': 1,
                    'fs': 1,
                    'loop': 1,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'mute': 1,
                    'autohide': 1
                  },
                events: {
                    'onReady': onPlayerReady = (player, event) => {
                        player.target.pauseVideo();
                        $('.showreel-button').click(function(){
                            player.target.playVideo();
                            $(".video-banner").fadeIn();
                        });

                        $(".video-banner").click(function(){
                            $(this).fadeOut();
                            player.target.pauseVideo();
                        });
                        
                        $(".video-banner .video-wrap").click(function(e) {
                            e.stopPropagation();
                        });


                    },
                    'onStateChange': onPlayerStateChange = (event) => {
                        
                        if (event.data === YT.PlayerState.PLAYING) {
                            
                        }
                    }
                }
            });
        }
    }

    function initGalleryVideo() {
        let players = document.querySelectorAll('.gallery-videos .video');
        for (let i = 0; i < players.length; i++){
            let player;
            let wrapper = players[i].parentNode;

            player = new YT.Player(players[i], {
                height: '100%',
                width: '100%',
                videoId: players[i].getAttribute('data-video-id'),            
                playerVars: {
                    'autoplay': 0,
                    'controls': 1,
                    'disablekb': 1,
                    'fs': 1,
                    'loop': 1,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'mute': 0,
                    'autohide': 1
                  },
                events: {
                    'onReady': onPlayerReady = (player, event) => {
                        player.target.pauseVideo();
                       
                    },
                    'onStateChange': onPlayerStateChange = (event) => {
                        
                        if (event.data === YT.PlayerState.PLAYING) {
                            
                        }
                    }
                }
            });
        }
    }
    

    loadYTPlayer();


    ////////////// Header Fixed Position

    if(document.querySelector('.tabs-we-are-close')){
        var nextSection = $('.tabs-we-are-close').offset();
        var $windowNextSection = $(window);
        
        $windowNextSection.scroll(function() {

            if($windowNextSection.scrollTop() >= 200){
                $(".site-header").addClass("fixed-header-bg1");
            }else{
                $(".site-header").removeClass("fixed-header-bg1");
            }
            if ( $windowNextSection.scrollTop() >= nextSection.top ) {
                $(".site-header").addClass("fixed-header");
            }
            else{
                $(".site-header").removeClass("fixed-header");
            }  
        });		
    }
    



    ////////////// Scroll to next section or section with id
    window.scrollToSection = function (element, sectionID = null) {
        let targetSection;

        if(sectionID){
            targetSection = document.querySelector('#'+sectionID);
        }
        else{
            targetSection = element.nextSibling;
        }

        if(typeof targetSection !== 'undefined' || targetSection){
            let distance = window.scrollY + targetSection.getBoundingClientRect().top;
            window.scrollTo({behavior: 'smooth', top: distance}); // - document.querySelector('header').offsetHeight
        }


    }

    ///////////// Main Accordion
    var i=0;
    var idArr = [];
    $('.main-accordion-picture-col').each(function(){
        i++;
        var newID='tab-img'+i;
        $(this).attr('id',newID);
        $(this).val(i);
        idArr.push($(this).attr('id')); 
    });

    for(let l = 1; l <= idArr.length; l++){

        let firstTab = $('#tab-img'+l+'').next('.main-accordion-list-col').children().children('.service-tabs-item:first-child');
        let urlF = $(firstTab).data('id');
        $('#tab-img'+l+'').css('background-image','url('+urlF+')');
        firstTab.addClass('tab-active');
        firstTab.find('.service-tabs-inner').addClass('active-tab');
    
        let otherTab = $('#tab-img'+l+'').next('.main-accordion-list-col').children().children('.service-tabs-item');
        otherTab.click(function(){
            let urlD = $(this).data('id');
            $('#tab-img'+l+'').css('background-image','url('+urlD+')');
        });
    
        let changeTab = $('#tab-img'+l+'').next('.main-accordion-list-col').children().children('.service-tabs-item').find('.service-tabs-title');

        changeTab.click(function(){

            let changeTabActive = $('#tab-img'+l+'').next('.main-accordion-list-col').children().children('.service-tabs-item').find('.service-tabs-inner');
            changeTabActive.not($(this).next()).slideUp(400);
            $(this).next().slideToggle(400);
            if($(this).closest('.service-tabs-item').hasClass('tab-active')){
                $(this).closest('.service-tabs-item').removeClass('tab-active');
            }
            else{
                $(this).closest('.service-tabs-item').addClass('tab-active').siblings().removeClass('tab-active');
            }
        });
    
    }

    ////////// Product Selection Popup

    $(function(){
        $('.icon-button:first').closest('.product-list-item').addClass('tab-active');
    });

    $('.icon-button').click(function(){
        $('.selection-pop-up').not($(this).next()).slideUp(300); 
        $(this).next().slideToggle(400);
        $(this).closest('.product-selection-popup-grid').find('.product-list-item').removeClass('tab-active');
        $(this).closest('.product-list-item').addClass('tab-active')
    });

    ////////// Main Slider

    var sliderMobile = { 
        slidesPerView: 1,
        loop: true,
        initialSlide: 0,
        effect: 'slide',
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'bullets',
          renderBullet: function (index, className) {
            if(index+1 < 10)
              return '<div class="'+ className +' pagination-item"> </div>';
            else
              return '<div class="'+ className +' pagination-item"> </div>';
          },
      },
    }

    var tabletAndDesktopSliderSettings = {
        slidesPerView: 1, 
        initialSlide: 0,
        effect: 'creative',
        //  autoplay: {
        //   delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            type: 'bullets',
            renderBullet: function (index, className) {
            var category = [];
            var products = [];
            var linkUrl = [];
            var linkTitle = [];
            $(".swiper-wrapper .swiper-slide").each(function(i) {
                category.push($(this).data("category"));
                products.push($(this).data("products"));
                linkUrl.push($(this).data("url"));
                linkTitle.push($(this).data("link-title"));
            });

            for (let i = index; i <= index; i++) {
                return '<div class="'+ className +' pagination-item">  <p class="product-category"> '+ category[i] +' </p> <div class="products-list know-more-link"> '+ products[i] +' <a href="'+ linkUrl[i] +'" onclick="location.href = this.href" class="product-list-link" >'+ linkTitle[i] +'</a></div> </div></span>';     
            } 
            },
        },
        
        breakpoints: {
        
            768: {
            creativeEffect: {
                limitProgress: 4,
        
                prev: {
        
                translate: ['20px', '0%', -2],
                transition: 0.3,
                opacity: 1,
                scale: 0.94,
                
                },
                next: {
                translate: ['20px', '0%', -1],
                scale: 0.94,
                transition: 0.3,
                opacity: 1,
                },
            },
            },
            1024: {
            creativeEffect: {
                limitProgress: 4,
        
                prev: {
        
                translate: ['30px', '0%', -2],
                transition: 0.3,
                opacity: 1,
                scale: 0.94,
                },
                next: {
                translate: ['30px', '0%', -1],
                scale: 0.94,
                transition: 0.3,
                opacity: 1,
                },
            },
            },
        }
    }

    var mySwiper;
    
    function initSwiper() {
        var screenWidth = $(window).width();
        console.log(screenWidth);
        if(screenWidth <= 767 ) {
             
            mySwiper = new Swiper('.product-slider', sliderMobile); 
            // console.log();
            
        }
        else{
            
            mySwiper = new Swiper('.product-slider', tabletAndDesktopSliderSettings); 
            console.log('tabletORdesktop');
        }

        // } 
        // $('.swiper').on('mouseover', function() {
        //     mySwiper.autoplay.stop();
        // });
        
        // $('.swiper').on('mouseout', function() {
        //     mySwiper.autoplay.start();
        // });
        
    }

    initSwiper();

    // console.log(cardElArr);
    ////////// Main Menu

    function openMenu(){
        $('.menu-wrapper').addClass('offcanvas');
        $('.right-col .language-selector').fadeOut();
        $.each($('.menu-item'), function(i, el) {
            setTimeout(function() {
            $(el).addClass("menuItemsAnima");
            }, 100 + (i * 100));
        });

        var item = $('<div onclick="closeMenu()" class ="menu-dim" style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;transition: background 0.5s;background: rgba(0, 0, 0, 0.6);"></div>')
        .hide()
        .fadeIn(500);
        $('#header').append(item);
    }

    $('.mobile-burger').click(function(){
        openMenu();
    });
    
    $('.open-menu-icon').click(function(){
        $('.submenu').not($(this).next()).slideUp(400);
        $(this).next().slideToggle(400);
    
        if($(this).closest('.menu-item').hasClass('tab-active')){
            $(this).closest('.menu-item').removeClass('tab-active');
        }
        else{
            $(this).closest('.menu-item').addClass('tab-active').siblings().removeClass('tab-active');
        }
    });  


    window.closeMenu = function(){
        $('.menu-wrapper').removeClass('offcanvas');
        $('.menu-item').removeClass('menuItemsAnima');
        $('.right-col .language-selector').fadeIn();
        $('.menu-dim').fadeOut(500, function() { $(this).remove(); });
    }

    $('.close-menu').click(function(){
        window.closeMenu();
    });   

    addEventListener('beforeunload', (event) => {  window.closeMenu(); });
    
    // Raising Page Slider
    var prodSlider = new Swiper('.production-slider', {
        slidesPerView: 1,
    //   loop: true,
      initialSlide: 0,
      effect: 'slide',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
            var imgurl = [];
            var productname = [];
            var icon1 = [];
            var icon2 = [];
            var textinf1 = [];
            var textinf2 = [];
            $(".swiper-wrapper .swiper-slide").each(function(i) {
                imgurl.push($(this).data("imgurl"));
                productname.push($(this).data("productname"));
                icon1.push($(this).data("icon1"));
                icon2.push($(this).data("icon2"));
                textinf1.push($(this).data("textinf1"));
                textinf2.push($(this).data("textinf2"));
            });
            
          for (let i = index; i <= index; i++) {
            return '<div class="'+ className +' pagination-item">  <div class="item-info"> <div class="slider-item-img-wrap"><img src="'+ imgurl[i] +'" alt=""></div><div class="slide-content"><p class="item-name">'+ productname[i] +'</p><div class="slider-item-info"><div class="img-cont green-circle-item"><img src="'+ icon1[i] +'" alt=""></div><div class="slider-item-description"><p>'+ textinf1[i] +'</p></div></div><div class="slider-item-info"><div class="img-cont green-circle-item"><img src="'+ icon2[i] +'" alt=""></div><div class="slider-item-description"><p>'+ textinf2[i] +'</p></div></div> </div></div> <div class="line-item"></div> </div>';
          }
        },
      },
    });
    
    /////// Gallery Slider
    var galleryPageThumbs = new Swiper(".gallery-slider-thumbs", {
        
        loop: true,
        effect: 'slide',
        spaceBetween: 10,
        slidesPerView: '3',
        touchRatio: 0.2,
        slideToClickedSlide: true,

        breakpoints: {
            425: {
                spaceBetween: 30,
            },
            768: {
                spaceBetween: 20,
            },
            1024: {
                spaceBetween: 26,
            },
        },

        
    });
    var gallerySlider = new Swiper('.gallery-slider', {
        slidesPerView: 1,
    //   loop: true,
      initialSlide: 0,
      
      effect: 'slide',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
           
            return '<div class="'+ className +' pagination-item"> <div class="line-item"></div></div>';
           
          },
      },
      thumbs: {
        swiper: galleryPageThumbs,
        },
    });
    
    /////// Product Filter Button
    $('.filter-button').click(function(){
       $('.prod-list').toggleClass('prod-list-animation');
       $(this).toggleClass('filter-button-focus');
    });

    $('.open-cat-list-icon').click(function(){
        $(this).next().not($(this).next()).slideUp(400);
        $(this).next().slideToggle(400);
    });

    var addProducts = new Swiper(".additional-products-slider-wrap", {
        // loop: true,
        slidesPerView: 1,
        // paginationClickable: true,
        // spaceBetween: 10,
        // lockClass: '1',
        navigation: {
            nextEl: ".swiper-button-next-prod",
            prevEl: ".swiper-button-prev-prod",
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        
    });
    ////// Product Card Thumnail Slider
    var galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 20,
        slidesPerView: 3,
        loop: true,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            425: {
                spaceBetween: 30,
            },
            768: {
                spaceBetween: 20,
            },
            1024: {
                spaceBetween: 26,
            },
        },

        
    });
    var galleryTop = new Swiper(".gallery-top", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next-img",
            prevEl: ".swiper-button-prev-img",
        },
        loop: true,
        // loopedSlides: 3,
        thumbs: {
            swiper: galleryThumbs,
        },
    });
   
   
    $('.product-list-link').click(function(){
        window.closeMenu();
    }); 

    const {
        host, hostname, href, origin, pathname, port, protocol, search
    } = window.location
    let path = pathname;

    ////// Product Mobile Accordion
        screenWidth = $(window).width();
        if(screenWidth <= 767 ) {
            // console.log('smaller');
            if(path == '/products/'){
                let cattog = document.querySelectorAll('.cat-tog');
                for(i = 0; i < cattog.length; i++){
                    cattog[i].classList.add('category-mob-ac');
                }

                let catwrap = document.querySelectorAll('.categories-wrap');
                for(i = 0; i < catwrap.length; i++){
                
                    catwrap[i].classList.add('sub-grid-none');


                }
            }
            $(function() {
                $(".category-mob-ac").on("click", function(e) {
                
                    e.preventDefault();
                    var $this = $(this);
            
                    if (!$this.hasClass("category-active")) {
                        $(".subcategory-grid").slideUp(800);
                        $(".category-mob-ac").removeClass("category-active");
                    }
            
                    $this.toggleClass("category-active");
                    $this.next().slideToggle();
                });
                
            });
            
        }
        else if(screenWidth > 768){
            // console.log('greater');
            let catTogs = document.querySelectorAll('.cat-tog');
            for(i = 0; i < catTogs.length; i++){
                catTogs[i].classList.remove('category-mob-ac');
            }
            
        }
    
    
    

    

});



