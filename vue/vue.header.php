<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-Gi-Oh! Exp</title>
    <link rel="stylesheet" href="css/Acceuil.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>

<body>
<section class="top-page" style="background: <?php echo $background; ?> no-repeat center center; background-size: cover;">
    <header class="header">
        <a href="./?action=Acceuil"><img src="images/logoYugioh!.png" alt="Logo du site"></a>
        <div class="Dnav">
            <nav class="nav">
                <li><a href="./?action=presentation">Présentation</a></li>
                <li><a href="./?action=cartes">Carte A Avoir</a></li>
                <li><a href="./?action=personnages">Personnages</a></li>
            </nav>
        </div>
    </header>
    <div class="landing page">
        <h1 class="big-title"><?php echo $title; ?></h1>
        <a class="scroll-down" href="#services">Scroll<i class="fas fa-angle-down"></i></a>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const currentPage = window.location.search; // Récupère la chaîne de requête, ex: ?action=presentation

    document.querySelectorAll('.nav a').forEach(link => {
        if (link.getAttribute('href').includes(currentPage)) {
            link.classList.add('active'); // Ajoute 'active' au lien correspondant
        }

        link.addEventListener('click', function () {
            // Supprime 'active' des autres liens
            document.querySelectorAll('.nav a').forEach(el => el.classList.remove('active'));
            this.classList.add('active'); // Ajoute 'active' au lien cliqué
        });
    });
});
</script>
</section>