/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


$(document).ready(function () {
    $('#users_table').DataTable();
    console.log(permisiune);
    if (permisiune == 0 || permisiune == 1) {
        var checkbox = [];
        $("#users_table").on("click", ".checkbox_users", function () {
            if (this.checked) {
                checkbox.push($(this).attr("data-id"));
            } else {
                checkbox.pop($(this).attr("data-id"));
            }
            console.log(checkbox);
        });


        $("#users_table").on("click", ".del-user", function () {

            var r = confirm("Stergi contul " + $(this).attr("data-email") + "?");

            if (r == true) {
                $.ajax({
                    type: "POST",
                    url: _SITE_BASE + "includes/ajax/post_delete_users.php",
                    data: {id: $(this).attr("data-id"),
                        multiple: false},
                    success: function (event) {
                        window.location=event.trim();
                    },
                    error: function (xhr, status, error) {
                        //alert(status);
                    },
                });
            } else {
                return false;
            }
        });
        $("#users_table_filter label").before("<div class=\"btn-group users_buttons_general\" style=\"margin-right:10px;\">\n\
                                            <button id=\"add_button\" type=\"button\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Add</button>\n\
                                            <button id=\"delete_button\"type=\"button\" class=\"btn btn-danger btn-sm\"><i class='fa fa-times' aria-hidden=\"true\"></i> Delete</button>\n\
                                        </div>");
        var add_line=0;
        $("#add_button").on("click", function () {
            if(add_line==0){
                $(".add_line").show();
                add_line=1;
            }else
            if(add_line==1){
                $(".add_line").hide();
                add_line=0;
            }
        });
        $("#buton_add").click(function () {
            var nume = $(".add_line td:nth-child(" + (3 - permisiune) + ") input");
            var prenume = $(".add_line td:nth-child(" + (4 - permisiune) + ") input");
            var telefon = $(".add_line td:nth-child(" + (5 - permisiune) + ") input");
            var email = $(".add_line td:nth-child(" + (6 - permisiune) + ") input");
            var categorie = $(".add_line td:nth-child(" + (7 - permisiune) + ") input");
            var ok = 1;
            if (nume.val().trim() == "") {
                ok = 0;
                nume.css("border", "2px solid red");
            }
            if (prenume.val().trim() == "") {
                ok = 0;
                prenume.css("border", "2px solid red");
            }
            if (email.val().trim() == "") {
                ok = 0;
                email.css("border", "2px solid red");
            }
            if (telefon.val().trim() == "") {
                ok = 0;
                telefon.css("border", "2px solid red");
            }
            if (categorie.val().trim() == "") {
                ok = 0;
                categorie.css("border", "2px solid red");
            }
            if (ok == 1) {
                $.ajax({
                    type: "POST",
                    url: _SITE_BASE + "includes/ajax/post_add_users.php",
                    data: {
                        nume: nume.val().trim(),
                        prenume: prenume.val().trim(),
                        telefon: telefon.val().trim(),
                        email: email.val().trim(),
                        categorie: categorie.val().trim()
                    },
                    success: function (event) {
                        $(".add_line").hide();
                        $(".add_line td:nth-child(" + (3 - permisiune) + ") input").val("");
                        $(".add_line td:nth-child(" + (4 - permisiune) + ") input").val("");
                        $(".add_line td:nth-child(" + (5 - permisiune) + ") input").val("");
                        $(".add_line td:nth-child(" + (6 - permisiune) + ") input").val("");
                        $(".add_line td:nth-child(" + (7 - permisiune) + ") input").val("");
                        $(".alert").remove();
                        window.location=event.trim();
                    },
                    error: function (xhr, status, error) {
                        //alert(status);
                    },
                });
            }
        });
        $("#users_table").on("dblclick", ".modifica", function () {
            $("#modifica").parent().text($("#modifica").val());
            $("#modifica").remove();

            var text = $(this).text();
            $(this).text("");
            $(this).append("<input id=\"modifica\" type=\"text\" value=\"" + text + "\" style=\"width:" + ($(this).width() - 20) + "px;\">");
            $(".modifica-user").click(function () {
                var col = $("#modifica").parent().index() + permisiune;
                if (col == 2) {
                    col = "nume";
                } else if (col == 3) {
                    col = "prenume";
                } else if (col == 4) {
                    col = "tel";
                } else if (col == 5) {
                    col = "email";
                } else if (col == 6) {
                    col = "categorie";
                }
                var id = $("#modifica").parent().parent().children().eq((2 - permisiune)).attr("data-id");
                if (id == $(this).parent().parent().children().eq((2 - permisiune)).attr("data-id"))
                {
                    var val = $("#modifica").val();
                    $.ajax({
                        type: "POST",
                        url: _SITE_BASE + "includes/ajax/post_update_users.php",
                        data: {id: id,
                            col: col,
                            val: val
                        },
                        success: function (event) {
                            if (event.length > 0) {
                                window.location=event.trim();
                            } else {
                                $("#modifica").parent().text(val);
                                $("#modifica").remove();
                            }
                        },
                        error: function (xhr, status, error) {
                            //alert(error);
                        },
                    });
                }
            });
        });
        $("#delete_button").click(function () {

            if (checkbox.length > 0) {
                var r = confirm("Sigur stergi " + (checkbox.length == 1 ? "contul?" : "conturile?"));

                if (r == true) {
                    $.ajax({
                        type: "POST",
                        url: _SITE_BASE + "includes/ajax/post_delete_users.php",
                        data: {id: checkbox,
                            multiple: true},
                        success: function (event) {
                            window.location=event.trim();
                        },
                        error: function (xhr, status, error) {
                            //alert(error);
                        },
                    });
                } else {
                    return false;
                }
            } else {
                alert("Selectati minim un rand pentru stergere.");
            }

        });
    }

});
