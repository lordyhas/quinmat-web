<!--
Powered by QUINMAT SARL.
Developed by QUINMAT TEAM.
Directed by Hassan Kajila.
-->
@php $app_x = $appX = (AppConstant) config('app.app_constant'); @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Official Website of QUINMAT SARL">
    <meta name="author" content="lordyhas">
    <title> {{$appX->name}} | Accueil </title>

    <link rel="icon" type="image/png" href="{{asset("assets/favicon.ico")}} "/>

    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}} ">

    <!-- Bootstrap + main styles -->
    <!-- { {asset('')} } -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Page Navigation -->
<nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="navbar-brand" href="{{route("home.index")}}">
            <img src="{{asset('assets/imgs/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">{{__("Accueil")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">{{__("À propos")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">{{__("Service")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">{{__("Produit")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">{{__("Blog")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="{{route("home.index", ["lang"=>"en"])}}">
                        {{config('app.available_opposite_locales')[app()->getLocale()]}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="header">
    <div class="overlay">
        <h6 class="subtitle">
            @yield('preview')
            ...
        </h6>
        <h1 class="title">{{$app_x->name}}</h1>
        <div class="buttons text-center">
            <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Nos Services</a>
            <a href="#contact" class="btn btn-outline-light rounded w-lg btn-lg my-1">Contactez-Nous</a>
        </div>
    </div>
</header>
<!-- End Of Page Header -->

<!-- Box -->
<div class="box text-center">
    <div class="box-item">
        <i class="ti-paint-roller"></i>
        <h6 class="box-title">Quincaillerie</h6>
        <p>Des produits pour les professionnels et les particuliers, des outils électriques et manuels,
            des matériaux de construction.
        </p>
    </div>
    <div class="box-item">
        <i class="ti-home"></i>
        <h6 class="box-title">Mobilier</h6>
        <p>
            Une large gamme de meubles pour la maison et le bureau, y compris des chaises de bureau, tables et autres.
            <br>
            <span class="text-white">.</span>
        </p>
    </div>
    <div class="box-item">
        <i class="ti-ruler-pencil"></i>
        <h6 class="box-title">Papeterie</h6>
        <p>Une grande variété de fournitures de bureau, y compris des stylos, des cahiers, des enveloppes et autres.
            <br>
            <span class="text-white">.</span>
        </p>
    </div>
    <div class="box-item">
        <i class="ti-wheelchair"></i> <!-- ti-vector -->
        <h6 class="box-title">Équipement Médical</h6>
        <p>
            Fournit des équipements médicaux tels que des lits d’hôpitaux, des fauteuils roulants et des matériels de
            diagnostic.
        </p>
    </div>
</div>
<!-- End of Box -->

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-4">
                <img src="{{asset('assets/imgs/quinmat-vector.jpg')}}" alt="" class="w-100 img-thumbnail mb-3">
            </div>
            <div class="col-md-7 col-lg-8">
                <h6 class="section-subtitle mb-0">QUINMAT S.A.R.L</h6>
                <h6 class="section-title mb-3">Qui sommes-nous ?</h6>
                <p>
                    Quinmat est une entreprise qui se spécialise dans la vente de produits de quincaillerie,
                    de papeterie et d’équipement médical et mobilier. Nous sommes fiers de fournir des produits
                    de qualité à nos clients depuis plusieurs années. Nous sommes convaincus que notre engagement
                    envers la qualité et le service à la clientèle est ce qui nous distingue des autres entreprises.
                </p>
                <p>
                    Chez QUINMAT, nous avons tout ce dont vous avez besoin pour mener à bien votre projet.
                    Nous offrons une large gamme d’outils et d’équipements pour tous les types de projets,
                    des plus petits aux plus grands. Nous sommes fiers de fournir des produits de qualité
                    supérieure à des prix compétitifs.
                </p>
                <p>
                    Nous sommes fiers de servir nos clients avec les meilleurs produits et services possibles.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->

<!-- About Section with bg -->
<section class="has-bg-img py-md">
    <div class="container text-center">
        <h6 class="section-subtitle">Nous garantissions </h6>
        <h6 class="section-title mb-6">ce que les autres ne garantissent pas.</h6>
        <div class="widget mb-4">
            <div class="widget-item">
                <i class="ti-notepad"></i>
                <h4>Qualité</h4>
            </div>
            <div class="widget-item">
                <i class="ti-layout"></i>
                <h4>Expertise</h4>
            </div>
            <div class="widget-item">
                <i class="ti-filter"></i>
                <h4>Excellence</h4>
            </div>
            <div class="widget-item">
                <i class="ti-thumb-up"></i>
                <h4>Satisfaction</h4>
            </div>
        </div>
    </div>
</section>
<!-- End Of About Sectoin -->

<!-- Service Section -->
<section id="service">
    <div class="container text-center">
        <h6 class="section-subtitle text-center">Faire Advenir</h6>
        <h5 class="section-title text-center mb-6">Nos services</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset('assets/imgs/quinmat-logo-quin.jpg')}}" alt="">
                        <h5 class="card-title text-primary">Quincaillerie</h5>
                        <p> QUINMAT vous propose un large assortiment de produits de quincaillerie,
                            allant des outils aux matériaux de construction, en passant par les peintures et les
                            accessoires.
                            <br>...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset('assets/imgs/quinmat-logo-pap.jpg')}}" alt="">
                        <h5 class="card-title text-primary">Papeterie</h5>
                        <p>
                            QUINMAT vous offre un large choix de produits de papeterie pour vos activités
                            scolaires, professionnelles ou personnelles. Vous y trouverez des cahiers, des stylos,
                            des imprimantes, des ordinateurs et plus encore.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset('assets/imgs/quinmat-logo-med.jpg')}}" alt="">
                        <h5 class="card-title text-primary">Équipement Médical</h5>
                        <p>
                            QUINMAT vous accompagne dans votre domaine de santé avec du matériel médical
                            de qualité. Trouvez du matériel de diagnostic, de soin, de chirurgie, de laboratoire
                            et de radiologie. Bénéficiez également d’un service d’installation et de maintenance.
                            <br>...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset('assets/imgs/quinmat-logo-mob.jpg')}}" alt="">
                        <h5 class="card-title text-primary">Mobilier</h5>
                        <p>
                            QUINMAT vous propose des meubles adaptés à vos espaces de vie et de travail.
                            Choisissez des meubles de bureau, des chaises, des tables, des armoires,
                            des étagères et des coffres-forts. Demandez aussi un devis gratuit et personnalisé pour
                            votre projet d’aménagement.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End of Service Section -->

<!-- Product section -->
<section id="products">
    <div class="container text-center">
        <h6 class="section-subtitle">Our Awesome Works</h6>
        <h6 class="section-title mb-5">Nos Produits</h6>
        <div class="row">
            <div class="col-sm-4">
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide3R.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Quincaillerie</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide17x.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Mobilier</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide9.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Quincaillerie</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide18.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Medical</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide16.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Mobilier</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card img-wrapper">
                    <img src="{{asset("assets/images/slides/Slide10x.jpg")}}" alt="">
                    <div class="overlay">
                        <div class="overlay-infos">
                            <h5>Quincaillerie</h5>
                            <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                            <a href="javascript:void(0)"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="buttons text-center">
            <a href="javascript:void(0)" class="btn btn-primary  w-lg btn-lg my-1 m-2">Voir plus de produits</a>
            <a href="#contact" class="btn btn-outline-dark  w-lg btn-lg my-1 m-2">Se renseigner</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset("assets/images/slides/Slide15.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card img-wrapper mb-4">
                    <div class="card-body">
                        <img src="{{asset("assets/images/slides/Slide19.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of products section -->


<!-- Fatcs Section -->
<!-- We Are Awesome | Some Fun Fucts -->
<section class="has-bg-img bg-img-2">
    <div class="container text-center">
        <h6 class="section-subtitle">Nous sommes geniaux</h6>
        <h6 class="section-title mb-6">Quelques faits amusants</h6>
        <div class="widget-2">
            <div class="widget-item">
                <i class="ti-home"></i>
                <h6 class="title">4+</h6>
                <div class="subtitle">Départements</div>
            </div>
            <div class="widget-item">
                <i class="ti-face-smile"></i>
                <h6 class="title">34K+</h6>
                <div class="subtitle">Clients Content</div>
            </div>
            <div class="widget-item">
                <i class="ti-blackboard"></i>
                <h6 class="title">7845+</h6>
                <div class="subtitle">Produits</div>
            </div>
            <div class="widget-item">
                <i class="ti-comments-smiley"></i>
                <h6 class="title">157K+</h6>
                <div class="subtitle">Commentaires</div>
            </div>
        </div>
    </div>
</section>

<!-- Subscription Section -->
<section id="subscription">
    <div class="container">

        <div class="py-5"></div>
        <div class="row">
            <div class="col-md-6">
                <h1>Envie de profiter de nos offres exclusives ?</h1>
                <h5>Rejoignez notre newsletter </h5>
            </div>

            <div class="col-md-6">
                <h4>
                    En plus, vous serez les premiers à découvrir nos nouveautés, nos promotions et nos conseils.
                </h4>
                <div class="py-2"></div>

                <form method="post" action="{{route('newsletter')}}">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="">
                                <label for=""></label>
                                <input type="email" name="email" class="form-control rounded" id="emailNewsletterId"
                                       placeholder="Email address">
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for=""></label>
                            <button type="submit" class="btn btn-outline-primary btn-lg w-lg"
                                    @if(session('newsletter')) disabled @endif>
                                S'abonner
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="py-5"></div>
    </div>

</section>
<!-- End of Subscription Section -->

<!-- Video Section -->
<section class="has-bg-img py-lg">
    <div class="container text-center">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary play-control" data-toggle="modal"
                data-target="#exampleModalCenter">
            <i class="ti-control-play"></i>
        </button>
        <h6 class="section-title mt-4">Voir notre video d'intro</h6>
    </div>
</section>
<!-- End of Video Section -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <iframe width="100%" height="475"
                    src="https://www.facebook.com/plugins/video.php?height=420&href=https%3A%2F%2Fwww.facebook.com%2FQuinmatlshi%2Fvideos%2F1037023190249461%2F&show_text=false&width=560&t=0"
                    title="YouTube video player" frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
<!-- end of modal -->

<!-- Blog Section -->
<section id="blog">
    <div class="container">
        <h6 class="section-subtitle text-center">Fil d'actualités</h6>
        <h6 class="section-title mb-6 text-center">Notre Blog</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/quinmat-medical-1.jpg")}}" alt="">
                    <div class="card-body">
                        <div class="details mb-3">
                            <a href="javascript:void(0)"><i class="ti-comments"></i> 123</a>
                            <a href="javascript:void(0)"><i class="ti-eye"></i> 123</a>
                        </div>
                        <h5 class="card-title">MEDICAL EQUIPMENT</h5>
                        <p>
                            Notre entreprise fournit une large gamme d’équipements médicaux pour les professionnels de
                            la santé, y compris des lits d’hôpitaux, des fauteuils roulants, des équipements
                            de diagnostic... <br>.
                        </p>

                        <a href="javascript:void(0)" class="d-block mt-3">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/quinmat-papeterie-1.jpg")}}" alt="">
                    <div class="card-body">
                        <div class="details mb-3">
                            <a href="javascript:void(0)"><i class="ti-comments"></i> 434</a>
                            <a href="javascript:void(0)"><i class="ti-eye"></i> 987</a>
                        </div>
                        <h5 class="card-title">PAPETERIE <span class="badge badge-pill badge-primary">new</span></h5>
                        <p>
                            Notre papeterie propose une grande variété de fournitures de bureau, y compris des
                            stylos, des cahiers et des enveloppes. Nous sommes fiers de fournir des produits de
                            qualité à nos clients depuis plusieurs années...
                        </p>

                        <a href="javascript:void(0)" class="d-block mt-3">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-post my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/quinmat-0.png")}}" alt="">
                    <div class="card-body">
                        <div class="details mb-3">
                            <a href="javascript:void(0)"><i class="ti-comments"></i> 164</a>
                            <a href="javascript:void(0)"><i class="ti-eye"></i> 425</a>
                        </div>
                        <h5 class="card-title">QUINMAT</h5>
                        <p>
                            Vous cherchez des outils de qualité pour vos projets de construction ou de rénovation ?
                            Ne cherchez plus ! Chez QUINMAT, nous avons tout ce dont vous avez besoin pour mener à
                            bien votre projet...
                        </p>
                        <a href="javascript:void(0)" class="d-block mt-3">Read More...</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @if(\Illuminate\Support\Facades\Request::input("test") === '001')
        @include('section.news-even-cat')
    @endif

</section>
<!-- End of Blog Section -->

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="contact-card">
            <div class="infos">
                <h6 class="section-subtitle">Get Here</h6>
                <h6 class="section-title mb-4">Contactez-nous</h6>
                <div class="item">
                    <i class="ti-location-pin"></i>
                    <div class="">
                        <h5>Emplacement</h5>
                        <p> 650 Av. Moëro, Lubumbashi, RDC </p>
                    </div>
                </div>
                <div class="item">
                    <i class="ti-mobile"></i>
                    <div>
                        <h5>Numéro de téléphone</h5>
                        <p>{{$app_x->contact}}</p>
                    </div>
                </div>
                <div class="item">
                    <i class="ti-email"></i>
                    <div class="mb-0">
                        <h5>Adresse e-mail</h5>
                        <p>info@quinmat.com</p>
                    </div>
                </div>
                <div class="item">
                    <i class="ti-world"></i>
                    <div class="mb-0">
                        <h5>QUINMAT</h5>
                        <p>ww.quinmat.com</p>
                    </div>

                </div>
                <p class="mt-3 mb-2">
                    <x-social-links></x-social-links>
                </p>

            </div>
            <div class="form">

                <h6 class="section-subtitle">Disponible 24/7</h6>
                <h6 class="section-title mb-4">Entrer en contact</h6>
                <form method="post" action="{{route("contact_message")}}">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Entrer votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="text" name="name" class="form-control form-control-lg" id="exampleInputPassword1"
                               placeholder="Entrer votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="contactMessage"></label>
                        <textarea name="message" id="contactMessage" cols="30" rows="7"
                                  class="form-control form-control-lg" placeholder="Message">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->

<section class="has-bg-img py-0">
    <div class="container">
        <div class="footer">
            <div class="footer-lists">
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">À PROPOS DE NOUS</h6>
                    </li>
                    <li class="list-body">
                        <a href="#" class="logo">
                            <img src="{{asset("assets/imgs/logo.png")}}" alt="">
                            <h6>{{$app_x->name}}</h6>
                        </a>
                        <p>Nous sommes fiers de servir nos clients avec les meilleurs produits et services
                            possibles.</p>
                        <p class="mt-3">
                            Copyright
                            <script>document.write(new Date().getFullYear())</script> &copy;
                            <a class="d-inline text-primary" href="#">QUINMAT SARL</a>
                        </p>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">LIENS UTILES</h6>
                    </li>
                    <li class="list-body">
                        <div class="row">
                            <div class="col">
                                <a href="#about">À propos</a>
                                <a href="#service">Service</a>
                                <a href="#products">Produits</a>
                                <a href="#subscription">Newsletter</a>
                            </div>
                            <div class="col">
                                <!-- a href="#team">Team</a-->
                                <a href="#blog">Blog</a>
                                <a href="#">Faq</a>
                                <a href="#">Privacy Policy</a>
                                @if(Route::has('login'))
                                    <a href="{{route("dashboard")}}">Employee</a>
                                @endif

                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">CONTACT</h6>
                    </li>
                    <li class="list-body">
                        <p>Contactez-nous et nous vous répondrons dans les 24 heures.</p>
                        <p><i class="ti-location-pin"></i> {{$app_x->address}}, {{$app_x->country_short}} </p>

                        <p><i class="ti-mobile"></i>{{$app_x->contact}}</p>
                        <p><i class="ti-email"></i>{{$app_x->mail}}</p>

                        <x-social-links></x-social-links>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- core  -->
<script src="{{asset('assets/vendors/jquery/jquery-3.4.1.js')}} "></script>
<script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

<!-- bootstrap affix -->
<script src="{{asset('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

<!-- main js -->

<script src="{{asset('assets/js/main-script.js')}}"></script>

</body>
</html>


<!-- END  -->
