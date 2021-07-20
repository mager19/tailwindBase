//Run Functions Theme
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel'
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

(function ($) {

    // Slick
    $(".slickDemo").slick({
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        dots: true,
        slidesToScroll: 1,
        mobileFirst: true,
        autoplaySpeed: 3000,
        autoplay: true,
        speed: 500,
    });

    // Menu Mobile Plugin FPS Menu
    document.querySelector("#menumobile").addEventListener("click", (e) => {
        e.preventDefault();
        fps_mmenu.open();
    });
})(jQuery);
