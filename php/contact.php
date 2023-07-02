<?php
include_once 'submit.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="http://localhost/deemerweb/src/html/contact">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" type="image/png" href="../img/icon.png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>Deemer | Contact</title>
</head>
<body>
    <header>
        <nav>
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="http://localhost/deemerweb"><img src="../img/header-img.png" alt="Logo Deemer" class="logo"></a>
            <ul>
                <li><a href="https://discord.com/api/oauth2/authorize?client_id=1003101646202613840&permissions=8&scope=bot%20applications.commands">Inviter</a></li>
                <li><a href="http://localhost/deemerweb/src/html/doc" class="docHeader">Documentation</a></li>
                <li><a href="https://discord.gg/CeYnsvnUyN">Support</a></li>
                <li><a href="https://www.patreon.com/user/membership?u=78983588">Donation</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>
    </header>
    <main>
        <div class="container">
            <form id="contactForm">
                <?php if(!empty($statusMsg)){ ?>
                    <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                <?php } ?>

                <h3>Remplissez ce formulaire</h3>
                <input value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" type= "text" name="name" id="name" placeholder="Prénom" required>
                <input value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" type= "email" name="email" id="email" placeholder="Email" required>
                <h5>Region</h5>
                <select name="region" id="region" required>
                    <option>Africa</option>
                    <option>Antarctica</option>
                    <option>Asia</option>
                    <option>Australia</option>
                    <option>Europe</option>
                    <option>North America</option>
                    <option>South America</option>
                </select>
                <input name="subject" id="subject" placeholder="Sujet" required>
                <textarea value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" id="message" name="message" rows="4" placeholder="Votre message"></textarea>
                <input type="hidden" name="_next" value="http://localhost/deemerweb/">
                <input type="hidden" name="_subject" id="subject_after" value="Support Deemer">
                <button class="g-recaptcha" data-sitekey="6LeceeAjAAAAAKa8FnLpU_hT5PrS3zsbgTYet5df" data-callback="onSubmit" data-action="submit" type="submit" id="buttonSubmit">Envoyer</button>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="bloc footer-pages">
                <h3>Pages</h3>
                <ul class="list-pages">
                    <li><a href="http://localhost/deemerweb">Accueil</a></li>
                    <li><a href="http://localhost/deemerweb/doc">Documentation</a></li>
                </ul>
            </div>
            <div class="bloc footer-contact">
                <h3>Contact</h3>
                <ul class="list-contact">
                    <li><a href="http://localhost/deemerweb/support">Serveur Support</a></li>
                    <li><a href="http://localhost/deemerweb/contact">Contacter le Support</a></li>
                    <li><p>Mail : deemer.bot@gmail.com</p></li>
                </ul>
            </div>
            <div class="bloc footer-credits">
                <h3>Credits</h3>
                <ul class="list-credits">
                    <li><p>Nezolf#6573 : Créateur, Gérant, Développeur</p></li>
                    <li><p>Guyguy#1731 : Développeur Web</p></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <h5><span>Copyright © 2022 Deemer</span></h5>
        </div>
    </footer>
    <script>
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
    </script>
</body>
</html>