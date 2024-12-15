<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Muhammad Fariz Ade Satriyo</title>
  <link rel="icon" type="image/png" href="assets/img/images.jpg">
  <link rel="stylesheet" href="assets/header.css">
</head>
<body>
  <!-- Header -->
  <header>
    <img src="assets/img/logo-uym.png" alt="Logo" class="logo">
    <h1>Portofolio Pribadi</h1>
    <p>Muhammad Fariz Ade Satriyo - NIM: 23050447</p>
  </header>

  <!-- Tombol Menu Mobile -->
  <button id="menu-toggle">Menu</button>

  <!-- Navigasi -->
  <nav>
    <ul id="nav-menu">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="portofolio.php">Portofolio</a>
        <ul class="dropdown-menu">
          <li><a href="portofolio.php#experience">Experience</a></li>
          <li><a href="portofolio.php#projects">Projects</a></li>
          <li><a href="portofolio.php#education">Education</a></li>
          <li><a href="portofolio.php#skills">Skills</a></li>
        </ul>
      </li>
      <li><a href="guestbook.php">Kontak</a></li>
    </ul>
  </nav>

  <!-- Script Toggle Menu -->
  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('nav-menu');
    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>


</body>
</html>

