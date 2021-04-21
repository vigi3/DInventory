<?php $this->nameUser = null ?>
<?php $this->title = 'Liste des items' ?>
<?php $this->subtitle = 'Tous les items existants' ?>
<?php $this->focusNavbarList = 'navbarFocus' ?>



<div class="row pt-3">
    <div class="col-1"></div>
    <div class="col-8 px-3">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th class="py-4" scope="col">Nom</th>
                    <th class="py-4" scope="col">Type</th>
                    <th class="py-4" scope="col">Status</th>
                    <th class="py-4" scope="col">Stock</th>
                    <th class="py-4" scope="col">Quantité</th>
                </tr>
            </thead>
            <tbody class="fontColorItem h-100">
            <?php foreach ($ItemLongList as $oneItemList): ?>
                <tr class="itemHover align-middle">
                    <td class="py-3"><?= $oneItemList['nameI'] ?></td>
                    <td class="py-3"><?= $oneItemList['typeI'] ?></td>
                    <td class="py-3">
                        <?php if ($oneItemList['stateI'] == 3): ?>
                            <p class="pillsBadge pillsGreen textPillsGreen text-center">En Stock</p>
                        <?php elseif ($oneItemList['stateI'] == 2): ?> 
                            <p class="pillsBadge textPillsOrange pillsYellow text-center">Stock Moitié</p>
                        <?php elseif ($oneItemList['stateI'] == 1): ?> 
                            <p class="pillsBadge pillsOrange textPillsYellow text-center">Stock Faible</p>
                        <?php elseif ($oneItemList['stateI'] == 0): ?> 
                            <p class="pillsBadge textPillsOrange pillsRed text-center">Stock vide</p>        
                        <?php endif ?>    
                    </td>
                    <td class="py-3"><?= $oneItemList['stockI'] ?></td>
                    <td class="py-3"><?= $oneItemList['initStock'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- EndItems List -->

