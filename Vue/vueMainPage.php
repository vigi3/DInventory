<?php $this->title='Accueil';
echo $firstNameUserArray['name'];?>

<?php foreach ($firstNameUserArray as $firstNameUser): ?>
    <h1 class="titleNameUser">Bienvenue, <?= $firstNameUser['Name'] ?></h1>
<?php endforeach; ?>    