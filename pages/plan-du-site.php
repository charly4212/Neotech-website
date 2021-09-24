<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/nav.php");
?>

<div class="container">
    <div class="title">
        <h1 id="notre_activite">PLAN DU SITE</h1>
        <div class="eleven columns">
            <p>Vous recherchez une page en particulier? Ce plan du site vous aidera à naviguer au sein de nos pages.</p>
        </div>
    </div>
    <div class="contact">
        <div class="texte">
            <ul>
                <li>
                    <a class="table_link" href="/MyWebsite/index.php">Accueil</a>
                </li>
                <li>
                    <a class="table_link" href="/MyWebsite/pages/contact.php">Formulaire de contact</a>
                </li>
                <li>
                    <a class="table_link" href="/MyWebsite/pages/plan-acces.php">Plan d'accès</a>
                </li>
                <li>
                    <a class="table_link" href="/MyWebsite/pages/plan-du-site.php">Plan du site</a>
                </li>
                <li>
                    <a class="table_link" href="/MyWebsite/pages/mentions-legales.php">Mentions Légales</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/MyWebsite/templates/footer.php");
?>