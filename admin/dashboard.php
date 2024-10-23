<?php
include '../config.php';

// Mengambil total pendaftar eCourse
$sqlRegistrations = "SELECT COUNT(*) AS total_registrations FROM registrations";
$resultRegistrations = $conn->query($sqlRegistrations);
$totalRegistrations = $resultRegistrations->fetch_assoc()['total_registrations'];

// Mengambil total kunjungan ke website
$sqlVisits = "SELECT COUNT(*) AS total_visits FROM visits";
$resultVisits = $conn->query($sqlVisits);
$totalVisits = $resultVisits->fetch_assoc()['total_visits'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - E-Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h2 class="fw-bold text-center mb-5">Admin Dashboard</h2>
    
    <div class="row">
        <!-- Card Total Pendaftar E-Course -->
        <div class="col-md-6 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title">Total Pendaftar E-Course</h3>
                    <p class="card-text fs-2"><?php echo $totalRegistrations; ?></p>
                </div>
            </div>
        </div>
        
        <!-- Card Total Kunjungan Situs -->
        <div class="col-md-6 mb-4">
            <div class="card border-success">
                <div class="card-body">
                    <h3 class="card-title">Total Kunjungan Website</h3>
                    <p class="card-text fs-2"><?php echo $totalVisits; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Logout -->
    <a href="logout.php" class="btn btn-danger float-end">Logout</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
