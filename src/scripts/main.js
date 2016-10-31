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

        });
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
                required: true,
                email: true
            },
            tel: {
                required: true,
                minlength: 6,
                maxlength: 16
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
                email: "Це коректний E-mail"
            },
            tel: {
                required: "Введіть номер телефону",
                minlength: "Надто коротко",
                maxlength: "Введіть коректний номер"
            }
        },
        submitHandler: function() {
          //E-mail Ajax Send
          $("#sendOrder").submit(function() { //Change
              var th = $(this);
              $.ajax({
                  type: "POST",
                  url: "/mail.php",
                  data: th.serialize()
              }).done(function() {
                  alert("Дякуємо за замовлення! Незабаром ми з Вами зв'яжемося.");
                  setTimeout(function() {
                      // Done Functions
                      th.trigger("reset");
                  }, 1000);
              });
              return false;
          });
        }

    });

});
