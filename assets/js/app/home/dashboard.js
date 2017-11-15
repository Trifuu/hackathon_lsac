/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 16, 2017 00:00:00").getTime();

    if (screen.width < 570) {
        $("#componente_mijloc").css({"position": "absolute", "margin-top": "350px", "margin-left": "-15px", "z-index": "2"});
        $("#logo_uipath div").css({"margin-top": "-50px"});
        $("#timer").css({"margin-top": "0px"});
    }
    if (screen.width < 330) {
        $("#logo_lsac").css({"width": (screen.width - 30) + "px", "height": (screen.width - 30) + "px"});
    }

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if (days == 0) {
            days = "00";
        } else if (days < 10) {
            days = "0" + days;
        }
        if (hours == 0) {
            hours = "00";
        } else if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes == 0) {
            minutes = "00";
        } else if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds == 0) {
            seconds = "00";
        } else if (seconds < 10) {
            seconds = "0" + seconds;
        }
        
        // Output the result in an element with id="demo"
        $("#days").text(days);
        $("#hours").text(hours);
        $("#minut").text(minutes);
        $("#second").text(seconds);

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            $("#timer").text("EXPIRED");
        }
    }, 1000);
});
