(function ( $ ) {
    $.fn.svgTimer = function(options) {
        var opts = $.extend({}, $.fn.svgTimer.defaults, options);

        var template = "<div class='svg-hexagonal-counter'>"
            + "<h2>"
            +"<span class=\"time\"></span>"
            
            +"</h2>"
            +"<h3>"+opts.unit+"</h3>"
            + "<svg class='counter' x='0px' y='0px' viewBox='0 0 776 628'>"
            + "<path class='track' d='M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z'></path>"
            + "<path class='fill' d='M723 314L543 625.77 183 625.77 3 314 183 2.23 543 2.23 723 314z'></path>"
            + "</svg>"
            + "</div>";

        return this.each(function() {
            // Build dom for svg countdown
            var parentEl = $(this);
            parentEl.append(template);

            //define dom elements
            var track = parentEl.find('.track');
            var fill = parentEl.find('.fill');
            var counterText = parentEl.find('.time');

            //set time and offset
            var time = opts.time; /* how long the timer runs for */
            var initialOffset = 2160;
            var i 

            //draw initial hexagon
            track.css('stroke', opts.track);
            fill.css({
                'stroke': opts.fill,
                'stroke-dashoffset': initialOffset-(i*(initialOffset/time)) + 'px',
                'transition': 'stroke-dashoffset 1s ' +  opts.transition
            });

            //run timer
            var interval = setInterval(function() {
                i=Math.floor((opts.event.getTime()-Date.now())/1000/opts.div)%opts.time;
               
                track.css('stroke', opts.track);
                fill.css({
                    'stroke': opts.fill,
                    'stroke-dashoffset': initialOffset-(((time-i)*initialOffset)/time) + 'px',
                    'transition': 'stroke-dashoffset 1s ' +  opts.transition
                });
                if(opts.direction === 'forward'){
                    counterText.text(i);
                } else if (opts.direction === 'backward') {
                    var count = i;
                    counterText.text(count);
                }

                if (i == time) {
                    i=1;
                    if(Math.round((end.getTime()-Date.now())/1000)<=0)
                        clearInterval(interval);
                }
            }, 1000);
        });
    };

    $.fn.svgTimer.defaults = {
        time: 60,
        track: 'rgb(56, 71, 83)',
        fill: 'rgb(104, 214, 198)',
        transition: 'linear',
        direction: 'backward',
        interval: 1000
    }
}( jQuery ));

/*
event-time = 50000
60

3600




*/