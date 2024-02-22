<?php
require_once dirname(__DIR__) . '/utilities/header.php';


if (isset($_POST['delete'])) {
    if (isset($_GET['id'])) {
        removeCrew($db, $_GET['id']);
        echo "<div class='d-flex flex-column align-items-center'>l'equipage a bien été supprimer <a href='/crew/crew.php' class='btn btn-success'>Retour</a></div>";
    }
} else { ?>
    <form action="" method="post">
        <div class="d-flex flex-column align-items-center">
            <label for="">
                <?php
                if (!empty($_GET['page']) == 'crew') {
                    echo "Voulez-vous vraiment supprimer l'équipage ?";
                } elseif (!empty($_GET['page']) == 'fruit') {
                    echo "Voulez-vous vraiment supprimer ce fruit ?";
                } elseif (!empty($_GET['page']) == 'person') {
                    echo "Voulez-vous vraiment supprimer ce personnage ?";
                }
                ?>
            </label>
            <div class="">
                <input type="submit" class="btn btn-danger" name="delete" value="Oui">
                <a href="/index.php" class="btn btn-success">Non</a>
            </div>
        </div>
    </form>
<?php
}
