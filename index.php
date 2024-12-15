
<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/home.css">  
  
  <section id="about">
    <h2>Tentang Saya</h2>
    <div class="flex-container">
      <div class="photo">
        <img src="assets/img/images.jpg" alt="Foto Saya" class="profile-photo">
      </div>
      <div class="info">
        <p>Nama saya Muhammad Fariz Ade Satriyo, seorang Full Stack Developer dan mahasiswa Ilmu Komputer di Universitas YATSI Madani. Saya memiliki pengalaman dalam berbagai bahasa pemrograman, JavaScript, Python, Java, PHP, dan C++.</p>
        <p>Saya memiliki minat yang besar di bidang teknologi dan bisnis, dan selalu berusaha untuk mengembangkan keterampilan saya serta mengikuti perkembangan terbaru di industri ini. Saya percaya bahwa kombinasi antara pengetahuan teknis dan pemahaman bisnis adalah kunci untuk menciptakan solusi yang inovatif dan efektif.</p>
      </div>
    </div>
  </section>
  
  <div class="slideshow-container">

    <!-- Slide 1 -->
    <div class="slide">
      <img src="bio1.jpg" style="width:100%">
      <div class="text">Nama Lengkap: Muhammad Fariz Ade Satriyo</div>
    </div>

    <div class="slide">
      <img src="bio1.jpg" style="width:100%">
      <div class="text"></div>
    </div>

    <!-- Slide 2 -->
    <div class="slide">
      <img src="bio2.jpg" style="width:100%">
      <div class="text">Tempat dan Tanggal Lahir: [Tempat, Tanggal Lahir]</div>
    </div>

    <!-- Slide 3 -->
    <div class="slide">
      <img src="bio3.jpg" style="width:100%">
      <div class="text">Pendidikan: SDN Jeungjing 1, SDN Tigaraksa 2, MTsN 2 Kab. Tangerang, MAN 1 Kab. Tangerang</div>
    </div>

    <!-- Slide 4 -->
    <div class="slide">
      <img src="bio4.jpg" style="width:100%">
      <div class="text">Keahlian: JavaScript, Python, PHP, C++</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <!-- Dots/bullets -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>
  
  
  <script src="script.js"></script>
</body>
</html>
<?php include 'includes/footer.php';?>
  