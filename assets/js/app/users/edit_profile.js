/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */
$(document).ready(function () {

    $("#parola_veche").val("");
    $("#parola").val("");
    $("#parola_noua").val("");
    
    $('[data-toggle="popover"]').popover();

    $("#edit_account").validate({
        rules: {
            nume: {
                required: true,
                minlength: 1
            },
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            var r = confirm("Salvati modificarile?");
            if (r == true) {
                form.submit();
            } else {
                return false;
            }
        },
        highlight: function (element) {
            
            $(element).css("color", "red");
            $(element).parent().children("label").css("color", "red");
            $(element).css("border-color", "red");
        },
        errorPlacement: function (error, element) {
            //return true;
        },
        unhighlight: function (element) {
            
            $(element).parent().children("label").css("color", "darkgreen");
            $(element).css("color", "darkgreen");
            $(element).css("border-color", "darkgreen");
        }
    });

    $("#edit_password").validate({
        rules: {
            parola: {
                required: true,
                minlength: 6
            },
            parola_noua: {
                required: true,
                minlength: 6,
                equalTo: "#parola"
            },
            parola_veche: {
                required: true,
                minlength: 6
            }
        },
        submitHandler: function (form) {
             var r = confirm("Salvati modificarile?");
            if (r == true) {
                form.submit();
            } else {
                return false;
            }
        },
        highlight: function (element) {
            
            $(element).css("color", "red");
            $(element).parent().children("label").css("color", "red");
            $(element).css("border-color", "red");
        },
        errorPlacement: function (error, element) {
            var placement = $(element).data("error");
            if (placement) {
                $(placement).append(error);
            } else {
                error.insertAfter(element);
            }
        },
        unhighlight: function (element) {
            $(element).parent().children("label").css("color", "darkgreen");
            $(element).css("color", "darkgreen");
            $(element).css("border-color", "darkgreen");
        }
    });

});
