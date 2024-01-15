
<h1>editer le <?= $sport->getName() ?></h1>



<form action="?type=sport&action=edit" method="post">
    <div class="">
        <input class="form-control" placeholder="name" type="text" name="name" value="<?= $sport->getName() ?>">
    </div>
    <div class="">
        <input class="form-control" placeholder="description" type="text" name="description" value="<?= $sport->getDescription() ?>">
    </div>
    <div class="">
        <input class="form-control" placeholder="accessory" type="text" name="accessory" value="<?= $sport->getAccessory() ?>">
    </div>
    <input type="hidden" name="idEdit" value="<?= $sport->getId() ?>">
    <div class="">
        <button class="form-control" class="btn btn-success">Edit</button>
    </div>
</form>


