<div class="col-xl-4  mb-2">
    <div class="card {!! $bginfo !!} text-white w-100 h-100 align-items-center">
        <div class="card-body">
            <h2>{{ $name }}</h2>
            <div class="table-responsive">
                <table class="table text-white">

                </table>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a href="{{ $link }}" class="small text-white stretched-link" {{ $modal }}> Detail </a>
            {{-- data-bs-toggle="modal" --}}
            {{-- data-bs-target="#exampleModal3" --}}
            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
        </div>
    </div>
</div>
