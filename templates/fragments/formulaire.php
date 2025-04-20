<?php
    // Fragment Formulaire
?>
<!-- BLOCK HTML FORMULAIRE -->
<form action="<?= $actionform ?>" id="formulaires" class="form-notes" method="POST">
    <div class="title-form">
        <label for="titre" class="title-label-note"><?= $titre ?></label>
        <!-- RECUPERATION NAME POUR SQL -->
        <input type="text" id="titre" name="titreInput" placeholder="Saisie un titre">
    </div>
    <div class="description-form">
        <label for="description" class="title-label-description"><?= $description ?></label>
        <!-- RECUPERATION NAME POUR SQL -->
        <input type="text" id="description" name="descriptionInput">
    </div>
    <div class="cta-form-notes">
        <label for="send" class="labelNote"><?= $labelNote ?></label>
        <input type="submit" value="<?= $buttonNote ?>" id="send">
    </div>
</form>
