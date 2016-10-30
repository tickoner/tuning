function pushFooter() {
    var footerHeight = $('#footer').innerHeight();
    $('#wrapper').css('margin-bottom', '-' + footerHeight + 'px');
    $('#wrapper .content').css('padding-bottom',footerHeight + 'px');
};
$(document).ready(function() {
    pushFooter();
    //footer
    $(window).resize(function() {
        pushFooter();
    });
    //parallax
    $("#wrapper").mousemove(
        function(e) {

            var offset = $(this).offset();
            var xPos = e.pageX - offset.left;
            var yPos = e.pageY - offset.top;

            var mouseXPercent = Math.round(xPos / $(this).width() * 100);
            var mouseYPercent = Math.round(yPos / $(this).height() * 100);

            $(this).find('.absolute-img').each(
                function() {
                    var diffX = $('.caption').width() - $(this).width();
                    var diffY = $('.caption').height() - $(this).height();

                    var myX = diffX * (mouseXPercent / 1000);

                    var myY = diffY * (mouseYPercent / 800);


                    var cssObj = {
                        'left': myX + '%',
                        'top': myY + '%'
                    }

                    $(this).animate({
                        left: myX,
                        top: myY
                    }, {
                        duration: 50,
                        queue: false,
                        easing: 'linear'
                    });

                }
            );

        }
    );
});
$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, "Please enter a valid vin code.");
$("#sendOrder").validate({

    rules: {
        vinCode: {
            regx:/^([0-9A-HJ-NPR-Z]{9})([A-HJ-NPR-TV-Y1-9])([0-9A-HJ-NPR-Z])([0-9A-HJ-NPR-Z]{2}\d{4})$/i
        },
        year: {
               required: true;
           },
       marka_id: {
               required: true;
           },
       models: {
               required: true;
           }
       }

  });
//form validate

// jQuery.validator.addMethod("regexp", function(value, element) {
// // allow any non-whitespace characters as the host part
// return this.optional( element ) || /^([0-9A-HJ-NPR-Z]{9})([A-HJ-NPR-TV-Y1-9])([0-9A-HJ-NPR-Z])([0-9A-HJ-NPR-Z]{2}\d{4})$/i.test( value );
// }, 'Please enter a valid vin code.');
// // $.validator.addMethod("regx", function(value, element, regexpr) {
// //     return regexpr.test(value);
// // }, "Введіть вірний VIN код.");
// $('#sendOrder').validate({
//     rules: {
//         vinCode: {
//             regexp: true;
//         }
//     },
//     year: {
//         required: true;
//     },
//     marka_id: {
//         required: true;
//     },
//     models: {
//         required: true;
//     }
// });
