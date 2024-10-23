<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digicubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Teko-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">

    <style>
      .hero-section {
            position: relative;
            overflow: hidden;
        }
      .hero-img {
        filter: drop-shadow(1px 10px 15px rgba(0, 0, 0, 0.15));
      }
      .min-vh-75 {
          min-height: 75vh;
      }
      #timer {
        font-size: 2rem;
      }

      .image-element, .text-element {
        opacity: 0;
        transition: all 2s ease-in-out;
        transform: translateX(-100%);
      }

      .text-element {
        transform: translateX(100%);
      }

      .visible .image-element {
        opacity: 1;
        transform: translateX(0);
      }

      .visible .text-element {
        opacity: 1;
        transform: translateX(0);
      }

      .service-card {
          transition: transform 0.3s ease;
      }
      .service-card:hover {
          transform: translateY(-5px);
      }
      @media (max-width: 991.98px) {
          .min-vh-75 {
              min-height: auto;
          }
      }
      .faq-section {
        background-color: #28a745;
        color: #fff;
      }
    
      .faq-title {
        font-size: 3rem;
        font-weight: bold;
        text-align: left;
      }
    
      .faq-content {
        margin-top: 2rem;
      }
    
      summary {
        font-size: 1.25rem;
        font-weight: bold;
        cursor: pointer;
        margin: 1rem 0;
      }
    
      details {
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      }
    
      details p {
        margin-top: 0.5rem;
        font-size: 1rem;
      }
    
      .faq-image img {
        max-width: 100%;
        height: auto;
      }
      .testimonials-section {
        background-color: #f8f9fa;
      }

      .testimonials-section .card {
        margin-bottom: 30px;
      }

      .testimonials-section .card-text {
        font-size: 1rem;
        color: #333;
      }

      .testimonials-section .card-title {
        font-size: 1.1rem;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <img src="img/logo.png" alt="Digicubes" width="60">

          <div class="ms-2 text-success text-start" style="font-family: 'Teko', Arial; letter-spacing: 2px;">
            <span style="font-size: 1.5rem; line-height: 1; font-weight: 700;">DIGICUBES</span><br>
            <span style="font-size: 1rem; line-height: 1;">INDONESIA</span>
          </div>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
          <li class="nav-item">
            <a class="nav-link fs-5 fw-semibold" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-semibold" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-semibold" href="#ecourse">Ecourse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-semibold" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-semibold" href="#testimoni">Testimoni</a>
          </li>
        </ul>
      </div>
  </nav>

  <section class="hero-section bg-tertiary" id="home">
    <div class="container py-5">
      <div class="row align-items-center min-vh-75">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="display-4 fw-bold mb-4">E-Course Content Creator</h1>
          <p class="lead text-muted mb-4">
            Tingkatkan keterampilanmu dalam dunia konten kreator! Nikmati diskon
            <span class="fw-bold text-success">33%</span> untuk kursus ini. Promo terbatas!
          </p>
          <div id="timer" class="mb-4 fs-4 text-success fw-bold"></div>
          <div class="d-flex gap-3">
            <a href="#ecourse">
              <button class="btn btn-success btn-lg px-4">Daftar Sekarang</button>
            </a>
          </div>
        </div>
        <div class="col-lg-6 hero-img">
          <img src="img/hero.png" alt="Hero Image" class="img-fluid">
        </div>
      </div>
    </div>
  </section>


  <section class="bg-success" id="about">
    <div class="container mx-auto py-5 jumbotron bg-tertiary row gap-4 align-items-center">
      <div class="col-md-4">
        <img src="img/class.jpg" alt="E-Course" width="500" class="img-fluid image-element">
      </div>
      <div class="col-md-6 text-light text-element">
        <h2 class="fs-1 pb-2">Tentang Digicubes</h2>
        <p>
          DIGICUBES Indonesia adalah platform e-learning yang berfokus pada
          penyediaan kursus online (e-course) di bidang Digital Marketing. Kami
          berkomitmen untuk membantu para profesional, pebisnis, dan individu yang
          ingin meningkatkan keterampilan mereka dalam pemasaran digital, dari
          strategi media sosial hingga optimasi SEO. Dengan kurikulum yang
          up-to-date dan praktis, peserta akan mendapatkan pengetahuan mendalam
          yang dapat langsung diterapkan dalam dunia bisnis dan pemasaran online.
        </p>
        <p>
          Di DIGICUBES Indonesia, kami percaya bahwa edukasi berkualitas harus
          dapat diakses oleh semua orang, itulah sebabnya kursus kami dirancang
          dengan fleksibilitas waktu dan akses materi yang mudah. Bergabunglah
          dengan kami dan mulailah perjalanan Anda untuk menjadi ahli Digital
          Marketing!
        </p>
      </div>
    </div>
  </section>


  <section class="bg-body-tertiary" id="ecourse">
    <div class="container mx-auto row py-5 justify-content-around">
      <div class="card service-card" style="width: 18rem;">
        <img src="img/teknik sadis digital marketing.jpeg" class="card-img-top pt-2" alt="digital marketing">
        <div class="card-body">
          <h5 class="card-title">E-Course Digital Marketing</h5>
          <p class="card-text">Rp 15,000</p>
          <a href="detail_produk.php?course=digital-marketing" class="btn btn-outline-success">Lihat Detail</a>
        </div>
      </div>

      <div class="card service-card" style="width: 18rem;">
        <img src="img/jurus jitu content creator.jpeg" class="card-img-top pt-2" alt="content creator">
        <div class="card-body">
          <h5 class="card-title">E-Course Content Creator</h5>
          <p class="card-text">
            <del class="text-danger">Rp 149,000</del> Rp 99,000
          </p>
          <a href="detail_produk.php?course=content-creator" class="btn btn-outline-success">Lihat Detail</a>
        </div>
      </div>                   
    </div>
  </section>

  <section class="faq-section bg-success py-5" id="faq">
    <div class="container text-light">
      <div class="row">
        <div class="col-md-6">
          <h2 class="faq-title">FAQ</h2>
          <div class="faq-image">
            <img src="img/FAQ.png" alt="FAQ Illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="faq-content">
            <details>
              <summary>Siapa yang cocok mengikuti Ecourse ini?</summary>
              <p>Ecourse ini cocok untuk siapa saja, baik pemula maupun yang sudah berpengalaman, yang ingin meningkatkan keterampilan mereka dalam membuat konten digital yang efektif. Cocok untuk content creator, social media manager, pemilik bisnis, atau siapa saja yang tertarik dengan dunia digital marketing.
              </p>
            </details>
            <details>
              <summary>Bagaimana format pembelajarannya?</summary>
              <p>Ecourse ini berbasis online, terdiri dari 30 video tutorial. Kamu bisa belajar sesuai waktu dan kecepatanmu sendiri (self-paced learning), dimana saja dan kapan saja.
              </p>
            </details>
            <details>
              <summary>Berapa lama durasi Ecourse?</summary>
              <p>Masing-masing video berdurasi 3-10 menit/materi pembelajaran. Kamu juga bisa mengaksesnya kapan saja untuk selamanya.</p>
            </details>
            <details>
              <summary>Bagaimana cara mendaftar Ecourse?</summary>
              <p>Kamu bisa pilih Ecourse yang ingin dipelajari. Cukup isi data diri, pilih metode pembayaran, dan setelah pembayaran dikonfirmasi, kamu akan mendapatkan akses ke semua materi kursus.</p>
            </details>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials-section py-5 bg-light" id="testimoni">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Apa Kata Mereka Tentang Kursus Kami?</h2>
      
      <div class="row">
        <!-- Testimoni 1 -->
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <p class="card-text">"Kursus di Digicubes sangat membantu saya memahami Digital Marketing dengan lebih baik. Materinya lengkap dan instruktur sangat interaktif!"</p>
              <h5 class="card-title fw-bold text-success">- Farhan Prasetyo</h5>
              <p class="text-muted">Digital Marketing Enthusiast</p>
            </div>
          </div>
        </div>
  
        <!-- Testimoni 2 -->
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <p class="card-text">"Saya berhasil mengembangkan strategi media sosial untuk bisnis saya setelah mengikuti kursus ini. Sangat direkomendasikan!"</p>
              <h5 class="card-title fw-bold text-success">- Anisa Putri</h5>
              <p class="text-muted">Entrepreneur</p>
            </div>
          </div>
        </div>
  
        <!-- Testimoni 3 -->
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <p class="card-text">"Sangat puas dengan materi yang disajikan! Saya merasa lebih percaya diri dalam memasarkan produk secara online berkat kursus ini."</p>
              <h5 class="card-title fw-bold text-success">- Andi Wijaya</h5>
              <p class="text-muted">Freelance Content Creator</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-success">
    <div class="container mx-auto row pt-5 justify-content-between text-light">
      <div class="col-md-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2141095696084!2d108.522417174104!3d-6.743718765938361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d2d80a4ee89%3A0x37243f781a08b106!2sKHALIFA%20INDONESIA!5e0!3m2!1sen!2sid!4v1729417023990!5m2!1sen!2sid" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-md-4">
        <h3>Kontak Kami</h3>
        <h6>+62 838 - 4294 - 8462</h6>
        <h6>Jl. Saladara, Perumahan Citra Green Garden Blok E8-10, Kel. Karyamulya, Kec. Kesambi, Kota Cirebon</h6>
      </div>
      <div class="col-md-4 pt-3">
        <a href="https://www.tiktok.com/@digicub.idn" target="_blank" class="nav-link">
          <img src="img/icons8-tiktok-48.png" alt=""> @digicube.idn
        </a> <br>
        <a href="http://www.instagram.com/digicube.idn" target="_blank" class="nav-link">
          <img src="img/icons8-instagram-48.png" alt=""> @digicube.idn
        </a>
      </div>
      <p class="text-center">Copyright &copy 2024 | Digicubes Indonesia</p>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      });

      const section = document.querySelector("#about");
      observer.observe(section);

      // Set the date for countdown (replace with your promo end date)
      const countdownDate = new Date("Oct 31, 2024 23:59:59").getTime();

      // Update the countdown every 1 second
      const x = setInterval(function () {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        // Time calculations for days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="timer"
        document.getElementById("timer").innerHTML =
          "Promo Berakhir Dalam: " +
          days +
          "d " +
          hours +
          "h " +
          minutes +
          "m " +
          seconds +
          "s ";

        // If the countdown is over, display a message
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("timer").innerHTML = "Promo Berakhir";
        }
      }, 1000);

    });
    
  </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>