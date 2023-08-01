@extends('layout.main')
@section('container')
<header>
    <div class="mt-3">
        <br>
        <nav>
            <a href="#">Home</a>
            <a href="#">Info H3</a>
            <a href="#">Monitoring</a>
            <a href="#">Geospasial</a>
            <a href="#">About</a>
            <a href="#">Dashboard</a>
        </nav>
        <br>
    </div>
</header>
<div class="container">
    <div class="row">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
            <h1 class="text-white">Selamat Datang Di SIH3</h1>
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
                        data-bs-target="#exampleModal"> Views Detail </a>
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
                        data-bs-target="#exampleModal3"> Views Detail </a>
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
                        data-bs-target="#exampleModalhidrogeologi"> Views Detail </a>
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



{{-- modal hidro--}}

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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- modal 2 hidro bogowonto--}}

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <!-- Tambahkan kelas modal-lg di sini -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Data Hujan</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Duga Air</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Kualitas Air</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Lokasi Stasiun Pengukuran dan Kewenangan</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



































{{-- modal 2 Hidrometrologi bogowonto--}}

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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- modal 2 hidro bogowonto--}}

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
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Data Cuaca Iklim</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Lokasi Stasiun Pengukuran dan Kewenangan</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









































{{-- modal hidrogeologi--}}

<div class="modal fade" id="exampleModalhidrogeologi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- modal 2 hidro bogowonto--}}

<div class="modal fade" id="exampleModalhidrogeologi1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <!-- Tambahkan kelas modal-lg di sini -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Data Neraca Air Tanah</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Data Duga Air Tanah</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2>Data Lokasi Stasiun Pengukuran dan Keweangan dan Cekungan Air Tanah</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/#" class="small text-white stretched-link"> Views Detail </a>
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