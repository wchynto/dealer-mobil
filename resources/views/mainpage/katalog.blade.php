@extends('layouts.app')

@section('pages')
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Katalog Mobil</h1>
            <div class="d-flex justify-content-center">
                <p class="col-md-9 fs-4">
                    Temukan mobil impianmu dengan berbagai pilihan merek dan model yang
                    tersedia. Dapatkan informasi lengkap mengenai spesifikasi mobil,
                    fitur-fitur terbaru, serta harga terkini. Jangan lewatkan kesempatan
                    untuk memiliki mobil idamanmu sekarang juga!
                </p>
            </div>
            <form action="" method="post">
                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control" placeholder="Cari Mobil" />
                        <button class="btn btn-primary" type="button" id="button-addon2">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card h-75">
                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a class="link-dark" href="">Sedan</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">SUV</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">MPV</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">Sport</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">LCGC</a>
                            </li>
                        </ul>
                        <h5 class="card-title mt-4">Merk</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a class="link-dark" href="">Toyota</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">Suzuki</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">Daihatsu</a>
                            </li>
                            <li class="list-group-item">
                                <a class="link-dark" href="">Honda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Cek
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Cek
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Cek
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}"
                                alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}"
                                alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}"
                                alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}"
                                alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/images/mobil/mobil1.jpg') }}"
                                alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Toyota AE86</h4>
                                <ul>
                                    <li>10 - 15K Km</li>
                                    <li>Manual</li>
                                    <li>Bensin</li>
                                </ul>
                                <h5>Rp. 800.000.000</h5>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation" class="mt-3 d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
