<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control',
    'placeholder' => 'Enter your username',
    'required' => true
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control',
    'placeholder' => 'Enter your password',
    'required' => true
];
?>

<section class="login-section min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <!-- Left side - Brand/Image -->
            <div class="col-lg-6 d-none d-lg-block">
                <div class="bg-primary h-100 rounded-start d-flex flex-column justify-content-center align-items-center text-white p-5" style="background: linear-gradient(135deg, #4361ee, #3a0ca3);">
                    <div class="text-center mb-5">
                      
                        <h2 class="fw-bold mb-3">Welcome Back!</h2>
                        <p class="lead opacity-75">Log in to access your dashboard and manage your content.</p>
                        <img src="https://i.pinimg.com/originals/43/12/28/431228fc42c4af6e0f96ddbcb9d83bfb.jpg" alt="Login" class="img-fluid mb-4" style="max-width: 300px;">
                    </div>
                    <div class="mt-auto text-center opacity-75">
                        <p class="small mb-0">© <?= date('Y') ?> Ajeng. All rights reserved.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Login Form -->
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 rounded-lg shadow-lg h-100">
                    <div class="card-body p-4 p-lg-5">
                        <!-- Logo for mobile -->
                        <div class="d-flex justify-content-center mb-4 d-lg-none">
                            <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                                <img src="<?php echo base_url() ?>assets/img/ajeng-logo.png" alt="Ajeng Logo" height="60">
                            </a>
                        </div>
                        
                        <div class="text-center mb-4">
                            <h3 class="fw-bold mb-2">Sign In to Ajeng</h3>
                            <p class="text-muted">Enter your credentials to access your account</p>
                        </div>
                        
                        <?php if (session()->getFlashData('failed')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <?= session()->getFlashData('failed') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        
                        <?= form_open('login', 'class="needs-validation"') ?>
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <?= form_input($username) ?>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label for="password" class="form-label mb-0">Password</label>
                                    <a href="<?= base_url('forgot-password') ?>" class="text-decoration-none small">Forgot password?</a>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <?= form_password($password) ?>
                                    <button class="btn btn-outline-secondary border-start-0" type="button" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            
                            <div class="d-grid gap-2 mb-4">
                                <?= form_submit('submit', 'Sign In', ['class' => 'btn btn-primary btn-lg py-3']) ?>
                            </div>
                            
                            <div class="text-center">
                                <p class="text-muted">Don't have an account? <a href="<?= base_url('register') ?>" class="text-decoration-none fw-semibold">Create an account</a></p>
                            </div>
                        <?= form_close() ?>
                        
                        <!-- Social Login Options (Optional) -->
                        <div class="mt-4">
                            <div class="text-center mb-3">
                                <span class="divider-text">or sign in with</span>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="bi bi-google"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add this to your layout_clear.php or include it here -->
<style>
    .login-section {
        background-color: #f8f9fa;
    }
    
    .card {
        border-radius: 15px;
        overflow: hidden;
    }
    
    .form-control {
        padding: 0.75rem 1rem;
        border-radius: 8px;
    }
    
    .input-group-text {
        border-radius: 8px 0 0 8px;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #3a0ca3, #4361ee);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
    }
    
    .divider-text {
        position: relative;
        display: inline-block;
        padding: 0 10px;
        color: #6c757d;
    }
    
    .divider-text::before,
    .divider-text::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 40px;
        height: 1px;
        background-color: #dee2e6;
    }
    
    .divider-text::before {
        right: 100%;
    }
    
    .divider-text::after {
        left: 100%;
    }
    
    /* Animation for the card */
    .card {
        animation: fadeInUp 0.5s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle icon
                const icon = togglePassword.querySelector('i');
                icon.classList.toggle('bi-eye');
                icon.classList.toggle('bi-eye-slash');
            });
        }
    });
</script>
<?= $this->endSection() ?>