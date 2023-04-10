@extends('home')

@section('news')
    <div @class(['py-3'])></div>
    <div class="container">
        <h6 class="section-title mb-5 text-center">News et Events</h6>
        <div class="row mt-5">
            <div class="col-sm-6 col-md-4">
                <div class="card blog-post text-center my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/scolar-back.jpg")}}">
                    <div class="card-body">
                        <h5 class="card-title">Event</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quos esse tenetur illo qui,
                            nostrum.</p>
                        <div class="socials">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                            <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card blog-post text-center my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/blog-1.jpg")}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Event</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quos esse tenetur illo qui,
                            nostrum.</p>
                        <div class="socials">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                            <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card blog-post text-center my-4 my-sm-5 my-md-0">
                    <img src="{{asset("assets/imgs/--quinmat-papeterie-1.jpg")}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">News</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quos esse tenetur illo qui,
                            nostrum.</p>
                        <div class="socials">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                            <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(true)
        <div @class(['py-3'])></div>
        <div class="container">
            <h6 class="section-title mb-5 text-center">Catalogues</h6>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img src="{{asset("assets/imgs/catalog-3.jpg")}}">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Catalogue</h6>
                            <h5 class="card-title">Cover design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img src="{{asset("assets/imgs/catalog-2.jpg")}}" alt="">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Catalogue</h6>
                            <h5 class="card-title">Business headline</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center my-4 my-sm-5 my-md-0">
                        <img class="" src="{{asset("assets/imgs/catalog-4.jpg")}}" alt="">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Catalogue</h6>
                            <h5 class="card-title">Service Management</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
