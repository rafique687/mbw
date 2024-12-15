/**
 * Created by Malal91 and Haziel
 * Select multiple email by jquery.email_multiple
 * **/

(function($) {

    $.fn.email_multiple = function(options) {

        let defaults = {
            reset: false,
            fill: false,
            data: null
        };

        let settings = $.extend(defaults, options);
        let email = "";

        return this.each(function() {
            $(this).after("<span class=\"to-input\"></span>\n" +
                "<div class=\"all-mail\"></div>\n" +
                "<input type=\"text\" name=\"email\" class=\"enter-mail-id\" placeholder=\"Enter Number ...\" />");
            let $orig = $(this);
            let $element = $('.enter-mail-id');
            $element.keydown(function(e) {
                $element.css('border', '');
                if (e.keyCode === 44 || e.keyCode === 188) {
                    let getValue = $element.val();
                    var mob = /^[1-9]{1}[0-9]{9}$/;
                    if (mob.test(getValue)){
                        $('.all-mail').append('<span class="email-ids" id=' + getValue + '>' + getValue + '<span class="cancel-email" id=' + getValue + '>x</span></span>');
                        $element.val('');

                        email += getValue + ','
                        $("#mailid").val(email);
                        $("#cl").val(email);
                    } else {
                        $element.css('border', '1px solid red')
                    }
                }

                $orig.val(email.slice(0, -1))
            });

          
            if (settings.data) {
                 var mob = /^[1-9]{1}[0-9]{9}$/;
                $.each(settings.data, function(x, y) {
                    if (mob.test(y)) {
                        $('.all-mail').append('<span class="email-ids">' + y + '<span class="cancel-email">x</span></span>');
                        $element.val('');

                        email += y + ';'
                    } else {
                        $element.css('border', '1px solid red')
                    }
                })

                $orig.val(email.slice(0, -1))
            }

            if (settings.reset) {
                $('.email-ids').remove()
            }

            return $orig.hide()
        });
    };

})(jQuery);