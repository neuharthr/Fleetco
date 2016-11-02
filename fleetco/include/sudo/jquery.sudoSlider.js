
(function($,win){var undefined;var FALSE=false;var TRUE=true;var PAGES_MARKER_STRING="pages";var NEXT_STRING="next";var PREV_STRING="prev";var LAST_STRING="last";var FIRST_STRING="first";var ABSOLUTE_STRING="absolute";var EMPTY_FUNCTION=function(){};var ANIMATION_CLONE_MARKER_CLASS="sudo-box";var CSSVendorPrefix=getCSSVendorPrefix();$.fn.sudoSlider=function(optionsOrg){var defaults={effect:"slide",speed:1500,customLink:FALSE,controlsShow:TRUE,controlsFadeSpeed:400,controlsFade:TRUE,insertAfter:TRUE,vertical:FALSE,slideCount:1,moveCount:1,startSlide:1,responsive:FALSE,ease:"swing",auto:FALSE,pause:2000,resumePause:FALSE,continuous:FALSE,prevNext:TRUE,numeric:FALSE,numericText:[],slices:15,boxCols:8,boxRows:4,initCallback:EMPTY_FUNCTION,ajaxLoad:EMPTY_FUNCTION,beforeAnimation:EMPTY_FUNCTION,afterAnimation:EMPTY_FUNCTION,history:FALSE,autoHeight:TRUE,autoWidth:TRUE,updateBefore:FALSE,ajax:FALSE,preloadAjax:100,loadingText:"",prevHtml:'<a href="#" class="prevBtn"></a>',nextHtml:'<a href="#" class="nextBtn"></a>',controlsAttr:'id="controls"',numericAttr:'class="controls"',animationZIndex:10000,interruptible:FALSE,useCSS:TRUE,loadStart:EMPTY_FUNCTION,loadFinish:EMPTY_FUNCTION};var baseSlider=this;optionsOrg=$.extend(objectToLowercase(defaults),objectToLowercase(optionsOrg));if(CSSVendorPrefix===FALSE||!minJQueryVersion([1,8,0])){optionsOrg.usecss=FALSE;}
return this.each(function(){var init,isSlideContainerUl,slidesContainer,slides,imagesInSlidesLoaded,totalSlides,currentSlide,previousSlide,clickable,numericControls,numericContainer,destroyed,slideNumberBeforeDestroy=FALSE,controls,nextbutton,prevbutton,autoTimeout,autoOn,numberOfVisibleSlides,asyncDelayedSlideLoadTimeout,obj=$(this),finishedAdjustingTo=FALSE,adjustingTo,adjustTargetTime=0,currentlyAnimating=FALSE,currentAnimation,currentAnimationCallback,currentAnimationObject,runAfterAnimationCallbacks,awaitingAjaxCallbacks,startedAjaxLoads,finishedAjaxLoads,animateToAfterCompletion=FALSE,animateToAfterCompletionClicked,animateToAfterCompletionSpeed,slideContainerCreated=FALSE,option=[],options={};$.extend(TRUE,options,optionsOrg);function initSudoSlider(){var optionIndex=0;for(var key in options){option[optionIndex]=options[key];optionIndex++;}
init=TRUE;imagesInSlidesLoaded=[];runAfterAnimationCallbacks=[];awaitingAjaxCallbacks=[];startedAjaxLoads=[];finishedAjaxLoads=[];slidesContainer=childrenNotAnimationClones(obj);var ulLength=slidesContainer.length;var newUl=$("<div></div>");if(!ulLength){obj.append(slidesContainer=newUl);isSlideContainerUl=FALSE;}else if(!(isSlideContainerUl=slidesContainer.is("ul"))&&!slideContainerCreated){newUl.append(slidesContainer);obj.append(slidesContainer=newUl);}
slideContainerCreated=TRUE;var slidesJquery=childrenNotAnimationClones(slidesContainer);slides=[];totalSlides=slidesJquery.length;slidesJquery.each(function(index,elem){slides[index]=$(elem);});if(option[31]){var numerOfAjaxUrls=option[31].length;if(numerOfAjaxUrls>totalSlides){for(var a=1;a<=numerOfAjaxUrls-totalSlides;a++){var tag;if(isSlideContainerUl){tag="li";}else{tag="div";}
var slide=$("<"+tag+">"+option[33]+"</"+tag+">");slidesContainer.append(slide);slides[totalSlides+(a-1)]=slide;}
slidesJquery=childrenNotAnimationClones(slidesContainer);totalSlides=numerOfAjaxUrls;}}
slidesJquery.each(function(index,elem){imagesInSlidesLoaded[index]=FALSE;runOnImagesLoaded($(elem),TRUE,function(){imagesInSlidesLoaded[index]=TRUE;});});if(slideNumberBeforeDestroy===FALSE){currentSlide=0;}else{currentSlide=slideNumberBeforeDestroy;}
previousSlide=currentSlide;clickable=TRUE;numericControls=[];destroyed=FALSE;obj.css({overflow:"hidden"});if(obj.css("position")=="static")obj.css({position:"relative"});slidesJquery.css({"float":"left",listStyle:"none"});slidesContainer.add(slidesJquery).css({display:"block",position:"relative",margin:"0"});option[8]=parseInt10(option[8]);numberOfVisibleSlides=option[8];option[8]+=option[9]-1;option[10]=parseInt10(option[10])-1||0;option[0]=getEffectMethod(option[0]);for(var a=0;a<totalSlides;a++){if(!option[19][a]&&option[19][a]!=""){option[19][a]=(a+1);}
option[31][a]=option[31][a]||FALSE;}
option[5]=option[5]&&!option[16];if(option[11]){adjustResponsiveLayout(TRUE);}
slidesContainer[option[7]?'height':'width'](9000000);option[29]=option[29]&&!option[11];if(option[11]){$(win).on("resize focus",adjustResponsiveLayout);}
if(option[3]){controls=$('<span '+option[36]+'></span>');obj[option[6]?'after':'before'](controls);if(option[18]){numericContainer=$('<ol '+option[37]+'></ol>');controls.prepend(numericContainer);var usePages=option[18]==PAGES_MARKER_STRING;var distanceBetweenPages=usePages?numberOfVisibleSlides:1;for(var a=0;a<totalSlides-((option[16]||usePages)?1:numberOfVisibleSlides)+1;a+=distanceBetweenPages){numericControls[a]=$("<li data-target='"+(a+1)+"'><a href='#'><span>"+option[19][a]+"</span></a></li>").appendTo(numericContainer).click(function(){enqueueAnimation(getTargetAttribute(this)-1,TRUE);return FALSE;});}}
if(option[17]){nextbutton=makecontrol(option[35],NEXT_STRING);prevbutton=makecontrol(option[34],PREV_STRING);}}
var optionsToConvert=[4,1,14];for(var i=0;i<optionsToConvert.length;i++){option[optionsToConvert[i]]=textSpeedToNumber(option[optionsToConvert[i]]);}
if(option[2]){$(document).on("click",option[2],customLinkClickHandler);}
runOnImagesLoaded(getSlides(option[10],option[8]),TRUE,function(){if(slideNumberBeforeDestroy!==FALSE){goToSlide(slideNumberBeforeDestroy,FALSE);}else if(option[27]){var window=$(win);var hashPlugin;if(hashPlugin=window.hashchange){hashPlugin(URLChange);}else if(hashPlugin=$.address){hashPlugin.change(URLChange);}else{window.on("hashchange",URLChange);}
URLChange();}else{goToSlide(option[10],FALSE);}
setCurrent(currentSlide);});if(option[31][option[10]]){ajaxLoad(option[10]);}
if(option[32]===TRUE){for(var i=0;i<totalSlides;i++){if(option[31][i]&&option[10]!=i){ajaxLoad(i);}}}else{startAsyncDelayedLoad();}}
function customLinkClickHandler(){var target;if(target=getTargetAttribute(this)){if(target=='stop'){option[13]=FALSE;stopAuto();}else if(target=="start"){startAuto();option[13]=TRUE;}else if(target=='block'){clickable=FALSE;}else if(target=='unblock'){clickable=TRUE;}else{enqueueAnimation((target==parseInt10(target))?target-1:target,TRUE);}}
return FALSE;};function adjustResponsiveLayout(forced){function doTheAdjustment(){if(cantDoAdjustments()&&!forced){return;}
var slide=slides[currentSlide];var oldWidth=slide.width();var newWidth=getResponsiveWidth();for(var i=0;i<totalSlides;i++){slides[i].width(newWidth);}
if(oldWidth!=newWidth){stopAnimation();ensureSliderContainerCSSDurationReset();adjustPositionTo(currentSlide);autoadjust(currentSlide,0);}}
doTheAdjustment();callAsync(doTheAdjustment);}
function getResponsiveWidth(){return obj.width()/numberOfVisibleSlides;}
function getTargetAttribute(that){that=$(that);return that.attr("data-target")||that.attr("rel");}
function URLChange(){var target=getUrlHashTarget();if(init){goToSlide(target,FALSE);}else{enqueueAnimation(target,FALSE);}}
function startAsyncDelayedLoad(){if(option[32]!==FALSE){var preloadAjaxTime=parseInt10(option[32]);if(option[31]){for(var i=0;i<option[31].length;i++){if(option[31][i]){clearTimeout(asyncDelayedSlideLoadTimeout);asyncDelayedSlideLoadTimeout=setTimeout(function(){if(option[31][i]){ajaxLoad(parseInt10(i));}else{startAsyncDelayedLoad();}},preloadAjaxTime);break;}}}}}
function startAuto(pause){if(pause===undefined){var dataPause=slides[currentSlide].attr("data-pause");if(dataPause!==undefined){pause=parseInt10(dataPause);}else{pause=option[14];}}
stopAuto();autoOn=TRUE;autoTimeout=setTimeout(function(){if(autoOn){enqueueAnimation(NEXT_STRING,FALSE);}},pause);}
function stopAuto(autoPossibleStillOn){clearTimeout(autoTimeout);if(!autoPossibleStillOn)autoOn=FALSE;}
function textSpeedToNumber(speed){return(parseInt10(speed)||speed==0)?parseInt10(speed):speed=='fast'?200:(speed=='normal'||speed=='medium')?400:speed=='slow'?600:400;}
function makecontrol(html,action){return $(html).prependTo(controls).click(function(){enqueueAnimation(action,TRUE);return FALSE;});}
function enqueueAnimation(direction,clicked,speed){if(clickable&&!init){stopAuto(TRUE);if(!destroyed){loadSlidesAndAnimate(direction,clicked,speed);}}else{if(option[39]&&currentlyAnimating){stopAnimation();enqueueAnimation(direction,clicked,speed);}else{animateToAfterCompletion=direction;animateToAfterCompletionClicked=clicked;animateToAfterCompletionSpeed=speed;if(option[31]){var targetSlide=filterDir(direction);for(var loadSlide=targetSlide;loadSlide<targetSlide+numberOfVisibleSlides;loadSlide++){if(option[31][loadSlide]){ajaxLoad(getRealPos(loadSlide));}}}}}}
function fadeControl(fadeOpacity,fadetime,nextcontrol){fadeOpacity=fadeOpacity?1:0;var fadeElement=$();if(option[3]&&option[17]){fadeElement=nextcontrol?nextbutton:prevbutton;}
if(option[2]){var customLink=$(option[2]);var filterString="=\""+(nextcontrol?NEXT_STRING:PREV_STRING)+"\"]";var filtered=customLink.filter("[rel"+filterString+", [data-target"+filterString+"");fadeElement=fadeElement.add(filtered);}
var adjustObject={opacity:fadeOpacity};function callback(){if(!fadeOpacity&&fadeElement.css("opacity")==0){fadeElement.css({visibility:"hidden"});}}
if(fadeOpacity){fadeElement.css({visibility:"visible"});}
if(option[40]){animate(fadeElement,adjustObject,fadetime,option[12],callback);}else{fadeElement.animate(adjustObject,{queue:FALSE,duration:fadetime,easing:option[12],callback:callback});}}
function fadeControls(a,fadetime){fadeControl(a,fadetime,FALSE);fadeControl(a<totalSlides-numberOfVisibleSlides,fadetime,TRUE);}
function setCurrent(i){i=getRealPos(i)+1;if(option[18]==PAGES_MARKER_STRING&&i==totalSlides-numberOfVisibleSlides+1&&!option[16]){i=totalSlides;}
if(option[18]){for(var control=0;control<numericControls.length;++control){var element=numericControls[control];setCurrentElement(element,i)}}
if(option[2])setCurrentElement($(option[2]),i);}
function setCurrentElement(element,i){if(element&&element.filter){element.filter(".current").removeClass("current");element.filter(function(){var elementTarget=getTargetAttribute(this);if(option[18]==PAGES_MARKER_STRING){for(var a=numberOfVisibleSlides-1;a>=0;a--){if(elementTarget==i-a){return TRUE;}}}else{return elementTarget==i;}
return FALSE;}).addClass("current");}}
function getUrlHashTarget(){var hashString=location.hash.substr(1)
for(var i=0;i<option[19].length;i++){if(option[19][i]==hashString){return i;}}
return hashString?currentSlide:0;}
function runOnImagesLoaded(target,waitForAllImages,callback){var elems=target.add(target.find("img")).filter("img");var len=elems.length;if(!len){callback();return;}
function loadFunction(that){$(that).off('load error');if(that.naturalHeight&&!that.clientHeight){$(that).height(that.naturalHeight).width(that.naturalWidth);}
if(waitForAllImages){len--;if(len==0){callback();}}else{callback();}}
elems.each(function(){var that=this;if(waitForAllImages&&target.is('li')){target.css('display','block');}
$(that).on('load error',function(){loadFunction(that);});if(that.readyState=="complete"){$(that).trigger("load");}else if(that.readyState){that.src=that.src;}
else if(that.complete){$(that).trigger("load");}
else if(that.complete===undefined){var src=that.src;that.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";that.src=src;}});}
function autoadjust(i,speed){i=getRealPos(i);adjustingTo=i;adjustTargetTime=getTimeInMillis()+speed;if(speed==0){finishedAdjustingTo=i;}else{finishedAdjustingTo=FALSE;}
if(option[28]||option[29]){autoHeightWidth(i);}}
function autoHeightWidth(i){obj.ready(function(){adjustHeightWidth(i);runOnImagesLoaded(slides[i],FALSE,function(){adjustHeightWidth(i);});});}
function getSliderDimensions(fromSlide,axis){var pixels=0;for(var slide=fromSlide;slide<fromSlide+numberOfVisibleSlides;slide++){var targetSlide=slides[getRealPos(slide)];var targetPixels=targetSlide['outer'+(axis?"Height":"Width")](TRUE);if(axis==option[7]){pixels+=targetPixels;}else{pixels=mathMax(targetPixels,pixels);}}
return pixels;}
function adjustHeightWidth(i){if(i!=adjustingTo||cantDoAdjustments()){return;}
var speed=adjustTargetTime-getTimeInMillis();speed=mathMax(speed,0);var adjustObject={};if(option[28]){adjustObject.height=getSliderDimensions(i,TRUE)||1;}
if(option[29]){adjustObject.width=getSliderDimensions(i,FALSE)||1;}
if(option[40]){animate(obj,adjustObject,speed,option[12])}else{if(speed==0){obj.stop().css(adjustObject);}else{obj.animate(adjustObject,{queue:FALSE,duration:speed,easing:option[12]});}}}
function adjustPositionTo(slide){var left=getSlidePosition(slide,FALSE);var top=getSlidePosition(slide,TRUE);if(option[40]){slidesContainer.css({transform:"translate("+left+"px, "+top+"px)"});}else{function setMargins(left,top){slidesContainer.css({marginLeft:left,marginTop:top});}
setMargins(0,0);setMargins(left,top);}}
function getSlidePosition(slide,vertical){var targetSlide=slides[getRealPos(slide)];return targetSlide.length?-targetSlide.position()[vertical?"top":"left"]:0;}
function callQueuedAnimation(){if(animateToAfterCompletion!==FALSE){var animateTo=animateToAfterCompletion;animateToAfterCompletion=FALSE;callAsync(function(){enqueueAnimation(animateTo,animateToAfterCompletionClicked,animateToAfterCompletionSpeed);});}}
function adjust(clicked){autoadjust(currentSlide,0);currentSlide=getRealPos(currentSlide);if(!option[30])setCurrent(currentSlide);adjustPositionTo(currentSlide);clickable=TRUE;if(option[13]){if(clicked){stopAuto();if(option[15])startAuto(option[15]);}else if(!init){startAuto();}}
callQueuedAnimation();}
function aniCall(i,after,synchronous){i=getRealPos(i);var func=function(){(after?afterAniCall:beforeAniCall)(slides[i],i+1);};if(synchronous){func();}else{callAsync(func);}}
function afterAniCall(el,a){option[26].call(el,a);}
function beforeAniCall(el,a){option[25].call(el,a);}
function filterDir(dir){if(dir==NEXT_STRING){return limitDir(currentSlide+option[9],dir);}else if(dir==PREV_STRING){return limitDir(currentSlide-option[9],dir);}else if(dir==FIRST_STRING){return 0;}else if(dir==LAST_STRING){return totalSlides-1;}else{return limitDir(parseInt10(dir),dir);}}
function limitDir(i,dir){if(option[16]){if(dir==NEXT_STRING||dir==PREV_STRING){return i;}else{return getRealPos(i);}}else{var maxSlide=totalSlides-numberOfVisibleSlides;if(i>maxSlide){if(currentSlide==maxSlide&&dir==NEXT_STRING){return 0;}else{return maxSlide;}}else if(i<0){if(currentSlide==0&&dir==PREV_STRING){return maxSlide;}else{return 0;}}else{return i;}}}
function ajaxLoad(slide,ajaxCallBack){if(ajaxCallBack){var callbackList=awaitingAjaxCallbacks[slide];if(!callbackList){callbackList=awaitingAjaxCallbacks[slide]=[];}
callbackList.push(ajaxCallBack);}
if(finishedAjaxLoads[slide]){if(ajaxCallBack){runOnImagesLoaded(slide,TRUE,function(){callAsync(ajaxCallBack);});}
return;}
if(startedAjaxLoads[slide]){return;}
startedAjaxLoads[slide]=TRUE;if(asyncDelayedSlideLoadTimeout)clearTimeout(asyncDelayedSlideLoadTimeout);var target=option[31][slide];var targetslide=slides[slide];function loadImage(){var image=new Image();image.src=target;var thatImage=$(image);runOnImagesLoaded(thatImage,TRUE,function(){runWhenNotAnimating(function(){var setHeightWidth="";if(!thatImage.height()){setHeightWidth=20;}
thatImage.height(setHeightWidth).width(setHeightWidth);targetslide.empty().append(image);ajaxAdjust(slide,TRUE);});});}
var succesRan=FALSE;$.ajax({url:target,success:function(data,textStatus,jqXHR){succesRan=TRUE;runWhenNotAnimating(function(){var type=jqXHR.getResponseHeader('Content-Type');if(type&&type.substr(0,1)!="i"){targetslide.html(data);ajaxAdjust(slide,FALSE);}else{loadImage();}});},complete:function(){if(!succesRan){loadImage();}}});option[31][slide]=FALSE;options.ajax[slide]=FALSE;}
function runWhenNotAnimating(completeFunction){if(currentlyAnimating){runAfterAnimationCallbacks.push(completeFunction);}else{callAsync(completeFunction);}}
function ajaxAdjust(i,img){var target=slides[i];adjustPositionTo(currentSlide);autoadjust(currentSlide,0);runOnImagesLoaded(target,TRUE,function(){runWhenNotAnimating(function(){adjustPositionTo(currentSlide);autoadjust(currentSlide,0);finishedAjaxLoads[i]=TRUE;var callbacks=awaitingAjaxCallbacks[i];if(callbacks){performCallbacks(callbacks);}
startAsyncDelayedLoad();callAsync(function(){option[24].call(slides[i],parseInt10(i)+1,img);});if(init){init=FALSE;callAsync(performInitCallback);}});});}
function performInitCallback(){if(option[16]){centerTargetSlideAfter(currentSlide);}
autoadjust(currentSlide,0);adjustPositionTo(currentSlide);callQueuedAnimation();if(option[11]){adjustResponsiveLayout();}
if(option[13]){startAuto();}
option[23].call(baseSlider);runOnImagesLoaded(getSlides(currentSlide,totalSlides),FALSE,function(){runWhenNotAnimating(function(){autoadjust(currentSlide,0);adjustPositionTo(currentSlide);})});}
function performCallbacks(callbacks){while(callbacks.length){callbacks.splice(0,1)[0]();}}
function isContentInSlideReady(slide){if(!imagesInSlidesLoaded[slide]){return FALSE;}
if(!option[31]){return TRUE;}else{return option[31][slide]||(startedAjaxLoads[slide]&&!finishedAjaxLoads[slide]);}}
function loadSlidesAndAnimate(i,clicked,speed){var dir=filterDir(i);var prevNext=i==NEXT_STRING||i==PREV_STRING;var targetSlide=getRealPos(dir);if(targetSlide==currentSlide){return;}
clickable=FALSE;if(option[31]){var waitCounter=0;for(var loadSlide=targetSlide;loadSlide<targetSlide+numberOfVisibleSlides;loadSlide++){if(isContentInSlideReady(loadSlide)){waitCounter++;ajaxLoad(getRealPos(loadSlide),function(){waitCounter--;if(waitCounter==0){option[42].call(baseSlider,dir+1);performAnimation(dir,speed,clicked,prevNext);}});}}
if(waitCounter==0){performAnimation(dir,speed,clicked,prevNext);}else{option[41].call(baseSlider,dir+1);}}else{performAnimation(dir,speed,clicked,prevNext);}}
var reorderedSlidesToStartFromSlide=0;function ensureSliderContainerCSSDurationReset(){if(option[40]){slidesContainer.css(CSSVendorPrefix+"transition-duration","");}}
function reorderSlides(slide){if(getRealPos(slide)==reorderedSlidesToStartFromSlide){return;}
for(var i=0;i<totalSlides;i++){if(!isContentInSlideReady(i)){return;}}
reorderedSlidesToStartFromSlide=slide;ensureSliderContainerCSSDurationReset();for(var i=0;i<totalSlides;i++){var slideToInsert=slides[getRealPos((slide+i))];slidesContainer.append(slideToInsert);}
adjustPositionTo(currentSlide);}
function centerTargetSlideAdjusted(targetSlide,extraSpace){var offset=mathMax(parseInt10((totalSlides-extraSpace-numberOfVisibleSlides)/2),0);targetSlide=mod(targetSlide-offset,totalSlides);reorderSlides(targetSlide);}
function centerTargetSlideAfter(targetSlide){centerTargetSlideAdjusted(targetSlide,0);}
function centerTargetSlideBefore(targetSlide){var startSlide=mathMin(targetSlide,currentSlide);var adjustment=mathAbs(targetSlide-currentSlide);centerTargetSlideAdjusted(startSlide,adjustment);}
function performAnimation(dir,speed,clicked,prevNext){if(option[30])setCurrent(dir);if(option[27]&&clicked)win.location.hash=option[19][dir];if(option[5])fadeControls(dir,option[4]);var fromSlides=$();var toSlides=$();for(var a=0;a<numberOfVisibleSlides;a++){fromSlides=fromSlides.add(slides[getRealPos(currentSlide+a)]);toSlides=toSlides.add(slides[getRealPos(dir+a)]);}
var diff=-currentSlide+dir;var targetSlide;if(option[16]&&!prevNext){var diffAbs=mathAbs(diff);targetSlide=dir;var newDiff=-currentSlide+dir+totalSlides;if(mathAbs(newDiff)<diffAbs){targetSlide=dir+totalSlides;diff=newDiff;diffAbs=mathAbs(diff);}
newDiff=-currentSlide+dir-totalSlides;if(mathAbs(newDiff)<diffAbs){targetSlide=dir-totalSlides;diff=newDiff;}}else{targetSlide=dir;}
if(option[16]){centerTargetSlideBefore(targetSlide);}
var leftTarget=getSlidePosition(targetSlide,FALSE);var topTarget=getSlidePosition(targetSlide,TRUE);var targetLi=slides[getRealPos(dir)];var callOptions=$.extend(TRUE,{},options);var overwritingSpeed=option[1];var attributeSpeed=targetLi.attr("data-speed");if(attributeSpeed!=undefined){overwritingSpeed=parseInt10(attributeSpeed);}
if(speed!=undefined){overwritingSpeed=parseInt10(speed);}
callOptions.speed=overwritingSpeed;var effect=option[0];var specificEffectAttrName="data-effect";var slideSpecificEffect=targetLi.attr(specificEffectAttrName);if(slideSpecificEffect){effect=getEffectMethod(slideSpecificEffect);}
var slideOutSpecificEffect=slides[currentSlide].attr(specificEffectAttrName+"out");if(slideOutSpecificEffect){effect=getEffectMethod(slideOutSpecificEffect);}
currentlyAnimating=TRUE;currentAnimation=effect;var callbackHasYetToRun=TRUE;currentAnimationCallback=function(){currentlyAnimating=FALSE;callbackHasYetToRun=FALSE;goToSlide(dir,clicked);fixClearType(toSlides);if(option[16]){centerTargetSlideAfter(targetSlide);}
aniCall(dir,TRUE);performCallbacks(runAfterAnimationCallbacks);};currentAnimationObject={fromSlides:fromSlides,toSlides:toSlides,slider:obj,options:callOptions,to:dir+1,from:currentSlide+1,diff:diff,target:{left:leftTarget,top:topTarget},stopCallbacks:[],callback:function(){if(callbackHasYetToRun){callbackHasYetToRun=FALSE;stopAnimation();}},goToNext:function(){if(callbackHasYetToRun){runOnImagesLoaded($("."+ANIMATION_CLONE_MARKER_CLASS,obj),TRUE,function(){adjustPositionTo(dir);});}}};autoadjust(dir,overwritingSpeed);callAsync(function(){aniCall(dir,FALSE,TRUE);effect.call(baseSlider,currentAnimationObject);});}
function stopAnimation(){if(currentlyAnimating){currentAnimationCallback();performCallbacks(currentAnimationObject.stopCallbacks);var stopFunction=currentAnimation.stop;if(stopFunction){stopFunction();}else{defaultStopFunction();}
autoadjust(currentSlide,0);adjustPositionTo(currentSlide);}}
function cantDoAdjustments(){return!obj.is(":visible")||init;}
function defaultStopFunction(){$("."+ANIMATION_CLONE_MARKER_CLASS,obj).remove();slidesContainer.stop();}
function goToSlide(slide,clicked){clickable=!clicked&&!option[13];previousSlide=currentSlide;currentSlide=slide;adjust(clicked);if(option[5]&&init){fadeControls(currentSlide,0);}
if(init&&!option[31][currentSlide]&&!startedAjaxLoads[currentSlide]){init=FALSE;callAsync(performInitCallback);}}
function getSlides(from,count){var visibleSlides=$();for(var i=0;i<count;i++){visibleSlides=visibleSlides.add(slides[getRealPos(from+i)]);}
return visibleSlides;}
function getRealPos(a){return mod(a,totalSlides);}
function mod(a,n){return((a%n)+n)%n;}
function fixClearType(element){if(screen.fontSmoothingEnabled&&element.style)element.style.removeAttribute("filter");}
function publicDestroy(){stopAnimation();destroyed=TRUE;slideNumberBeforeDestroy=currentSlide;if(option[11]){$(win).off("resize focus",adjustResponsiveLayout);}
ensureSliderContainerCSSDurationReset();if(controls){controls.remove();}
$(document).off("click",option[2],customLinkClickHandler);reorderSlides(0);adjustPositionTo(currentSlide);autoadjust(currentSlide,0);}
baseSlider.destroy=publicDestroy;function publicInit(){if(destroyed){initSudoSlider();}}
baseSlider.init=publicInit;baseSlider.getOption=function(a){return options[a.toLowerCase()];};baseSlider.setOption=function(a,val){publicDestroy();options[a.toLowerCase()]=val;publicInit();};baseSlider.runWhenNotAnimating=runWhenNotAnimating;baseSlider.insertSlide=function(html,pos,numtext,goToSlide){publicDestroy();if(pos>totalSlides){pos=totalSlides;}
html=$(html||"<div>");if(isSlideContainerUl){html=$("<li>").prepend(html);}else{if(html.length!=1){html=$("<div>").prepend(html);}else{}}
if(!pos||pos==0){slidesContainer.prepend(html);}else{slides[pos-1].after(html);}
if(goToSlide){slideNumberBeforeDestroy=goToSlide-1;}else if(pos<=slideNumberBeforeDestroy||(!pos||pos==0)){slideNumberBeforeDestroy++;}
if(option[19].length<pos){option[19].length=pos;}
option[19].splice(pos,0,numtext||parseInt10(pos)+1);publicInit();};baseSlider.removeSlide=function(pos){pos--;publicDestroy();slides[pos].remove();option[19].splice(pos,1);if(pos<slideNumberBeforeDestroy){slideNumberBeforeDestroy--;}
publicInit();};baseSlider.goToSlide=function(a,speed){var parsedDirection=(a==parseInt10(a))?a-1:a;callAsync(function(){enqueueAnimation(parsedDirection,TRUE,speed);});};baseSlider.block=function(){clickable=FALSE;};baseSlider.unblock=function(){clickable=TRUE;};baseSlider.startAuto=function(){option[13]=TRUE;startAuto();};baseSlider.stopAuto=function(){option[13]=FALSE;stopAuto();};baseSlider.adjust=function(){var autoAdjustSpeed=mathMax(adjustTargetTime-getTimeInMillis(),0);autoadjust(currentSlide,autoAdjustSpeed);if(!currentlyAnimating){adjustPositionTo(currentSlide);}};baseSlider.getValue=function(a){return{currentslide:currentSlide+1,totalslides:totalSlides,clickable:clickable,destroyed:destroyed,autoanimation:autoOn}[a.toLowerCase()];};baseSlider.getSlide=function(number){return slides[getRealPos(parseInt10(number)-1)];};baseSlider.stopAnimation=stopAnimation;initSudoSlider();});};var normalEffectsPrefixObject={box:{Random:["","GrowIn","GrowOut",boxRandomTemplate],Rain:["","GrowIn","GrowOut","FlyIn","FlyOut",["UpLeft","DownLeft","DownRight","UpRight",boxRainTemplate]],Spiral:["InWards","OutWards",{"":boxSpiralTemplate,Grow:["In","Out",boxSpiralGrowTemplate]}]},fade:{"":fade,OutIn:fadeOutIn},foldRandom:["Horizontal","Vertical",foldRandom],slide:slide,stack:["Up","Right","Down","Left",["","Reverse",stackTemplate]]}
var genericEffectsPrefixObject={blinds:["1","2",blinds],fold:fold,push:["Out","In",pushTemplate],reveal:revealTemplate,slice:{"":["","Reveal",["","Reverse","Random",slice]],Fade:slicesFade},zip:zip,unzip:unzip}
function parsePrefixedEffects(resultObject,effectsObject,prefix,generic,argumentsStack){if(isFunction(effectsObject)){if(generic){parsePrefixedEffects(resultObject,["","Up","Right","Down","Left",effectsObject],prefix,0,argumentsStack);}else{resultObject[prefix]=function(obj){var argumentArray=[obj].concat(argumentsStack);var genericArgumentIndex=(argumentArray.length-1);if(generic===0&&argumentArray[genericArgumentIndex]==0){argumentArray[genericArgumentIndex]=getDirFromAnimationObject(obj);}
effectsObject.apply(this,argumentArray);}}}else if(isArray(effectsObject)){var effectIndex=effectsObject.length-1;var effect=effectsObject[effectIndex];for(var i=0;i<effectIndex;i++){var newArgumentStack=cloneArray(argumentsStack);newArgumentStack.push(i);var name=effectsObject[i];parsePrefixedEffects(resultObject,effect,prefix+name,generic,newArgumentStack);}}else{$.each(effectsObject,function(name,effect){parsePrefixedEffects(resultObject,effect,prefix+name,generic,argumentsStack);});}}
var allEffects={};parsePrefixedEffects(allEffects,genericEffectsPrefixObject,"",TRUE,[]);parsePrefixedEffects(allEffects,normalEffectsPrefixObject,"",FALSE,[]);allEffects.random=makeRandomEffect(allEffects);$.fn.sudoSlider.effects=allEffects;function boxRainTemplate(obj,effect,dir){var reverseRows=dir==1||dir==3;var reverse=dir==0||dir==3;var grow=effect==1||effect==2;var flyIn=effect==3||effect==4;var reveal=effect==4||effect==2;boxTemplate(obj,reverse,reverseRows,grow,FALSE,1,flyIn,reveal);}
function boxSpiralTemplate(obj,direction){boxTemplate(obj,direction,FALSE,FALSE,FALSE,2,FALSE,FALSE);}
function boxSpiralGrowTemplate(obj,direction,reveal){boxTemplate(obj,direction,FALSE,TRUE,FALSE,2,FALSE,reveal);}
function boxRandomTemplate(obj,grow){var reveal=grow==2;boxTemplate(obj,FALSE,FALSE,grow,TRUE,0,FALSE,reveal);}
function boxTemplate(obj,reverse,reverseRows,grow,randomize,selectionAlgorithm,flyIn,reveal){var options=obj.options;var ease=options.ease;var boxRows=options.boxrows;var boxCols=options.boxcols;var totalBoxes=boxRows*boxCols;var speed=options.speed/(totalBoxes==1?1:2.5);var boxes=createBoxes(obj,boxCols,boxRows,!reveal);var timeBuff=0;var rowIndex=0;var colIndex=0;var box2DArr=[];box2DArr[rowIndex]=[];if(reverse){reverseArray(boxes);}
if(randomize){shuffle(boxes);}
boxes.each(function(){box2DArr[rowIndex][colIndex]=this;colIndex++;if(colIndex==boxCols){if(reverseRows){reverseArray(box2DArr[rowIndex]);}
rowIndex++;colIndex=0;box2DArr[rowIndex]=[];}});var boxesResult=[];if(selectionAlgorithm==1){for(var cols=0;cols<(boxCols*2)+1;cols++){var prevCol=cols;var boxesResultLine=[];for(var rows=0;rows<boxRows;rows++){if(prevCol>=0&&prevCol<boxCols){var rawBox=box2DArr[rows][prevCol];if(!rawBox){return;}
boxesResultLine.push(rawBox);}
prevCol--;}
if(boxesResultLine.length!=0){boxesResult.push(boxesResultLine);}}}else if(selectionAlgorithm==2){var rows2=boxRows/2,x,y,z,n=reverse?totalBoxes:-1;var negative=reverse?-1:1;for(z=0;z<rows2;z++){y=z;for(x=z;x<boxCols-z-1;x++){boxesResult[n+=negative]=boxes.eq(y*boxCols+x);}
x=boxCols-z-1;for(y=z;y<boxRows-z-1;y++){boxesResult[n+=negative]=boxes.eq(y*boxCols+x);}
y=boxRows-z-1;for(x=boxCols-z-1;x>z;x--){boxesResult[n+=negative]=boxes.eq(y*boxCols+x);}
x=z;for(y=boxRows-z-1;y>z;y--){boxesResult[n+=negative]=boxes.eq(y*boxCols+x);}}}else{for(var row=0;row<boxRows;row++){for(var col=0;col<boxCols;col++){boxesResult.push([box2DArr[row][col]]);}}}
if(reveal){obj.goToNext();}
var count=0;for(var i=0;i<boxesResult.length;i++){var boxLine=boxesResult[i];for(var j=0;j<boxLine.length;j++){var box=$(boxLine[j]);(function(box,timeBuff){var boxChildren=box.children();var goToWidth=box.width();var goToHeight=box.height();var orgLeft=parseNumber(box.css("left"));var orgTop=parseNumber(box.css("top"));var goToLeft=orgLeft;var goToTop=orgTop;var childOrgLeft=parseNumber(boxChildren.css("left"));var childOrgTop=parseNumber(boxChildren.css("top"));var childGoToLeft=childOrgLeft;var childGoToTop=childOrgTop;if(flyIn){var adjustLeft=reverse!=reverseRows?-goToWidth:goToWidth;var adjustTop=reverse?-goToHeight:goToHeight;var flyDistanceFactor=1.5;if(reveal){goToLeft-=adjustLeft*flyDistanceFactor;goToTop-=adjustTop*flyDistanceFactor;}else{box.css({left:orgLeft+adjustLeft*flyDistanceFactor,top:orgTop+adjustTop*flyDistanceFactor});}}
if(grow){if(reveal){childGoToLeft-=goToWidth/2;goToLeft+=goToWidth/2;childGoToTop-=goToHeight/2;goToTop+=goToHeight/2;goToHeight=goToWidth=0;}else{box.css({left:orgLeft+(goToWidth/2),top:orgTop+(goToHeight/2)});boxChildren.css({left:childOrgLeft-goToWidth/2,top:childOrgTop-goToHeight/2});box.width(0).height(0);}}
if(reveal){box.css({opacity:1});}
count++;setTimeout(function(){animate(boxChildren,{left:childGoToLeft,top:childGoToTop},speed,ease,FALSE,obj);animate(box,{opacity:reveal?0:1,width:goToWidth,height:goToHeight,left:goToLeft,top:goToTop},speed,ease,function(){count--;if(count==0){obj.callback();}},obj);},timeBuff);})(box,timeBuff);}
timeBuff+=(speed/boxesResult.length)*1.5;}}
function slicesFade(obj,dir){var vertical=dir==2||dir==4;var negative=dir==1||dir==4;foldTemplate(obj,vertical,negative,FALSE,TRUE);}
function fold(obj,dir){var vertical=dir==2||dir==4;var negative=dir==1||dir==4;foldTemplate(obj,vertical,negative);}
function foldRandom(obj,vertical){foldTemplate(obj,vertical,FALSE,TRUE);}
function blinds(obj,blindsEffect,dir){blindsEffect++;var vertical=dir==2||dir==4;var negative=dir==1||dir==4;foldTemplate(obj,vertical,negative,FALSE,FALSE,blindsEffect);}
function slice(obj,reveal,reverse,dir){var random=reverse==2;var vertical=dir==1||dir==3;var negative=dir==1||dir==4;foldTemplate(obj,vertical,reverse,random,FALSE,0,negative?1:2,reveal);}
function zip(obj,dir){var vertical=dir==2||dir==4;var negative=dir==1||dir==4;foldTemplate(obj,vertical,negative,FALSE,FALSE,0,3);}
function unzip(obj,dir){var vertical=dir==2||dir==4;var negative=dir==1||dir==4;foldTemplate(obj,vertical,negative,FALSE,FALSE,0,3,TRUE);}
function foldTemplate(obj,vertical,reverse,randomize,onlyFade,curtainEffect,upDownEffect,reveal){var options=obj.options;var slides=options.slices;var speed=options.speed/2;var ease=options.ease;var objSlider=obj.slider;var slicesElement=createBoxes(obj,vertical?slides:1,vertical?1:slides,!reveal);var count=0;var upDownAlternator=FALSE;if(reverse){reverseArray(slicesElement);}else{$(reverseArray(slicesElement.get())).appendTo(objSlider);}
if(randomize){shuffle(slicesElement);}
slicesElement.each(function(i){var timeout=((speed/slides)*i);var slice=$(this);var orgWidth=slice.width();var orgHeight=slice.height();var goToLeft=slice.css("left");var goToTop=slice.css("top");var startPosition=vertical?goToLeft:goToTop;var innerBox=slice.children();var startAdjustment=innerBox[vertical?"width":"height"]();if(curtainEffect==1){startPosition=0}else if(curtainEffect==2){startPosition=startAdjustment/2;}
if(reverse){startPosition=startAdjustment-startPosition;}
if(vertical){slice.css({width:(onlyFade||upDownEffect?orgWidth:0),left:startPosition});}else{slice.css({height:(onlyFade||upDownEffect?orgHeight:0),top:startPosition});}
if(reveal){var negative=upDownEffect==1?-1:1;slice.css({top:goToTop,left:goToLeft,width:orgWidth,height:orgHeight,opacity:1});if(vertical){goToTop=negative*orgHeight;}else{goToLeft=negative*orgWidth;}}
if(upDownEffect){var bottom=TRUE;if(upDownEffect==3){if(upDownAlternator){bottom=FALSE;upDownAlternator=FALSE;}else{upDownAlternator=TRUE;}}else if(upDownEffect==2){bottom=FALSE;}
if(vertical){if(reveal){goToTop=(bottom?-1:1)*orgHeight;}else{slice.css({bottom:bottom?0:orgHeight,top:bottom?orgHeight:0,height:reveal?orgHeight:0});}}else{if(reveal){goToLeft=(bottom?-1:1)*orgWidth;}else{slice.css({right:bottom?0:orgWidth,left:bottom?orgWidth:0,width:reveal?orgWidth:0});}}}
count++;setTimeout(function(){animate(slice,{width:orgWidth,height:orgHeight,opacity:reveal?0:1,left:goToLeft,top:goToTop},speed,ease,function(){count--;if(count==0){obj.callback();}},obj);},timeout);});if(reveal){obj.goToNext();}}
function stackTemplate(obj,dir,reverse){var pushIn=obj.diff>0;if(reverse){pushIn=!pushIn;}
pushTemplate(obj,pushIn,++dir);}
function pushTemplate(obj,pushIn,dir){var vertical=dir==2||dir==4;var negative=(dir==2||dir==3)?1:-1;var options=obj.options;var ease=options.ease;var speed=options.speed;if(pushIn){var fromSlides=obj.fromSlides;var toSlides=makeClone(obj,TRUE).hide();toSlides.prependTo(obj.slider);var height=mathMax(toSlides.height(),fromSlides.height());var width=mathMax(toSlides.width(),fromSlides.width());toSlides.css(vertical?{left:negative*width}:{top:negative*height}).show();animate(toSlides,{left:0,top:0},speed,ease,obj.callback,obj);}else{var fromSlides=makeClone(obj,FALSE);fromSlides.prependTo(obj.slider);obj.goToNext();var toSlides=obj.toSlides;var measurementSlides=negative==-1?fromSlides:toSlides;var height=measurementSlides.height();var width=measurementSlides.width();animate(fromSlides,vertical?{left:negative*width}:{top:negative*height},speed,ease,obj.callback,obj);}}
function revealTemplate(obj,dir){var vertical=dir==1||dir==3;var options=obj.options;var ease=options.ease;var speed=options.speed;var innerBox=makeClone(obj,TRUE);var width=innerBox.width();var height=innerBox.height();var box=makeBox(innerBox,0,0,0,0,obj).css({opacity:1}).appendTo(obj.slider);var both=box.add(innerBox);both.hide();if(vertical){box.css({width:width});if(dir==1){innerBox.css({top:-height});box.css({bottom:0,top:"auto"});}}else{box.css({height:height});if(dir==4){innerBox.css({left:-width});box.css({right:0,left:"auto"});}}
both.show();if(vertical){both.width(width);}else{both.height(height);}
animate(innerBox,{left:0,top:0},speed,ease,FALSE,obj);animate(box,{width:width,height:height},speed,ease,obj.callback,obj);}
function slide(obj){var ul=childrenNotAnimationClones(obj.slider);var options=obj.options;var ease=options.ease;var speed=options.speed;var target=obj.target;var left=target.left;var top=target.top;if(obj.options.usecss){animate(ul,{transform:"translate("+left+"px, "+top+"px)"},speed,ease,obj.callback,obj,TRUE);}else{animate(ul,{marginTop:top,marginLeft:left},speed,ease,obj.callback,obj);}}
function animate(elem,properties,speed,ease,callback,obj,doNotResetCss){var usecss=!obj||obj.options.usecss;if(CSSVendorPrefix===FALSE||!usecss){elem.animate(properties,speed,ease,callback);return;}
var CSSObject={};var transitionProperty=CSSVendorPrefix+"transition";var keys=getKeys(properties);CSSObject[transitionProperty]=keys.join(" ")+(CSSVendorPrefix==""?"":" "+CSSVendorPrefix+keys.join(" "+CSSVendorPrefix));var transitionTiming=transitionProperty+"-duration";CSSObject[transitionTiming]=speed+"ms";var transitionEase=transitionProperty+"-timing-function";if(ease=="swing"){ease="ease-in-out";}
CSSObject[transitionEase]=ease;function resetCSS(){if(!doNotResetCss){var cssObject={};cssObject[transitionTiming]="0s";cssObject[transitionEase]="";cssObject[transitionProperty]="";elem.css(cssObject);}}
if(obj){obj.stopCallbacks.push(resetCSS);}
var eventsVendorPrefix=CSSVendorPrefix.replace(/\-/g,"");var eventsSuffix=(eventsVendorPrefix?"T":"t")+"ransitionend";var events=eventsVendorPrefix+eventsSuffix+" t"+"ransitionend";var called=FALSE;var callbackFunction=function(){if(!called){called=TRUE;elem.unbind(events);resetCSS();if(callback){callback();}}};callAsync(function(){if(speed<20){elem.css(properties);callbackFunction();return;}
elem.css(CSSObject);callAsync(function(){elem.css(properties);elem.on(events,function(event){if(elem.is(event.target)){callbackFunction();}});setTimeout(callbackFunction,speed+100);});});return callbackFunction}
function fadeOutIn(obj){var options=obj.options;var fadeSpeed=options.speed;var ease=options.ease;var fadeinspeed=parseInt10(fadeSpeed*(3/5));var fadeoutspeed=fadeSpeed-fadeinspeed;obj.stopCallbacks.push(function(){obj.fromSlides.stop().css({opacity:1});});animate(obj.fromSlides,{opacity:0.0001},fadeoutspeed,ease,function(){finishFadeAnimation(obj,fadeSpeed);},obj);}
function fade(obj){finishFadeAnimation(obj,obj.options.speed);}
function finishFadeAnimation(obj,speed){var options=obj.options;options.boxcols=1;options.boxrows=1;options.speed=speed;boxTemplate(obj);}
function getDirFromAnimationObject(obj){var vertical=obj.options.vertical;var diff=obj.diff;var dir;if(vertical){if(diff<0){dir=1;}else{dir=3;}}else{if(diff<0){dir=2;}else{dir=4;}}
return dir;}
function createBoxes(obj,numberOfCols,numberOfRows,useToSlides){var slider=obj.slider;var result=$();var boxWidth,boxHeight;var first=TRUE;for(var rows=0;rows<numberOfRows;rows++){for(var cols=0;cols<numberOfCols;cols++){var innerBox=makeClone(obj,useToSlides);if(first){first=FALSE;boxWidth=Math.ceil(innerBox.width()/numberOfCols);boxHeight=Math.ceil(innerBox.height()/numberOfRows);}
var box=makeBox(innerBox,boxHeight*rows,boxWidth*cols,boxHeight,boxWidth,obj);slider.append(box);result=result.add(box);}}
return result;}
function makeBox(innerBox,top,left,height,width,obj){innerBox.css({width:innerBox.width(),height:innerBox.height(),display:"block",top:-top,left:-left});var box=$("<div>").css({left:left,top:top,width:width,height:height,opacity:0,overflow:"hidden",position:ABSOLUTE_STRING,zIndex:obj.options.animationzindex});box.append(innerBox).addClass(ANIMATION_CLONE_MARKER_CLASS);return box;}
function makeClone(obj,useToSlides){var slides=useToSlides?obj.toSlides:obj.fromSlides;var firstSlidePosition=slides.eq(0).position();var orgLeft=firstSlidePosition.left;var orgTop=firstSlidePosition.top;var height=0;var width=0;var result=$("<div>").css({zIndex:obj.options.animationzindex,position:ABSOLUTE_STRING,top:0,left:0}).addClass(ANIMATION_CLONE_MARKER_CLASS);slides.each(function(index,elem){var that=$(elem);var cloneWidth=that.outerWidth(TRUE);var cloneHeight=that.outerHeight(TRUE);var clone=that.clone();var position=that.position();var left=position.left-orgLeft;var top=position.top-orgTop;clone.css({position:ABSOLUTE_STRING,left:left,top:top,opacity:1});height=mathMax(height,top+cloneHeight);width=mathMax(width,left+cloneWidth);result.append(clone);});result.width(width).height(height);return result;}
function minJQueryVersion(minVersion){var version=$.fn.jquery.split(".");var length=version.length
for(var a=0;a<length;a++){if(minVersion[a]&&+version[a]<+minVersion[a]){return FALSE;}}
return TRUE;}
function getVendorPrefixedProperty(property,searchElement){for(var name in searchElement){if(endsWith(name.toLowerCase(),property.toLowerCase())){return name;}}
return FALSE;}
function stringTrim(str){return str.replace(/^\s+|\s+$/g,'');}
function getCSSVendorPrefix(){var property="transition";var styleName=getVendorPrefixedProperty(property,$("<div>")[0].style);if(styleName===FALSE){return FALSE;}
var prefix=styleName.slice(0,styleName.length-property.length);if(prefix.length!=0){return"-"+prefix+"-";}
return"";}
function endsWith(string,suffix){return string.indexOf(suffix,string.length-suffix.length)!==-1;}
function getKeys(obj){var keys=[];for(var key in obj){keys.push(key);}
return keys;}
function callAsync(func){setTimeout(func,0);}
function startsWith(string,prefix){return string.indexOf(prefix)==0;}
function cloneArray(arrayToClone){return arrayToClone.slice();}
function reverseArray(array){return[].reverse.call(array);}
function childrenNotAnimationClones(obj){return obj.children().not("."+ANIMATION_CLONE_MARKER_CLASS);}
function objectToLowercase(obj){var ret={};for(var key in obj)
ret[key.toLowerCase()]=obj[key];return ret;}
function shuffle(array){for(var j,x,i=array.length;i;j=parseInt(Math.random()*i),x=array[--i],array[i]=array[j],array[j]=x){}
return array;}
function isFunction(func){return $.isFunction(func);}
function isArray(object){return $.isArray(object);}
function parseInt10(num){return parseInt(num,10);}
function parseNumber(num){return parseFloat(num);}
function getTimeInMillis(){return+new Date();}
function mathAbs(number){return number<0?-number:number;}
function mathMax(a,b){return a>b?a:b;}
function mathMin(a,b){return a<b?a:b;}
var fallbackEffect=getEffectMethod("slide");function getEffectMethod(inputEffect){if(isArray(inputEffect)){return makeRandomEffect(inputEffect);}else if(isFunction(inputEffect)){return inputEffect}else{inputEffect=stringTrim(inputEffect);if(inputEffect.indexOf(",")!=-1){var array=inputEffect.split(",");return makeRandomEffect(array);}else{var effects=objectToLowercase($.fn.sudoSlider.effects);var effectName=inputEffect.toLowerCase();var result=effects[effectName];if(result){return result;}else{var array=[];for(var name in effects){if(startsWith(name,effectName)){array.push(effects[name]);}}
if(!array.length){return fallbackEffect;}
return makeRandomEffect(array);}}}}
function makeRandomEffect(array){return function(obj){var effect=pickRandomValue(array);return getEffectMethod(effect)(obj);}}
function pickRandomValue(obj){return obj[shuffle(getKeys(obj))[0]];}})(jQuery,window);