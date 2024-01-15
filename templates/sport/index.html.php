
<h1>Les sports</h1>

<?php foreach ($sports as $sport) : ?>

<div class="border border-dark">

    <h3>Name : <?= $sport->getName() ?> </h3>
    <p>Description : <?= $sport->getDescription() ?>  </p>
    <p><strong>Accessory : <?= $sport->getAccessory() ?> </strong></p>
    <a href="?type=sport&action=show&id=<?= $sport->getId() ?>" class="btn btn-primary">voir</a>
    <a href="?type=sport&action=remove&id=<?= $sport->getId() ?>" class="btn btn-danger">supprimer</a>
    <a href="?type=sport&action=edit&id=<?= $sport->getId() ?>" class="btn btn-warning">edit</a>
</div>


<?php endforeach; ?>
