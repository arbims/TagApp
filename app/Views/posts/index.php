<?= $this->extend('layout/default')?>

<?= $this->section('content') ?>

<div class="mdecins index content">
    <?= anchor('/posts/add', 'Ajout', ['class' => 'btn btn-primary'])?>
    <h3><?= 'Mdecins'?></h3>
    <div class="table-striped">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Tags</th>
                    <th class="actions">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $v): ?>
                <tr>
                    <td><?= $v->id ?></td>
                    <td><?= $v->name ?></td>
                    <td><?= $v->tags ?></td>
                    <td class="actions">
                        <?= anchor(site_url('/posts/delete/'.$v->id), 'Delete', ['onclick' => 'return confirm("onfirm delete ?")', 'class' => 'btn btn-danger']) ?> -
                        <?= anchor(site_url('/posts/edit/'.$v->id),'Edit', ['class' => 'btn btn-success'])?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?= $this->endSection('content') ?>