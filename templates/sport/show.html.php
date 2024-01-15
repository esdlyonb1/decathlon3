
<h1>Les sports</h1>


<div class="border border-dark">

    <h3>Name : <?= $sport->getName() ?> </h3>
    <p>Description : <?= $sport->getDescription() ?>  </p>
    <p><strong>Accessory : <?= $sport->getAccessory() ?> </strong></p>
    <a href="?type=sport&action=index" class="btn btn-secondary">retour</a>
</div>

<div class="border border-dark mt-3">
    <h3>Les clubs</h3>
    <?php foreach($sport->getClubs() as $club): ?>
    <p><strong><?= $club->getName() ?></strong></p>

    <?php endforeach; ?>
</div>

