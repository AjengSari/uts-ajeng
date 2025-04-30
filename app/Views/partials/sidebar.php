<?php
// Get current user role from session
// Assuming you store user role in session as 'role'
$session = session();
$userRole = $session->get('role') ?? 'user'; // Default to 'user' if not set
?>

<div class="py-2">
    <?php if ($userRole === 'admin'): ?>
        <!-- ADMIN SIDEBAR -->
        
        <!-- Dashboard Section -->
        <div class="nav flex-column">
            <a href="/dashboard" class="nav-link">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
            <a href="/analytics" class="nav-link">
                <i class="bi bi-graph-up"></i>
                <span>Analytics</span>
            </a>
        </div>
        
        <div class="sidebar-divider"></div>
        <div class="sidebar-heading">Management</div>
        
        <!-- User Management -->
        <div class="nav flex-column">
            <a href="/users" class="nav-link">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
            <a href="/roles" class="nav-link">
                <i class="bi bi-person-badge"></i>
                <span>Roles & Permissions</span>
            </a>
        </div>
        
        <div class="sidebar-divider"></div>
        <div class="sidebar-heading">Content</div>
        
        <!-- Content Management -->
        <div class="nav flex-column">
            <a href="/posts" class="nav-link">
                <i class="bi bi-file-earmark-text"></i>
                <span>Posts</span>
            </a>
            <a href="/media" class="nav-link">
                <i class="bi bi-images"></i>
                <span>Media Library</span>
            </a>
            <a href="/comments" class="nav-link">
                <i class="bi bi-chat-dots"></i>
                <span>Comments</span>
            </a>
        </div>
        
        <div class="sidebar-divider"></div>
        <div class="sidebar-heading">System</div>
        
        <!-- System Settings -->
        <div class="nav flex-column">
            <a href="/settings" class="nav-link">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
            <a href="/logs" class="nav-link">
                <i class="bi bi-journal-text"></i>
                <span>Logs</span>
            </a>
        </div>
        
    <?php else: ?>
        <!-- USER SIDEBAR -->
        
        <!-- Dashboard Section -->
        <div class="nav flex-column">
            <a href="/dashboard" class="nav-link">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </div>
        
        <div class="sidebar-divider"></div>
        <div class="sidebar-heading">My Content</div>
        
        <!-- User Content -->
        <div class="nav flex-column">
            <a href="/my-posts" class="nav-link">
                <i class="bi bi-file-earmark-text"></i>
                <span>My Posts</span>
            </a>
            <a href="/my-media" class="nav-link">
                <i class="bi bi-images"></i>
                <span>My Media</span>
            </a>
        </div>
        
        <div class="sidebar-divider"></div>
        <div class="sidebar-heading">Account</div>
        
        <!-- Account Settings -->
        <div class="nav flex-column">
            <a href="/profile" class="nav-link">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
            <a href="/notifications" class="nav-link">
                <i class="bi bi-bell"></i>
                <span>Notifications</span>
                <?php 
                // Example: Display notification count if there are any
                $notificationCount = $session->get('notification_count') ?? 0;
                if ($notificationCount > 0):
                ?>
                <span class="badge bg-danger rounded-pill ms-auto"><?= $notificationCount ?></span>
                <?php endif; ?>
            </a>
        </div>
    <?php endif; ?>
</div>