<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Chaparral Snooker Bar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Pacifico&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      scroll-behavior: smooth;
    }
    .section {
      padding: 80px 20px;
    }

    .navbar-custom {
      background: linear-gradient(135deg, #FF8C00, #FFD700);
      box-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }
    .navbar-custom .nav-link {
      color: #111;
      font-weight: 500;
      transition: color 0.3s;
    }
    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link.active {
      color: #000;
    }
    .navbar-custom .navbar-brand {
      color: #111;
      font-weight: bold;
      line-height: 1;
      font-family: 'Pacifico', cursive;
      font-size: 1.8rem;
    }
    .navbar-custom .navbar-brand small {
      font-size: 0.9rem;
      font-family: 'Montserrat', sans-serif;
    }
    .navbar-custom .navbar-brand:hover {
      color: #000;
    }
    .navbar-toggler-icon {
      filter: invert(100%);
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#inicio">
      Chaparral<br>
      <small>Snooker Bar</small>
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#inicio">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#destaques">Destaques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#historia">História</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galeria">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contato">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="section text-center" id="inicio" style="padding-top:120px; background: url('assets/hero.jpg') no-repeat center/cover;">
  <div style="background:rgba(0,0,0,0.7); padding:60px 20px;">
    <img src="assets/logo.png" alt="Logo Chaparral" class="img-fluid mb-3" style="max-width:150px;">
    <h1>Bem-vindo ao Chaparral Snooker Bar</h1>
    <p class="lead">Sinuca, porções e bons drinks num só lugar 🍻</p>
  </div>
</section>

<!-- Restante das seções mantidas iguais -->

<?php include('includes/footer.php'); ?>

<!-- Botão WhatsApp -->
<a href="https://wa.me/41987362240" class="btn btn-success position-fixed bottom-0 end-0 m-4 rounded-circle shadow-lg">
  <i class="bi bi-whatsapp fs-3"></i>
</a>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
