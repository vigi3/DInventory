<?php $this->nameUser = null ?>
<?php $this->title = 'Réservation' ?>
<?php $this->subtitle = 'Réserver un Item' ?>
<?php $this->focusNavbarReserv = 'navbarFocus' ?>



<div class="row">
    <div class="col-1"></div>
    <div class="col-4">
        <form>
            <div class="mb-3">
                <label for="dateStart" class="form-label">Début</label>
                <input type="date" class="form-control" id="dateStart" aria-describedby="dateStartHelp">
                <div id="dateStartHelp" class="form-text">Saisissez une date de Début de réservation</div>
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Fin</label>
                <input type="date" class="form-control" id="dateEnd" aria-describedby="dateEndHelp">
                <div id="dateEndHelp" class="form-text">Saisissez une date de Fin de réservation</div>
            </div>
            <fieldset>
                <legend>Choisissez un produit</legend>
                <div class="mb-3">
                    <label for="SelectItem" class="form-label">Sélectionnez un Item</label>
                    <select id="SelectItem" class="form-select">
                        <option>Item</option>
                    </select>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-dark">Réserver</button>
        </form>
    </div>
</div>