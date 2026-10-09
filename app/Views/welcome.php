<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Welcome<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2 class="page-heading">Today's Tasks</h2>
<p class="text-muted">
    <?= esc(date('F j, Y', strtotime($today))) ?>
    - Here's what you need to accomplish today.
</p>

<?php
$total = count($tasks);
$completed = count(array_filter($tasks, fn($task) => $task['status'] === 'completed'));
$pending = count(array_filter($tasks, fn($task) => $task['status'] === 'pending'));
?>

<div class="row g-3 my-4">
    <div class="col-md-4">
        <div class="card shadow-sm p-4">
            <p class="text-muted">Today's Tasks</p>
            <div class="stat-number text-primary"><?= $total ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm p-4">
            <p class="text-muted">Completed</p>
            <div class="stat-number text-success"><?= $completed ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm p-4">
            <p class="text-muted">Pending</p>
            <div class="stat-number text-warning"><?= $pending ?></div>
        </div>
    </div>
</div>

<div class="card shadow-sm p-4">
    <h5 class="mb-4">Your Tasks for Today</h5>

    <?php if (empty($tasks)): ?>
        <p class="text-muted">No tasks scheduled for today.</p>
    <?php else: ?>
        <?php foreach ($tasks as $task): ?>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3 gap-2">
                <span><?= esc($task['title']) ?></span>
                <span class="status-label <?= $task['status'] === 'completed' ? 'status-completed' : ($task['status'] === 'pending' ? 'status-pending' : 'status-other') ?>">
                    <?= esc(ucfirst($task['status'])) ?>
                </span>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
