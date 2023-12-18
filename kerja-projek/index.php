<?php include("db_conect.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Antonius Personal Profile</title>
  <!-- css -->
  <link rel="stylesheet" href="./style.css">
  <!-- JS -->
  <script src="script.js"></script>
  <!-- booststrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2">
  <!-- navbar -->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary shadow-ms" id="navbar-example2">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Tentang saya">Tentang Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Portfolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Kemampuan">Kemampuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Akhir navbar -->

  <!-- Jumbotron -->
  <section class="mt-5 jumbotron text-center" id="home">
    <img src="img/foto-diri-removebg-preview.png" alt="Antonius" width="200px" class="rounded-circle img-thumbnail" <img
      src="..." alt="...">
    <h1 class="display-4">Antonius Ardi Panduwijaya</h1>
    <p class="lead">Pelajar | Manusia Normal</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,320L26.7,282.7C53.3,245,107,171,160,154.7C213.3,139,267,181,320,208C373.3,235,427,245,480,250.7C533.3,256,587,256,640,250.7C693.3,245,747,235,800,208C853.3,181,907,139,960,138.7C1013.3,139,1067,181,1120,213.3C1173.3,245,1227,267,1280,250.7C1333.3,235,1387,181,1413,154.7L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhir Jumbotron -->

  <!-- About -->
  <section id="Tentang saya">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Tentang Saya</h2>
        </div>
      </div>
    </div>
    <img src="img/foto-diri-removebg-preview.png" class="col-sm-6 float-md-end mb-3 ms-md-3" alt="Antonius"
      style="position: relative; top: 110px;">

    <div class="row fs-5" style="margin-top: 110px; margin-left: 1.8rem;">
      <div class="col-auto me-auto">
        <h3>Biodata Diri</h3>
        <p><b>Nama:</b> Antonius Ardi Panduwijaya</p>
        <p><b>Tempat Tanggal lahir:</b> Bekasi, 28 November 2006</p>
        <p><b>Alamat:</b> Kirana Cibitung Blok M4/48</p>
        <p><b>Agama:</b> Kristen</p>
        <p><b>Nomor Telepon:</b> +62 815-8585-3494</p>
        <p><b>Hobi:</b> Berenang dan Bermain gitar</p>
      </div>

      <div style="margin-top: 40px;">
        <h3>Riwayat Pendidikan</h3>
        <p><b>SD:</b> SDN Telaga Asih 04  (2012 - 2018)</p>
        <p><b>SMP:</b> SMPN 08 Cibitung (2018 - 2020)</p>
        <p><b>SMK:</b> SMK Telekomunikasi Telesandi Bekasi (2021 - Sekarang)</p>
      </div>

      <div style="margin-top: 40px;">
        <h3>Pencapaian</h3>
        <p>Juara 2 Catur Classmet (2022)</p>
        <p>Juara 3 Catur Classmet (2021)</p>
        <p>Juara 1 Mobile legend warkop 500K (2020)</p>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1"
        d="M0,320L40,288C80,256,160,192,240,186.7C320,181,400,235,480,261.3C560,288,640,288,720,293.3C800,299,880,309,960,298.7C1040,288,1120,256,1200,218.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Project -->
  <section id="Portfolio" style="background-color: #e2edff ;">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="mb-5">Portofolio</h2>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/desaign.png" height="200px" class="card-img-top" alt="project 1">
              <div class="card-body">
                <h5 class="card-title">Design</h5>
                <p class="card-text">Ini adalah salah satu karya yang saya buat sendiri untuk mengasah Kemampuan saya.
                  Dan saya membuatnya di Figma</p>
                <p>kenapa saya membuat design ini di Figma? Karena Figma memberi saya aksesibilitas design saya dari
                  mana saja.</p>

                <p>Saya dapat bekerja di Sekolah, dari rumah, atau bahkan saat bepergian, karena design
                  disimpan di cloud dan dapat diakses dari berbagai perangkat.</p>
                <a href="https://www.figma.com/proto/Hqt5K90T6nqbVxEIFPhOzc/Latihan-UI-1?type=design&t=qURQ1yNuX7faRALc-0&scaling=scale-down&page-id=0%3A1&node-id=18-2&starting-point-node-id=18%3A2"
                  class="btn btn-primary">Kunjungi</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/age-calculator.png" height="200px" class="card-img-top" alt="project 2">
              <div class="card-body">
                <h5 class="card-title">Coding</h5>
                <p class="card-text">Ini adalah salah satu projek yang saya buat, projek ini dapat menghitung sudah
                  berapa lama anda hidup. </p>
                <p>Seperti sudah berapa tahun anda hidup, sudah berapa bulan anda hidup, dan sudah berapa hari anda
                  hidup</p>
                <p>Projek ini saya buat menggunakan Visual Studio Code dengan bahasa pemrograman Html, Css, dan
                  javasript </p>
                <a href="../age-calculator/index.html" class="btn btn-primary">Kunjungi</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/edit vidio.jpg" height="200px" class="card-img-top" alt="project 3">
              <div class="card-body">
                <h5 class="card-title">Vidio Editing</h5>
                <p class="card-text">Ini adalah salah satu Vidio yang saya edit sendiri menggunakan aplikasi Alight
                  Motion</p>
                <p>Dalam video ini, saya tengah bermain game Mobile Legends dan berhasil mengalahkan dua Pro Player
                  terkenal di Indonesia, yaitu Kabuki yang berposisi sebagai Goldlane di Pro Scene MPL Indonesia, dan
                  Rippo, Pro Player dari Pro Scene MPL Malaysia.</p>
                <p>Saya menggunakan salah satu hero mage di game Mobile Legends ini yang
                  bernama Yve</p>
                <a href="https://vt.tiktok.com/ZSNqAyQeU/" class="btn btn-primary">Kunjungi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="10"
        d="M0,160L30,181.3C60,203,120,245,180,234.7C240,224,300,160,360,154.7C420,149,480,203,540,208C600,213,660,171,720,154.7C780,139,840,149,900,160C960,171,1020,181,1080,197.3C1140,213,1200,235,1260,240C1320,245,1380,235,1410,229.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Project -->

  <!-- Skills -->
  <section id="Kemampuan" style="background-color: white;">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Kemampuan</h2>
          <div class="content">
            <div class="profile-skills">
              <div>
                <input type="checkbox" id="sk1">
                <label for="sk1"></label>
                <ul class="skills skills1">
                  <li class="sk-dis"><span>DESIGN</span></li>
                  <li class="sk-pro"><span>CODING</span></li>
                  <li class="sk-ani"><span>Vidio Editing</span></li>
                  </li>
                </ul>
              </div>
              <div>
                <input type="checkbox" id="sk2">
                <label for="sk2"></label>
                <ul class="skills skills2">
                  <li class="sk-gim"><span>CANVA</span></li>
                  <li class="sk-ado"><span>FIGMA</span></li>
                  <li class="sk-wor"><span>BOOTSTRAP</span></li>
                  </li>
                </ul>
              </div>
              <div>
                <input type="checkbox" id="sk3">
                <label for="sk3"></label>
                <ul class="skills skills3">
                  <li class="sk-css"><span>HTML</span></li>
                  <li class="sk-htm"><span>CSS</span></li>
                  <li class="sk-sql"><span>SQL</span></li>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="5"
        d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Skills -->
  <!-- Feed Back -->
  <section id="Komentar" style="background-color: #e2edff;">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Komentar</h2>
        </div>
      </div>
      <form action="./process_feedback.php" method="post">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Name" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Isikan Nama Anda">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">
              </div>
            </div>

            <div class="mb-3">
              <label for="Komentar" class="form-label">Saran/Komentar</label>
              <textarea class="form-control" name="message" id="Komentar" rows="3"></textarea>
            </div>
            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </form>
    </div>

    <div class="komen-container">
      <?php $result = mysqli_query($conn, "SELECT * FROM feedback1");
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="circle-komen">
          <div class="komen-header">
            <p>
              <?php echo $row["name"] . "<br>"; ?>
            </p>
            <p>
              <?php echo $row["created_at"] . "<br>"; ?>
            </p>
          </div>
          <div class="isi-komen">
            <p id="message">
              <?php echo $row["massage"] . "<br>"; ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="10"
        d="M0,192L40,165.3C80,139,160,85,240,64C320,43,400,53,480,53.3C560,53,640,43,720,69.3C800,96,880,160,960,181.3C1040,203,1120,181,1200,154.7C1280,128,1360,96,1400,80L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
      </path>
    </svg>
    <!-- Akhir Feed Back -->
    <!-- Contack -->
    <footer class="bg-primary text-white text-center p-3" id="Kontak">
      <p>Hubungi Saya Di:</p>
      <a href="https:/wa.me/+6281585853494" style="color: white; "><i class="bi bi-whatsapp"></i></a> <a
        href="https://www.instagram.com/antonius_pandu21/"
        style="color: white; text-decoration: none; margin-left: 5px;"> <i class="bi bi-instagram"></i></a> <a
        href="mailto:panduajaykan@gmail.com" style="color: white; text-decoration: none; margin-left: 5px;"> <i
          class="bi bi-envelope-at"></i></a>
    </footer>
    <!-- Akhir Contact -->
    <!-- </div>
        </div>
        </div>
        </nav> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstqrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script>
      var sensor = ["anjing", "babi", "anjir", "tai", "bangsat", "titit", "memek", "kontol", "ayam", "puki", "pemai", "asu", "pepek", "anjay", "memek", "tete", "tetek", "bjir", "njir"]
      function replaceTextInElements(elements) {
        elements.forEach(function (element) {
          // Mengambil teks dari elemen
          var originalText = element.textContent;

          // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
          var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {
            // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
            return '*'.repeat(match.length);
          });

          // Menetapkan teks yang telah diganti kembali ke elemen
          element.textContent = newText;
        });
      }

      // Mengambil semua elemen <p> dengan id="message"
      var messageElements = document.querySelectorAll('p#message');

      // Mengganti kata-kata dalam elemen-elemen yang dipilih
      replaceTextInElements(messageElements);
    </script>
    <script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>
    <script>

      window.onload = function () {
        scrollSpy('nav', {
          sectionSelector: 'section',
          targetSelector: 'a.nav-link',
          offset: 120,
          activeClass: 'active',
        });
      };
    </script>
</body>

</html>