<?php
// Simulasi data produk
$products = [
    'digital-marketing' => [
        'title' => 'E-Course Digital Marketing',
        'image' => 'img/teknik sadis digital marketing.jpeg',
        'description' => 'Kursus Digital Marketing yang mengajarkan teknik-teknik pemasaran digital terkini, mulai dari SEO, iklan online, hingga media sosial.',
        'price' => 'Rp 15,000',
    ],
    'content-creator' => [
        'title' => 'E-Course Content Creator',
        'image' => 'img/jurus jitu content creator.jpeg',
        'description' => 'Kursus Content Creator yang berfokus pada pembuatan konten kreatif, mulai dari fotografi, video editing, hingga manajemen media sosial.',
        'price' => '<del class="text-danger">Rp 149,000</del> Rp 99,000',
    ],
];

// Mendapatkan course dari URL
$courseKey = isset($_GET['course']) ? $_GET['course'] : 'digital-marketing';
$product = $products[$courseKey];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['title']; ?> - Digicubes Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-6">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-fluid rounded">
        </div>

        <!-- Detail Produk -->
        <div class="col-md-6">
            <h1 class="fw-bold"><?php echo $product['title']; ?></h1>
            <p class="lead"><?php echo $product['description']; ?></p>
            <p class="text-success h4"><?php echo $product['price']; ?></p>
            <a href="register.php?course=<?php echo $courseKey; ?>" class="btn btn-success btn-lg">Daftar Sekarang</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>