var maxheightfix=1500;
var proporcionratio=.95;

(function($){
    "use strict"; 
        
    $(window).load(function(){
        
        
        $("body").imagesLoaded(function(){
            $(".page-loader div").fadeOut();
            $(".page-loader").delay(200).fadeOut(2000);
            $(".loaderhand").fadeOut(1000);
             setTimeout(function () { timeout(); }, 1500);
        });
        
        

        init_scroll_navigate();
        
        $(window).trigger("scroll");
        $(window).trigger("resize");
        
        if ((window.location.hash) && ($(window.location.hash).length)){
            var hash_offset = $(window.location.hash).offset().top;
            $("html, body").animate({
                scrollTop: hash_offset
            });
        }
        
    });
    
    $(document).ready(function(){
        
        $(window).trigger("resize");            
        init_classic_menu();
        init_fullscreen_menu();
        init_side_panel();
        init_lightbox();
        init_parallax();
        init_shortcodes();
        init_tooltips();
        init_counters();
        js_height_init();
        

    });
    
    $(window).resize(function(){
        
        init_classic_menu_resize();
        init_side_panel_resize()
        split_height_init();
        js_height_init();
        js_height_init();
        	
    });
    
    
    var mobileTest;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        mobileTest = true;
        $("html").addClass("mobile");
    }
    else {
        mobileTest = false;
        $("html").addClass("no-mobile");
    }
    
    var mozillaTest;
    if (/mozilla/.test(navigator.userAgent)) {
        mozillaTest = true;
    }
    else {
        mozillaTest = false;
    }
    var safariTest;
    if (/safari/.test(navigator.userAgent)) {
        safariTest = true;
    }
    else {
        safariTest = false;
    }
        
    if (!("ontouchstart" in document.documentElement)) {
        document.documentElement.className += " no-touch";
    }
    
  
    
    var pageSection = $(".home-section, .page-section, .small-section, .split-section");
    pageSection.each(function(indx){
        
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    
    function height_line(height_object, height_donor){
        height_object.height(height_donor.height());
        height_object.css({
            "line-height": height_donor.height() + "px"
        });
    }
    
    !function(a){
        a.fn.equalHeights = function(){
            var b = 0, c = a(this);
            return c.each(function(){
                var c = a(this).innerHeight();
                c > b && (b = c)
            }), c.css("height", b)
        }, a("[data-equal]").each(function(){
            var b = a(this), c = b.data("equal");
            b.find(c).equalHeights()
        })
    }(jQuery);
    
    
    var progressBar = $(".progress-bar");
    progressBar.each(function(indx){
        $(this).css("width", $(this).attr("aria-valuenow") + "%");
    });
    
    
    var mobile_nav = $(".mobile-nav");
    var desktop_nav = $(".desktop-nav");
    
    function init_classic_menu_resize(){
        
        $(".mobile-on .desktop-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px");
        
        if ($(window).width() <= 1024) {
            $(".main-nav").addClass("mobile-on");
        }
        else 
            if ($(window).width() > 1024) {
                $(".main-nav").removeClass("mobile-on");
                desktop_nav.show();
            }
    }
    
    function init_classic_menu(){
    
                
        $(".js-stick").sticky({
            topSpacing: 0
        });
        
        
        height_line($(".inner-nav > ul > li > a"), $(".main-nav"));
        height_line(mobile_nav, $(".main-nav"));
        
        mobile_nav.css({
            "width": $(".main-nav").height() + "px"
        });
                
        if ($(".main-nav").hasClass("transparent")){
           $(".main-nav").addClass("js-transparent"); 
        }
        
        $(window).scroll(function(){        
            
                if ($(window).scrollTop() > 5) {
                    $(".js-transparent").removeClass("transparent");
                    $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").addClass("small-height");
                    $(".main-nav, .nav-logo-wrap .logo, .mobile-navb").addClass("small-height");
                }
                else {
                    $(".js-transparent").addClass("transparent");
                    $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").removeClass("small-height");
                    $(".main-nav, .nav-logo-wrap .logo, .mobile-navb").removeClass("small-height");
                }
            
            
        });
                
        mobile_nav.click(function(){
        
            if (desktop_nav.hasClass("js-opened")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                $(this).removeClass("active");
            }
            else {
                desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
                $(this).addClass("active");
                
                if ($(".main-nav").hasClass("not-top")){
                    $(window).scrollTo(".main-nav", "slow"); 
                }
                
            }
            
        });
        
        desktop_nav.find("a:not(.mn-has-sub)").click(function(){
            if (mobile_nav.hasClass("active")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                mobile_nav.removeClass("active");
            }
        });
        
                
        var mnHasSub = $(".mn-has-sub");
        var mnThisLi;
        
        $(".mobile-on .mn-has-sub").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");
        
        mnHasSub.click(function(){
        
            if ($(".main-nav").hasClass("mobile-on")) {
                mnThisLi = $(this).parent("li:first");
                if (mnThisLi.hasClass("js-opened")) {
                    mnThisLi.find(".mn-sub:first").slideUp(function(){
                        mnThisLi.removeClass("js-opened");
                        mnThisLi.find(".mn-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                }
                else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    mnThisLi.addClass("js-opened");
                    mnThisLi.find(".mn-sub:first").slideDown();
                }
                
                return false;
            }
            else {
                
            }
            
        });
        
        mnThisLi = mnHasSub.parent("li");
        mnThisLi.hover(function(){
        
            if (!($(".main-nav").hasClass("mobile-on"))) {
            
                $(this).find(".mn-sub:first").stop(true, true).fadeIn("fast");
            }
            
        }, function(){
        
            if (!($(".main-nav").hasClass("mobile-on"))) {
            
                $(this).find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
            }
            
        });
        
    }
 
    function init_scroll_navigate(){
        
        $(".local-scroll").localScroll({
            target: "body",
            duration: 1500,
            offset: 0,
            easing: "easeInOutExpo"
        });
        
        var sections = $(".home-section, .split-section, .page-section");
        var menu_links = $(".scroll-nav li a");
        
        $(window).scroll(function(){
        
            sections.filter(":in-viewport:first").each(function(){
                var active_section = $(this);
                var active_link = $('.scroll-nav li a[href="#' + active_section.attr("id") + '"]');
                menu_links.removeClass("active");
                active_link.addClass("active");
            });
            
        });
        
    }
    
    
    
    
    function init_lightbox(){
    
        $(".work-lightbox-link").magnificPopup({
            gallery: {
                enabled: true
            },
            mainClass: "mfp-fade"
        });
        
        $(".lightbox-gallery-1").magnificPopup({
            gallery: {
                enabled: true
            }
        });
        
        $(".lightbox-gallery-2").magnificPopup({
            gallery: {
                enabled: true
            }
        });
        $(".lightbox-gallery-3").magnificPopup({
            gallery: {
                enabled: true
            }
        });
        $(".lightbox").magnificPopup();
        
    }
    
    
    
    function init_parallax(){
    
        if (($(window).width() >= 1126) && (mobileTest == false)) {
            $(".parallax-1").parallax("20%", 0.1);
            $(".parallax-2").parallax("20%", 0.105);
            $(".parallax-3").parallax("20%", 0.11);
            $(".parallax-4").parallax("20%", 0.115);
            $(".parallax-5").parallax("20%", 0.5);
            $(".parallax-6").parallax("20%", 0.6);
            $(".parallax-7").parallax("20%", 0.7);
            $(".parallax-8").parallax("20%", 0.5);
            $(".parallax-9").parallax("20%", 0.5);
            $(".parallax-10").parallax("20%", 0.5);
            $(".parallax-11").parallax("20%", 0.05);
        }
        
    }
    
    
    
    function init_shortcodes(){
    
        var tpl_tab_height;
        $(".tpl-minimal-tabs > li > a").click(function(){
        
            if (!($(this).parent("li").hasClass("active"))) {
                tpl_tab_height = $(".tpl-minimal-tabs-cont > .tab-pane").filter($(this).attr("href")).height();
                $(".tpl-minimal-tabs-cont").animate({
                    height: tpl_tab_height
                }, function(){
                    $(".tpl-minimal-tabs-cont").css("height", "auto");
                });
                
            }
            
        });
        
        $(".accordion").each(function(){
            var allPanels = $(this).children("dd").hide();
            $(this).children("dd").first().slideDown("easeOutExpo");
            $(this).children("dt").children("a").first().addClass("active");
                        
            $(this).children("dt").children("a").click(function(){        
                var current = $(this).parent().next("dd");
                $(".accordion > dt > a").removeClass("active");
                $(this).addClass("active");
                allPanels.not(current).slideUp("easeInExpo");
                $(this).parent().next().slideDown("easeOutExpo");                
                return false;                
            });
            
         });
        
        
        
        var allToggles = $(".toggle > dd").hide();
        
        $(".toggle > dt > a").click(function(){
        
            if ($(this).hasClass("active")) {
            
                $(this).parent().next().slideUp("easeOutExpo");
                $(this).removeClass("active");
                
            }
            else {
                var current = $(this).parent().next("dd");
                $(this).addClass("active");
                $(this).parent().next().slideDown("easeOutExpo");
            }
            
            return false;
        });
        
               
    }
    
    
    
    function init_tooltips(){
    
        $(".tooltip-bot, .tooltip-bot a, .nav-social-links a").tooltip({
            placement: "bottom"
        });
        
        $(".tooltip-top, .tooltip-top a").tooltip({
            placement: "top"
        });
        
    }
    
     function init_counters(){
        $(".count-number").appear(function(){
            var count = $(this);
            count.countTo({
                from: 0,
                to: count.html(),
                speed: 1300,
                refreshInterval: 60,
            });
            
        });
    }
    
    
         
    
})(jQuery); 

    
    var fm_menu_wrap = $("#fullscreen-menu");
    var fm_menu_button = $(".fm-button");
    
    function init_fullscreen_menu(){
        
        fm_menu_button.click(function(){
            
            if ($(this).hasClass("animation-process")){
                return false;
            }
            else{
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active").css("z-index", "2001").addClass("animation-process");;
                    
                    fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function(){
                        fm_menu_wrap.fadeOut(function(){
                            fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
                            fm_menu_button.css("z-index", "1030").removeClass("animation-process");
                            
                        });
                    });
                    
                    if ($(".owl-carousel").lenth) {
                        $(".owl-carousel").data("owlCarousel").play();
                    }
                    
                }
                else {
                    if ($(".owl-carousel").lenth) {
                        $(".owl-carousel").data("owlCarousel").stop();
                    }
                    $(this).addClass("active").css("z-index", "2001").addClass("animation-process");
                    
                    fm_menu_wrap.fadeIn(function(){
                        fm_menu_wrap.find(".fm-wrapper-sub").addClass("js-active");
                        fm_menu_button.removeClass("animation-process");
                    });
                }
                
                return false;
            }
            
        });
        
        $("#fullscreen-menu").find("a:not(.fm-has-sub)").click(function(){
            
            if (fm_menu_button.hasClass("animation-process")){
                return false;
            } 
            else {
                fm_menu_button.removeClass("active").css("z-index", "2001").addClass("animation-process");
                    
                fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function(){
                    fm_menu_wrap.fadeOut(function(){
                        fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
                        fm_menu_button.css("z-index", "1030").removeClass("animation-process");
                        
                    });
                });
                
                if ($(".owl-carousel").lenth) {
                    $(".owl-carousel").data("owlCarousel").play();
                }
            }
        });
                
        var fmHasSub = $(".fm-has-sub");
        var fmThisLi;
        
        fmHasSub.click(function(){
        
            fmThisLi = $(this).parent("li:first");
            if (fmThisLi.hasClass("js-opened")) {
                fmThisLi.find(".fm-sub:first").slideUp(function(){
                    fmThisLi.removeClass("js-opened");
                    fmThisLi.find(".fm-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                });
            }
            else {
                $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                fmThisLi.addClass("js-opened");
                fmThisLi.find(".fm-sub:first").slideDown();
            }
            
            return false;
            
        });
      
    }    
    

    var side_panel = $(".side-panel");
    var sp_button = $(".sp-button");
    var sp_close_button = $(".sp-close-button");
    var sp_overlay = $(".sp-overlay");
    
    function sp_panel_close(){
        side_panel.animate({
            opacity: 0,
            left: -270
        }, 500, "easeOutExpo");
        sp_overlay.fadeOut();
        
        
        if ($(".owl-carousel").lenth) {
            $(".owl-carousel").data("owlCarousel").play();
        }
    }
    
    function init_side_panel(){
        (function($){
            "use strict";
            
            sp_button.click(function(){
            
                side_panel.animate({
                    opacity: 1,
                    left: 0
                }, 500, "easeOutExpo");
                
                setTimeout(function(){
                    sp_overlay.fadeIn();
                }, 100);
                
                if ($(".owl-carousel").lenth) {
                    $(".owl-carousel").data("owlCarousel").stop();
                }
                
                return false;
            
            });
            
            sp_close_button.click(function(){
                sp_panel_close();
                return false;
            });
            sp_overlay.click(function(){
                sp_panel_close();
                return false;
            });
            
            $("#side-panel-menu").find("a:not(.sp-has-sub)").click(function(){
                if (!($(window).width() >= 1199)) {
                    sp_panel_close();
                }
            });
            
                    
            var spHasSub = $(".sp-has-sub");
            var spThisLi;
            
            spHasSub.click(function(){
            
                spThisLi = $(this).parent("li:first");
                if (spThisLi.hasClass("js-opened")) {
                    spThisLi.find(".sp-sub:first").slideUp(function(){
                        spThisLi.removeClass("js-opened");
                        spThisLi.find(".sp-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                }
                else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    spThisLi.addClass("js-opened");
                    spThisLi.find(".sp-sub:first").slideDown();
                }
                
                return false;
                
            });
            
        })(jQuery);
    }
    
    function init_side_panel_resize(){
        (function($){
            "use strict";
            
             if ($(window).width() >= 1199){
               side_panel.css({
                   opacity: 1,
                   left: 0
               });
               $(".side-panel-is-left").css("margin-left", "270px");
               sp_button.css("display", "none");
               sp_close_button.css("display", "none");
             } else {
                 side_panel.css({
                     opacity: 0,
                     left: -270
                 });
                 $(".side-panel-is-left").css("margin-left", "0");
                 sp_button.css("display", "block");
                 sp_close_button.css("display", "block");
             }
            
        })(jQuery);
    }

var fselector = 0;
var work_grid = $("#work-grid, #isotope");


function js_height_init(){
    (function($){
    
    	//Calculamos el padding de los elementos centrales (Calculadora y Mainline)
    	var padding=($(".js-height-full").height()-$("#calculadora").height())/2;
        $(".home-text").css("paddingTop",padding+"px");
        
        
        //Entramos a terreno responsivo
        if($(window).width()<1026)
        {
        		$(".js-height-full").height(900);
	        	$(".home-text").css("paddingTop","100px");
        }
        else
        {
		//Resoluciones arriba de 1026 de ancho
        
        	///Si el alto es mayor al ancho: recortamos todo
        	var proporcion=$(window).height()/$(window).width();

        	if(proporcion>proporcionratio)
        	{
        		$(".js-height-full").height(650);
	        	$(".home-text").css("paddingTop","100px");
        	}
        	else
        	{
        	
	        	if($(window).height()>maxheightfix)
    	    	{
    	    		$(".js-height-full").height(650);
		        	$(".home-text").css("paddingTop","100px");
        		}
        		else
	        	{
        
        			$(".js-height-full").height($(window).height());
		        	$(".js-height-parent").each(function(){
    			        $(this).height($(this).parent().first().height());
			        });
			    }
			}
        }
        
        
        	
        
        
        
    })(jQuery);
}


function js_height_init_mobile(){
    (function($){
        $(".js-height-full").height($(window).height());
        $(".js-height-parent").each(function(){
            $(this).height($(this).parent().first().height());
        });
    })(jQuery);
}
    
function split_height_init(){
    (function($){
        
        $(".ssh-table, .split-section-content").css("height", "auto");
        
        if ($(window).width() > 992) {
            $(".split-section").each(function(){
                var split_section_height = $(this).find(".split-section-content").innerHeight();
                $(this).find(".ssh-table").height(split_section_height);
            });
        }
            
    })(jQuery);
}