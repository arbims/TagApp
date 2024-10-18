<?php if (session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session("success") ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentNode.remove();"></button>
    </div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <?= session("error") ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentNode.remove();"></button>
    </div>
<?php endif; ?>