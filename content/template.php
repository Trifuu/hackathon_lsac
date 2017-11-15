<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <title><?php echo $title_app_title . $title_app_separator . $title_app_name; ?></title>
        <link rel="shortcut icon" href="<?php echo _SITE_CSS."img/logoheader.png" ?>" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if ($page != "login") { ?>
            <link rel="stylesheet" href="<?php echo _SITE_CSS ?>bootstrap.min.css">
        <?php } ?>
        <link rel="stylesheet" href="<?php echo _SITE_CSS ?>/font-awesome-4.7.0/css/font-awesome.min.css">
        <?php
        if (count($css) > 0) {
            foreach ($css as $row) {
                echo '<link rel="stylesheet" href="' . _SITE_CSS . $row . '">';
            }
        }
        ?>

        <link rel="stylesheet" href="<?php echo _SITE_CSS ?>styles.css">

    </head>
    <body style="<?php echo ($page == "home" || $page == "login")? 'background-color:#333333' : "";
        echo ($page == "formular" || $page=="detalii") ? "background-image: url('" . _SITE_CSS . "img/form.png')" : "";?>" >
        <?php if($page=="home" || $page=="formular")
        {
        ?>
        <div class="btn-group btn-group-sm" role="group" style="position:absolute;right: 10px;top: <?php echo $page=="formular"? "10px":"70px"; ?>;z-index: 3">
            <button type="submit" class="btn btn-warning" id="limba_ro" style="cursor:pointer;">RO</button>
            <button type="submit" class="btn btn-info" id="limba_en" style="cursor:pointer;">EN</button>
        </div>
        <?php }
        if ($page != "login" && $page != "formular") {
            require_once _ROOT_CONTENT . "header.php";
        }
        require_once $content;
        if ($page != "home" && $page != "login" && $page != "formular") {
            require_once _ROOT_CONTENT . "footer.php";
        }
        if ($page == "home") {
            
        }
        
        ?>
        <script>var _SITE_BASE = "<?php echo _SITE_BASE; ?>";</script>
        <script src="<?php echo _SITE_JS ?>jquery-3.2.1.min.js"></script>
        <script src="<?php echo _SITE_JS ?>popper.min.js"></script>
        <script src="<?php echo _SITE_JS ?>bootstrap.min.js"></script>
        <script src="<?php echo _SITE_JS ?>all.js"></script>
        <?php
        if (count($js) > 0) {
            foreach ($js as $row) {
                echo '<script src="' . _SITE_JS . $row . '"></script>' . "\r\n";
            }
        }
        ?>
    </body>
</html>