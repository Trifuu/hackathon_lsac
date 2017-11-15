/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    
    if (screen.width < 385) {
        $("#casuta_contact_persoana").css({"width": (screen.width-30)+"px","height":"170px"});
        $("#email_about").css({"word-wrap":" break-word","margin-top":"0px"});
    }
    if (screen.width < 645) {
        $("#email_contact").css({"font-size": (20)+"px"});
    }
    
//    $("#contact_form").validate({
//        rules: {
//            name: {
//                required: true,
//                minlength: 5
//            },
//            email: {
//                required: true,
//                email: true
//            },
//            comentariu: {
//                required: true,
//                minlength: 10
//            }
//        },
//        submitHandler: function (form) {
//            form.submit();
//        },
//        highlight: function (element) {
//            $(element).css("border-color", "red");
//        },
//        unhighlight: function (element) {
//            $(element).css("border-color", "#fff");
//        }
//    });
    
    $("#submit_contact").click(function(){
        alert("merge");
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_send_email.php",
            data: {
                name:"Marius",
                email:"trifumarius01@gmail.com"
            },
            success: function (event) {
                //nimic
            },
            error: function (xhr, status, error) {
                //nimic
            },
        });
    });
});