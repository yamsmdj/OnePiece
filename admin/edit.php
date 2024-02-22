<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/onepiece.fn.php';

sendUserConnect();
if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) {

    $crewPersoFruit = getAllCrewPersoFruit($db);

?>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Equipage</th>
                <th scope="col">Personnage</th>
                <th scope="col">Fruit du demon</th>
                <th scope="col">Modification</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($crewPersoFruit as $row) : ?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['crewname'] ?></td>
                    <td><?= $row['personame'] ?></td>
                    <td><?= empty($row['fruitname']) ? 'pas de fruit' : $row['fruitname'] ?></td>
                    <td class="text-center"> <a href="/crud/update.php?q=id=<?= $row['id'] ?>" class="btn btn-warning">update</a></td>
                    <td class="text-start"> <a href="/crud/delete.php?q=id=<?= $row['id'] ?>" class="btn btn-danger">delete</a></td>
                </tr>
            <?php
            endforeach;
            var_dump($row['id']);
            ?>
        </tbody>
    </table>

<?php } else {
    header('Location: ../connexion/login.php');
} ?>