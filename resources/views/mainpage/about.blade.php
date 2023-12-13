@extends('layouts.app')

@section('pages')
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
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
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
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{ url('storage/images/etc/about.jpg') }}" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="media" class="media">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Social Media</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="social" class="social">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <!-- Facebook -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </section>
@endsection
