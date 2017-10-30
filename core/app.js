jQuery(document).ready(function($){
	$("#ntbox-ori").appendTo("#notification");
	if (($.browser.msie) && ($.browser.version == "6.0")){
		$("#featured .featured-ads").hide();
		var n = $("#notification");
		$("#ie6").show();
		$(n).slideDown("slow");
	}
	$("#content a img").hover(
		function(){
		$(this).stop().fadeTo('fast',0.75);
		},
		function(){
		$(this).stop().fadeTo('fast',1);
	});
	$(".btn-scroll").click(function(){
		var i = $(this).attr("href");
		var c = $(i).offset().top;
		$("html,body").animate({scrollTop:c}, 500);
        return false;
	});
	$(".form-search .search-input").focus(function() {
		$(".search-expand").animate({width: "+=100"}, 500);
	}).focusout(function() {
		$(".search-expand").animate({width: "-=100"}, 500);
	});
	$(".search-focus").click(function() {
		$(".form-search .search-input").focus();
	});
	$("#live-slider").click(function(){
		$("#slider").slideToggle();
		return false;
	});
	$("a[rel=ignition]").colorbox({transition:'fade',opacity:0.95,current:""}).hover(function(){
		$(this).append('<div id="cboxZoom"></div>');
		var i = $(this).find("img")
		var ol = i.offset().left + i.width() - 39;
		var ot = i.offset().top;
		$("#cboxZoom").css({left: ol, top: ot});
		return false;
	},
	function(){
		$(this).find("div:last").remove();
	});
	$.getScript("http://www.microsofttranslator.com/ajax/v2/toolkit.ashx?mode=manual&toolbar=thin", function() {
		$("#translatorbtn").click(function(){
			translatePage();
		});
	});
	function translatePage(){Microsoft.Translator.translate(document.body,"zh-CHS", "en");}
});
