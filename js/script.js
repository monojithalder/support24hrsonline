$(document).ready(function(){$('ul.menu').superfish({delay:600,animation:{opacity:'show',height:'show'},speed:'normal',autoArrows:false,dropShadows:false});});$(window).load(function(){if($('.container_24').width()>310){k=21;w=310;}else{k=0;w=300;};$('.line').stop().animate({width:w,left:parseInt($('h1').css('left'))- k},500);$('#main-menu strong').stop().animate({width:$('#main-menu').width(),left:"0px"},500);});$(window).resize(function(){if($('.container_24').width()>310){k=21;w=310;}else{k=0;w=300;};$('#main-menu strong').css({width:$('#main-menu').width()});$('.line').css({width:w,left:parseInt($('h1').css('left'))- k});});$(function(){var viewportmeta=document.querySelector&&document.querySelector('meta[name="viewport"]'),ua=navigator.userAgent,gestureStart=function(){viewportmeta.content="width=device-width, minimum-scale=0.25, maximum-scale=1.6";},scaleFix=function(){if(viewportmeta&&/iPhone|iPad/.test(ua)&&!/Opera Mini/.test(ua)){viewportmeta.content="width=device-width, minimum-scale=1.0, maximum-scale=1.0";document.addEventListener("gesturestart",gestureStart,false);}};scaleFix();var userag=navigator.userAgent.toLowerCase();var isAndroid=userag.indexOf("android")>-1;if(isAndroid){$('.menu').responsiveMenu({autoArrows:true});}
$('#slides').slides({effect:'fade',fadeSpeed:700,preload:true,play:2000,pause:4000,generateNextPrev:true,generatePagination:false,crossfade:true,hoverPause:true,animationStart:function(current){$('.caption').animate({left:'950px'});if(window.console&&console.log){console.log('animationStart on slide: ',current);};},animationComplete:function(current){$('.caption').animate({left:'126px'});if(window.console&&console.log){console.log('animationComplete on slide: ',current);};},slidesLoaded:function(){$('.caption').animate({left:'126px'});}});});