/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */
$(document).ready(function () {

    $("#parola").val("");
    $("#email").val("");

    $("#login_form").validate({
        rules: {
            parola: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).css("border-color", "red");
        },
        unhighlight: function (element) {
            $(element).css("border-color", "#fff");
        }
    });

});
