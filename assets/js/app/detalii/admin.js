/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    $("#lista_select").on("change", function () {
        var id = this.value;
        if (typeof echipe[id] === 'undefined') {
            $("#membru1").text("");
            $("#membru2").text("");
            $("#membru3").text("");
            $("#vegetarieni").val("");
            $("#vegani").val("");
            $("#preferinte").val("");
            $("#observatii").val("");
            $("#laptop").val("");
            $("#unitate").val("");
            $("#monitor").val("");
            $("#echipamente").val("");
            $("#mesaj").val("");
        } else {
            $("#membru1").text(echipe[id]["tricou1"]);
            $("#membru2").text(echipe[id]["tricou2"]);
            $("#membru3").text(echipe[id]["tricou3"]);
            $("#vegetarieni").val(echipe[id]["vegetarieni"]);
            $("#vegani").val(echipe[id]["vegani"]);
            $("#preferinte").val(echipe[id]["preferinte"]);
            $("#observatii").val(echipe[id]["observatii"]);
            $("#laptop").val(echipe[id]["laptop"]);
            $("#unitate").val(echipe[id]["unitate"]);
            $("#monitor").val(echipe[id]["monitor"]);
            $("#echipamente").val(echipe[id]["echipamente"]);
            $("#mesaj").val(echipe[id]["mesaj"]);
        }
    });
});
