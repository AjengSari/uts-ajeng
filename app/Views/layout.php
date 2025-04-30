<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom styles -->
    <style>
        :root {
            --sidebar-width: 280px;
            --header-height: 60px;
            --sidebar-bg: #212529;
            --sidebar-hover: #2c3034;
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
        }
        
        body {
            min-height: 100vh;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--sidebar-bg);
            color: #fff;
            transition: all 0.3s;
            z-index: 1030;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .sidebar-header {
            height: var(--header-height);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.8rem 1.5rem;
            font-size: 0.95rem;
            border-radius: 0;
            transition: all 0.2s;
            margin: 2px 0;
        }
        
        .sidebar .nav-link:hover {
            color: #fff;
            background-color: var(--sidebar-hover);
        }
        
        .sidebar .nav-link.active {
            color: #fff;
            background-color: var(--primary-color);
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        
        .sidebar-divider {
            height: 1px;
            margin: 1rem 0;
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-heading {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.5);
            padding: 0.5rem 1.5rem;
            margin-top: 1rem;
        }
        
        /* Header Styles */
        .main-header {
            height: var(--header-height);
            background-color: #fff;
            position: fixed;
            top: 0;
            right: 0;
            left: var(--sidebar-width);
            z-index: 1020;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        /* Content Wrapper */
        .content-wrapper {
            margin-left: var(--sidebar-width);
            padding-top: calc(var(--header-height) + 20px);
            padding-bottom: 70px; /* Space for footer */
            min-height: 100vh;
            transition: all 0.3s;
        }
        
        /* Footer Styles */
        .main-footer {
            background-color: #fff;
            color: var(--secondary-color);
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            right: 0;
            left: var(--sidebar-width);
            z-index: 1020;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        /* Toggle sidebar */
        .sidebar-toggler {
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 4px;
        }
        
        .sidebar-toggler:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
        
        /* Collapsed sidebar */
        body.sidebar-collapsed .sidebar {
            width: 70px;
        }
        
        body.sidebar-collapsed .sidebar .nav-link span,
        body.sidebar-collapsed .sidebar-heading,
        body.sidebar-collapsed .sidebar-header span {
            display: none;
        }
        
        body.sidebar-collapsed .sidebar .nav-link i {
            margin-right: 0;
            font-size: 1.2rem;
        }
        
        body.sidebar-collapsed .main-header,
        body.sidebar-collapsed .content-wrapper,
        body.sidebar-collapsed .main-footer {
            left: 70px;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-header,
            .content-wrapper,
            .main-footer {
                left: 0;
            }
            
            body.sidebar-mobile-open .sidebar {
                transform: translateX(0);
            }
        }
        
        /* Card styles */
        .dashboard-card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Notification badge */
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 0.6rem;
            padding: 0.25rem 0.4rem;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h5 class="m-0"><i class="bi bi-speedometer2 me-2"></i> <span>Dashboard</span></h5>
    </div>
    
    <?= $this->include('partials/sidebar') ?>
</div>

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Header -->
    <header class="main-header">
        <div class="container-fluid px-4">
            <div class="row align-items-center h-100">
                <div class="col-auto">
                    <div class="sidebar-toggler d-none d-lg-block">
                        <i class="bi bi-list fs-5"></i>
                    </div>
                    <div class="sidebar-toggler d-lg-none">
                        <i class="bi bi-list fs-5"></i>
                    </div>
                </div>
                <div class="col">
                    <?= $this->include('partials/header') ?>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container-fluid px-4">
        <?= $this->renderSection('content') ?>
    </div>
</div>

<!-- Footer -->
<footer class="main-footer">
    <?= $this->include('partials/footer') ?>
</footer>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
    // Toggle sidebar on desktop
    document.querySelectorAll('.sidebar-toggler').forEach(toggler => {
        toggler.addEventListener('click', function() {
            document.body.classList.toggle('sidebar-collapsed');
        });
    });
    
    // Toggle sidebar on mobile
    document.querySelector('.sidebar-toggler.d-lg-none').addEventListener('click', function() {
        document.body.classList.toggle('sidebar-mobile-open');
    });
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        if (window.innerWidth < 992 && 
            !event.target.closest('.sidebar') && 
            !event.target.closest('.sidebar-toggler') &&
            document.body.classList.contains('sidebar-mobile-open')) {
            document.body.classList.remove('sidebar-mobile-open');
        }
    });
    
    // Set active nav item based on current URL
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>
</body>
</html>