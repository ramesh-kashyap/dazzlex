

 /* animateNumber */
;(function(d){var q=function(b){return b.split("").reverse().join("")},m={numberStep:function(b,a){var e=Math.floor(b);d(a.elem).text(e)}},h=function(b){var a=b.elem;a.nodeType&&a.parentNode&&(a=a._animateNumberSetter,a||(a=m.numberStep),a(b.now,b))};d.Tween&&d.Tween.propHooks?d.Tween.propHooks.number={set:h}:d.fx.step.number=h;d.animateNumber={numberStepFactories:{append:function(b){return function(a,e){var g=Math.floor(a);d(e.elem).prop("number",a).text(g+b)}},separator:function(b,a,e){b=b||" ";
a=a||3;e=e||"";return function(g,k){var c=Math.floor(g).toString(),t=d(k.elem);if(c.length>a){for(var f=c,l=a,m=f.split("").reverse(),c=[],n,r,p,s=0,h=Math.ceil(f.length/l);s<h;s++){n="";for(p=0;p<l;p++){r=s*l+p;if(r===f.length)break;n+=m[r]}c.push(n)}f=c.length-1;l=q(c[f]);c[f]=q(parseInt(l,10).toString());c=c.join(b);c=q(c)}t.prop("number",g).text(c+e)}}}};d.fn.animateNumber=function(){for(var b=arguments[0],a=d.extend({},m,b),e=d(this),g=[a],k=1,c=arguments.length;k<c;k++)g.push(arguments[k]);
if(b.numberStep){var h=this.each(function(){this._animateNumberSetter=b.numberStep}),f=a.complete;a.complete=function(){h.each(function(){delete this._animateNumberSetter});f&&f.apply(this,arguments)}}return e.animate.apply(e,g)}})(jQuery);


//animateTransform.jquery.min.js
$.fn.animateTransform=function(){for(var a=null,b=null,c=400,d=function(){},e=0;e<arguments.length;e++)"string"==typeof arguments[e]?a?b=arguments[e]:a=arguments[e]:"number"==typeof arguments[e]?c=arguments[e]:"function"==typeof arguments[e]&&(d=arguments[e]);if(a&&!b&&(b=a,a=null),b){a&&this.css("transform",a),c<16&&(c=16);var f=this.css("transition");this.css("transition","transform "+c+"ms"),this.css("transform",b);var g=this;setTimeout(function(){g.css("transition",f||""),g.css("transform",b),d()},c)}};


/* Headline Animation */
$(function(){
    var animationDelay = 2500,
        barAnimationDelay = 3800,
        barWaiting = barAnimationDelay - 3000,
        lettersDelay = 50,
        typeLettersDelay = 150,
        selectionDuration = 500,
        typeAnimationDelay = selectionDuration + 800,
        revealDuration = 600,
        revealAnimationDelay = 5000;

    let sources = [
        "../img/main-image-dota2.png",
        "../img/main-image-rust.png",
        "../img/main-image-tf2.png",
        "../img/game-csgo.jpg",
        "../img/game-dota2.jpg",
        "../img/game-tf2.jpg",
        "../img/game-rust.jpg"
    ];

    if($('.ms-headline').length)
        preloadImages(sources, initHeadline);
   // initHeadline();

    function initHeadline() {
        singleLetters($('.ms-headline.letters').find('b'));
        animateHeadline($('.ms-headline'));
    }
    function singleLetters($words) {
        $words.each(function() {
            var word = $(this),
                letters = word.text().split(''),
                selected = word.hasClass('is-visible');
            for (i in letters) {
                if (word.parents('.rotate-2').length > 0)
                    letters[i] = '<em>' + letters[i] + '</em>';
                letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
            }
            var newLetters = letters.join('');
            word.html(newLetters).css('opacity', 1);
        });
    }
    function animateHeadline($headlines) {
        var duration = animationDelay;
        $headlines.each(function() {
            var headline = $(this);
            if (headline.hasClass('loading-bar')) {
                duration = barAnimationDelay;
                setTimeout(function() {
                    headline.find('.ms-headline-wrapper').addClass('is-loading')
                }, barWaiting);
            } else if (headline.hasClass('clip')) {
                var spanWrapper = headline.find('.ms-headline-wrapper'),
                    newWidth = spanWrapper.width() + 10
                spanWrapper.css('width', newWidth);
            } else if (!headline.hasClass('type')) {
                var words = headline.find('.ms-headline-wrapper b'),
                    width = 0;
                words.each(function() {
                    var wordWidth = $(this).width();
                    if (wordWidth > width)
                        width = wordWidth;
                });
                headline.find('.ms-headline-wrapper').css('width', width);
            }
            ;
            setTimeout(function() {
                hideWord(headline.find('.is-visible').eq(0))
            }, duration);
        });
    }
    function hideWord($word) {
        var nextWord = takeNext($word);
        if ($word.parents('.ms-headline').hasClass('type')) {
            var parentSpan = $word.parent('.ms-headline-wrapper');
            parentSpan.addClass('selected').removeClass('waiting');
            setTimeout(function() {
                parentSpan.removeClass('selected');
                $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
            }, selectionDuration);
            setTimeout(function() {
                showWord(nextWord, typeLettersDelay)
            }, typeAnimationDelay);
        } else if ($word.parents('.ms-headline').hasClass('letters')) {
            var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
            hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
            showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
        } else if ($word.parents('.ms-headline').hasClass('clip')) {
            $word.parents('.ms-headline-wrapper').animate({
                width: '2px'
            }, revealDuration, function() {
                switchWord($word, nextWord);
                showWord(nextWord);	
				changesBg(takeNext($word).data("type"));			
            });
        } else if ($word.parents('.ms-headline').hasClass('loading-bar')) {
            $word.parents('.ms-headline-wrapper').removeClass('is-loading');
            switchWord($word, nextWord);
            setTimeout(function() {
                hideWord(nextWord)
            }, barAnimationDelay);
            setTimeout(function() {
                $word.parents('.ms-headline-wrapper').addClass('is-loading')
            }, barWaiting);
        } else {
            switchWord($word, nextWord);
            setTimeout(function() {
                hideWord(nextWord)
            }, animationDelay);
        }
    }
    function showWord($word, $duration) {
        if ($word.parents('.ms-headline').hasClass('type')) {
            showLetter($word.find('i').eq(0), $word, false, $duration);
            $word.addClass('is-visible').removeClass('is-hidden');
        } else if ($word.parents('.ms-headline').hasClass('clip')) {
            $word.parents('.ms-headline-wrapper').animate({
                'width': $word.width() + 10
            }, revealDuration, function() {
                setTimeout(function() {
                    hideWord($word);
					//changesBg(takeNext($word).data("type"));
                }, revealAnimationDelay);
            });
        }
    }
    function hideLetter($letter, $word, $bool, $duration) {
        $letter.removeClass('in').addClass('out');
        if (!$letter.is(':last-child')) {
            setTimeout(function() {
                hideLetter($letter.next(), $word, $bool, $duration);
            }, $duration);
        } else if ($bool) {
            setTimeout(function() {
                hideWord(takeNext($word))
            }, animationDelay);
        }
        if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
            var nextWord = takeNext($word);
            switchWord($word, nextWord);
        }
    }
    function showLetter($letter, $word, $bool, $duration) {
        $letter.addClass('in').removeClass('out');
        if (!$letter.is(':last-child')) {
            setTimeout(function() {
                showLetter($letter.next(), $word, $bool, $duration);
            }, $duration);
        } else {
            if ($word.parents('.ms-headline').hasClass('type')) {
                setTimeout(function() {
                    $word.parents('.ms-headline-wrapper').addClass('waiting');
                }, 200);
            }
            if (!$bool) {
                setTimeout(function() {
                    hideWord($word)
                }, animationDelay)
            }
        }
    }
    function takeNext($word) {
        return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
    }
    function takePrev($word) {
        return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
    }
    function switchWord($oldWord, $newWord) {
        $oldWord.removeClass('is-visible').addClass('is-hidden');
        $newWord.removeClass('is-hidden').addClass('is-visible');
    }
});



//FadeToggle body bg
function changesBg(type) {
	const obj = {
		"marketing": ["header-marketing.png","bg-marketing"],
		"networking": ["header-networking.png","bg-networking"],
		"staking": ["header-staking.png","bg-staking"]
	};

	$(".bxhead-img img").fadeOut(600, function(){
		$(this).remove();
		$(".bxhead-img").html(`<img src="/assets/tpl/images/${obj[type][0]}" alt="">`)
		.find("img").fadeIn(600, function(){
		});
	});

    $(".body-bg__item._active").stop(true, true).fadeOut(600, function(){
        $(".body-bg__item._active").removeClass("_active");
        $(`.body-bg__item.${obj[type][1]}`).stop(true, true).fadeIn(600, function(){
            $(`.body-bg__item.${obj[type][1]}`).addClass("_active");
        });
    });
}


//livestat add item
function addLiveStat(html){
    const $list = $(".livestat-list");   

    $list.animateTransform(`translateX(13.5rem)`, 300, function(){
        $list.prepend(html);  
        $list.css("transform", "translateX(0)");    
    });
}


// Preload images
function preloadImages(sources, callback) {
    let counter = 0;

    function onLoad() {
      counter++;
      if (counter == sources.length) callback();
    }

    for(let source of sources) {
      let img = document.createElement('img');
      img.onload = img.onerror = onLoad;
      img.src = source;
    }
  }
