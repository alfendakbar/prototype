<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMLOG</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#home" class="navbar-logo">
      <img src="image/logo1.png" alt="SIMLOG Logo" class="logo-image">
      <span>SIMLOG</span>
      </a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#company">Company Profile</a>
        <a href="#services">Services</a>
        <a href="#rates">Rates</a>
        <a href="#contact">Contact Us</a>
      </div>

      <div class="navbar-extra">
        <a href="halaman/masuk.php" id="user"> <i data-feather="user"></i></a>
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <section id="home" class="hero">
  <div class="slider-container">

    <div class="slides">

      <div class="slide">
        <img src="image/img1.jpg" alt="Suasana gudang logistik modern" class="slide-bg">
        <div class="slide-content">
          <h1>Sistem Informasi<span> Management Logistic</span></h1>
          <p>Mengenal Lebih Dekat SIMLOG.</p>
        </div>
      </div>

      <div class="slide">
        <img src="image/img2.jpg" alt="Proses distribusi dan pengiriman barang" class="slide-bg">
        <div class="slide-content">
          <h1>Layanan<span> Terpercaya</span></h1>
          <p>Efisiensi dan keamanan untuk bisnis Anda.</p>
        </div>
      </div>

      <div class="slide">
        <img src="image/img5.jpg" alt="Jaringan logistik yang luas" class="slide-bg">
        <div class="slide-content">
          <h1>Jangkauan<span> Luas</span></h1>
          <p>Distribusi cepat ke seluruh pelosok Indonesia.</p>
        </div>
      </div>

      <div class="slide">
        <img src="image/img6.png" alt="Teknologi pelacakan canggih" class="slide-bg">
        <div class="slide-content">
          <h1>Teknologi<span> Canggih</span></h1>
          <p>Didukung sistem tracking real-time 24/7.</p>
        </div>
      </div>

    </div>

    <button class="slider-nav prev" aria-label="Previous Slide"><i data-feather="chevron-left"></i></button>
    <button class="slider-nav next" aria-label="Next Slide"><i data-feather="chevron-right"></i></button>
    
  </div>
</section>
        <section id="company" class="company-profile">
  <h2 class="company-title"><span>Company</span> Profile</h2>
  
  <div class="company-grid-container">

    <div class="company-item">
      <h3>Visi Kami</h3>
      <p>
        Menjadi penyedia solusi logistik terdepan untuk produk teknologi dan elektronik di Indonesia, dengan menghadirkan layanan yang efisien, terpercaya, dan inovatif.
      </p>
    </div>

    <div class="company-item why-us-box">
      <h3>Mengapa Memilih SIMLOG?</h3>
      <ul class="why-us-list">
        <li><i data-feather="check-circle"></i><span>Spesialisasi dalam produk teknologi dan elektronik</span></li>
        <li><i data-feather="check-circle"></i><span>Sistem tracking real-time</span></li>
        <li><i data-feather="check-circle"></i><span>Jaringan distribusi yang luas</span></li>
      </ul>
    </div>

    <div class="company-item value-box">
      <h3>Nilai-Nilai Kami</h3>
      <div class="value-item">
        <strong>Integritas</strong>
        <p>Berkomitmen pada transparansi dan kejujuran dalam setiap layanan</p>
      </div>
      <div class="value-item">
        <strong>Inovasi</strong>
        <p>Terus mengembangkan teknologi untuk meningkatkan efisiensi</p>
      </div>
      <div class="value-item">
        <strong>Keunggulan</strong>
        <p>Memberikan layanan terbaik dengan standar kualitas tinggi</p>
      </div>
    </div>

    <div class="company-item">
      <h3>Misi Kami</h3>
      <p>
        Memberikan solusi manajemen logistik yang komprehensif dan terintegrasi untuk membantu bisnis teknologi berkembang dengan optimal melalui:
      </p>
      <ul class="mission-list">
        <li>Layanan logistik yang cepat dan akurat</li>
        <li>Sistem informasi yang mudah digunakan</li>
        <li>Dukungan pelanggan 24/7</li>
        <li>Harga yang kompetitif dan transparan</li>
      </ul>
    </div>

  </div>
</section>
    <section id="services" class="services">
  <div class="services-header">
    <h2 class="rates-title">Layanan <span> Unggulan Kami</span></h2>
    <p>Kami menyediakan berbagai layanan logistik yang dirancang khusus untuk memenuhi kebutuhan industri teknologi dan elektronik modern.</p>
  </div>

  <div class="services-grid-container">

    <div class="service-card">
      <div class="service-icon-wrapper">
        <i data-feather="archive"></i>
      </div>
      <div class="service-content">
        <h3>Manajemen Inventori</h3>
        <p>Sistem manajemen stok barang elektronik dan teknologi dengan tracking real-time.</p>
        <ul class="service-features">
          <li><i data-feather="check-circle"></i><span>Monitoring stok otomatis</span></li>
          <li><i data-feather="check-circle"></i><span>Notifikasi stok menipis</span></li>
          <li><i data-feather="check-circle"></i><span>Laporan inventori detail</span></li>
        </ul>
      </div>
    </div>

    <div class="service-card">
      <div class="service-icon-wrapper">
        <i data-feather="truck"></i>
      </div>
      <div class="service-content">
        <h3>Distribusi & Pengiriman</h3>
        <p>Layanan pengiriman cepat dan aman untuk produk teknologi ke seluruh Indonesia.</p>
        <ul class="service-features">
          <li><i data-feather="check-circle"></i><span>Pengiriman express</span></li>
          <li><i data-feather="check-circle"></i><span>Tracking real-time</span></li>
          <li><i data-feather="check-circle"></i><span>Asuransi barang</span></li>
        </ul>
      </div>
    </div>

    <div class="service-card">
      <div class="service-icon-wrapper">
        <i data-feather="shield"></i>
      </div>
      <div class="service-content">
        <h3>Keamanan Barang</h3>
        <p>Sistem keamanan berlapis untuk melindungi barang elektronik berharga.</p>
        <ul class="service-features">
          <li><i data-feather="check-circle"></i><span>Gudang berstandar internasional</span></li>
          <li><i data-feather="check-circle"></i><span>CCTV 24/7</span></li>
          <li><i data-feather="check-circle"></i><span>Sistem alarm canggih</span></li>
        </ul>
      </div>
    </div>

    <div class="service-card">
      <div class="service-icon-wrapper">
        <i data-feather="clock"></i>
      </div>
      <div class="service-content">
        <h3>Layanan 24/7</h3>
        <p>Dukungan pelanggan dan monitoring sistem sepanjang waktu.</p>
        <ul class="service-features">
          <li><i data-feather="check-circle"></i><span>Customer service 24/7</span></li>
          <li><i data-feather="check-circle"></i><span>Monitoring sistem real-time</span></li>
          <li><i data-feather="check-circle"></i><span>Response time cepat</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="services-cta">
    <h2>Siap Memulai?</h2>
    <p>Hubungi tim kami untuk konsultasi gratis dan dapatkan solusi logistik terbaik.</p>
    <div class="cta-buttons">
      <a href="#contact" class="btn-primary">Hubungi Kami</a>
      <a href="#rates" class="btn-secondary">Lihat Harga</a>
    </div>
  </div>
</section>
    <section id="rates" class="rates">
  <h2 class="rates-title">Pilih Paket <span>yang Tepat</span></h2>
  <p class="rates-description">
    Kami menyediakan berbagai pilihan paket logistik dengan harga transparan dan layanan berkualitas tinggi.
  </p>

  <div class="rates-container">

    <div class="rate-card">
      <h3>Paket Basic</h3>
      <div class="price-container">
        Rp 15.000<small>/kg</small>
      </div>
      <p class="card-description">Solusi ekonomis untuk pengiriman standar</p>
      <hr>
      <ul class="features-list">
        <li><i data-feather="check"></i><span>Pengiriman 5-7 hari kerja</span></li>
        <li><i data-feather="check"></i><span>Maksimal 10 kg per paket</span></li>
        <li><i data-feather="check"></i><span>Tracking basic</span></li>
        <li><i data-feather="check"></i><span>Customer support email</span></li>
        <li><i data-feather="check"></i><span>Gratis packaging standar</span></li>
      </ul>
      <a href="#contact" class="cta-button dark">Pilih Paket</a>
    </div>

    <div class="rate-card popular">
      <div class="popular-badge">Paling Populer</div>
      <h3>Paket Standard</h3>
      <div class="price-container">
        Rp 25.000<small>/kg</small>
      </div>
      <p class="card-description">Pilihan terbaik untuk kebutuhan bisnis</p>
      <hr>
      <ul class="features-list">
        <li><i data-feather="check"></i><span>Pengiriman 3-5 hari kerja</span></li>
        <li><i data-feather="check"></i><span>Maksimal 25 kg per paket</span></li>
        <li><i data-feather="check"></i><span>Tracking real-time</span></li>
        <li><i data-feather="check"></i><span>Customer support 24/7</span></li>
        <li><i data-feather="check"></i><span>Asuransi barang</span></li>
        <li><i data-feather="check"></i><span>Gratis packaging premium</span></li>
        <li><i data-feather="check"></i><span>Prioritas handling</span></li>
      </ul>
      <a href="#contact" class="cta-button">Pilih Paket</a>
    </div>

    <div class="rate-card premium">
      <h3>Paket Premium</h3>
      <div class="price-container">
        Rp 40.000<small>/kg</small>
      </div>
      <p class="card-description">Layanan express untuk kebutuhan mendesak</p>
      <hr>
      <ul class="features-list">
        <li><i data-feather="check"></i><span>Pengiriman 1-2 hari kerja</span></li>
        <li><i data-feather="check"></i><span>Maksimal 50 kg per paket</span></li>
        <li><i data-feather="check"></i><span>Tracking real-time</span></li>
        <li><i data-feather="check"></i><span>Customer support 24/7</span></li>
        <li><i data-feather="check"></i><span>Asuransi penuh</span></li>
        <li><i data-feather="check"></i><span>Packaging khusus elektronik</span></li>
        <li><i data-feather="check"></i><span>Prioritas handling tertinggi</span></li>
        <li><i data-feather="check"></i><span>Dedicated courier</span></li>
        <li><i data-feather="check"></i><span>Same day delivery (area tertentu)</span></li>
      </ul>
      <a href="#contact" class="cta-button dark">Pilih Paket</a>
    </div>

  </div>
</section>
    
<section id="contact" class="contact">
  <div class="contact-header">
    <h2>Mari Berkolaborasi</h2>
    <p>Tim ahli kami siap membantu Anda menemukan solusi logistik terbaik untuk kebutuhan bisnis teknologi Anda.</p>
  </div>

  <div class="contact-container">

    <div class="contact-info">
      <h4>Informasi Kontak</h4>
      
      <div class="info-card">
        <div class="icon-wrapper">
          <i data-feather="phone"></i>
        </div>
        <div class="info-text">
          <h5>Telepon</h5>
          <p>+62 21 1234 5678</p>
          <p>+62 812 3456 7890</p>
        </div>
      </div>

      <div class="info-card">
        <div class="icon-wrapper">
          <i data-feather="mail"></i>
        </div>
        <div class="info-text">
          <h5>Email</h5>
          <p><a href="mailto:info@simlog.com">info@simlog.com</a></p>
          <p><a href="mailto:support@simlog.com">support@simlog.com</a></p>
        </div>
      </div>

      <div class="info-card">
        <div class="icon-wrapper">
          <i data-feather="map-pin"></i>
        </div>
        <div class="info-text">
          <h5>Alamat</h5>
          <p>Jl. Sudirman No. 123<br>Jakarta Pusat 10220<br>Indonesia</p>
        </div>
      </div>
      
      <div class="info-card">
        <div class="icon-wrapper">
          <i data-feather="clock"></i>
        </div>
        <div class="info-text">
          <h5>Jam Operasional</h5>
          <p>Senin - Jumat: 08:00 - 18:00</p>
          <p>Sabtu: 08:00 - 14:00</p>
          <p>Customer Support: 24/7</p>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <h4>Kirim Pesan</h4>
      <p>Isi form di bawah ini dan tim kami akan menghubungi Anda dalam 24 jam.</p>
      <form action="">
        <div class="form-row">
          <div class="form-group">
            <label for="nama-depan">Nama Depan</label>
            <input type="text" id="nama-depan" name="nama-depan" placeholder="John" required>
          </div>
          <div class="form-group">
            <label for="nama-belakang">Nama Belakang</label>
            <input type="text" id="nama-belakang" name="nama-belakang" placeholder="Doe" required>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
          <label for="nomor-telepon">Nomor Telepon</label>
          <input type="tel" id="nomor-telepon" name="nomor-telepon" placeholder="+62 812 3456 7890" required>
        </div>
        <div class="form-group">
          <label for="perusahaan">Perusahaan (Opsional)</label>
          <input type="text" id="perusahaan" name="perusahaan" placeholder="PT. Teknologi Maju">
        </div>
        <div class="form-group">
          <label for="subjek">Subjek</label>
          <input type="text" id="subjek" name="subjek" placeholder="Konsultasi Layanan Logistik" required>
        </div>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" rows="5" placeholder="Ceritakan kebutuhan logistik Anda..." required></textarea>
        </div>
        <button type="submit" class="submit-button">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
<section class="cta-section">
  <h2>Sudah Siap Memulai?</h2>
  <p>Bergabunglah dengan ratusan perusahaan yang telah mempercayai SIMLOG</p>
  <a href="#rates" class="cta-button">Daftar Sekarang</a>
</section>

      <footer>
      <div class="socials">
        </div>
      <div class="links">
        </div>
      <div class="credit">
        <p>Created by <a href="">SIMLOG</a>. | © 2025</p>
      </div>
    </footer>

    <script>
      feather.replace();
    </script>
    
    <script>
      // Pastikan skrip berjalan setelah semua elemen HTML dimuat
      document.addEventListener('DOMContentLoaded', function () {

        // Ambil semua tautan navigasi dan semua bagian konten
        const navLinks = document.querySelectorAll('.navbar-nav a');
        const sections = document.querySelectorAll('section');

        // Fungsi untuk menampilkan semua bagian (untuk tautan Home)
        const showAllSections = () => {
          sections.forEach(section => {
            // Mengembalikan gaya display ke nilai default dari CSS
            section.style.display = ''; 
          });
        };

        // Fungsi untuk menampilkan satu bagian spesifik berdasarkan ID
        const showSection = (targetId) => {
          // Pertama, sembunyikan semua bagian
          sections.forEach(section => {
            section.style.display = 'none';
          });
          // Kemudian, tampilkan hanya bagian yang ditargetkan
          const targetSection = document.querySelector(targetId);
          if (targetSection) {
            // Mengembalikan gaya display ke nilai defaultnya (misal: block, flex, dll)
             targetSection.style.display = '';
          }
        };

        // Tambahkan event click ke setiap tautan navigasi
        navLinks.forEach(link => {
          link.addEventListener('click', function (event) {
            // Mencegah perilaku default tautan (melompat ke anchor)
            event.preventDefault(); 
            
            const targetId = this.getAttribute('href');

            if (targetId === '#home') {
              showAllSections(); // Jika tautan Home, tampilkan semuanya
            } else {
              showSection(targetId); // Jika tautan lain, tampilkan bagian itu saja
            }
          });
        });

      });
    </script>

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelector('.slides');
    const slide = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const nextBtn = document.querySelector('.slider-nav.next');

    let currentIndex = 0;
    const totalSlides = slide.length;

    // Fungsi untuk pindah ke slide tertentu
    function goToSlide(index) {
      if (index < 0) {
        index = totalSlides - 1;
      } else if (index >= totalSlides) {
        index = 0;
      }
      slides.style.transform = `translateX(-${index * (100 / totalSlides)}%)`;
      currentIndex = index;
    }

    // Event listener untuk tombol next
    nextBtn.addEventListener('click', function () {
      goToSlide(currentIndex + 1);
    });

    // Event listener untuk tombol previous
    prevBtn.addEventListener('click', function () {
      goToSlide(currentIndex - 1);
    });
    
    // Opsional: Slider otomatis pindah setiap 5 detik
    setInterval(function() {
        goToSlide(currentIndex + 1);
    }, 5000); // 5000 milidetik = 5 detik
  });
</script>
    </body>
</html>