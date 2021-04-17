
<?php $this->nameUser = $_SESSION['name'];?>
<?php $this->stockLeftTotal = $stockLeftT['stockLeftTo'] ?>
<?php $this->amountItemLow = $numberItemLow['stockLowAmount'] ?>


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