<!-- Google tag (gtag.js) -->

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-VJK9Z7X668');

$(".hamburger").click(function () {
    $(".totalNav").toggle("slow", function (){
        // Animatie compleet.
    });
});


$(document).ready(function() {
    var container = $('.image-container');
    var containerRect = container[0].getBoundingClientRect();
    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();

    $(document).mousemove(function(e) {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
        var centerX = viewportWidth / 2;
        var centerY = viewportHeight / 2;
        var deltaX = mouseX - centerX;
        var deltaY = mouseY - centerY;
        var rotateX = (-deltaY / centerY) * 25;
        var rotateY = (deltaX / centerX) * 25;
        container.css({
            'transform': 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)',
            '-webkit-transform': 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)',
            '-moz-transform': 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)'
        });

        // Check if image is in the viewport
        var rect = container[0].getBoundingClientRect();
        var visible = rect.top < viewportHeight && rect.bottom >= 0 && rect.left < viewportWidth && rect.right >= 0;
        if (!visible) {
            container.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none'
            });
        }
    });
});




const $toggleButton = $('#footer-toggle');
const $footer = $('footer').eq(0);

function toggleFooter($toggleButton, $footer) {
    $toggleButton.on('click', function() {
        $footer.slideToggle(500, function() {
            if ($footer.is(":visible")) {
                $toggleButton.find('i').removeClass('fa-arrow-up').addClass('fa-arrow-down').text('Inklappen');
            } else {
                $toggleButton.find('i').removeClass('fa-arrow-down').addClass('fa-arrow-up').text('Uitklappen');
            }
        });
    });
}toggleFooter($('#footer-toggle'), $('footer').eq(0));





