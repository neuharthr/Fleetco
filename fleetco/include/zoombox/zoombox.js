
var zoombox_path='include/zoombox/';(function($){var options={theme:'zoombox',opacity:0.8,duration:800,animation:true,width:600,height:400,gallery:true,autoplay:false,overflow:false}
var images;var elem;var isOpen=false;var link;var width;var height;var timer;var i=0;var content;var type='multimedia';var position=false;var imageset=false;var state='closed';var html='<div id="zoombox"> \
            <div class="zoombox_mask"></div>\
            <div class="zoombox_container">\
                <div class="zoombox_content"></div>\
                <div class="zoombox_title"></div>\
                <div class="zoombox_next"></div>\
                <div class="zoombox_prev"></div>\
                <div class="zoombox_close"></div>\
            </div>\
            <div class="zoombox_gallery"></div>\
        </div>';var filtreImg=/(\.jpg)|(\.jpeg)|(\.bmp)|(\.gif)|(\.png)|(\%2Ejpg)|(\%2Ejpeg)|(\%2Ebmp)|(\%2Egif)|(\%2Epng)/i;var filtreMP3=/(\.mp3)|(\%2Emp3)/i;var filtreFLV=/(\.flv)|(\%2Eflv)/i;var filtreSWF=/(\.swf)|(\%2Eswf)/i;var filtreQuicktime=/(\.mov)|(\.mp4)|(\%2Emov)|(\%2Emp4)/i;var filtreWMV=/(\.wmv)|(\.avi)|(\%2Ewmv)|(\%2Eavi)/i;var filtreDailymotion=/(http:\/\/www.dailymotion)|(http:\/\/dailymotion)|(http:\/\/www%2Edailymotion)/i;var filtreVimeo=/(http:\/\/www.vimeo)|(http:\/\/vimeo)|(http:\/\/www%2Evimeo)/i;var filtreYoutube=/(youtube\.)|(youtube\%2E)/i;var filtreKoreus=/(http:\/\/www\.koreus)|(http:\/\/koreus)|(http:\/\/www\%2Ekoreus)/i;var galleryLoaded=0;$.zoombox=function(el,options){}
$.zoombox.options=options;$.zoombox.close=function(){close();}
$.zoombox.open=function(tmplink,opts){elem=null;link=tmplink;options=$.extend({},$.zoombox.options,opts);load();}
$.zoombox.html=function(cont,opts){content=cont;options=$.extend({},$.zoombox.options,opts);width=options.width;height=options.height;elem=null;open();}
$.fn.zoombox=function(opts){images=new Array();return this.each(function(){var obj=this;var galleryRegExp=/zgallery([0-9]+)/;var gallery=galleryRegExp.exec($(this).attr("class"));var tmpimageset=false;if(gallery!=null){if(!images[gallery[1]]){images[gallery[1]]=new Array();}
images[gallery[1]].push($(this));var pos=images[gallery[1]].length-1;tmpimageset=images[gallery[1]];}
$(this).unbind('click').click(function(){options=$.extend({},$.zoombox.options,opts);if(state!='closed')return false;elem=$(obj);link=elem.attr('href');imageset=tmpimageset;position=pos;load();return false;});});}
function load(){if(state=='closed')isOpen=false;state='load';setDim();if(filtreImg.test(link)){img=new Image();img.src=link;$("body").append('<div id="zoombox_loader"></div>');$("#zoombox_loader").css("marginTop",scrollY());$("#zoombox_loader").css("marginLeft",scrollY());timer=window.setInterval(function(){loadImg(img);},100);}else{setContent();open();}}
function build(){$('body').append(html);$(window).keydown(function(event){shortcut(event.which);});$(window).resize(function(){resize();});$('#zoombox .zoombox_mask').hide();$('#zoombox').addClass(options.theme);$('#zoombox .zoombox_mask,.zoombox_close').click(function(){close();return false;});if(imageset==false||typeof imageset==="object"&&imageset.length===1){$('#zoombox .zoombox_next,#zoombox .zoombox_prev').remove();}else{$('#zoombox .zoombox_next').click(function(){next();});$('#zoombox .zoombox_prev').click(function(){prev();});}}
function gallery(){var loaded=0;var width=0;var contentWidth=0;if(options.gallery){if(imageset===false){$('#zoombox .zoombox_gallery').remove();return false;}
for(var i=0;i<imageset.length;i++){var imgSrc=zoombox_path+'img/video.png';var img=$('<img src="'+imgSrc+'" class="video gallery'+(i*1)+'"/>');if(filtreImg.test(imageset[i].attr('href'))){imgSrc=imageset[i].attr('href')
img=$('<img src="'+imgSrc+'" class="gallery'+(i*1)+'"/>');}
img.data('id',i).appendTo('#zoombox .zoombox_gallery')
img.click(function(){gotoSlide($(this).data('id'));$('#zoombox .zoombox_gallery img').removeClass('current');$(this).addClass('current');});if(i==position){img.addClass('current');}
$("<img/>").data('img',img).attr("src",imgSrc).load(function(){loaded++;var img=$(this).data('img');img.width(Math.round(img.height()*this.width/this.height));if(loaded==$('#zoombox .zoombox_gallery img').length){var width=0;$('#zoombox .zoombox_gallery img').each(function(){width+=$(this).outerWidth();$(this).data('left',width);});var div=$('<div>').css({position:'absolute',top:0,left:0,width:width});$('#zoombox .zoombox_gallery').wrapInner(div);contentWidth=$('#zoombox .zoombox_gallery').width();$('#zoombox').trigger('change');}});}
$('#zoombox .zoombox_gallery').show().animate({bottom:0},options.duration);}
$('#zoombox').bind('change',function(e,css){if($('#zoombox .zoombox_gallery div').width()<$('#zoombox .zoombox_gallery').width){return true;}
var d=0;var center=0;if(css!=null){d=options.duration;center=css.width/2;}else{center=$('#zoombox .zoombox_gallery').width()/2;}
var decal=-$('#zoombox .zoombox_gallery img.current').data('left')+$('#zoombox .zoombox_gallery img.current').width()/2;var left=decal+center;if(left<center*2-$('#zoombox .zoombox_gallery div').width()){left=center*2-$('#zoombox .zoombox_gallery div').width();}
if(left>0){left=0;}
$('#zoombox .zoombox_gallery div').animate({left:left},d);});}
function open(){if(isOpen==false)build();else $('#zoombox .zoombox_title').empty();$('#zoombox .close').hide();$('#zoombox .zoombox_container').removeClass('multimedia').removeClass('img').addClass(type);if(elem!=null&&elem.attr('title')){$('#zoombox .zoombox_title').append(elem.attr('title'));}
$('#zoombox .zoombox_content').empty();if(type=='img'&&isOpen==false&&options.animation==true){$('#zoombox .zoombox_content').append(content);}
if(elem!=null&&elem.find('img').length!=0&&isOpen==false){var min=elem.find('img');$('#zoombox .zoombox_container').css({width:min.width(),height:min.height(),top:min.offset().top,left:min.offset().left,opacity:0,marginTop:min.css('marginTop')});}else if(elem!=null&&isOpen==false){$('#zoombox .zoombox_container').css({width:elem.width(),height:elem.height(),top:elem.offset().top,left:elem.offset().left});}else if(isOpen==false){$('#zoombox .zoombox_container').css({width:100,height:100,top:windowH()/2-50,left:windowW()/2-50})}
var css={width:width,height:height,left:(windowW()-width)/2,top:(windowH()-height)/2,marginTop:scrollY(),marginLeft:scrollX(),opacity:1};$('#zoombox').trigger('change',css);if(options.animation==true){$('#zoombox .zoombox_title').hide();$('#zoombox .zoombox_close').hide();$('#zoombox .zoombox_container').animate(css,options.duration,function(){if(type=='multimedia'||isOpen==true){$('#zoombox .zoombox_content').append(content);}
if(type=='image'||isOpen==true){$('#zoombox .zoombox_content img').css('opacity',0).fadeTo(300,1);}
$('#zoombox .zoombox_title').fadeIn(300);$('#zoombox .zoombox_close').fadeIn(300);state='opened';if(!isOpen){gallery();}
isOpen=true;});$('#zoombox .zoombox_mask').fadeTo(200,options.opacity);}else{$('#zoombox .zoombox_content').append(content);$('#zoombox .zoombox_close').show();$('#zoombox .zoombox_gallery').show();$('#zoombox .zoombox_container').css(css);$('#zoombox .zoombox_mask').show();$('#zoombox .zoombox_mask').css('opacity',options.opacity);if(!isOpen){gallery();}
isOpen=true;state='opened';}}
function close(){state='closing';window.clearInterval(timer);$(window).unbind('keydown');$(window).unbind('resize');if(type=='multimedia'){$('#zoombox .zoombox_container').empty();}
var css={};if(elem!=null&&elem.find('img').length>0){var min=elem.find('img');css={width:min.width(),height:min.height(),top:min.offset().top,left:min.offset().left,opacity:0,marginTop:min.css('marginTop')};}else if(elem!=null){css={width:elem.width(),height:elem.height(),top:elem.offset().top,left:elem.offset().left,marginTop:0,opacity:0};}else{css={width:100,height:100,top:windowH()/2-50,left:windowW()/2-50,opacity:0};}
if(options.animation==true){$('#zoombox .zoombox_mask').fadeOut(200);$('#zoombox .zoombox_gallery').animate({bottom:-$('#zoombox .zoombox_gallery').innerHeight()},options.duration);$('#zoombox .zoombox_container').animate(css,options.duration,function(){$('#zoombox').remove();state='closed';isOpen=false;});}else{$('#zoombox').remove();state='closed';isOpen=false;}}
function setContent(){if(options.overflow==false){if(width*1+50>windowW()){height=(windowW()-50)*height/width;width=windowW()-50;}
if(height*1+50>windowH()){width=(windowH()-50)*width/height;height=windowH()-50;}}
var url=link;type='multimedia';if(filtreImg.test(url)){type='img';content='<img src="'+link+'" width="100%" height="100%"/>';}else if(filtreMP3.test(url)){width=300;height=40;content='<object type="application/x-shockwave-flash" data="'+MP3Player+'?son='+url+'" width="'+width+'" height="'+height+'">';content+='<param name="movie" value="'+MP3Player+'?son='+url+'" /></object>';}else if(filtreFLV.test(url)){var autostart=0;if(options.autoplay==true){autostart=1;}
content='<object type="application/x-shockwave-flash" data="'+zoombox_path+'FLVplayer.swf" width="'+width+'" height="'+height+'">\
<param name="allowFullScreen" value="true">\
<param name="scale" value="noscale">\
<param name="wmode" value="transparent">\
<param name="flashvars" value="flv='+url+'&autoplay='+autostart+'">\
<embed src="'+zoombox_path+'FLVplayer.swf" width="'+width+'" height="'+height+'" allowscriptaccess="always" allowfullscreen="true" flashvars="flv='+url+'" wmode="transparent" />\
</object>';}else if(filtreSWF.test(url)){content='<object width="'+width+'" height="'+height+'"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="'+url+'" /><embed src="'+url+'" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'+width+'" height="'+height+'" wmode="transparent"></embed></object>';}else if(filtreQuicktime.test(url)){content='<embed src="'+url+'" width="'+width+'" height="'+height+'" controller="true" cache="true" autoplay="true"/>';}else if(filtreWMV.test(url)){content='<embed src="'+url+'" width="'+width+'" height="'+height+'" controller="true" cache="true" autoplay="true" wmode="transparent" />';}else if(filtreDailymotion.test(url)){var id=url.split('_');id=id[0].split('/');id=id[id.length-1]+'?';if(options.autoplay==true){id=id+'autoPlay=1&';}
content='<iframe frameborder="0" width="'+width+'" height="'+height+'" src="http://www.dailymotion.com/embed/video/'+id+'?wmode=transparent"></iframe>';}else if(filtreVimeo.test(url)){var id=url.split('/');id=id[3]+'?';if(options.autoplay==true){id=id+'autoplay=1&';}
content='<iframe src="http://player.vimeo.com/video/'+id+'title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent" width="'+width+'" height="'+height+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'}else if(filtreYoutube.test(url)){var id=url.split('watch?v=');id=id[1].split('&');id=id[0]+'?';if(options.autoplay==true){id=id+'autoplay=1&';}
content='<iframe width="'+width+'" height="'+height+'" src="http://www.youtube.com/embed/'+id+'wmode=Opaque" frameborder="0" allowfullscreen></iframe>';}else if(filtreKoreus.test(url)){url=url.split('.html');url=url[0];content='<object type="application/x-shockwave-flash" data="'+url+'" width="'+width+'" height="'+height+'"><param name="movie" value="'+url+'"><embed src="'+url+'" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'"  wmode="transparent"></embed></object>';}else{content='<iframe src="'+url+'" width="'+width+'" height="'+height+'" border="0"></iframe>';}
return content;}
function loadImg(img){if(img.complete){i=0;window.clearInterval(timer);width=img.width;height=img.height;$('#zoombox_loader').remove();setContent();open();}
$('#zoombox_loader').css({'background-position':"0px "+i+"px"});i=i-40;if(i<(-440)){i=0;}}
function gotoSlide(i){if(state!='opened'){return false;}
position=i;elem=imageset[position];link=elem.attr('href');if($('#zoombox .zoombox_gallery img').length>0){$('#zoombox .zoombox_gallery img').removeClass('current');$('#zoombox .zoombox_gallery img:eq('+i+')').addClass('current');}
load();return false;}
function next(){i=position+1;if(i>imageset.length-1){i=0;}
gotoSlide(i);}
function prev(){i=position-1;if(i<0){i=imageset.length-1;}
gotoSlide(i);}
function resize(){$('#zoombox .zoombox_container').css({top:(windowH()-$('#zoombox .zoombox_container').outerHeight(true))/2,left:(windowW()-$('#zoombox .zoombox_container').outerWidth(true))/2});}
function shortcut(key){if(key==37){prev();}
if(key==39){next();}
if(key==27){close();}}
function setDim(){width=options.width;height=options.height;if(elem!=null){var widthReg=/w([0-9]+)/;var w=widthReg.exec(elem.attr("class"));if(w!=null){if(w[1]){width=w[1];}}
var heightReg=/h([0-9]+)/;var h=heightReg.exec(elem.attr("class"));if(h!=null){if(h[1]){height=h[1];}}}
return false;}
function windowH(){if(window.innerHeight)return window.innerHeight;else{return $(window).height();}}
function windowW(){if(window.innerWidth)return window.innerWidth;else{return $(window).width();}}
function scrollY(){scrOfY=0;if(typeof(window.pageYOffset)=='number'){scrOfY=window.pageYOffset;}else if(document.body&&(document.body.scrollTop)){scrOfY=document.body.scrollTop;}else if(document.documentElement&&(document.documentElement.scrollTop)){scrOfY=document.documentElement.scrollTop;}
return scrOfY;}
function scrollX(){scrOfX=0;if(typeof(window.pageXOffset)=='number'){scrOfX=window.pageXOffset;}else if(document.body&&(document.body.scrollLeft)){scrOfX=document.body.scrollLeft;}else if(document.documentElement&&(document.documentElement.scrollLeft)){scrOfX=document.documentElement.scrollLeft;}
return scrOfX;}})(jQuery);