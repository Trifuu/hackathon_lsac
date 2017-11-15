/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    if (screen.width < 570) {
        $("#data").css({"margin-top": "20px", "height": "70px"});
        $("#uipath div").css({"margin-top": "40px"});
        $("#uipath img").css({"margin-bottom": "0px"});
        $("#locatia").css({"margin-top": "30px", "height": "100px"});
    }
    if (screen.width < 330) {
        $("#logo_lsac_about").css({"width": (screen.width-30)+"px", "height": (screen.width-30)+"px"});
    }
    if (screen.width < 430) {
        $("#img1").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 380) {
        $("#img2").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 375) {
        $("#img3").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 385) {
        $(".organizatori_casute").css({"width": (screen.width-30)+"px"});
    }
    
    var participanti = 0;
    var ore = 0;
    var echipe = 0;
    var premii = 0;

    function increment(max) {
        if (participanti == max) {
            // stop when it hits 300
            window.clearInterval(id);
            return;
        }
        participanti++;
        $("#participanti").text(participanti);
    }
    var id = window.setInterval(function(){increment(60);}, 50);
    
    function increment2(max) {
        if (ore == max) {
            // stop when it hits 300
            window.clearInterval(id2);
            return;
        }
        ore++;
        $("#ore").text(ore);
    }
    var id2 = window.setInterval(function(){increment2(24);}, 125);
    
    function increment3(max) {
        if (echipe == max) {
            // stop when it hits 300
            window.clearInterval(id2);
            return;
        }
        echipe++;
        $("#echipe").text(echipe);
    }
    var id2 = window.setInterval(function(){increment3(20);}, 150);
    
    function increment4(max) {
        if (premii == max) {
            // stop when it hits 300
            window.clearInterval(id2);
            return;
        }
        premii++;
        $("#castigatori").text(premii);
    }
    var id2 = window.setInterval(function(){increment4(3);}, 1000);

});