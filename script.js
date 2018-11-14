$(document).ready(function() {
    $('.slider').bxSlider();

    var products = $(".product");
    var more = $("#more");

    for (var i = 0; i < products.length; i++) {
        if (i > 5) {
            $(products[i]).css("display", "none");
        }
    }

    $(more).click(function(){
        $(more).css("display", "none")
        if ($(products).css("display", "none")){
            ($(products).css("display", "inline-block"))
        }

    })



});
