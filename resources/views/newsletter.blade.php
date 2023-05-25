<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="loryhas">
    <title>Quinmat Newsletter</title>

    <!-- font icons -->
    <link rel="stylesheet" href="{{asset("assets/vendors/themify-icons/css/themify-icons.css")}}">

    <!-- Bootstrap + Creative Studio main styles -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

    <link rel="icon" type="image/png" href="{{asset("assets/favicon.ico")}} "/>

    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}} ">

    <!-- Bootstrap + main styles -->
    <!-- { {asset('')} } -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="dark-theme">

<!-- Page Header -->
<header class="header header-mini">
    <div class="header-title">Newsletter</div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="--en-home.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
        </ol>
    </nav>
</header> <!-- End Of Page Header -->

<!-- main content -->
<div class="container">
    <div class="py-5"></div>
    <!-- Alerts -->

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Vous êtes désabonné du newsletter
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <!-- end of alerts -->

    <!-- Buttons -->
    <h4 class="mt-5">Vous vous êtes désabonné de la newsletter par erreur</h4>
    <button class="btn btn-outline-primary">Se réabonner</button>


</div>


<!-- Page Footer -->

<section>
    <div class="container">
        <div class="footer">
            <div class="bg-dark text-light text-center border-top wow fadeIn">
                <p class="mb-0 py-3 text-muted small">&copy; Copyright
                    <script>document.write(new Date().getFullYear())</script>
                </p>
                <a class="d-inline text-primary" href="{{route('home.index')}}">QUINMAT SARL</a>
            </div>
        </div>
    </div>
</section>



<!-- End of Page Footer -->

<!-- core  -->
<script src="{{asset("assets/vendors/jquery/jquery-3.4.1.js")}}"></script>
<script src="{{asset("assets/vendors/bootstrap/bootstrap.bundle.js")}}"></script>

</body>
</html>


