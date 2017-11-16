<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Test candidat</title>
        <link rel="stylesheet" type="text/css" href="assets/global.css"> 
        <link rel="stylesheet" type="text/css" href="assets/btn.css"> 
        <link rel="stylesheet" type="text/css" href="assets/modal.css"> 
        <link rel="stylesheet" type="text/css" href="assets/list.css"> 
    </head>

    <body>
        <div class="container">
            <h1>Listing d'applications</h1>
            <?php
            //  _ _     _   _             
            // | (_)___| |_(_)_ __   __ _ 
            // | | / __| __| | '_ \ / _` |
            // | | \__ \ |_| | | | | (_| |
            // |_|_|___/\__|_|_| |_|\__, |
            //                      |___/ 

            ?>
            <div class="list">
                <?php 
                // Votre code ici
                ?>
            </div>
        </div>

        <?php
        //                      _       _ 
        //  _ __ ___   ___   __| | __ _| |
        // | '_ ` _ \ / _ \ / _` |/ _` | |
        // | | | | | | (_) | (_| | (_| | |
        // |_| |_| |_|\___/ \__,_|\__,_|_|
        // 
        ?>
        <div class="modal modal--visible">
            <div class="modal__header">
                Nom de l'élément
            </div>
            <div class="modal__body">
                <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
            </div>
            <div class="modal__footer">
                <a class="btn btn--inverse" href="#">annuler</a>
                <a class="btn" href="#">confirmer</a>
            </div>
        </div>
    </body>
</html>
