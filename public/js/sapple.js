/*
* Sapple Systems Single slider - jQuery plugin
*/
(function ($) {
    $.fn.sappleMultiSlider = function (options) {

        // Handle multiple elements
        if (this.length > 1) {
            var a = new Array();
            this.each(function () {
                a.push($(this).sappleMultiSlider(options));
            });
            return a;
        }

        // Create "opts" object
        var opts = $.extend({}, $().sappleMultiSlider.defaults, options);

        // Define slider object
        var $this = this;
        var sliderUL = $this.find('ul');
        var sliderItems = sliderUL.find('li');
        var indexCurr = 0;
        var sliderItemsUpdated, swipeDistance, sliderItemsNew, sliderULWidth, itemCurr, itemWidth, itemCurrWidth, counterCurrent, counterTotal, swipeXStart, swipeXEnd, isAnimating, pagination, btns, sliderWidth;

        //Vars

        /* PRIVATE FUNCTIONS */
        var slideTo = function (direction) {

            sliderItemsNew = sliderUL.find('li');

            var itemOut = itemCurr;
            var contentOut = itemCurr.find('.content');
            var clonedItem, newItem, classOut, classIn ,animateTo, contentOut, contentIn;

            if (direction=='prev') {
                itemCurr = itemCurr.prev();
                classIn = 'slide-align-right';
                classOut = 'slide-align-left';
                animateTo = 0;
                clonedItem = sliderItemsNew.last();
                newItem = clonedItem.clone();

                sliderUL.prepend(newItem.removeClass('slide-align-right').addClass('slide-align-left'))
                    .css({
                        'left' : (0 - (itemWidth + opts.marginWidth))
                    });
            }
            else if (direction=='next') {
                itemCurr = itemCurr.next();
                classIn = 'slide-align-left';
                classOut = 'slide-align-right';
                animateTo = (0 - (itemWidth + opts.marginWidth));
                clonedItem = sliderItemsNew.first();
                newItem = clonedItem.clone();

                sliderUL.append(newItem.removeClass('slide-align-left').addClass('slide-align-right'));
            }

            indexCurr = itemCurr.data('index');
            counterCurrent.text(indexCurr+1);

            contentIn = itemCurr.find('.content');

            contentOut.fadeOut(opts.animationSpeed/2);
            setTimeout(function() {
                contentIn.fadeIn();
            }, opts.animationSpeed/2);

            itemCurr.animate({
                'width' : itemCurrWidth,
                'margin-top' : 0
            }, opts.animationSpeed, function() {
                itemCurr.removeClass(classOut).addClass('slide-current');
            });
            itemOut.addClass(classIn).animate({
                'width' : itemWidth,
                'margin-top' : opts.marginTop
            }, opts.animationSpeed, function() {
                itemOut.removeClass('slide-current');
            });

            sliderUL.animate({
                'left' : animateTo
            }, opts.animationSpeed, function() {
                if (clonedItem)
                    clonedItem.remove();
                sliderUL.css({ 'left' : 0 });
                isAnimating = false;
            });

            opts.marginTop

        }

        var startSwipe = function (e) {
            if (isAnimating)
                return;
            swipeXStart = e.clientX || e.touches[0].clientX;

        }

        var endSwipe = function (e) {
            if (!swipeXStart)
                return;
            swipeXEnd = e.clientX || e.changedTouches[0].clientX;

            if (swipeXEnd - swipeXStart > opts.swipeDistance) {
                $this.prev();
            }
            else if (swipeXStart - swipeXEnd > opts.swipeDistance) {
                $this.next();
            }
            swipeXStart = null;
            swipeXEnd = null;
        }

        var downHandler = function(e) {
            startSwipe(e);
        }
        var upHandler = function(e) {
            endSwipe(e);
        }

        var highlight = function(direction) {
            var currIndex = itemCurr.data('index');
            var nextIndex;
            if (direction == 'prev') {
                if (currIndex == 0)
                    nextIndex = sliderItems.length;
                else
                    nextIndex = currIndex;
            }
            else if (direction == 'next') {
                if (currIndex == (sliderItems.length-1))
                    nextIndex = 1;
                else
                    nextIndex = currIndex+2;
            }
            counterCurrent.text(nextIndex);
        }

        var debounce = function(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this, args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };

        var resizeHandler = debounce(function() {
            $this.update(opts);
        }, 100);


        /* PUBLIC FUNCTIONS */
        this.destroy = function (reset) {
            $this.removeData('sappleMultiSlider').removeClass('sappleMultiSliderContainer').removeAttr('style');
            sliderUL.empty().append(sliderItems);
            sliderItems.removeAttr('data-index').removeClass('slide-align-left slide-align-right slide-current').css({
                'float' : '',
                'width' : '',
                'margin-top' : ''
            });
            pagination.remove();

            sliderUL.removeAttr('style');

            sliderUL[0].removeEventListener('mousedown', downHandler);
            sliderUL[0].removeEventListener('mouseup', upHandler);
            sliderUL[0].removeEventListener('touchstart', downHandler);
            sliderUL[0].removeEventListener('touchend', upHandler);

            window.removeEventListener('resize', resizeHandler);

            if (reset)
                indexCurr = 0;

        };

        this.update = function (options, reset) {
            opts = null;
            opts = $.extend({}, $().sappleMultiSlider.defaults, options);
            this.destroy(reset);
            return this.create();
        };

        this.prev = function () {
            isAnimating = true;
            slideTo('prev');
        };
        this.next = function () {
            isAnimating = true;
            slideTo('next');
        };


        /* CREATE FUNCTION */
        this.create = function () {
            if(!$(this).html()) {
                return false;
            }

            // stop double initialization
            if ($this.data('sappleMultiSlider') == true) {
                return this;
            }
            // beforeCreateFunction
            if (opts.beforeCreateFunction != null && $.isFunction(opts.beforeCreateFunction)) {
                opts.beforeCreateFunction.call($this);
            }

            //START MAIN CREATE FUNCTIONALITY;
            pagination = $('<div class="pagination"><a href="#" class="prev  arrow-left_project">Previous</a><span class="counter"><em class="current"></em> of <em class="total"></em></span><a href="#" class="next  arrow-right_project">Next</a></div>');


            $this.addClass('sappleMultiSliderContainer');

            //Get window widths

            // Had to put these lines in to get the slider to occupy the correct width with or without the scrollbar
            var hideItems = sliderItems.not(':eq(0)').hide();
            sliderWidth = $this.innerWidth();
            hideItems.show();

            if (sliderWidth < 600) {
                $this.addClass('shrink');
            }
            else {
                $this.removeClass('shrink');
            }

            sliderUL.css({
                'position' : 'relative',
                'overflow' : 'hidden'
            });

            $this.css({
                'position' : 'relative',
                'overflow' : 'hidden'
            })
                .append(pagination);

            itemCurr = sliderItems.eq(indexCurr).addClass('slide-current');
            itemCurrWidth = itemCurr.outerWidth();

            sliderItems.css('float', 'left').each (function(i) {
                var obj = $(this);
                obj.attr('data-index', i);
                if (i < indexCurr) {
                    obj.addClass('slide-align-left');
                }
                else if (i > indexCurr) {
                    obj.addClass('slide-align-right');
                }
            });

            //calculate necessary widths for left and right slides
            itemWidth = ((sliderWidth - itemCurrWidth) - (opts.marginWidth * 4)) / 4;
            sliderItems.not('.slide-current').css({
                'width' : itemWidth,
                'margin-top' : opts.marginTop
            });


            if (indexCurr > 2) {
                for(var i=0; i < indexCurr-2; i++) {
                    (function() {
                        var obj = $(sliderItems[i]).removeClass('slide-align-left').addClass('slide-align-right');
                        sliderUL.append(obj.detach());
                    })();
                }
            }
            else if (indexCurr == 1) {
                (function() {
                    var obj = sliderItems.last().removeClass('slide-align-right').addClass('slide-align-left');
                    sliderUL.prepend(obj.detach());
                })();
            }
            else if (indexCurr == 0) {
                for(var i=sliderItems.length-1; i>sliderItems.length-3; i--) {
                    (function() {
                        var obj = $(sliderItems[i]).removeClass('slide-align-right').addClass('slide-align-left');
                        sliderUL.prepend(obj.detach());
                    })();
                }
            }


            sliderULWidth = 0;
            sliderItems.each (function(i) {
                sliderULWidth += $(this).outerWidth(true);
            });
            sliderUL.width(sliderULWidth*2);

            btns = pagination.find('a');
            counterCurrent = pagination.find('em.current');
            counterTotal = pagination.find('em.total').text(sliderItems.length);

            counterCurrent.text(indexCurr+1);

            // button controller behaviours
            btns.on('mouseover', function() {

                if ($(this).hasClass('prev'))
                    highlight('prev');
                else if ($(this).hasClass('next'))
                    highlight('next');

            })
                .on('mouseout', function() {
                    counterCurrent.text(indexCurr+1);
                })
                .on('click', function(e) {
                    e.preventDefault();

                    if (isAnimating)
                        return;

                    if ($(this).hasClass('prev'))
                        $this.prev();
                    else if ($(this).hasClass('next'))
                        $this.next();
                });

            // draggable element
            sliderUL[0].addEventListener('mousedown', downHandler);
            sliderUL[0].addEventListener('mouseup', upHandler);
            sliderUL[0].addEventListener('touchstart', downHandler);
            sliderUL[0].addEventListener('touchend', upHandler);


            // Update on window resize for responsiveness
            window.addEventListener('resize', resizeHandler);

            //END MAIN CREATE FUNCTIONALITY

            // Set plugin flag
            $this.data('sappleMultiSlider', true);

            // afterCreateFunction
            if (opts.afterCreateFunction != null && $.isFunction(opts.afterCreateFunction)) {
                opts.afterCreateFunction.call($this);
            }
            return this;
        };

        // CREATE FUNCTION CALL
        return this.create();
    };

    jQuery.fn.sappleMultiSlider.defaults = {
        animationSpeed : 600,
        marginWidth : 6,
        marginTop: 40,
        swipeDistance : 100,
        beforeCreateFunction : null,
        afterCreateFunction :  null
    };
})(jQuery);