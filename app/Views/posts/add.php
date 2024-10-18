<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="col-md-12">
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Posts</div>
        <div class="panel-body">
            <div class="card-body">
                <?= form_open_multipart('/posts/add') ?>
                <div class="form-group row">
                    <?= form_label('name', 'name', ['class' => 'col-sm-2 col-form-label']) ?>
                    <div class="col-sm-6">
                        <?= form_input('name', old('name', ''), ['class' => "form-control " . errors_message_class(session('errors'), 'name') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'name') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?= form_label('Content', 'content', ['class' => 'col-sm-2 col-form-label']) ?>
                    <div class="col-sm-6">
                        <?= form_textarea('content', old('content', ''), ['class' => "form-control" . errors_message_class(session('errors'), 'content') . ""]) ?>
                        <?= errors_message(session('errors'), 'content') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?= form_label('Tag', 'tag', ['class' => 'col-sm-2 col-form-label']) ?>
                    <div class="col-sm-6">
                        <?= form_tags($post->tags, ['class' => 'tags-input']) ?>
                        <?= errors_message(session('errors'), 'tag') ?>
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <div class="col-md-12"><button type="submit" class="btn btn-primary">Add</button></div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>