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
    $(".boxPermi").css("top", "-200%")
    $(".popup_permi").css("visibility","hidden")
})
$(".closeListDoc").click(function(){
    $(".listDoc").css("top", "-200%")
    $(".popup_permi").css("visibility","hidden")
})
$(".add-add").click(function(){
    $(".ajtDoc").css("visibility", "visible")
    $(".boxPermi").css("top", 0)
    
});
$(".folder-icon").click(function(){
    $(".showDoc").css("visibility", "visible")
    $(".listDoc").css("top", 0)
    
});
// $(".folder-icon").click(function(){
//     $(".ajtDoc").css("visibility", "visible")
//     $(".boxPermi").css("top", 0)
// });
$(".popup_permi").click(function(event){
    let x = document.querySelectorAll(".popup_permi");
    x.forEach(element => {
        if (event.target == element) {
            console.log(x)
            $(".boxPermi").css("top", "-200%")
            $(".listDoc").css("top", "-200%")
            // $(".popup_permi").css("transition",".8s")
            $(".popup_permi").css("visibility","hidden")
        }
    });
    // console.log(event.target == x)
});

