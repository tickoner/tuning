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
var output = $('#engineVolumeInput');

$(document).on('input', 'input[type="range"]', function(e) {
      output.val(e.currentTarget.value);
});

$('input[type=range]').rangeslider({
  polyfill: false
});
//toastr
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
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
        $(this).toggleClass( "underlineBlack", 500, "easeOutSine" );
        $("#partNumber").parent().fadeToggle( "slow", "linear" );
    });
    //catalogues
    $("#catalogueLink").click(function() {
        event.preventDefault();
        $(this).toggleClass( "underlineBlack", 500, "easeOutSine" );
        $("#catalogueLinkDrop").fadeToggle( "slow", "linear" );

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
            engineVolume: {
                required: true,
                number: true,
                min:0.4,
                max: 8
            },
            marka_id: {
                minlength: 2,
                required: true
            },
            models: {
                minlength: 2,
                required: true
            },
            fuel: {
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
            engineVolume: {
                required: "Введіть об'єм двигуна",
                number: "Введіть число",
                min: "Число від 0.4 до 8",
                max:  "Число від 0.4 до 8"
            },
            models: {
                minlength: "Надто коротко",
                required: "Введіть модель автомобіля"
            },
            fuel: {
              required: "Оберіть вид палива"
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
//          toastr.info('Заявку прийнято, очікуйте відповідь найближчим часом.',"Увага!");
          $('#sendOrder .form-holder, .modal-footer').addClass('hidden');
          $('#sendOrder .form-success').show();
        },
        error: function(data){
          toastr.error('Вибачте, трапилась помилка, спробуйте ще раз.',"Увага!");
        },
        complete: function(data) {
          $('#sendOrder').trigger('reset');
          $('input').removeClass('valid');
          $('#year').selectpicker('refresh');
          $('#fuel').selectpicker('refresh');
        }
    });
  }
  return false;
});

$('#myModal').on('hidden.bs.modal', function (e) {
  $('#sendOrder .form-holder, .modal-footer').removeClass('hidden');
  $('#sendOrder .form-success').hide();
});
