<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($this->renderSection('title')) ?> - TaskFlow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f3f6fa;
            font-family: Arial, sans-serif;
            color: #1e293b;
        }
        .navbar { background: #14243a; }
        .navbar-brand { font-weight: 700; }
        .nav-link { color: #cbd5e1 !important; }
        .nav-link:hover { color: white !important; }
        .card {
            border: none;
            border-radius: 14px;
        }
        .page-heading { font-weight: 700; }
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
        }
        .status-completed {
            background: #dcfce7;
            color: #166534;
        }
        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
        .status-other {
            background: #e2e8f0;
            color: #334155;
        }
        .status-label {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('/') ?>">
            TaskFlow
        </a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="<?= site_url('/') ?>">Welcome</a>
            <a class="nav-link" href="<?= site_url('tasks') ?>">Task List</a>
            <a class="nav-link" href="<?= site_url('profile') ?>">Profile</a>
            <a class="nav-link" href="<?= site_url('about') ?>">About</a>
        </div>
    </div>
</nav>

<main class="container py-5">
    <?= $this->renderSection('content') ?>
</main>

<footer class="text-center text-muted py-4">
    <small>TaskFlow - Tasks for Today Management System</small>
</footer>

</body>
</html>
