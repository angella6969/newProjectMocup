<!-- File: resources/views/components/card-component.blade.php -->
<div class="card bg-info text-white">
    <div class="card-body">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-footer d-flex align-items-center justify-content-between"
        data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
        <a href="/#" class="small text-white stretched-link">Detail</a>
        <div class="small text-white"><i class="fas fa-angel-right"></i></div>
    </div>
</div>
