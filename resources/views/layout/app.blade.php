<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zizo App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <!-- ✅ Bootstrap Core -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ✅ Bootstrap Dark Theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-dark.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav.navbar {
            background-color: #000 !important;
        }

        footer {
            background-color: #0f0f0f;
            color: #888;
            margin-top: auto;
            text-align: center;
            padding: 1rem;
        }

        .card {
            background-color: #1e1e1e;
            border: 1px solid #2a2a2a;
        }

        a.nav-link {
            transition: 0.2s;
        }

        a.nav-link:hover {
            color: #0d6efd !important;
        }
    </style>
</head>
<body>

    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('tasks.index') }}">TODO LIST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/tasks" class="nav-link">🏠 Home</a></li>
                    <li class="nav-item"><a href="/tasks" class="nav-link">📝 Add Task</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">🔑 Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">🧾 Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ✅ Page Content -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- ✅ Footer -->
    <footer>
        <p>© {{ date('Y') }} TODOLIST. All rights reserved.</p>
    </footer>

    <!-- ✅ Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
