<?php
function backIndex()
{ ?>
    <div class="">
        <?php if ($_GET['q'] == 'perso') { ?>
            <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-info">voir les personnages</a>
        <?php } elseif ($_GET['q'] == 'fruit') { ?>
            <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-info">voir les fruits</a>
        <?php } elseif ($_GET['q'] == 'crew') { ?>
            <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-info">voir les equipages</a>
        <?php } ?>
        <a href="/" class="btn btn-info">accueil</a>
    </div> <?php
        }
