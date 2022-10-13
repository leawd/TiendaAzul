<div class="col-md-4 col-xl-3 mt-2">
    <div class="card">
        <div class="card-body">
            <div class="card-img-actions">
                <img src="{{ asset("images/phones/{$phone->image}") }}" class="card-img img-fluid"
                    width="96" height="350" alt="">
            </div>
        </div>

        <div class="card-body bg-light text-center">
            <div class="mb-3">
                <h6 class="font-weight-semibold mb-2">
                    <a href="{{ url('purchasing-process/checkout/' . $phone->slug) }}" class="text-default mb-2" data-abc="true">{{ $phone->title }}</a>
                </h6>
            </div>

            <div class="mb-3">
                <h3 class="mb-0 font-weight-semibold">U$S{{ $phone->price }}</h3>
            </div>

            <a href="{{ url('purchasing-process/checkout/' . $phone->slug) }}" type="button" class="btn-comprar text-white">COMPRAR</a>
        </div>
    </div>
</div>
