(function ($) {
    "use strict";

    $.fn.extend({ 

      countdown100: function(options) {
        const defaults = {
          timeZone: "",
          endtimeYear: 0,
          endtimeMonth: 0,
          endtimeDate: 0,
          endtimeHours: 0,
          endtimeMinutes: 0,
          endtimeSeconds: 0,
        };

        //options =  $.extend(defaults, options);

        return this.each(function() {
          const obj = $(this);
          const timeNow = new Date();

          const tZ = options.timeZone; console.log(tZ);
          const endYear = options.endtimeYear;
          const endMonth = options.endtimeMonth;
          const endDate = options.endtimeDate;
          const endHours = options.endtimeHours;
          const endMinutes = options.endtimeMinutes;
          const endSeconds = options.endtimeSeconds;

          let deadline; //= moment.tz([endYear, endMonth - 1, endDate, endHours, endMinutes, endSeconds], tZ).format();
          if(tZ === "") {
             deadline = new Date(endYear, endMonth - 1, endDate, endHours, endMinutes, endSeconds);
          } 
          else {
             deadline = moment.tz([endYear, endMonth - 1, endDate, endHours, endMinutes, endSeconds], tZ).format();
          }

          if(Date.parse(deadline) < Date.parse(timeNow)) {
             deadline = new Date(Date.parse(new Date()) + endDate * 24 * 60 * 60 * 1000 + endHours * 60 * 60 * 1000);
          }
          
          
          initializeClock(deadline);

          function getTimeRemaining(endtime) {
            let t = Date.parse(endtime) - Date.parse(new Date());
            let seconds = Math.floor((t / 1000) % 60);
            let minutes = Math.floor((t / 1000 / 60) % 60);
            let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            let days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
              'total': t,
              'days': days,
              'hours': hours,
              'minutes': minutes,
              'seconds': seconds
            };
          }

          function initializeClock(endtime) {
            const daysSpan = $(obj).find('.days');
            const hoursSpan = $(obj).find('.hours');
            const minutesSpan = $(obj).find('.minutes');
            const secondsSpan = $(obj).find('.seconds');

            function updateClock() {
              const t = getTimeRemaining(endtime);
              daysSpan.html(t.days);
              hoursSpan.html(('0' + t.hours).slice(-2));
              minutesSpan.html(('0' + t.minutes).slice(-2));
              secondsSpan.html(('0' + t.seconds).slice(-2))

              if (t.total <= 0) {
                clearInterval(timeinterval);
              }
            }

            updateClock();
            const timeinterval = setInterval(updateClock, 1000);
          }

          


        });
      }
    });

    

})(jQuery);