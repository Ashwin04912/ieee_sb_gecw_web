$(window).scroll(function() {
    if ($(window).scrollTop() >= 150) {
        $('#ScrollJq').css('background', 'black');
    } else {
        $('#ScrollJq').css('background', 'transparent');
    }
});

$(document).ready(function() {
var currentRoute = $('body').data('route-name');
if (currentRoute === 'home') {
$('#navbar').css({
    'background': 'transparent'
});
} else {
$('#navbar').css({
    'background': 'black',
    'opacity': '1'
});
}   

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});