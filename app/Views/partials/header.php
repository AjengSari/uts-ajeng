<div class="d-flex justify-content-between align-items-center h-100">
    <div>
        <h5 class="mb-0 d-none d-md-block">Welcome,dashboard</h5>
        <p class="text-muted mb-0 d-none d-md-block">Today is <?= date('l, d F Y') ?></p>
    </div>
    
    <div class="d-flex align-items-center">
        <!-- Search -->
        <div class="position-relative d-none d-md-block me-3">
            <input type="text" class="form-control" placeholder="Search...">
            <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-2"></i>
        </div>
        
        <!-- Notifications -->
        <div class="dropdown me-3">
            <a href="#" class="position-relative text-dark" data-bs-toggle="dropdown">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm" style="min-width: 300px;">
                <h6 class="dropdown-header">Notifications</h6>
                <a href="#" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                        <div class="bg-primary text-white rounded-circle p-2">
                            <i class="bi bi-person-plus"></i>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">New user registered</p>
                        <small class="text-muted">5 minutes ago</small>
                    </div>
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                        <div class="bg-success text-white rounded-circle p-2">
                            <i class="bi bi-cart-check"></i>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">New order received</p>
                        <small class="text-muted">2 hours ago</small>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item text-center">View all notifications</a>
            </div>
        </div>
        
        <!-- Messages -->
        <div class="dropdown me-3">
            <a href="#" class="position-relative text-dark" data-bs-toggle="dropdown">
                <i class="bi bi-envelope fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    5
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm" style="min-width: 300px;">
                <h6 class="dropdown-header">Messages</h6>
                <a href="#" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="User">
                    </div>
                    <div>
                        <p class="mb-0">John Doe</p>
                        <small class="text-muted">Hello, are you available for a meeting?</small>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item text-center">View all messages</a>
            </div>
        </div>
        
        <!-- User Profile -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="User">
                <span class="navbar-text me-3">
                 <strong><?= session()->get('username') ?></strong> (<?= session()->get('role') ?>)
            </span>
           
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
            </ul>
        </div>
    </div>
</div>