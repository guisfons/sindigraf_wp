$(document).ready(function (){
    $('.header-menu-icon').on('click', function () {
        $('.nav').toggle();
    });

    // Slider Home
    $('.main-slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
    })

    $('.eventos-box').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,

        responsive: [
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ]
    })

    $('.formulario-tab').on('click', function () {
        $(this).parent().toggleClass('formulario-container--active');
    });

    // Galeria modal

    $('.modal-slider').slick({
        // prevArrow: $('.modal-arrow-before'),
        // nextArrow: $('.modal-arrow-after'),

        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.modal-close').on('click', function () {
        $('.modal').removeClass('modal--active');
    });

    $('.galeria-card-link').on('click', function () {
        $(this).parent().siblings('.modal').addClass('modal--active');
        $('.modal-slider').slick('refresh');

        let ultimoItem = $('.modal--active .modal-slider img').last().data('item');
        
        $('.modal--active .modal-paginacao-item').text('/0' + ultimoItem);
    });

    $(".modal-slider").on("afterChange", function () {
        let ativoItem = $('.modal--active .modal-slider .slick-current').data('item');
        $('.modal--active .modal-paginacao-item--active').text('0'+ativoItem);
    });

    $('.slider-photos').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.depositions-slider-box').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
  
    $('.telefone').mask('(00) 0000-0000');
})