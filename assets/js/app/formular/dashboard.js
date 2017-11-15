/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


$(document).ready(function () {
    $("#validate_formular").validate({
        rules: {
            nume_echipa: {
                required: true,
                minlength: 3
            },
            nume1: {
                required: true
            },
            prenume1: {
                required: true
            },
            email1: {
                required: true,
                email: true
            },
            telefon1: {
                required: true,
                number: true
            },
            nume2: {
                required: true
            },
            prenume2: {
                required: true
            },
            email2: {
                required: true,
                email: true
            },
            telefon2: {
                required: true,
                number: true
            },
            nume3: {
                required: true
            },
            prenume3: {
                required: true
            },
            email3: {
                required: true,
                email: true
            },
            telefon3: {
                required: true,
                number: true
            },
            cv: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).css("color", "red");
            $(element).parent().children("label").css("color", "red");
            $(element).css("border-color", "red");
        },
        unhighlight: function (element) {

            $(element).parent().children("label").css("color", "darkgreen");
            $(element).css("color", "darkgreen");
            $(element).css("border-color", "darkgreen");
        }
    });
//    $("#submit_formular").unbind().click(function(){
//        var n1=$("#nume_echipa").val();
//        var n2=$("#nume1").val();
//        var n3=$("#prenume1").val();
//        var n4=$("#email1").val();
//        var n5=$("#telefon1").val();
//        var n6=$("#nume2").val();
//        var n7=$("#prenume2").val();
//        var n8=$("#email2").val();
//        var n9=$("#telefon2").val();
//        var n10=$("#nume3").val();
//        var n11=$("#email3").val();
//        var n12=$("#prenume3").val();
//        var n13=$("#telefon3").val();
//        var n14=$("#limbaje").val();
//        var n15=$("#evnenimente").val();
//        var n16=$("#cv").val();
//        var n17=$("#comentariu").val();
//        console.log(n1);
//        console.log(n2);
//        console.log(n3);
//        console.log(n4);
//        console.log(n5);
//        console.log(n6);
//        console.log(n7);
//        console.log(n8);
//        console.log(n9);
//        console.log(n10);
//        console.log(n11);
//        console.log(n12);
//        console.log(n13);
//        console.log(n14);
//        console.log(n15);
//        console.log(n16);
//        console.log(n17);
//        $.ajax({
//            type: "POST",
//            url: "https://docs.google.com/forms/d/e/1FAIpQLScHOnqLdoW19oC4_oFYhTH2ozO1JWssc8eE0U7EIUOSi4YKgA/formResponse",
//            data: {
//                "entry.363572577": $("#nume_echipa").val(),
//                "entry.1389825973": $("#nume1").val(), 
//                "entry.1233260056": $("#prenume1").val(), 
//                "entry.1492666881": $("#email1").val(), 
//                "entry.499800497": $("#telefon1").val(), 
//                "entry.1211360606": $("#nume2").val(), 
//                "entry.258670267": $("#prenume2").val(), 
//                "entry.297679023": $("#email2").val(), 
//                "entry.1598296423": $("#telefon2").val(), 
//                "entry.1078270525": $("#nume3").val(), 
//                "entry.349424853": $("#prenume3").val(), 
//                "entry.1913646841": $("#email3").val(), 
//                "entry.1123813598": $("#telefon3").val(), 
//                "entry.108270187": $("#limbaje").val(), 
//                "entry.850850785": $("#evnenimente").val(), 
//                "entry.1944259231": $("#cv").val(), 
//                "entry.2030818575": $("#comentariu").val()
//            },
//            success: function (event) {
//                //nimic
//            },
//            error: function (xhr, status, error) {
//                //nimic
//            },
//        });
//    });
    $("#go_back").on("click", function () {
        window.location = _SITE_BASE;
    });
});
