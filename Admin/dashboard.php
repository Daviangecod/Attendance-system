<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="escho.png" alt="Logo" class="logo">
            </div>
            <ul class="sidebar-menu">
                <li class="menu-item active">
                    <a href="project1/Admin/dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="students.html">
                    <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Students</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages/ManageClass.php">
                    <i class="fa-solid fa-school"></i>
                        <span>Classes</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages/reports.html">
                    <i class="fas fa-chart-bar"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages/settings.html">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <header class="header">
                <div class="header-left">
                <div class="header-left">
                    <button class="menu-toggle">
                        <span class="menu-toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <span class="menu-toggle-text"></span>
                    </button>
                </div>

                </div>
                <div class="header-right">
                    <div class="profile">
                        <a href="pages/profile.php"><img src="escho.png" alt="Profile" class="profile-image"></a>
                        <span>Profile</span>
                    </div>
                </div>
                </header>
            <main class="content">
                <div class="page-title">
                    <h1>Admin Dashboard</h1>
                </div>
                <div class="dashboard-grid">
                    <a href="pages/totalStud.php"><div class="widget">
                        <div class="widget-header">
                        <i class="fa fa-users" aria-hidden="true"></i>
                            <h3>Total Students</h3>
                        </div>
                        <div class="widget-body">
                            
                        </div>
                    </div>
                    </a>
                    <a href=""><div class="widget">
                        <div class="widget-header">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <h3>Courses</h3>
                        </div>
                        <div class="widget-body">
                            
                        </div>
                    </div>
                    </a>
                   <a href="pages/addClass.php"> <div class="widget">
                        <div class="widget-header">
                        <i class="fas fa-calendar-check"></i>
                            <h3>Add Class</h3>
                        </div>
                        <div class="widget-body">
                            
                        </div>
                    </div>
                    </a>

                    <a href=""><div class="widget">
                        <div class="widget-header">
                        <i class="fas fa-chart-line"></i>
                            <h3>Attendance Trend</h3>
                        </div>
                        <div class="widget-body">
                            
                        </div>
                    </div>
                    </a>


                    <a href=""><div class="widget">
                        <div class="widget-header">
                        <i class="fas fa-chart-line"></i>
                            <h3>View Students</h3>
                        </div>
                        <div class="widget-body">
                            
                        </div>
                    </div>
                    </a>
                    <!-- Add more widgets as needed -->

                    
                </div>
            </main>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        alert('Logged in successfully , Welcome admin')
        // Example Chart.js setup
       /* var attendanceChart = document.getElementById('attendanceChart').getContext('2d');
        var myChart = new Chart(attendanceChart, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Attendance Rate',
                    data: [85, 92, 78, 95, 88, 90, 98],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });*/
        document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('sidebar-collapsed');
        mainContent.classList.toggle('main-content-collapsed');
    });
});


    </script>
     <footer> &copy; 2024 Eschosys Technologies</footer>
</body>

</html>
