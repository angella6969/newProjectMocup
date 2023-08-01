@extends('layout.main')
@section('container')
<header>
    <div class="mt-3">
        <br>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Dashboard</a>
            <a href="#">Geospasial</a>
            <a href="#">Monitoring</a>
            <a href="#">Info H3</a>
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
            <div class="card bg-warning text-white  h-100 align-items-center">
                <div class="card-body">
                    <h2>Hidrologi</h2>
                    <div class="table-responsive">
                        <table class="table text-white">

                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4  mb-2">
            <div class="card bg-info text-white  h-100 align-items-center">
                <div class="card-body">
                    <h2>Hidrometrologi</h2>
                    <div class="table-responsive">
                        <table class="table text-white">

                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4  mb-2">
            <div class="card bg-success text-white  h-100 align-items-center">
                <div class="card-body">
                    <h2>Hidrogeologi</h2>
                    <div class="table-responsive">

                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/#" class="small text-white stretched-link"> Views Detail </a>
                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                </div>
            </div>
        </div>


    </div>
    <footer>
        <div class="pull-right">
            &copy; 2023 - BBWS Serayu Opak
        </div>
        <div class="clearfix"></div>
    </footer>
</div>



@endsection