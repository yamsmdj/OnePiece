<?php
require_once dirname(__DIR__) . '/utilities/header.php';
$tables = nameTable($db);
// var_dump($tables);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
</head>

<body>
    <div class="container">
        <h1>Select Ajax</h1>
        <p>lier les 3 select pour selectionner ce que l'on veut</p>
        <form action="">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="table" id="table" class="form-controle linked-select" data-target="#department" data-source="/list.php?type=department&filter=$id">
                            <option value="0">Selectionner votre page</option>
                            <?php
                            foreach ($tables as $row) {
                            ?>
                                <option value="<?= $row['id'] ?>"><?= $row['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="department" id="department" class="form-controle linked-select" data-target="#city" data-source="/list.php?type=city&filter=$id">
                            <option value="0">Selectionner celui que tu souhaites modifier</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="city" class="form-controle" id="city">
                            <option value="0">Selectionner celui que tu souhaites modifier</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="/js/main.js"></script>
</body>

</html>