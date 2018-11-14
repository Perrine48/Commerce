$(document).ready(function() {
    $('.slider').bxSlider();

    var products = $(".product");
    var more = $("#more");
    var search = $("#search");
    var form = $("#formsearch")

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

    $(search).click(function(){
        if ($(form).css("display", "none")) {
            $(form).css("display", "inline-block")
        }
    })



});
