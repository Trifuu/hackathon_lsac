<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>

<div class="container-fluid" style="z-index: 2;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 70px;text-align: center;">
        <h2 style="color:#018EBE;font-family: got;">FAQ</h2>
    </div>
    <p style="max-height: 100%;margin-top: 20px;color: #018EBE;font-size: 16px;">
        <?php if($limba=="en"){
            echo "Because we know that before a competition like this there are always lots "
            . "of questions about the methodology of the contest, this section is meant to "
            . "respond to all that doubt. Below are the most frequently asked questions, "
            . "alongside the associated answers.";
        } else{
            echo "Cum înaintea unei astfel de competiții există întotdeauna întrebări legate"
            . " de modul de desfășurare a concursului, această secțiune este menită să "
            . "rezolve eventualele neclarități . Mai jos se regăsesc ele mai frecvente "
            . "întrebări, alături de răspunsurile asociate acestora.";
        }
        ?>
    </p>
    <?php for ($i = 0; $i < count($mesaj); $i += 2) { ?>
        <p class="accordion" style="<?php echo $i == 0 ? 'margin-top: 30px;' : "" ?>">
            <?php echo (($i + 2) / 2) . ". " . $mesaj[$i]; ?>
        </p>
        <div class="panel">
            <?php echo $mesaj[$i + 1]; ?>
        </div>
    <?php } ?>
</div>
