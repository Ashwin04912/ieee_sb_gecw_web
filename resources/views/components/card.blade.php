<div class="col-md-4">
    <div class="card mb-3">
        <img src="{{ $image }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $slot }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $date }}</small></p>
        </div>
    </div>
</div>
