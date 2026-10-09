<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2 class="page-heading">About TaskFlow</h2>
<p class="text-muted">Tasks for Today Management System</p>

<div class="card shadow-sm p-4 mt-4">
    <h4>About the System</h4>
    <p>
        TaskFlow is a simple task management system developed
        using CodeIgniter 4, PHP, MySQL, and Bootstrap 5.
        It allows users to view today's tasks, browse all
        scheduled tasks, and view a demo user profile.
    </p>

    <hr>

    <h4>Developer Information</h4>
    <p><strong>Developer:</strong> Elijah Elyon Manalo</p>
    <p><strong>Subject:</strong> Web Systems and Technologies</p>
    <p><strong>Framework:</strong> CodeIgniter 4</p>
    <p><strong>Database:</strong> MySQL</p>
</div>

<?= $this->endSection() ?>
