//footer fix
function pushFooter() {
    var footerHeight = $('#footer').innerHeight();
    $('#wrapper').css('margin-bottom', '-' + footerHeight + 'px');
    $('#wrapper .content').css('padding-bottom', footerHeight + 'px');
};
//Vincode validation
$.validator.addMethod("vinCheck", function(value, element) {
    return this.optional(element) || /^([0-9A-HJ-NPR-Z]{9})([A-HJ-NPR-TV-Y1-9])([0-9A-HJ-NPR-Z])([0-9A-HJ-NPR-Z]{2}\d{4})$/i.test(value);
}, "Будь ласка, введіть правильний VIN номер");
//
//////////Range Slider
var output = document.querySelectorAll('output')[0];

$(document).on('input', 'input[type="range"]', function(e) {
      output.innerHTML = e.currentTarget.value;
});

$('input[type=range]').rangeslider({
  polyfill: false
});
//////////
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
                    var diffX = $('#wrapper').width() - $(this).width();
                    var diffY = $('#wrapper').height() - $(this).height();

                    var myX = diffX * (mouseXPercent / 1000);

                    var myY = diffY * (mouseYPercent / 800);


                    var cssObj = {
                        'left': myX + 'px',
                        'top': myY + 'px'
                    }

                    $(this).animate({
                        left: myX,
                        top: myY
                    }, {
                        duration: 25,
                        queue: false,
                        easing: 'linear'
                    });

                }
            );

        });
    //toggle link searchPart
    $("#searchNumber").click(function() {
        event.preventDefault();
        $("#partNumber").parent().fadeToggle( "slow", "linear" );
        $("#searchNumber").fadeToggle( "fast", "linear" );
    });
    $("label[for='partNumber']").click(function() {
      event.preventDefault();
      $("#partNumber").parent().fadeToggle( "fast", "linear" );
      $("#searchNumber").fadeToggle( "slow", "linear" );
    });
    // using tag-editor
    $('#partNumber').tagEditor();
    //form validation
    $("#sendOrder").validate({
        rules: {
            vinCode: {
                vinCheck: true
            },
            year: {
                required: true
            },
            marka_id: {
                minlength: 2,
                required: true
            },
            models: {
                minlength: 2,
                required: true
            },
            inputSearch: {
                minlength: 5,
                maxlength: 200,
                required: true
            },
            name: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            email: {
                email: true,
                required: function(element) {
                    return (!$("#tel").hasClass('valid'));
                  }
            },
            tel: {
                required: function(element) {
                    return (!$("#email").hasClass('valid'));
                },
                minlength: 6,
                maxlength: 16,
            }
        },
        messages: {
            year: {
                required: "Виберіть рік випуску"
            },
            marka_id: {
                minlength: "Надто коротко",
                required: "Введіть марку автомобіля"
            },
            models: {
                minlength: "Надто коротко",
                required: "Введіть модель автомобіля"
            },
            inputSearch: {
                minlength: "Надто коротко",
                maxlength: "Максимум 200 символів",
                required: "Яку запчастину шукаєте?"
            },
            name: {
                required: "Введіть ім'я",
                minlength: "Надто коротко",
                maxlength: "Введіть коректне ім'я"
            },
            email: {
                required: "Введіть E-mail",
                email: "Введіть коректний E-mail"
            },
            tel: {
                required: "Введіть номер телефону",
                minlength: "Надто коротко",
                maxlength: "Введіть коректний номер"
            }
        }
    });
});
$('#sendOrder').submit(function() {
  event.preventDefault();
  var valid = $('#sendOrder').valid();
  if (valid) {
    $.ajax({
        type: "POST",
        url: "/mail.php",
        data: $('#sendOrder').serialize(),
        success: function(data){
          alert( "Заявку прийнято, очікуйте відповідь найближчим часом.");
        },
        error: function(data){
          alert( "Вибачте, трапилась помилка, спробуйте ще раз.");
        },
        complete: function(data) {
          $('#sendOrder').trigger('reset');
        }
    });
  }
  return false;
})
