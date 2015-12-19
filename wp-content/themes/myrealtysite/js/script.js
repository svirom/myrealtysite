jQuery(function($)
{
$(document).ready(function() {

$('.main_menu li a').each(function() {      /*---Add downarrow to submenus---*/
	if ($(this).next().length > 0) 
		$(this).append('&nbsp;&nbsp;<span class="fa fa-sort-desc"></span>');
});

$('.main_menu>ul>li:first-child>a').each(function() {      /*---Add homeicon to menu---*/
		$(this).prepend('<span class="fa fa-home"></span>&nbsp;&nbsp;');
});

//$('input,textarea').focus(function(){       /*---delete placeholder from input and textarea on focus---*/
//	$(this).data('placeholder',$(this).attr('placeholder'))
//	$(this).attr('placeholder','');
//	});
//	$('input,textarea').blur(function(){
//	$(this).attr('placeholder',$(this).data('placeholder'));
//});



$('.main_menu>ul').find('li').mouseenter(function(){        /*---show/hide submenu on hover---*/
	if ($('body').width() >= 768)
		$(this).find('>ul').stop(true, true).delay(200).slideDown(300);
});
$('.main_menu>ul').find('li').mouseleave(function(){
	if ($('body').width() >= 768)
		$(this).find('ul').stop(true, true).delay(200).slideUp(300);
});

$('.main_menu ul>li>a').unbind('click').bind('click', function(){     /*---show/hide submenu by click on menu button---*/
	$(this).parent('li').find('>ul').slideToggle(300);	
});

$('#menu_toggle').click(function(){ 
	if ($('body').width() < 768)                                    /*---show/hide menu by click on menu button (768)---*/
		$('nav.main_menu>ul>li>ul').css("display", "none");
		$('nav.main_menu>ul>li>ul>li>ul').css("display", "none");
		$('nav.main_menu>ul').slideToggle(500);	
});

$(window).resize(function() { 
	if ($('body').width() < 768) 
		$('nav.main_menu>ul').addClass('closed');             /*---show menu after resize from 768 to higher resolution (>768)---*/
    if ($('body').width() >= 768)
		$('nav.main_menu>ul>li>ul').css("display","none");
		$('nav.main_menu>ul>li>ul>li>ul').css("display","none");
		$('nav.main_menu>ul').removeClass('closed');
});

//$('body').click(function(e){                                   /*---hide menu by click out of menu and menu button (768)---*/
//	if  (($('body').width() < 768) && ($(e.target).closest('nav.main_menu>ul, nav.main_menu button').length == 0))
//		 $('nav.main_menu>ul').slideUp(500);
//});

	// hide #back-to-top first
$("#back-to-top").hide();

    // fade in #back-top
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#back-to-top').fadeIn();
            } 
        else {
            $('#back-to-top').fadeOut();
            }
        });

    // scroll body to 0px on click
            $('#back-to-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0}, 600);
                return false;
            });
    });


});

});
