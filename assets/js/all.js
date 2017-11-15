/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



$(document).ready(function () {
    function ajax_change_limba(limba) {
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_change_limba.php",
            data: {limba: limba },
            success: function (event) {
                location.reload();
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    }
    $("#limba_ro").on("click", function () {
        ajax_change_limba("ro");
    });
    $("#limba_en").on("click", function () {
        ajax_change_limba("en");
    });
});