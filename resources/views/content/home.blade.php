@extends('layout.main')
@section('container')
    <style>
        body {
            background-image: url("{{ asset('images/IMG_6915 (1).JPG') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .position-absolute.top-0.start-0 {
            left: 0;
            top: 0;
        }

        .position-absolute.top-0.end-0 {
            right: 0;
            top: 0;
        }

        @media (max-width: 767px) {

            .position-absolute.top-0.start-0,
            .position-absolute.top-0.end-0 {
                position: relative;
                top: auto;
                left: auto;
                right: auto;
                bottom: auto;
                max-width: 100%;
            }
        }
    </style>
    <header>
        <div class="mt-3">
            <br>
            <nav>
                <a href="#" class="fs-4">Beranda</a>
                {{-- <a href="#">Info H3</a> --}}
                <a href="#" class="fs-4" >Berita</a>
                {{-- <a href="#">Geospasial</a> --}}
                <a href="#" class="fs-4">Tentang</a>
                {{-- <a href="#">Dashboard</a> --}}
            </nav>
            <br>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="header-background"></div>
            <div>
                {{-- <img src="{{ asset('images/IMG_6915 (1).JPG') }}" alt="" width="1100" height="500"> --}}
            </div>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
                <h1 class="text-white text-white-1">Selamat Datang di SIH3 BBWS Serayu Opak</h1>
            </div>



            <div class="col-xl-4  mb-2">
                <div class="card bg-warning text-white w-100 h-100 align-items-center">
                    <div class="card-body">
                        <h2>Hidrologi</h2>
                        <div class="table-responsive">
                            <table class="table text-white">

                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="/#" type="button" class="small text-white stretched-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"> Detail </a>
                        <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4  mb-2">
                <div class="card bg-info text-white w-100 h-100 align-items-center">
                    <div class="card-body">
                        <h2>Hidrometrologi</h2>
                        <div class="table-responsive">
                            <table class="table text-white">

                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="/#" class="small text-white stretched-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3"> Detail </a>
                        <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4  mb-2">
                <div class="card bg-success text-white w-100 h-100 align-items-center">
                    <div class="card-body">
                        <h2>Hidrogeologi</h2>
                        <div class="table-responsive">

                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="/#" class="small text-white stretched-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModalhidrogeologi"> Detail </a>
                        <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="border-bottom mt-3">
            </div>

        </div>
        <footer>
            <div class="pull-right">
                &copy; 2023 - BBWS Serayu Opak
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>



    {{-- modal hidro --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2>Serayu Bogowonto</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h2>Progo - Opak - Serang</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal 2 hidro bogowonto --}}

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <div class="card bg-info text-white h-100 w-100">
                                <div class="card-body">
                                    <h2>Data Hujan</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="card bg-info text-white h-100 w-100">
                                <div class="card-body">
                                    <h2>Duga Air</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="card bg-info text-white h-100 w-100">
                                <div class="card-body">
                                    <h2>Kualitas Air</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="card bg-info text-white h-100 w-100">
                                <div class="card-body">
                                    <h2>Lokasi Stasiun Pengukuran dan Kewenangan</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal 2 hidro prog opak serang --}}
    {{-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <!-- Tambahkan kelas modal-lg di sini -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Pengukuran dan Kewenangan</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Lokasi Stasiun</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



































    {{-- modal 2 Hidrometrologi bogowonto --}}

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2>Serayu Bogowonto</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h2>Progo - Opak - Serang</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal 2 hidro bogowonto --}}

    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-info text-white mt-3 h-100 w-100">
                                <div class="card-body">
                                    <h2>Data Cuaca Iklim</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-info text-white mt-3 h-100 w-100">
                                <div class="card-body">
                                    <h2>Lokasi Stasiun Pengukuran dan Kewenangan</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal 2 hidro prog opak serang --}}
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2> Lokasi Stasiun Pengukuran dan Kewenangan</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









































    {{-- modal hidrogeologi --}}

    <div class="modal fade" id="exampleModalhidrogeologi" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2>Serayu Bogowonto</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalhidrogeologi1">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h2>Progo - Opak - Serang</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalhidrogeologi1">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal 2 hidro bogowonto --}}

    <div class="modal fade" id="exampleModalhidrogeologi1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <!-- Tambahkan kelas modal-lg di sini -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-info text-white mt-3 h-100 w-100">
                                <div class="card-body">
                                    <h2>Data Neraca Air Tanah</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-info text-white mt-3 h-100 w-100">
                                <div class="card-body">
                                    <h2>Data Duga Air Tanah</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card bg-info text-white mt-3 h-100 w-100">
                                <div class="card-body">
                                    <h2>Data Lokasi Stasiun Pengukuran dan Keweangan dan Cekungan Air Tanah</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="/#" class="small text-white stretched-link"> Detail </a>
                                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
