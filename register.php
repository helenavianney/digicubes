<?php
include_once 'config.php';

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

// Mendapatkan kursus yang dipilih dari URL
$courseKey = isset($_GET['course']) ? $_GET['course'] : 'digital-marketing';
$product = $products[$courseKey];

// Menangani data form setelah submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $selectedCourse = $_POST['course'];

    // Simpan atau kirim data ke database (kode simulasi)
    // Di sini kamu bisa memasukkan data ke database atau mengirimnya ke email
    $insertQuery = "INSERT INTO registrations (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$selectedCourse')";
    $resultQuery = mysqli_query($conn, $insertQuery);

    echo "<div class='alert alert-success'>Pendaftaran Berhasil! Kursus yang dipilih: $selectedCourse</div>";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran - <?php echo $product['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h2 class="fw-bold text-center mb-5">Pendaftaran - <?php echo $product['title']; ?></h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="register.php?course=<?php echo $courseKey; ?>" method="POST" class="bg-light p-4 rounded shadow">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Masukkan nomor telepon Anda" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Kursus yang Dipilih</label>
                    <input type="text" name="course" id="course" class="form-control" value="<?php echo $product['title']; ?>" readonly>
                </div>

                <button type="submit" class="btn btn-success btn-lg w-100">Daftar Sekarang</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
