<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2 class="page-heading">User Profile</h2>
<p class="text-muted">Demo user account information.</p>

<div class="card shadow-sm p-4 mt-4" style="max-width:600px;">
    <?php if ($user): ?>
        <div class="text-center mb-4">
            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center"
                 style="width:80px;height:80px;font-size:32px;">
                <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
            </div>
            <h4 class="mt-3"><?= esc($user['full_name']) ?></h4>
            <span class="badge bg-primary">Demo User</span>
        </div>

        <hr>

        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Date Registered:</strong> <?= esc($user['created_at']) ?></p>
    <?php else: ?>
        <p class="text-muted">No demo user found.</p>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
