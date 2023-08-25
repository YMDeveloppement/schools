$(document).ready(() => {
    $('.slideTesting').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
    });
    $('.box_autorecup').slick();

    $('.list_tuteurs').slick({
        slidesToShow: 2,
        nextArrow: '.nextFr',
        prevArrow: '.prevFr',
    });
    
    $('.tuteurFamile').slick({
        slidesToShow: 2,
        nextArrow: '.nextTut',
        prevArrow: '.prevTut',
    });
    // $('.listTuteur').slick({
    //     slidesToShow: 2,
    //     nextArrow: '.nextFr',
    //     prevArrow: '.prevFr',
    // });
    // $('.listFrere').slick({
    //     nextArrow: '.nextFr',
    //     prevArrow: '.prevFr',
    //     dots: false,
    // });
    
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

$(".close").click(function(){
    console.log($("popup_permi"))
    $(".popup_permi").css("display","none")
})
$(".add-add").click(function(){
    $(".popup_permi").css("display", "flex")
});
$(".popup_permi").click(function(event){
    let x = document.querySelector(".popup_permi");
    console.log(event.target == x)
    if (event.target == x) {
            // console.log(x)
            $(this).css("display", "none")
        }
});

