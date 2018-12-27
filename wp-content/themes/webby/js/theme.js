$(document).ready(function(){
    $('#countdown').countdown('2019/03/16 15:00:00', function(event) {
        $('#clock-c').html(event.strftime('<h2>%D<span class="cdt-sm"> Days</span> %H<span class="cdt-sm"> Hrs</span> %M<span class="cdt-sm"> Mins</span> %S<span class="cdt-sm"> Secs</span> </h2>'));
    });
});


