@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="main-wrapper position-relative">
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <strong class="para-light">We Deal</strong>
                        <h1>New, Used & Imported Laptops</h1>
                        <p>A Magical and Revolutionary device at an unbelievable price. Does more, cost less & its that simple. A Magical and Revolutionary device at an unbelievable price. Does more, cost less & its that simpple.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image">
                        <img src="{{ asset('/assets/frontend/img/shop-banner.png') }}" alt="computers" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-products pb-lg-5 pb-3 home-products">
        <div class="container">
            <div class="row">
                <div class="col-xl-3  col-sm-6">
                    <div class="card-wrap d-lg-flex flex-column justify-content-center align-items-center">
                        <a href="{{ route('frontend.product', 1) }}" class="w-100 mb-2">
                            <div class="image p-xxl-3 p-2 pb-0">
                                <img src="{{ asset('/assets/frontend/img/product-1.jpg') }}" alt="product" class="img-fluid"/>
                            </div>
                        </a>
                        <div class="ps-sm-3 ps-2 pe-sm-3 pe-2 pb-sm-3 pb-2 pt-0">
                            <div class="name">
                                <strong><a href="{{ route('frontend.product', 1) }}">Acer Aspire XC-1760 I5410</a></strong>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo!</p>
                                <div class="d-flex justify-content-between align-items-center ratings-wrap">
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <span>99 Reviews</span>
                                </div>
                                <div class="specs">
                                    <span>Intel Core i5 processor</span>
                                    <span> Shared video card</span>
                                    <span>32 gb ram</span>
                                </div>
                            </div>
                            <div class="cart d-flex justify-content-between">
                                <div>
                                    <strong>Delivery tomorrow</strong>
                                    <p>Available for pickup even sooner in 3 Coolblue stores</p>
                                </div>
                                <a href="/profile.html#buyChat" class="main-btn">
                                    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="price">
                                <span>Price</span>
                                <div>
                                    <span>$</span><span>300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-me pb-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-lg-0">
                    <div class="about-box">
                        <div >
                            <strong class="para-light text-align-start">A bit more about me</strong>
                            <h1>Who  Am I?</h1>
                        </div>
                        <div class="image mb-3">
                            <img src="{{ asset('/assets/frontend/img/question-mark.svg') }}"/>
                        </div>
                        <p class="mb-3">Hi, I'm <strong>ComputerKopen</strong>. I will provide you the computer related services you need.</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum tenetur quibusdam est explicabo! Beatae ad sunt, nam doloribus facere delectus officiis excepturi quis, mollitia necessitatibus velit iure architecto eos nihil.</p>
                        <strong class="para-light">CEO, ComputerKopen</strong>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-0">
                    <div class="account-verification">
                        <div class="container">
                            <div class="get-in-touch">
                                <strong class="para-light">Need help?</strong>
                                <h1>Get in Touch</h1>
                                <form class="login-form-main">
                                    <div class="d-flex mb-0 mb-md-3  form-row justify-content-between">
                                        <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                            <input type="text" class="form-control" placeholder="Enter your name" id="nameHelp" aria-describedby="emailHelp">
                                        </div>
                                        <div class="login-form-input mb-md-0 mb-3">
                                            <input type="email" class="form-control" placeholder="email@example.com" id="emailHelp" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="d-flex mb-0 mb-md-3 form-row justify-content-between">
                                        <div class="login-form-input me-md-2 me-0 mb-md-0 mb-3">
                                            <input type="tel" class="form-control" placeholder="Phone Number" id="phoneHelp" aria-describedby="emailHelp">
                                        </div>
                                        <div class="login-form-input mb-md-0 mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Subject</option>
                                                <option value="1">Contact Purpose 1 </option>
                                                <option value="2">Contact Purpose 2</option>
                                                <option value="3">Contact Purpose 3</option>
                                                <option value="4">Contact Purpose 4</option>
                                                <option value="5">Contact Purpose 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center mb-3">
                                        <button class="choose-file main-btn me-2 d-flex justify-content-center align-items-center">
                                            <span class="me-1 pt-1 text">Choose File</span>
                                            <div class="image">
                                                <img class="user-img" id="user-0" src="{{ asset('/assets/frontend/img/attach-file.svg') }}" />
                                            </div>
                                        </button>
                                        <a class="btn main-btn" href="#your-link">Submit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-cards">
        <div class="container">
            <div class="row ">

                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fa fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Customers</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        15.07k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="d-flex align-items-center"><span class="me-2">9.23%</span> <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fa fa-ticket"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Orders Delivered</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        999
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="d-flex align-items-center"><span class="me-2">10% </span><i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- Cookie --}}
<div class="cookies-section">
    <div class="modal fade" id="cookiesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookiesModalLabel">We Use Cookies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cookies help us to improve your buying experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All" you consent to our use of cookies.<a href="/cookie-settings.html">Read more</a></a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reject All</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept All</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
