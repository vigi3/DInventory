<?php $this->nameUser = null ?>
<?php $this->title = 'Gestion items' ?>
<?php $this->subtitle = 'Ajouter un nouvel item' ?>
<?php $this->focusNavbarAddItem = 'navbarFocus' ?>



<div class="row">
    <div class="col-1"></div>
    <div class="col-4">
        <form method="POST">
            <div class="mb-3">
                <label for="nameItem" class="form-label">Nom</label>
                <input type="text" class="form-control fontColorItem" id="nameItem" name="nameItem" aria-describedby="nameItemHelp">
                <div id="nameItemHelp" class="form-text">Saisissez le nom de l'item</div>
            </div>
            <div class="mb-5">
                <label for="typeNameItem" class="form-label">Type de l'item</label>
                <input type="text" class="form-control fontColorItem" id="typeNameItem" name="typeNameItem" aria-describedby="typeNameItemHelp">
                <div id="typeNameItemHelp" class="form-text">Saisissez un type d'item, exemple: Adaptateur</div>
            </div>
            <div class="mb-5">
                <label for="initialStock" class="form-label">Quantité initiale</label>
                <input type="number" class="form-control fontColorItem" id="initialStock" name="initialStock" aria-describedby="initialStockHelp">
                <div id="initialStockHelp" class="form-text">Saisissez la quantité initiale disponible</div>
            </div>
            <input type="submit" class="btn submitResButton" value="Valider" id="submitAddItem" name="submitAddItem">
        </form>
    </div>
</div>