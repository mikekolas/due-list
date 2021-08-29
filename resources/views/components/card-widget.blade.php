{{-- cw stands for card widget --}}
<div class="crd-wdgt">
    <div class="row px-3 d-flex align-items-center">
        <div class="cw-dot mr-4">
            <i class="bi bi-circle-fill text-{{ $color }}"></i>
        </div>
        <div class="cw-text">
            <h6 class="font-weight-bold mb-0">{{ $title }}</h6>
            <h6 class="cw-number mb-0">{{ $total }}</h6>
        </div>
        <div class="cw-icon ml-auto">
            <i class="bi {{ $icon }} text-{{ $color }}"></i>
        </div>
    </div>
</div>