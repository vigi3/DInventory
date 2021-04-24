
<?php $this->nameUser = $_SESSION['name'];?>
<?php $this->title = 'Bienvenue, '?>
<?php $this->subtitle = 'Gestionnaire de materiel'?>
<?php $this->focusNavbarHome = 'navbarFocus'?>
<?php $this->pieChart = '<!-- Pie Chart -->
<div class="pieChart">
    
</div>
<!-- EndPie Chart -->'?>


<!-- Graph -->
<div class="row">
    <div class="col-1"></div>
    <!-- Graph Black -->
    <div class="col-2 px-4">
        <div class="card border-0 graphBlack text-white text-center graphCorner">
            <div class="card-body">
                <p class="card-subtitle text-muted">Outils Réservés: </p>
                <h3 class="card-title fw-bold">###</h3>
                <p class="card-subtitle text-muted">Items</p>
            </div>
        </div>  
    </div>
    <!-- EndGraph Black -->

    <!-- Graph Yellow -->
    <div class="col-2 px-4">
        <div class="card border-0 graphYellow text-white text-center graphCorner">
            <div class="card-body">
                <p class="card-subtitle text-muted">Stock Total Restant: </p>
                <h3 class="card-title fw-bold textPillsYellow"><?= $stockLeftT['stockLeftTo'] ?></h3>
                <p class="card-subtitle text-muted">Items</p>
            </div>
        </div>  
    </div>
    <!-- EndGraph Yellow -->

    <!-- Graph Orange -->
    <div class="col-2 px-4">
        <div class="card border-0 graphOrange text-white text-center graphCorner">
            <div class="card-body">
                <p class="card-subtitle text-muted ">Stock Faible: </p>
                <h3 class="card-title fw-bold textPillsOrange"><?= $numberItemLow['stockLowAmount'] ?></h3>
                <p class="card-subtitle text-muted">Items</p>
            </div>
        </div>  
    </div>
    <!-- EndGraph Orange -->

    <!-- Graph Red -->
    <div class="col-2 px-4">
        <div class="card border-0 graphRed text-white text-center graphCorner">
            <div class="card-body">
                <p class="card-subtitle text-muted">Rupture de Stock: </p>
                <h3 class="card-title fw-bold textPillsRed"><?= $numberOSItem['OutOfstockAmount'] ?></h3>
                <p class="card-subtitle text-muted">Items</p>
            </div>
        </div>  
    </div>
    <!-- EndGraph Red -->

    <div class="col-1"></div>
</div>
<!-- EndGraph -->

<!-- Pie Chart -->
<!-- <div class="pieChart">
    <div>
        <svg>
            <circle r='60' cx='50%' cy='50%' />
        </svg>
    </div>
    <div>
        <svg>
            <circle r='60' cx='50%' cy='50%' />
        </svg>
    </div>
</div> -->
<!-- EndPie Chart -->

<!-- Items List -->
<div class="row mt-3 pt-5">
    <div class="col-1"></div>
    <div class="col-3 px-4">
        <h5>Liste d'items: </h5>
    </div>
</div>
<div class="row tableOverflow rowTableHeight pt-3">
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
            <?php foreach ($itemList as $oneItem): ?>
                <tr class="itemHover align-middle">
                    <td class="py-3"><?= $oneItem['nameI'] ?></td>
                    <td class="py-3"><?= $oneItem['typeI'] ?></td>
                    <td class="py-3">
                        <?php if ($oneItem['stateI'] == 3): ?>
                            <p class="pillsBadge pillsGreen textPillsGreen text-center">En Stock</p>
                        <?php elseif ($oneItem['stateI'] == 2): ?> 
                            <p class="pillsBadge textPillsOrange pillsYellow text-center">Stock Moitié</p>
                        <?php elseif ($oneItem['stateI'] == 1): ?> 
                            <p class="pillsBadge pillsOrange textPillsYellow text-center">Stock Faible</p>
                        <?php elseif ($oneItem['stateI'] == 0): ?> 
                            <p class="pillsBadge textPillsOrange pillsRed text-center">Stock vide</p>        
                        <?php endif ?>    
                    </td>
                    <td class="py-3"><?= $oneItem['stockI'] ?></td>
                    <td class="py-3"><?= $oneItem['initStock'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- EndItems List -->


