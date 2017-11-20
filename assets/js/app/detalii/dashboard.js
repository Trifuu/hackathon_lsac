/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    $("#vegetarieni").tooltip({'trigger': 'focus', 'title': 'Numărul de persoane vegetariene.'});
    $("#vegani").tooltip({'trigger': 'focus', 'title': 'Numărul de persoane vegane.'});
    $("#preferinte").tooltip({'trigger': 'focus', 'title': 'Numărul de persoane fără preferințe.'});
    
    $("#detalii_submit").click(function () {
        var tricou1 = $("input[name*='membru1']:checked").val();
        var tricou2 = $("input[name*='membru2']:checked").val();
        var tricou3 = $("input[name*='membru3']:checked").val();
        var vegetarieni = $("#vegetarieni").val();
        var vegani = $("#vegani").val();
        var preferinte = $("#preferinte").val();
        var observatii = $("#observatii").val();
        var echipamente = $("#echipamente").val();
        var mesaj = $("#mesaj").val();
        var laptop = 0;
        var unitate = 0;
        var monitor = 0;
        if ($("#laptop1:checked").val() != undefined) {
            laptop++;
        }
        if ($("#laptop2:checked").val() != undefined) {
            laptop++;
        }
        if ($("#laptop3:checked").val() != undefined) {
            laptop++;
        }
        if ($("#unitate1:checked").val() != undefined) {
            unitate++;
        }
        if ($("#unitate2:checked").val() != undefined) {
            unitate++;
        }
        if ($("#unitate3:checked").val() != undefined) {
            unitate++;
        }
        if ($("#monitor1:checked").val() != undefined) {
            monitor++;
        }
        if ($("#monitor2:checked").val() != undefined) {
            monitor++;
        }
        if ($("#monitor3:checked").val() != undefined) {
            monitor++;
        }
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_detalii_echipa.php",
            data: {
                id_echipa: id_echipa,
                tricou1: tricou1,
                tricou2: tricou2,
                tricou3: tricou3,
                vegetarieni: vegetarieni,
                vegani: vegani,
                preferinte: preferinte,
                observatii: observatii,
                echipamente: echipamente,
                mesaj: mesaj,
                laptop: laptop,
                unitate: unitate,
                monitor: monitor
            },
            success: function (event) {
                alert("Modificarile au fost salvate");
            },
            error: function (xhr, status, error) {
                //nimic
            },
        });

    });
    $(".problema").click(function () {
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_click_button_detalii.php",
            data: {
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
