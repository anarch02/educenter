<!-- ROW OPEN -->
<div class="row">
    @foreach ($cards as $card)
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card {{ $card['color'] }}">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font"> {{ $card['count'] }} </h2>
                        <p class="text-white mb-0">{{ $card['title'] }} </p>
                    </div>
                    <div class="ms-auto"> <i class="{{ $card['icon'] }} text-white fs-30 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>
<!-- ROW CLOSED -->