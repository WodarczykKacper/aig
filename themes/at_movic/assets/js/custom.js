/*
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your shop
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
//DONGND:: create option for slick slider of modal popup at product page
var options_modal_product_page = {
    speed: 300,
    dots: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    verticalSwiping: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
};

//DONGND:: create option for slick slider of quickview
var options_quickview = {
	speed: 300,
	dots: false,
	infinite: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	vertical: true,
	verticalSwiping: true,
	responsive: [
	  {
		breakpoint: 1200,
		settings: {
		  slidesToShow: 4,
		  slidesToScroll: 1,
		}
	  },
	  {
		breakpoint: 992,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 768,
		settings: {
		  slidesToShow: 4,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 576,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 1
		}
	  }
	]
};

$( window ).resize(function() {
	//DONGND:: fix zoom, only work at product page
	if (prestashop.page.page_name == 'product')
		restartElevateZoom();
		
	//DONGND:: fix lost slider of modal when resize
	if ($('#product-modal .product-images').hasClass('slick-initialized') && $('#product-modal .product-images').height() == 0)
	{		
		//DONGND:: setup slide for product thumb (modal)
		$('#product-modal .product-images').slick('unslick');
		$('#product-modal .product-images').hide();
		initSlickProductModal();
	}	
});

$(document).ready(function(){
  floatHeader();
  //check page product only
  if(prestashop.page.page_name == 'product'){
    innitSlickandZoom();
  }
  if (prestashop.page.page_name == 'category'){
    setDefaultListGrid();
  }

  if(typeof (products_list_functions) != 'undefined')
  {
    for (var i = 0; i < products_list_functions.length; i++) {
      products_list_functions[i]();
    }
  }
  
  //DONGND:: update for order page - tab adress, when change adress, block adress change class selected
  $('.address-item .radio-block').click(function(){
    if (!$(this).parents('.address-item').hasClass('selected'))
    {
      $('.address-item.selected').removeClass('selected');
      $(this).parents('.address-item').addClass('selected');
    }
  })
  
	//DONGND:: loading quickview
	actionQuickViewLoading();

	prestashop.on('updateProductList', function() {
		actionQuickViewLoading();
	}); 
			
	prestashop.on('updatedProduct', function () {
		
		if ($('.quickview.modal .product-thumb-images').length)
		{
			//DONGND:: run slick slider for product thumb - quickview
			initSlickProductQuickView();		
		}
		else if ($('.product-detail .product-thumb-images').length)
		{
			//DONGND:: re-call setup slick when change attribute at product page
			innitSlickandZoom();			
		}
	});
	
	//DONGND:: display modal by config
	if (typeof $("#content").data('templatemodal') != 'undefined')
	{
		if (!$("#content").data('templatemodal'))
		{
			$('div[data-target="#product-modal"]').hide();
		}
	}
	
	//DONGND:: create demo product detail from megamenu
	$('.demo-product-detail a').click(function(e){
		if (!$(this).hasClass('updated'))
		{
			e.preventDefault();	
			var current_url = window.location.href;
			if(prestashop.page.page_name == 'product' && current_url.indexOf('.html') >= 0){		
				var link_href = $(this).attr('href');
				var layout_key_index = link_href.indexOf('?layout=');	
				var layout_key_value = link_href.substring(layout_key_index);			
				current_url = current_url.substring(0, current_url.indexOf('.html'));
				var new_url = current_url+'.html'+layout_key_value;
				window.location.href = new_url;
			};
		}
		
	});
});

function innitSlickandZoom(){
	if($("#main").hasClass('product-image-thumbs')){
		
		//DONGND:: setup slide for product thumb (main)
		$('.product-detail .product-thumb-images').imagesLoaded( function(){ 
					
			if (typeof check_loaded_main_product != 'undefined')
			{
				clearInterval(check_loaded_main_product);
			}
			
			check_loaded_main_product = setInterval(function(){
				if($('.product-detail .product-thumb-images').height() > 0)
				{	
					
					$('.product-detail .product-thumb-images').fadeIn();
					
					clearInterval(check_loaded_main_product);
					postion = $("#content").data("templateview");
					//DONGND:: add config for over 1200 extra large
					numberimage = $("#content").data("numberimage");
					numberimage1200 = $("#content").data("numberimage1200");
					numberimage992  = $("#content").data("numberimage992");
					numberimage768  = $("#content").data("numberimage768");
					numberimage576  = $("#content").data("numberimage576");
					numberimage480  = $("#content").data("numberimage480");
					numberimage360  = $("#content").data("numberimage360");

					if(postion !== 'undefined'){
						initSlickProductThumb(postion, numberimage, numberimage1200, numberimage992, numberimage768, numberimage576, numberimage480, numberimage360);
					}
					
				}
			}, 300);
		});
		
		//DONGND:: setup slide for product thumb (modal)
		initSlickProductModal();
		
	}
	//call action zoom
	applyElevateZoom();
}

function restartElevateZoom(){	
    $(".zoomContainer").remove();
    applyElevateZoom();
}

function applyElevateZoom(){
	$(".zoomContainer").remove();
	if($(window).width() <= 991 || $("#content").data("templatezoomtype") == 'none')
	{		
		//DONGND:: remove elevateZoom on mobile
		if($('#main').hasClass('product-image-gallery'))
		{
			if ($('img.js-thumb').data('elevateZoom'))
			{
				var ezApi = $('img.js-thumb').data('elevateZoom');
				ezApi.changeState('disable');			
				$('img.js-thumb').unbind("touchmove");
			}
		}
		else
		{
			if ($("#zoom_product").data('elevateZoom'))
			{
				var ezApi = $("#zoom_product").data('elevateZoom');
				ezApi.changeState('disable');			
				$("#zoom_product").unbind("touchmove");
			}
		}
		return false;
	}
	  
  //check if that is gallery, zoom all thumb
	//DONGND:: fix zoom, create config
	var zt = $("#content").data('templatezoomtype');
	var zoom_cursor;
	var zoom_type;
	var scroll_zoom = false;
	var	lens_FadeIn = 200;
	var	lens_FadeOut = 200;
	var	zoomWindow_FadeIn = 200;
	var	zoomWindow_FadeOut = 200;
	var zoom_tint = false;
	var zoomWindow_Width = 400;
	var zoomWindow_Height = 400;
	var zoomWindow_Position = 1;
	
	if (zt == 'in')
	{
		zoom_cursor = 'crosshair';
		zoom_type = 'inner';
		lens_FadeIn = false;
		lens_FadeOut = false;		
	}
	else
	{
		zoom_cursor = 'default';
		zoom_type = 'window';
		zoom_tint = true;
		zoomWindow_Width = $("#content").data('zoomwindowwidth');
		zoomWindow_Height = $("#content").data('zoomwindowheight');
		
		if ($("#content").data('zoomposition') == 'right')
		{			
			//DONGND:: update position of zoom window with ar language
			if (prestashop.language.is_rtl == 1)
			{
				zoomWindow_Position = 11;
			}
			else
			{
				zoomWindow_Position = 1;
			}
		}
		if ($("#content").data('zoomposition') == 'left')
		{
			//DONGND:: update position of zoom window with ar language
			if (prestashop.language.is_rtl == 1)
			{
				zoomWindow_Position = 1;
			}
			else
			{
				zoomWindow_Position = 11;
			}
		}
		if ($("#content").data('zoomposition') == 'top')
		{
			zoomWindow_Position = 13;
		}
		if ($("#content").data('zoomposition') == 'bottom')
		{
			zoomWindow_Position = 7;
		}
		
		if (zt == 'in_scrooll')
		{
			//DONGND:: scroll to zoom does not work on IE
			var ua = window.navigator.userAgent;
			var old_ie = ua.indexOf('MSIE ');
			var new_ie = ua.indexOf('Trident/');
			if (old_ie > 0 || new_ie > 0) // If Internet Explorer, return version number
			{
				scroll_zoom = false;
			}
			else  // If another browser, return 0
			{
				scroll_zoom = true;
			}
			
		}
	};
	
	if($('#main').hasClass('product-image-gallery'))
	{
		lens_FadeIn = false;
		lens_FadeOut = false;
		zoomWindow_FadeIn = false;
		zoomWindow_FadeOut = false;
	}
	
	var zoom_config = {
		responsive  : true,
		cursor: zoom_cursor,
		scrollZoom: scroll_zoom,
		scrollZoomIncrement: 0.1,
		zoomLevel: 1,
		zoomType: zoom_type,
		gallery: 'thumb-gallery',
		lensFadeIn: lens_FadeIn,
		lensFadeOut: lens_FadeOut,
		zoomWindowFadeIn: zoomWindow_FadeIn,
		zoomWindowFadeOut: zoomWindow_FadeOut,
		zoomWindowWidth: zoomWindow_Width,
		zoomWindowHeight: zoomWindow_Height,
		borderColour: '#888',
		borderSize: 2,
		zoomWindowOffetx: 0,
		zoomWindowOffety: 0,
		zoomWindowPosition: zoomWindow_Position,
		tint: zoom_tint,
	};
	
	if($('#main').hasClass('product-image-gallery'))
	{
		$('img.js-thumb').each(function(){
			var parent_e = $(this).parent();
			$(this).attr('src', parent_e.data('image'));
			$(this).data('type-zoom', parent_e.data('zoom-image'));
		});
		
		if($.fn.elevateZoom !== undefined)
		{
			$('img.js-thumb').elevateZoom(zoom_config);
			//DONGND:: fix click a thumb replace all image and add fancybox
			$('img.js-thumb').bind("click", function(e) {  		
				var ez =   $(this).data('elevateZoom'); 
				$.fancybox(ez.getGalleryList());
				return false;
			});
		}
	}
	else
	{
		if($.fn.elevateZoom !== undefined)
		{
			$("#zoom_product").elevateZoom(zoom_config);
			
			//pass the images to Fancybox
			$("#zoom_product").bind("click", function(e) {  
				var ez =   $('#zoom_product').data('elevateZoom'); 
				$.fancybox(ez.getGalleryList());
				return false;
			});
		}
		
	}
}

function initSlickProductThumb(postion, numberimage, numberimage1200, numberimage992, numberimage768, numberimage576, numberimage480 , numberimage360){
	var vertical = true;
	var verticalSwiping = true;
	//DONGND:: update for rtl
	var slick_rtl = false;

	if(postion == "bottom"){
		vertical = false;
		verticalSwiping = false;
	} 

	if(postion == 'none'){
		vertical = false;
		verticalSwiping = false;
		numberimage = numberimage1200 = numberimage992 = numberimage768 = numberimage576 = numberimage480 = numberimage360 = 1;
	}
	
	//DONGND:: update for rtl
	if (!vertical && prestashop.language.is_rtl == 1)
	{
		slick_rtl = true;
	}

  var slider = $('#thumb-gallery');

  slider.slick({
    speed: 300,
    dots: false,
    infinite: false,
    slidesToShow: numberimage,
    vertical: vertical,
	verticalSwiping: verticalSwiping,
    slidesToScroll: 1,
	rtl: slick_rtl,
    responsive: [
      {
        breakpoint: 1200,
			  settings: {
					slidesToShow: numberimage1200,
					slidesToScroll: 1,
			  }
			},
	{
		breakpoint: 992,
        settings: {
          slidesToShow: numberimage992,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: numberimage768,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: numberimage576,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: numberimage480,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 360,
        settings: {
          slidesToShow: numberimage360,
          slidesToScroll: 1
        }
      }
    ]
  });
  $("#thumb-gallery").show();

  if(postion == 'none')
  {
    var slickInstance = slider[0];
    var slides = $(slickInstance.slick.$slides);
    var positionStart = findPosition(slides);
	var slideCount = slickInstance.slick.slideCount;
	
	//DONGND:: update slick for case without thubms
	if ((positionStart + 1) == slideCount){
    	$('.arrows-product-fake .slick-next').addClass('slick-disabled');
    }else if(positionStart == 0){
    	$('.arrows-product-fake .slick-prev').addClass('slick-disabled');
    }
    
    // active image first load
    slider.slick('slickGoTo', positionStart);

    $('.arrows-product-fake .slick-next').on( "click", function() {
		if (!$(this).hasClass('slick-disabled'))
		{
			$('.arrows-product-fake .slick-prev').removeClass('slick-disabled');
			var positionCurrent = findPosition(slides);
			if ((positionCurrent + 1) < slideCount) {
				$(slides[positionCurrent]).removeClass('active');
				$(slides[positionCurrent + 1]).addClass('active');
				$(slides[positionCurrent + 1]).find('img').trigger("click");
				slider.slick('slickNext');
				if((positionCurrent + 1) == (slideCount - 1)){
					$(this).addClass('slick-disabled');
				}
			}
		}
      
    });

    $('.arrows-product-fake .slick-prev').on( "click", function() {
		if (!$(this).hasClass('slick-disabled'))
		{
			$('.arrows-product-fake .slick-next').removeClass('slick-disabled');
			var positionCurrent = findPosition(slides);
			if ((positionCurrent) > 0) {
				$(slides[positionCurrent]).removeClass('active');
				$(slides[positionCurrent - 1]).addClass('active');
				$(slides[positionCurrent - 1]).find('img').trigger("click");
				slider.slick('slickPrev');
				if((positionCurrent - 1) == 0){
					$(this).addClass('slick-disabled');
				}
			}
		}
    });
  }
}

function findPosition(slides){
  var position;
  for (var i = 0; i < slides.length; i++) {
      if ($(slides[i]).hasClass('active')) {
      position = $(slides[i]).data('slick-index');
      return position;
    }
  }
}

//DONGND:: loading quickview
function actionQuickViewLoading()
{
  $('.quick-view').click(function(){
    if (!$(this).hasClass('active'))
    {
      $(this).addClass('active');
      $(this).find('.leo-quickview-bt-loading').css({'display':'block'});
      $(this).find('.leo-quickview-bt-content').hide();
		if (typeof check_active_quickview != 'undefined')
		{
			clearInterval(check_active_quickview);
		}
	 
      check_active_quickview = setInterval(function(){
        if($('.quickview.modal').length)
        {           
          $('.quickview.modal').on('hide.bs.modal', function (e) {
            $('.quick-view.active').find('.leo-quickview-bt-loading').hide();
            $('.quick-view.active').find('.leo-quickview-bt-content').show();
            $('.quick-view.active').removeClass('active');
          });
		  clearInterval(check_active_quickview);
		  	
			//DONGND:: run slick for product thumb - quickview
			initSlickProductQuickView();
        }
        
      }, 300);

    }
  })
}

$(document).on('click', '.leo_grid', function(e){
  e.preventDefault();
  $('#js-product-list .product_list').removeClass('list');
  $('#js-product-list .product_list').addClass('grid');
  
  $(this).parent().find('.leo_list').removeClass('selected');
  $(this).addClass('selected');

  var configName = LEO_COOKIE_THEME +'_grid_list';
  $.cookie(configName, 'grid', {expires: 1, path: '/'});
});

$(document).on('click', '.leo_list', function(e){
  e.preventDefault();
  $('#js-product-list .product_list').removeClass('grid');
  $('#js-product-list .product_list').addClass('list');
  
  $(this).parent().find('.leo_grid').removeClass('selected');
  $(this).addClass('selected');

  var configName = LEO_COOKIE_THEME +'_grid_list';
  $.cookie(configName, 'list', {expires: 1, path: '/'});
});

function setDefaultListGrid()
{
  if ($.cookie(LEO_COOKIE_THEME +'_grid_list') == 'grid')
  {
    $('.leo_grid').trigger('click');
  }
  if ($.cookie(LEO_COOKIE_THEME +'_grid_list') == 'list')
  {
    $('.leo_list').trigger('click');
  }
}

function processFloatHeader(headerAdd, scroolAction){
	//DONGND:: hide search result when enable float header
	if ($('.ac_results').length)
	{
		$('.ac_results').hide();
	}
	
  if(headerAdd){
    $("#header").addClass( "navbar-fixed-top" );
    var hideheight =  $("#header").height()+120;
    $("#page").css( "padding-top", $("#header").height() );
    setTimeout(function(){
      $("#page").css( "padding-top", $("#header").height() );
    },200);
  }else{
    $("#header").removeClass( "navbar-fixed-top" );
    $("#page").css( "padding-top", '');
  }

  var pos = $(window).scrollTop();
  if( scroolAction && pos >= hideheight ){
    $(".header-nav").addClass('hide-bar');
    $(".hide-bar").css( "margin-top", - $(".header-nav").height() );
    $("#header").addClass("mini-navbar");
  }else {
    $(".header-nav").removeClass('hide-bar');
    $(".header-nav").css( "margin-top", 0 );
    $("#header").removeClass("mini-navbar");
  }
}

//Float Menu
function floatHeader(){
  if (!$("body").hasClass("keep-header") || $(window).width() <= 990){
    return;
  }
  
  $(window).resize(function(){
    if ($(window).width() <= 990)
    {
      processFloatHeader(0,0);
    }
    else if ($(window).width() > 990)
    {
      if ($("body").hasClass("keep-header"))
        processFloatHeader(1,1);
    }
  });
  var headerScrollTimer;

  $(window).scroll(function() {
    if(headerScrollTimer) {
      window.clearTimeout(headerScrollTimer);
    }

    headerScrollTimer = window.setTimeout(function() {
      if (!$("body").hasClass("keep-header")) return;
      if($(window).width() > 990){
        processFloatHeader(1,1);
      }
    }, 100);
  });
}

//DONGND:: build slick slider for quickview
function initSlickProductQuickView(){
	$('.quickview.modal .product-thumb-images').imagesLoaded( function(){ 
		if (typeof check_loaded_thumb_quickview != 'undefined')
		{
			clearInterval(check_loaded_thumb_quickview);
		}
		check_loaded_thumb_quickview = setInterval(function(){
			if($('.quickview.modal .product-thumb-images').height() > 0)
			{	
				$('.quickview.modal .product-thumb-images').fadeIn();
				
				clearInterval(check_loaded_thumb_quickview);
				$('.quickview.modal .product-thumb-images').slick(options_quickview);
			}
		}, 300);
	});
	
}

//DONGND:: build slick slider for modal - product page
function initSlickProductModal(){
	$('#product-modal .product-images').imagesLoaded( function(){ 	
		if (typeof check_loaded_thumb_modal != 'undefined')
		{
			clearInterval(check_loaded_thumb_modal);
		}
		check_loaded_thumb_modal = setInterval(function(){
			if($('#product-modal .product-images').height() > 0)
			{	
				$('#product-modal .product-images').fadeIn();
				
				clearInterval(check_loaded_thumb_modal);
				$('#product-modal .product-images').slick(options_modal_product_page);
			}
		}, 300);
	});
}


//DONGND: fix base prestashop
$(document).ready(function(){
	//DONGND: remove css inline of label
	$('.product-flag').removeAttr('style');
	prestashop.on('updateProductList', function() {
		//DONGND: remove css inline of label
		$('.product-flag').removeAttr('style');
	});
})
//Fix translate button choose file to upload: change "Choose file" to choosefile_text
//Fix filter (category page) does not work on IE change dataset.searchUrl to getAttribute('data-search-url')


$().ready(function(){

	$('#leo_search_block_top .title_block').click(function(){
		$(this).parent().toggleClass('active');
		setTimeout(function(){jQuery('#leo_search_block_top.active input.form-control').focus();},100);
	});
	
	
	$(document).keydown(function(e) {
		// ESCAPE key pressed
		if (e.keyCode == 27) {
			$('#leo_search_block_top').removeClass('active');
		}
	});
	
	$(document).click(function(event) {
		if (!$(event.target).closest("#leo_search_block_top").length) {
			$("#leo_search_block_top").removeClass("active");
		}
	});

	/*
 	// fix bug module Amazzingfilter
	if ($('body#category').hasClass("page-category")){
		customThemeActions.updateContentAfter = function (jsonData) {
		    if (typeof $.LeoCustomAjax == 'function') {
		        var leoCustomAjax = new $.LeoCustomAjax();
		        leoCustomAjax.processAjax();
		    }
		    if ($('.af_pl_wrapper').find('.product_list').hasClass('list')) {
		        $('.leo_list').addClass('selected').siblings().removeClass('selected');
		    }    
		}
		$( document ).ajaxComplete(function() {
			actionQuickViewLoading();
			leoBtCart();
			LeoWishlistButtonAction();
			LeoCompareButtonAction();
		});
	}
	*/
/*
	$('.list-images-mobile').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: true,
	    dots: true,
		infinite: true,
		//centerMode: true,
		//fade: true,
		customPaging: function(slick,index) {
	        var targetImage = slick.$slides.eq(index).find('img').attr('src');
	        return '<span><img src=" ' + targetImage + ' "/></span>';
	    }
	});

	$( document ).ajaxComplete(function( event, xhr, settings ) {
		if (settings.url.indexOf('controller=product') > 0) {
			$('.list-images-mobile').slick({
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            arrows: true,
	            dots: true,
		    	infinite: true,
		    	//centerMode: true,
	  			//fade: true,
		    	customPaging: function(slick,index) {
                    var targetImage = slick.$slides.eq(index).find('img').attr('src');
                    return '<span><img src=" ' + targetImage + ' "/></span>';
                }
	        });
	    }
	});
*/
	//customSticky();

	$( document ).ajaxComplete(function() {
	  $('.p-reference .product-reference').html($("#product-details .product-reference").clone());
	  $('.p-reference .product-quantities').html($("#product-details .product-quantities").clone());
	});


	//add class no-text
	/*
	$('label.required').each(function(){
		if($(this).text().replace(/ /g,'').replace('\n','')==""){
		$(this).addClass('no-text');
	}
	})*/
	
	$('.myacc-select').click(function(){
		$(this).parent().toggleClass('active');
	});

});


  $(function(){
    var current = location.pathname;
    $('.myacc_left .links a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
  })

function customSticky(){
  var s = $(".header-top > .inner");
  var pos = s.offset();
  var alreadySticky = false;

  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    if ( s.length  ){
      if(!alreadySticky) {
		if (windowpos >= pos.top) {
			alreadySticky = true;
			s.parent().height(s.height());
			s.removeClass("cus-nosticky");
			s.addClass("cus-sticky");
			$('body').removeClass("body-nosticky");
			$('body').addClass("body-sticky");
		}
      }
      if(alreadySticky) {
		if (windowpos < pos.top) {
			alreadySticky = false;
			s.removeClass("cus-sticky");
			s.addClass("cus-nosticky"); 
			s.parent().removeAttr("style");
			$('body').addClass("body-nosticky");
			$('body').removeClass("body-sticky");
		}}
      }
  });
}

//Scroll back to top
(function($) { "use strict";
$(document).ready(function(){"use strict";
var progressPath = document.querySelector('.progress-wrap path');
var pathLength = progressPath.getTotalLength();
progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
progressPath.style.strokeDashoffset = pathLength;
progressPath.getBoundingClientRect();
progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';    
var updateProgress = function () {
  var scroll = $(window).scrollTop();
  var height = $(document).height() - $(window).height();
  var progress = pathLength - (scroll * pathLength / height);
  progressPath.style.strokeDashoffset = progress;
}
updateProgress();
$(window).scroll(updateProgress); 
var offset = 50;
var duration = 550;
jQuery(window).on('scroll', function() {
  if (jQuery(this).scrollTop() > offset) {
    jQuery('.progress-wrap').addClass('active-progress');
  } else {
    jQuery('.progress-wrap').removeClass('active-progress');
  }
});       
jQuery('.progress-wrap').on('click', function(event) {
  event.preventDefault();
  jQuery('html, body').animate({scrollTop: 0}, duration);
  return false;
})
});
})(jQuery); 
//End Scroll back to top
 
if ($(window).width() > 1024) {
    document.addEventListener('scroll', function(){
      let middleY = document.querySelector('.floating-container').scrollHeight;
    
      let heightGirl = document.getElementById('floating-images').offsetTop;
    
      let middle = middleY.scrollTop;
      let pos = window.scrollY;
      let countToOne = heightGirl - pos;
      let countReverse = -countToOne
      let first = document.querySelector('.floating-img-first' )
      let second = document.querySelector('.floating-img-second' )
      let third = document.querySelector('.floating-img-third' )
    //   let four = document.querySelector('.girl__wrapper__two__small:nth-of-type(1)' )
    //   let five = document.querySelector('.girl__wrapper__two__small:nth-of-type(2)' )
      let last = document.querySelector('.border-art .title_block');
    
      first.style.transform = 'translateY(' + countReverse/5 + 'px)';
      second.style.transform = 'translateY(' + countToOne /5 +  'px)';
      third.style.transform = 'translateX(' + countToOne/3 + 'px)';
    //   five.style.transform = 'translateY(' + countToOne/4 + 'px)';
      last.style.transform = 'translateY(' + countReverse/4 + 'px)';
	  if($(window).width() > 600){

	}
    } );
} 