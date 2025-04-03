<?php
include_once "vue.header.php";
?>
<html>
<head>
    <link rel="stylesheet" href="css/TestP.css">
</head>
<body>  
    <section class="Text-base">
        <p class="section-title8">L'anime Yu-Gi-Oh! à connu de nombreux arc pour ce faire 
            je me suis amusé à faire une selection des personnages principaux
        </p>
    </section>
    <section class="best-items" id="services">
        <h2 class="section-title6">Choisi ton Personnage</h2>
        <div class="content">
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Yûgi Moto</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg1.png" height="800px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Yusei Fudo</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg2.png" height="800px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Jaden Yuki</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg3.png" height="800px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Yūma Tsukumo</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg4.png" height="800px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Yuya Sakaki</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg5.png" height="800px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                    <div class="right">
                        <h1>Yusaku Fujiki</h1>
                    </div>
                </div>
                <div class="perso-bg">
                    <img src="images/pngegg6.png" height="800px">
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
    $(document).on("click", ".perso", function (event) {
        // Empêche l'action si le menu parent est déjà actif
        if ($(this).closest(".menu").hasClass("active")) {
            return; // Si déjà actif, ne rien faire
        }

        // Ajoute la classe active au parent .menu de la div perso cliquée, et la retire des autres
        $(this).closest(".menu").addClass("active").siblings().removeClass("active");
    });

    // Empêcher la fermeture ou modification si on clique ailleurs
    $(document).on("click", function (event) {
        if (!$(event.target).closest('.perso').length) {
            // Rien ne se passe si le clic est à l'extérieur des éléments .perso
        }
    });
</script>
</body>
</html>

<?php
    include_once "vue.footer.php";
?>

