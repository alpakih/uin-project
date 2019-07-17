<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            @foreach($data as $dt)
            <li style="background-image: url({!!  asset(Storage::url($dt->corousel_image->image))  !!}">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>{!! $dt->description !!}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</aside>