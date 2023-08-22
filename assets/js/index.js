//clicl kare tyare change karva mate start 
$(document).ready(function () {
    $(".new").click(function () {
        $(".product-2").hide();
        $(".product-5-click").show();
        $(".product-5").hide();
        $(".product-2-non").show();
    });
});

$(document).ready(function () {
    $(".all").click(function () {
        $(".product-2").show();
        $(".product-5-click").hide();
        $(".product-5").show();
        $(".product-2-non").hide();
    });
});


// incriment decriment start
a = 0;
function incriment() {
    a++;
    document.getElementById('num').value = a;
}

function decriment() {
    if (a > 0) {
        a--;
        document.getElementById('num').value = a;
    }
}

// product detail show karva mate 
$(document).ready(function () {
    $(".icon").click(function () {
        $(".details-inner").show();
        $(".item").addClass("blur");
    });
    $(".close").click(function () {
        $(".details-inner").hide();
        $(".item").removeClass("blur");
    });
});


$(document).ready(function () {
    $(".best-icon").click(function () {
        $(".main-hide").show();
        $(".item").addClass("blur");
        $(".offer-outer").addClass("blur");
    });
    $(".close").click(function () {
        $(".main-hide").hide();
        $(".item").removeClass("blur");
        $(".offer-outer").removeClass("blur");
    });
});


