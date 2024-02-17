<?php
define("CHEMIN_DE_LIMAGE", "assets/img/test/");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (isset($_FILES['pathimg']) && $_FILES['pathimg']['error'] == 0) {

        $fileTmpPath = $_FILES['pathimg']['tmp_name'];
        $fileName = $_FILES['pathimg']['name'];


        $newFileName = str_replace(['_','',' '], '-', $fileName);
        // Déplace le fichier téléchargé vers le répertoire de destination
        $destPath = CHEMIN_DE_LIMAGE . $newFileName;
        // Vérifie si le déplacement du fichier a réussi
         if (move_uploaded_file($fileTmpPath, $destPath)) {
             echo "Le fichier a été uploadé avec succès !";
         } else {
             echo "Erreur lors de l'upload du fichier.";
         }
    } else {
        echo "Erreur lors de la récupération du fichier.";
    }
}
?>
<!-- ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Back Office : Upload de fichier</title>
</head>

<body class="d-flex flex-column vh-100">
    <main class="flex-grow-1 py-4">
        
        <div class="container py-4">
            <form action="#" method="POST" class="col-6 mx-auto" enctype="multipart/form-data">
                <fieldset>
                    <legend>Upload fichier</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="productPathImg" class="form-label">Fichier image : </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="3072000" />
                            <input type="file" name="pathimg" id="productPathImg" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="submit" name="submitProduct" value="Enregistrer" class="btn btn-primary">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </main>
</body>

</html> -->