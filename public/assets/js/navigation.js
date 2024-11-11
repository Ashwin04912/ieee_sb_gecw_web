$(window).scroll(function () {
    if ($(window).scrollTop() >= 150) {
        $('#ScrollJq').css('background', 'black');
    } else {
        $('#ScrollJq').css('background', 'transparent');
    }
});

$(document).ready(function () {
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

    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});
//de-bugging
$('a[href^="#"]').on('click', function(event) {
    var href = this.getAttribute('href');
    console.log('Clicked href:', href); // Log the href value
    var targetId = href.substring(1); // Remove the '#'
    console.log('Target ID:', targetId); // Log the target ID
    var target = $('#' + targetId); // Find the target element
    console.log('Target element:', target); // Log the target element
    if (target.length && targetId !== '') {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
