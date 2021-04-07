<?php $this->title='Accueil' ?>

<?php foreach ($firstNameUserArray as $firstNameUser): ?>
    <h1 class="titleNameUser">Bienvenue, <?= $firstNameUser['name'] ?></h1>
<?php endforeach; ?>    