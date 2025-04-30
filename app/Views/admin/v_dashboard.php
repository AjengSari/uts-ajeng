<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-0 text-gray-800">User Management Dashboard</h1>
        <p class="text-muted">Manage your users, roles, and permissions</p>
    </div>
    <div>
        <a href="<?= base_url('users/add') ?>" class="btn btn-primary">
            <i class="bi bi-person-plus-fill me-2"></i>Add New User
        </a>
    </div>
</div>

<!-- User Statistics Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1,250</div>
                        <div class="mt-2 text-success small">
                            <i class="bi bi-arrow-up me-1"></i>12% increase this month
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-people-fill fa-2x text-gray-300" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Active Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1,094</div>
                        <div class="mt-2 text-success small">
                            <i class="bi bi-arrow-up me-1"></i>87.5% of total users
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-check-fill fa-2x text-gray-300" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            New Users (This Month)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">156</div>
                        <div class="mt-2 text-success small">
                            <i class="bi bi-arrow-up me-1"></i>24% increase from last month
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-plus fa-2x text-gray-300" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Inactive Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">156</div>
                        <div class="mt-2 text-danger small">
                            <i class="bi bi-arrow-down me-1"></i>12.5% of total users
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-dash fa-2x text-gray-300" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- User Management Features -->
<div class="row mb-4">
    <!-- User List Card -->
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Recent Users</h6>
                <a href="<?= base_url('users') ?>" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" width="40" alt="Avatar">
                                        <div>
                                            <div class="fw-bold">John Doe</div>
                                            <div class="small text-muted">ID: #1001</div>
                                        </div>
                                    </div>
                                </td>
                                <td>john.doe@example.com</td>
                                <td><span class="badge bg-primary">Admin</span></td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2023-01-15</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" width="40" alt="Avatar">
                                        <div>
                                            <div class="fw-bold">Jane Smith</div>
                                            <div class="small text-muted">ID: #1002</div>
                                        </div>
                                    </div>
                                </td>
                                <td>jane.smith@example.com</td>
                                <td><span class="badge bg-info">Editor</span></td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2023-02-20</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" width="40" alt="Avatar">
                                        <div>
                                            <div class="fw-bold">Robert Johnson</div>
                                            <div class="small text-muted">ID: #1003</div>
                                        </div>
                                    </div>
                                </td>
                                <td>robert.johnson@example.com</td>
                                <td><span class="badge bg-secondary">User</span></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>2023-03-05</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" width="40" alt="Avatar">
                                        <div>
                                            <div class="fw-bold">Emily Davis</div>
                                            <div class="small text-muted">ID: #1004</div>
                                        </div>
                                    </div>
                                </td>
                                <td>emily.davis@example.com</td>
                                <td><span class="badge bg-secondary">User</span></td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td>2023-04-10</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" width="40" alt="Avatar">
                                        <div>
                                            <div class="fw-bold">Michael Wilson</div>
                                            <div class="small text-muted">ID: #1005</div>
                                        </div>
                                    </div>
                                </td>
                                <td>michael.wilson@example.com</td>
                                <td><span class="badge bg-info">Editor</span></td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2023-05-15</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- User Activity Card -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Activity</h6>
            </div>
            <div class="card-body">
                <div id="userActivityChart" style="height: 250px;"></div>
            </div>
        </div>

        <!-- Recent Logins Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Recent Logins</h6>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/32" class="rounded-circle me-2" width="32" alt="Avatar">
                            <div>
                                <div class="fw-bold">John Doe</div>
                                <div class="small text-muted">Admin</div>
                            </div>
                        </div>
                        <span class="text-muted small">5 minutes ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/32" class="rounded-circle me-2" width="32" alt="Avatar">
                            <div>
                                <div class="fw-bold">Jane Smith</div>
                                <div class="small text-muted">Editor</div>
                            </div>
                        </div>
                        <span class="text-muted small">1 hour ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/32" class="rounded-circle me-2" width="32" alt="Avatar">
                            <div>
                                <div class="fw-bold">Michael Wilson</div>
                                <div class="small text-muted">Editor</div>
                            </div>
                        </div>
                        <span class="text-muted small">3 hours ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/32" class="rounded-circle me-2" width="32" alt="Avatar">
                            <div>
                                <div class="fw-bold">Emily Davis</div>
                                <div class="small text-muted">User</div>
                            </div>
                        </div>
                        <span class="text-muted small">Yesterday</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/32" class="rounded-circle me-2" width="32" alt="Avatar">
                            <div>
                                <div class="fw-bold">Robert Johnson</div>
                                <div class="small text-muted">User</div>
                            </div>
                        </div>
                        <span class="text-muted small">Yesterday</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- User Management Features -->
<div class="row">
    <!-- User Management Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-primary text-white">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">User Management</h5>
                </div>
                <p class="card-text">View, add, edit, and delete users. Manage user profiles and account settings.</p>
                <a href="<?= base_url('users') ?>" class="btn btn-primary">Manage Users</a>
            </div>
        </div>
    </div>

    <!-- Role Management Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-success text-white">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">Role Management</h5>
                </div>
                <p class="card-text">Create and manage user roles. Assign permissions to control access to features.</p>
                <a href="<?= base_url('roles') ?>" class="btn btn-success">Manage Roles</a>
            </div>
        </div>
    </div>

    <!-- Permission Management Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-info text-white">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">Permission Management</h5>
                </div>
                <p class="card-text">Define and manage permissions. Control what actions users can perform.</p>
                <a href="<?= base_url('permissions') ?>" class="btn btn-info">Manage Permissions</a>
            </div>
        </div>
    </div>

    <!-- User Groups Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-warning text-white">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">User Groups</h5>
                </div>
                <p class="card-text">Organize users into groups for easier management and permission assignment.</p>
                <a href="<?= base_url('groups') ?>" class="btn btn-warning">Manage Groups</a>
            </div>
        </div>
    </div>

    <!-- User Activity Logs Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-danger text-white">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">Activity Logs</h5>
                </div>
                <p class="card-text">Track and monitor user activities. View login history and system actions.</p>
                <a href="<?= base_url('activity-logs') ?>" class="btn btn-danger">View Logs</a>
            </div>
        </div>
    </div>

    <!-- User Settings Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-secondary text-white">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h5 class="card-title ms-3 mb-0">User Settings</h5>
                </div>
                <p class="card-text">Configure global user settings. Manage password policies and account options.</p>
                <a href="<?= base_url('user-settings') ?>" class="btn btn-secondary">Configure Settings</a>
            </div>
        </div>
    </div>
</div>

<!-- Add Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // User Activity Chart
    const userActivityCanvas = document.createElement('canvas');
    document.getElementById('userActivityChart').innerHTML = '';
    document.getElementById('userActivityChart').appendChild(userActivityCanvas);
    
    new Chart(userActivityCanvas, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Active Users',
          data: [650, 750, 820, 900, 950, 1094],
          borderColor: 'rgba(78, 115, 223, 1)',
          backgroundColor: 'rgba(78, 115, 223, 0.1)',
          borderWidth: 2,
          fill: true,
          tension: 0.3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          y: {
            beginAtZero: false,
            grid: {
              drawBorder: false
            }
          },
          x: {
            grid: {
              display: false
            }
          }
        }
      }
    });
  });
</script>

<style>
  .border-left-primary {
    border-left: 4px solid #4e73df !important;
  }
  
  .border-left-success {
    border-left: 4px solid #1cc88a !important;
  }
  
  .border-left-info {
    border-left: 4px solid #36b9cc !important;
  }
  
  .border-left-warning {
    border-left: 4px solid #f6c23e !important;
  }
  
  .text-gray-300 {
    color: #dddfeb !important;
  }
  
  .text-gray-800 {
    color: #5a5c69 !important;
  }
  
  .icon-circle {
    height: 40px;
    width: 40px;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
  }
  
  .bg-primary {
    background-color: #4e73df !important;
  }
  
  .bg-success {
    background-color: #1cc88a !important;
  }
  
  .bg-info {
    background-color: #36b9cc !important;
  }
  
  .bg-warning {
    background-color: #f6c23e !important;
  }
  
  .bg-danger {
    background-color: #e74a3b !important;
  }
  
  .bg-secondary {
    background-color: #858796 !important;
  }
  
  .card {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
  }
  
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  }
</style>
<?= $this->endSection() ?>