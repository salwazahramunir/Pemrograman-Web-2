@extends('front.layout.appfrontend')
@section('content')
    <section id="hero" class="hero">
        <img src="{{ asset('front/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in" class="aos-init aos-animate">

        <div class="container">
            <div class="row">
            <div class="col-lg-10">
                <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Welcome to Home Page</h2>
                <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">We are team of talented designers making websites with Bootstrap
                </p>
            </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <h1>Home Page</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore harum ea similique minus, nemo natus fuga, dignissimos a, aliquam ad qui! Assumenda ducimus sequi nostrum, et perferendis minima temporibus aliquid.</p>
    </div>
@endsection
