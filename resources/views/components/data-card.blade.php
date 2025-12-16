@props(['model'])

<div class="data-card-item">
    <div class="team-item bg-light rounded overflow-hidden">
        <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid data-card-image" 
                 src="{{ asset('storage/' . $model->image_path) }}" 
                 alt="{{ $model->title }}">
        </div>
        <div class="text-center py-4">
            <h4 class="text-primary">{{ $model->title }}</h4>
            @if ($model?->description)
                <p class="mb-0 text-muted small">{{ $model?->description }}</p>
            @endif
        </div>
    </div>
</div>
