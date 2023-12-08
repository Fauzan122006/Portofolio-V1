<?php
require "functions.php";

$projek = query("SELECT * FROM projek");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio MohFauzan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/images/favicons/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <img src="/images/Logo/logo-no-background.png" class="me-2" height="40" alt="MDB Logo" loading="lazy" />
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="certificate.php">Certificate</a></li>
            <li><a href="contact.html">Contact</a></li>
            <button type="button" class="btn btn-dark btn-rounded" id="NightModeButton">DarkMode</button>
        </ul>
    </div>
    <main>
        <section class="certificate">
            <div class="row row-cols-1 row-cols-md-3 g-4" id="card">
                <?php foreach($projek as $row ) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/Data/project/<?= $row["gambar"]; ?>" class="card-img-top" alt="<?= $row["nama"]; ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"] ?></h5>
                            <p class="card-text">
                                <?= $row["deskripsi"] ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= $row["link"] ?>" class="btn btn-primary">Preview</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 MohFauzan</p>
    </footer>
    <script src="main.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>