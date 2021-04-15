
<?php $this->nameUser = $_SESSION['name'];?>

<h2 id="titleTest"><?php $this->title = $title['title'] ?></h2>

<?php foreach ($itemList as $oneItem): ?>

    <tr>
        <td><?= $oneItem['nameI'] ?></td>
        <td><?= $oneItem['typeI'] ?></td>
        <td>
            <?php if ($oneItem['stateI'] == 3): ?>
                <span class="badge rounded-pill pillsGreen">En Stock</span>
            <?php elseif ($oneItem['stateI'] == 2): ?> 
                <span class="badge rounded-pill textPillsOrange pillsYellow">Stock Moitié</span>
            <?php elseif ($oneItem['stateI'] == 1): ?> 
                <span class="badge rounded-pill pillsOrange">Stock Faible</span>
            <?php elseif ($oneItem['stateI'] == 0): ?> 
                <span class="badge rounded-pill textPillsOrange pillsRed">Stock vide</span>        
            <?php endif ?>    
        </td>
        <td><?= $oneItem['stockI'] ?></td>
        <td><?= $oneItem['initStock'] ?></td>
    </tr>
<?php endforeach; ?>