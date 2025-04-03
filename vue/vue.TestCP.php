<?php
include_once "vue.header.php";
?>
<html>
<head>
    <link rel="stylesheet" href="css/TestC.css">
</head>
<body>
    <section class="Text-base">
        <p class="section-title8">Les arc de l'anime Yu-Gi-Oh! introduit au fûre et à mesure 
            de nouvelles cartes qui permette de jouer différament tout en 
            amennant des stratègie de plus en plus complèxe avec les très nombreuse cartes.
        </p>
        </section>
        <section class="Text-base">
        <p class="section-title8">Pour ce faire une petite présentation de deck.
        </p>
    </section>
    <section class="best-items" id="services">
        <h2 class="section-title5">Choisi t'on deck</h2>
        <div class="content">
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Yûgi Moto deck
                        Magicien Sombre</h1>
                        <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr/'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                    <img src="images/MagSimg.png" height="600px">
                    
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Yusei Fudo deck
                    Synchro</h1>
                    <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr/'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                    <img src="images/dragonP.png" height="600px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Jaden Yuki deck
                    Fusion Hero</h1>
                    <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                    <img src="images/heroE.png" height="600px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Yūma Tsukumo deck
                    Numero Utopie</h1>
                    <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr/'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                    <img src="images/number_39.png" height="600px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Yuya Sakaki deck
                    yeux impairs</h1>
                    <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr/'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                    <img src="images/odd_eyes_dragon.png" height="600px">
                </div>
            </div>
            <div class="menu">
                <div class="perso">
                    <div class="left"></div>
                </div>

                <div class="text-bg">    
                    <h1 class = "section-title9">Yusaku Fujiki deck
                    Décodeur Bavard</h1>
                    <button class="read-more-btn" onclick="location.href='https://www.yugioh-card.com/eu/fr/'">En savoir plus</button>
                </div>

                <div class="perso-bg">
                <div class="audessus">
                </div>
                
                    <img src="images/decode_talker.png" height="600px">
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
