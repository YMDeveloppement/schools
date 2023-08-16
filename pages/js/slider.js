$(document).ready(() => {
    $('.slideTesting').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
    });
});

$(".slideTesting div h3").addClass("newh3");
$(".slideTesting div a").addClass("newh3");

$('.box').click(function(){
    $('.box').each(function(){
        $(this).removeClass('active_box');
        $("a.active_box").removeClass('active_box');
        
    })
    $(this).toggleClass('active_box');
    $('.box.active_box a').toggleClass('active_box');

})
