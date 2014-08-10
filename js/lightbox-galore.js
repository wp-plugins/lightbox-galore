/**
*	Lightbox Galore
*
*	@author	info@clearcrest.net
*/
jQuery(document).ready(function(){var b=document.createElement("div"),a=document.createElement("img");jQuery(b).attr("id","clearcrest_lightbox_galore_overlay").hide();jQuery(a).attr("id","clearcrest_lightbox").attr("title","Click or press <esc> to close").css("margin-top","55px").hide();jQuery("body").append(b);jQuery(b).append(a);jQuery(document).keyup(function(c){27==c.keyCode&&(jQuery(b).fadeOut(),jQuery(a).fadeOut())});jQuery("img").click(function(){"lightbox"==jQuery(this).attr("rel")&&(jQuery(a).attr("src",
jQuery(this).attr("src")),jQuery(a).fadeIn(),jQuery(b).fadeIn());"lightbox"==jQuery(this).parent().attr("rel")&&(event.preventDefault(),jQuery(a).attr("src",jQuery(this).attr("src")),jQuery(a).fadeIn(),jQuery(b).fadeIn());"clearcrest_lightbox_galore_overlay"==jQuery(this).parent().attr("id")&&(jQuery(a).fadeOut(),jQuery(b).fadeOut())})});