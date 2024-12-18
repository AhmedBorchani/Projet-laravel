<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <header>   
        <main>
            @yield('content')
        </main>     
</nav>
</header>
<!-- Pied de page élégant pour la section contact -->
<footer class="bg-dark text-white pt-4">
  <div class="container">
    <div class="row">
      <!-- Section Contact -->
      <div class="col-md-4">
        <h5>Contactez-nous</h5>
        <p class="small">Nous serions ravis de vous entendre !</p>
        <ul class="list-unstyled">
          <li><i class="bi bi-geo-alt-fill"></i> 123 Rue Exemple, Ville, Pays</li>
          <li><i class="bi bi-telephone-fill"></i> +1 234 567 890</li>
          <li><i class="bi bi-envelope-fill"></i> contact@exemple.com</li>
        </ul>
      </div>
      <!-- Section Liens rapides -->
      <div class="col-md-4">
        <h5>Liens rapides</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Accueil</a></li>
          <li><a href="#" class="text-white">À propos</a></li>
          <li><a href="#" class="text-white">Services</a></li>
          <li><a href="#" class="text-white">Contact</a></li>
        </ul>
      </div>
      <!-- Section Réseaux sociaux -->
      <div class="col-md-4">
        <h5>Suivez-nous</h5>
        <p class="small">Restons connectés sur les réseaux sociaux</p>
        <div>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
    <hr class="bg-light">
    <!-- Bas de page -->
    <div class="text-center pb-3 small">
      © 2024 - Votre Entreprise. Tous droits réservés.
    </div>
  </div>
</footer>

<!-- Bootstrap & Icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
