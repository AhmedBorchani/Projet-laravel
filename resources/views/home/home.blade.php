@extends('welcome')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <!-- Hero Section -->
    <div class="row align-items-center bg-light py-5 mb-4 shadow-sm rounded">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold">Bienvenue sur Notre Boutique en Ligne</h1>
            <p class="lead text-muted">
                Découvrez une large gamme de produits de qualité aux meilleurs prix. Achetez maintenant et profitez d'offres exceptionnelles !
            </p>
            <a href="{{ route('produits.index') }}" class="btn btn-primary btn-lg">Explorer les Produits</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="assets\img\logoAB.png" alt="E-commerce" class="img-fluid rounded" width="300px" length="300">
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="mb-4">
        <h2 class="text-center mb-4">Produits Populaires</h2>
        <div class="row"> 
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets\img\ps5.jpg" class="card-img-top" alt="Product Image" width="300" lenght="200">
                    <div class="card-body text-center">
                        <h5 class="card-title">PlayStation 5 </h5>
                        <p class="card-text text-muted">Description courte du produit.</p>
                        <p class="fw-bold">2500DT</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets\img\iphone.jpg" class="card-img-top" alt="Product Image" width="300" lenght="200">
                    <div class="card-body text-center">
                        <h5 class="card-title">Iphone 15 PRO MAX</h5>
                        <p class="card-text text-muted">Description courte du produit.</p>
                        <p class="fw-bold">5555DT</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets\img\redmi.jpg" class="card-img-top" alt="Product Image" width="300" lenght="200">
                    <div class="card-body text-center">
                        <h5 class="card-title">Redmi 9</h5>
                        <p class="card-text text-muted">Description courte du produit.</p>
                        <p class="fw-bold">555DT</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets\img\baguette.jpg" class="card-img-top" alt="Product Image" width="300" lenght="200">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pain</h5>
                        <p class="card-text text-muted">Description courte du produit.</p>
                        <p class="fw-bold">0.250DT</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer id="contact" class="contact">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">SI AB SHOP</a>
                            </div>
                            <p>Welcome to si AB shop</p>
                            <div class="footer-contact">
                                <p>ahmedborchani88@gmail.com</p>
                                <p>+216 93 620 160</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>Guide</h2>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">career</a></li>
                                <li><a href="#">terms <span> of service</span></a></li>
                                <li><a href="#">privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="single-footer-widget">
                            <h2>Top Products</h2>
                            <div class="row">
                                <div class="col-md-7 col-xs-6">
                                    <ul>
                                        <li><a href="#">Alimentaire</a></li>
                                        <li><a href="#">Jeux</a></li>
                                        <li><a href="#">Divertissement</a></li>
                                        <li><a href="#">Cosmétique</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>Newsletter</h2>
                            <div class="footer-newsletter">
                                <p>Subscribe to get latest news update and informations</p>
                            </div>
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Add Email">
                                </div>
                                <div class="foot-email-subscribe">
                                    <span><i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Designed and developed by Ahmed Borchani.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social">
                            <p>Rester Connecté</p>
                            <a href="https://www.facebook.com/aymen.maalej.07"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/aymen_maalej"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/aymen-maalej-571722259/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.js"></script>
    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>
    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>
</div>

@endsection
