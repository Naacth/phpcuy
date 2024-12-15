<?php include 'includes/header.php'; ?>
<head>
<link rel="stylesheet" href="assets/portofolio.css">
</head>
  <section id="about">
    <h2>Tentang Saya</h2>
    <div class="flex-container">
      <div class="photo">
        <img src="assets/img/images.jpg" alt="Foto Saya" class="profile-photo">
      </div>
      <div class="info">
        <p>Nama saya Muhammad Fariz Ade Satriyo, seorang Full Stack Developer dan mahasiswa Ilmu Komputer di Universitas YATSI Madani. Saya memiliki pengalaman dalam berbagai bahasa pemrograman, JavaScript, Python, Java, php, dan c++.</p>
        <p>Saya memiliki minat yang besar di bidang teknologi dan bisnis, dan selalu berusaha untuk mengembangkan keterampilan saya serta mengikuti perkembangan terbaru di industri ini. Saya percaya bahwa kombinasi antara pengetahuan teknis dan pemahaman bisnis adalah kunci untuk menciptakan solusi yang inovatif dan efektif.</p>
      </div>
    </div>
  </section>

  <section id="education">
    <h2>Riwayat Pendidikan</h2>
    <div class="education-container">
      <div class="education-card">
        <i class="fas fa-school education-icon"></i> 
        <h3>SDN Jeungjing 1 (2011-2014)</h3>
      </div>
      <div class="education-card">
        <i class="fas fa-school education-icon"></i> 
        <h3>SDN Tigaraksa 2 (2014-2016)</h3>
      </div>
      <div class="education-card">
        <i class="fas fa-university education-icon"></i> 
        <h3>MTsN 2 Kab. Tangerang (2017-2019)</h3>
      </div>
      <div class="education-card">
        <i class="fas fa-graduation-cap education-icon"></i> 
        <h3>MAN 1 Kab. Tangerang (2020-2023)</h3>
      </div>
    </div>
  </section>
  
  
  <section id="skills">
    <h2>Keahlian</h2>
    <div class="skills-container">
      <div class="skill" id="js-skill">
        <i class="fab fa-js-square skill-icon js-icon"></i>
        <p>JavaScript</p>
        <div id="js-frameworks" class="frameworks"></div>
      </div>
      <div class="skill" id="python-skill">
        <i class="fab fa-python skill-icon python-icon"></i>
        <p>Python</p>
        <div id="python-frameworks" class="frameworks"></div>
      </div>
      <div class="skill" id="php-skill">
        <i class="fab fa-php skill-icon php-icon"></i>
        <p>PHP</p>
        <div id="php-frameworks" class="frameworks"></div>
      </div>
      <div class="skill" id="cpp-skill">
        <i class="fas fa-cogs skill-icon cpp-icon"></i>
        <p>C++</p>
        <div id="cpp-frameworks" class="frameworks"></div>
      </div>
    </div>
  </section>


  <section id="experience">
    <h2>Pengalaman Kerja</h2>
    <div class="experience-container">
      <div class="experience">
        <i class="fas fa-hard-hat experience-icon"></i>
        <h3>Surveyor Konstruksi</h3>
        <p>PT Dipt Dwijaya Selaras (2024)</p>
        <p>Melakukan pengukuran dan survei di lokasi konstruksi untuk memastikan kesesuaian dengan desain yang ditentukan.</p>
      </div>
      <div class="experience">
        <i class="fas fa-tools experience-icon"></i>
        <h3>Asisten Teknisi IT</h3>
        <p>Freelance (2023)</p>
        <p>Memperbaiki dan memelihara perangkat keras komputer serta perangkat lunak untuk perusahaan lokal.</p>
      </div>
    </div>
  </section>
  

  <section id="projects">
    <h2>Proyek</h2>
    <div class="projects-container">
      <div class="project">
        <i class="fas fa-tasks project-icon"></i>
        <h3>To-Do List</h3>
        <p>Sebuah aplikasi sederhana untuk mengelola daftar tugas harian.</p>
      </div>
      <div class="project">
        <i class="fas fa-calculator project-icon"></i>
        <h3>Calculator</h3>
        <p>Proyek kalkulator dasar yang dapat melakukan operasi matematika sederhana.</p>
      </div>
      <div class="project">
        <i class="fas fa-database project-icon"></i>
        <h3>Web Scraper</h3>
        <p>Sebuah program untuk mengambil data dari situs web menggunakan BeautifulSoup.</p>
      </div>
      <div class="project">
        <i class="fas fa-envelope project-icon"></i>
        <h3>Contact Form</h3>
        <p>Formulir kontak sederhana yang mengirim email menggunakan PHP.</p>
      </div>
      <div class="project">
        <i class="fas fa-blog project-icon"></i>
        <h3>Blog</h3>
        <p>Sistem blog dasar yang memungkinkan pengguna menulis dan mengelola artikel.</p>
      </div>
      <div class="project">
        <i class="fas fa-gamepad project-icon"></i>
        <h3>Number Guessing Game</h3>
        <p>Permainan tebak angka sederhana yang memberikan petunjuk kepada pemain.</p>
      </div>
      <div class="project">
        <i class="fas fa-user-graduate project-icon"></i>
        <h3>Student Database</h3>
        <p>Program untuk mengelola data siswa dalam bentuk array menggunakan C++.</p>
      </div>
    </div>
  </section>
  <footer>
    <p>&copy; 2024 Muhammad Fariz Ade Satriyo</p>
  </footer>
  
</body>
<script>
 document.getElementById('js-skill').addEventListener('mouseover', function() {
  document.getElementById('js-frameworks').innerHTML = 
    '<i class="fab fa-react"></i> React' +
    '<i class="fab fa-angular"></i> Angular' +
    '<i class="fab fa-vuejs"></i> Vue' +
    '<i class="fab fa-node-js"></i> Node.js';
});

document.getElementById('js-skill').addEventListener('mouseout', function() {
  document.getElementById('js-frameworks').innerHTML = '';
});

document.getElementById('python-skill').addEventListener('mouseover', function() {
  document.getElementById('python-frameworks').innerHTML = 
    '<i class="fab fa-python"></i> Flask' +
    '<i class="fab fa-python"></i> Django';
});

document.getElementById('python-skill').addEventListener('mouseout', function() {
  document.getElementById('python-frameworks').innerHTML = '';
});

document.getElementById('php-skill').addEventListener('mouseover', function() {
  document.getElementById('php-frameworks').innerHTML = 
    '<i class="fab fa-php"></i> CodeIgniter' +
    '<i class="fab fa-php"></i> Laravel';
});

document.getElementById('php-skill').addEventListener('mouseout', function() {
  document.getElementById('php-frameworks').innerHTML = '';
});

document.getElementById('cpp-skill').addEventListener('mouseover', function() {
  document.getElementById('cpp-frameworks').innerHTML = 
    '<i class="fas fa-cogs"></i> CMake' +
    '<i class="fas fa-cogs"></i> Boost';
});

document.getElementById('cpp-skill').addEventListener('mouseout', function() {
  document.getElementById('cpp-frameworks').innerHTML = '';
});
</script>
</html>