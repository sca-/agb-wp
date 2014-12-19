jQuery(document).ready(function ($) {

var map;
DG.then(function () {
    var mapInfo = '<h4>Контакты</h4><p>Адрес: г.Москва, м.Фили,<br/>Промышленный проезд д.3<br/><br/>Тел.: +7 (495) 769-6785<br/><br/>Время работы:<br/>с 10:00 до 18:00<br/><br/>Почта:<br/><a href="mailto:sale@agb-t8.ru">sale@agb-t8.ru</a></p>';
    map = DG.map('map', {
        "center": [55.730188, 37.645522],
        "zoom": 13
    });

    DG.marker([55.730188, 37.645522]).addTo(map).bindPopup(mapInfo).openPopup();
});


    $('.bxslider').bxSlider({
        mode: 'fade'
    });



    $(".nav-tabs").find('a').click(function () {
        if (!$(this).parent('li').hasClass('active')) {
            $(".nav-tabs").find('li').removeClass('active');
            $(this).parent('li').addClass('active');
        }

    });

    var modal = $('#myModal');

    modal.on('show.bs.modal', function (e) {
        $('.navbar-fixed-top').addClass('no-margin');
    });
    modal.on('hidden.bs.modal', function (e) {
        $('.navbar-fixed-top').removeClass('no-margin');
    });

    var feedback = $('#feedback');

    feedback.validate({
        rules: {
            firstname: "required",
            phone: "required",
            //size: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            firstname: "Пожалуйста, укажите ваше имя",
            phone: "Пожалуйста, укажите номер телефона",
            email: "Пожалуйста, укажите Ваш настоящий E-mail"
        },
        submitHandler: function(form) {
            var $form = $(form);
            var data = Object;
            $form.find('input[type="text"]').each(function(){
                data[$(this).attr('name')] = $(this).val();
            });
            $.ajax({
                type: 'post',
                url: 'feedback.php',
                data: data,
                success: function(data){
                    $form.html(data);
                    setTimeout(function(){
                        modal.modal('hide');
                    }, 5000);
                }
            });
        }
    });


});

$(function () {
    $("a[href*=#]:not([href=#])").click(function () {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var t = $(this.hash);
            if (t = t.length ? t : $("[name=" + this.hash.slice(1) + "]"), t.length)return $("html,body").animate({scrollTop: t.offset().top}, 1000), !1
        }
    })
});


jQuery(window).load(function() {
    var panel =  jQuery('.navbar');

    jQuery(document).scroll(function () {
        var top = jQuery(window).scrollTop();


        if(top>125 && !panel.hasClass('navbar-fixed-top'))
        {
            panel.addClass('navbar-fixed-top');
        } else if (top < 126 && panel.hasClass('navbar-fixed-top'))  {
            panel.removeClass('navbar-fixed-top');
        }




    });

});