<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Task List<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2 class="page-heading">All Tasks</h2>
<p class="text-muted">View every task organized by date.</p>

<div class="card shadow-sm p-4 mt-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td>
                        <span class="status-label <?= $task['status'] === 'completed' ? 'status-completed' : ($task['status'] === 'pending' ? 'status-pending' : 'status-other') ?>">
                            <?= esc(ucfirst($task['status'])) ?>
                        </span>
                    </td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
