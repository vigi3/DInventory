<?php $this->nameUser = null ?>
<?php $this->title = 'Réservation' ?>
<?php $this->subtitle = 'Réserver un Item' ?>
<?php $this->focusNavbarReserv = 'navbarFocus' ?>



<div class="row">
    <div class="col-1"></div>
    <div class="col-4">
        <form method="POST">
            <div class="mb-3">
                <label for="dateStart" class="form-label">Début</label>
                <input type="date" class="form-control fontColorItem" id="dateStart" name="dateStart" aria-describedby="dateStartHelp">
                <div id="dateStartHelp" class="form-text">Saisissez une date de Début de réservation</div>
            </div>
            <div class="mb-5">
                <label for="dateEnd" class="form-label">Fin</label>
                <input type="date" class="form-control fontColorItem" id="dateEnd" name="dateEnd" aria-describedby="dateEndHelp">
                <div id="dateEndHelp" class="form-text">Saisissez une date de Fin de réservation</div>
            </div>
            <fieldset>
                <legend>Choisissez un produit</legend>
                <div class="mb-3">
                    <label for="SelectItem" class="form-label">Sélectionnez un Item</label>
                    <select id="SelectItem" class="form-select fontColorItem" name="itemSelect">
                        <?php foreach ($searchItemList as $oneSearchItem) : ?>
                            <?php if ($oneSearchItem['stateI'] == 3) : ?>
                                <option value="<?= $oneSearchItem['nameI'] ?>"><?= $oneSearchItem['nameI'] ?></option>
                            <?php elseif ($oneSearchItem['stateI'] == 2) : ?>
                                <option value="<?= $oneSearchItem['nameI'] ?>"><?= $oneSearchItem['nameI'] ?></option>
                            <?php elseif ($oneSearchItem['stateI'] == 1) : ?>
                                <option value="<?= $oneSearchItem['nameI'] ?>"><?= $oneSearchItem['nameI'] ?></option>
                            <?php elseif ($oneSearchItem['stateI'] == 0) : ?>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </fieldset>
            <input type="submit" class="btn submitResButton" value="Réserver" id="submitReserv" name="submitReserv">
        </form>
    </div>
</div>