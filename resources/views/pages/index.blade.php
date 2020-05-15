@extends('layouts.layout')

@section('content')

<!-- Title -->
<section id="title">
    <div class="container-fl">
        <div class="row">
            <div class="col-lg-6">
            <h1 class="font">Meet new and great Koperasi.</h1>
            <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fas fa-sign-in-alt"></i>
                Register Now</button>
            </div>
            <div class="col-lg-6">
            <img class="title-image" src={{ asset('images/bisnis-removebg-preview.png') }} alt="people">
            </div>
        </div>
        </div>
    </div>
</section>  

<!-- About Us -->
<section id="aboutus">
    <div class="container-fluid">
        <h2 class="aboutus-heading">Waffle Koperasi</h2>
        <div class="row whatis">
            <div class="col-lg-6 font-cnt">
                <i class="fas fa-piggy-bank fa-10x"></i>
            </div>
            <div class="col-lg-6">
                <h2 class="aboutus-title">What is it ?</h3>
                <h4 class="font-whatis">Lorem ipsum dolor sit, amet conse adipis elit. Exercit minus.</h4>
            </div>
        </div>
        <div class="row easytouse">
            <div class="col-lg-6">
                <h2 class="aboutus-title">Easy to use</h3>
                <h4 class="font-whatis">Lorem ipsum dolor sit, amet conse adipis elit. Ut ullam neque in  veratis.</h4>
            </div>
            <div class="col-lg-6 fal-whatis font-cnt">
                <i class="fas fa-signal fa-10x"></i>
            </div>
        </div>
    </div>
</section>

<!-- Features -->

<section id="features">
  <div class="container-fluid">
      <div class="row">
        <div class="features-box col-lg-4">
          <i class="fas fa-check-circle fa-4x fcolour"></i>
          <h3 class="feature-title">Easy to use.</h3>
          <p>So easy to use, even your waffle could do it.</p>
        </div>

        <div class="features-box col-lg-4">
          <i class="fas fa-bullseye fa-4x fcolour"></i>
          <h3 class="feature-title">Elite Clientele</h3>
          <p>We have all the waffle, the greatest waffles.</p>
        </div>

        <div class="features-box col-lg-4">
          <i class="fas fa-heart fa-4x fcolour"></i>
          <h3 class="feature-title">Guaranteed to work.</h3>
          <p>Find the love of your waffle's life or your money back.</p>
        </div>
      </div>
    </div>
</section>


<!-- Testimonials -->

  <section id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on
            TinWaffle. Wiw.</h2>
          <img class="testimonial-image" src= {{ asset('images/lady-img.jpg') }}  alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love
            of their life. I think.</h2>
          <img class="testimonial-image" src={{ asset('images/lady-img.jpg') }}  alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

@endsection
