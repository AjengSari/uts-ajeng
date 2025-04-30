<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Page Title -->
<div class="pagetitle mb-4">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>

<!-- Dashboard Content -->
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Stats Cards -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> 
                  <span class="text-muted small pt-2 ps-1">increase</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> 
                  <span class="text-muted small pt-2 ps-1">increase</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1,244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> 
                  <span class="text-muted small pt-2 ps-1">decrease</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sales Chart -->
        <div class="col-12">
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sales Overview <span>| Today</span></h5>
              
              <!-- Line Chart -->
              <div id="salesChart" style="min-height: 365px;">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>$64</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Bridie Kessler</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis</a></td>
                    <td>$47</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>$147</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Angus Grady</td>
                    <td><a href="#" class="text-primary">Ut voluptatem id</a></td>
                    <td>$67</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Raheem Lehner</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Recent Activity <span>| Today</span></h5>

          <div class="activity">
            <div class="activity-item d-flex">
              <div class="activite-label">32 min</div>
              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
              <div class="activity-content">
                <strong>Quia quae rerum</strong> explicabo officiis beatae
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label">56 min</div>
              <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
              <div class="activity-content">
                Voluptatem blanditiis blanditiis eveniet
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label">2 hrs</div>
              <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
              <div class="activity-content">
                <strong>Voluptates corrupti</strong> molestias voluptatem
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label">1 day</div>
              <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
              <div class="activity-content">
                Tempore autem saepe <strong>occaecati voluptatem</strong> tempore
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label">2 days</div>
              <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
              <div class="activity-content">
                Est sit eum reiciendis exercitationem
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label">4 weeks</div>
              <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
              <div class="activity-content">
                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Budget Report -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Budget Report <span>| This Month</span></h5>

          <div id="budgetChart" style="min-height: 300px;">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Website Traffic <span>| Today</span></h5>

          <div id="trafficChart" style="min-height: 300px;">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- News & Updates -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

          <div class="news">
            <div class="post-item clearfix">
              <img src="<?= base_url('assets/img/news-1.jpg') ?>" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?= base_url('assets/img/news-2.jpg') ?>" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?= base_url('assets/img/news-3.jpg') ?>" alt="">
              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Add Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Sales Chart
    const salesChartCanvas = document.createElement('canvas');
    document.getElementById('salesChart').innerHTML = '';
    document.getElementById('salesChart').appendChild(salesChartCanvas);
    
    new Chart(salesChartCanvas, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Sales',
          data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
    
    // Budget Chart
    const budgetChartCanvas = document.createElement('canvas');
    document.getElementById('budgetChart').innerHTML = '';
    document.getElementById('budgetChart').appendChild(budgetChartCanvas);
    
    new Chart(budgetChartCanvas, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Budget',
          data: [65, 59, 80, 81, 56, 55],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    
    // Traffic Chart
    const trafficChartCanvas = document.createElement('canvas');
    document.getElementById('trafficChart').innerHTML = '';
    document.getElementById('trafficChart').appendChild(trafficChartCanvas);
    
    new Chart(trafficChartCanvas, {
      type: 'doughnut',
      data: {
        labels: ['Search Engine', 'Direct', 'Social Media', 'Referral'],
        datasets: [{
          data: [35, 30, 20, 15],
          backgroundColor: [
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 99, 132, 0.5)',
            'rgba(255, 205, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)'
          ],
          borderColor: [
            'rgb(54, 162, 235)',
            'rgb(255, 99, 132)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
  });
</script>

<!-- Custom CSS for Dashboard -->
<style>
  .info-card {
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }
  
  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
  }
  
  .card-icon {
    width: 50px;
    height: 50px;
    font-size: 24px;
  }
  
  .sales-card .card-icon {
    background: rgba(64, 196, 255, 0.1);
    color: #40c4ff;
  }
  
  .revenue-card .card-icon {
    background: rgba(46, 204, 113, 0.1);
    color: #2ecc71;
  }
  
  .customers-card .card-icon {
    background: rgba(255, 152, 0, 0.1);
    color: #ff9800;
  }
  
  .card-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }
  
  .card-title span {
    color: #899bbd;
    font-size: 14px;
    font-weight: 400;
  }
  
  .filter {
    position: absolute;
    right: 0px;
    top: 15px;
  }
  
  .filter .icon {
    color: #aab7cf;
    padding-right: 20px;
    padding-bottom: 5px;
    transition: 0.3s;
    font-size: 16px;
  }
  
  .filter .icon:hover {
    color: #4154f1;
  }
  
  .filter .dropdown-header {
    padding: 8px 15px;
  }
  
  .filter .dropdown-header h6 {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #aab7cf;
    margin-bottom: 0;
    padding: 0;
  }
  
  .filter .dropdown-item {
    padding: 8px 15px;
  }
  
  /* Activity */
  .activity {
    font-size: 14px;
  }
  
  .activity .activity-item .activite-label {
    color: #888;
    position: relative;
    flex-shrink: 0;
    min-width: 64px;
  }
  
  .activity .activity-item .activite-label::before {
    content: "";
    position: absolute;
    right: -11px;
    width: 4px;
    top: 0;
    bottom: 0;
    background-color: #eceefe;
  }
  
  .activity .activity-item .activity-badge {
    margin-top: 3px;
    z-index: 1;
    font-size: 11px;
    line-height: 0;
    border-radius: 50%;
    flex-shrink: 0;
    border: 3px solid #fff;
    flex-grow: 0;
  }
  
  .activity .activity-item .activity-content {
    padding-left: 10px;
    padding-bottom: 20px;
  }
  
  .activity .activity-item:first-child .activite-label::before {
    top: 5px;
  }
  
  .activity .activity-item:last-child .activity-content {
    padding-bottom: 0;
  }
  
  /* News & Updates */
  .news .post-item+.post-item {
    margin-top: 15px;
  }
  
  .news img {
    width: 80px;
    float: left;
    border-radius: 5px;
  }
  
  .news h4 {
    font-size: 15px;
    margin-left: 95px;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  .news h4 a {
    color: #012970;
    transition: 0.3s;
    text-decoration: none;
  }
  
  .news h4 a:hover {
    color: #4154f1;
  }
  
  .news p {
    font-size: 14px;
    color: #777777;
    margin-left: 95px;
  }
  
  /* Recent Sales */
  .recent-sales {
    font-size: 14px;
  }
  
  .recent-sales .table thead {
    background: #f6f6fe;
  }
  
  .recent-sales .table thead th {
    border: 0;
  }
  
  .recent-sales .dataTable-top {
    padding: 0 0 10px 0;
  }
  
  .recent-sales .dataTable-bottom {
    padding: 10px 0 0 0;
  }
</style>
<?= $this->endSection() ?>