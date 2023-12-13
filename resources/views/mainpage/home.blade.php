@extends('layouts.app')

@section('pages')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('storage/images/mobil/mobil1.jpg') }}" class="d-block w-100" alt="..." />
                <div class="carousel-caption">
                    <h5>Lorem Ipsum Dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime,
                        nulla, tempore. Deserunt excepturi quas vero.
                    </p>
                    <p>
                        <a href="#" class="btn btn-warning mt-3">Learn More</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('storage/images/mobil/mobil1.jpg') }}" class="d-block w-100" alt="..." />
                <div class="carousel-caption">
                    <h5>Lorem Ipsum Dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime,
                        nulla, tempore. Deserunt excepturi quas vero.
                    </p>
                    <p>
                        <a href="#" class="btn btn-warning mt-3">Learn More</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('storage/images/mobil/mobil1.jpg') }}" class="d-block w-100" alt="..." />
                <div class="carousel-caption">
                    <h5>Lorem Ipsum Dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime,
                        nulla, tempore. Deserunt excepturi quas vero.
                    </p>
                    <p>
                        <a href="#" class="btn btn-warning mt-3">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- about section starts -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{ url('storage/images/etc/about.jpg') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Lorom Ipsum <br />Dolor Sit Amet</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam,
                            labore reiciendis. Assumenda eos quod animi! Soluta nesciunt
                            inventore dolores excepturi provident, culpa beatae tempora,
                            explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda
                            quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis
                            porro doloribus obcaecati placeat natus iste odio est non earum?
                        </p>
                        <a href="#" class="btn btn-warning">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section Ends -->
    <!-- portfolio strats -->
    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Lorem Ipsum</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur <br />adipisicing elit.
                            Non, quo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12 col-lg-6">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="{{ url('storage/images/mobil/mobil1.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Adipisci eligendi modi temporibus alias iste. Accusantium?
                            </p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12 col-lg-6">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="{{ url('storage/images/mobil/mobil1.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Adipisci eligendi modi temporibus alias iste. Accusantium?
                            </p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio ends -->
    <!-- team starts -->
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Lorem Ipsum</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur <br />adipisicing elit.
                            Non, quo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ url('storage/images/users/team-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" />
                            <h3 class="card-title py-2">Jack Wilson</h3>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Sequi ipsam nostrum illo tempora esse quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ url('storage/images/users/team-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" />
                            <h3 class="card-title py-2">Jack Wilson</h3>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Sequi ipsam nostrum illo tempora esse quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ url('storage/images/users/team-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" />
                            <h3 class="card-title py-2">Jack Wilson</h3>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Sequi ipsam nostrum illo tempora esse quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ url('storage/images/users/team-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" />
                            <h3 class="card-title py-2">Jack Wilson</h3>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Sequi ipsam nostrum illo tempora esse quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team ends -->
@endsection
