@extends('layout.master')


@section('content')
<main id="oke">
<div class="row " >
    <div class="col-xl-5  ">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    </div>
                <div class="carousel-item active">
                    <img src="{{ asset('foto/foto1.svg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('foto/foto2.svg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('foto/foto3.svg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-xl-5  ">
        
            <h1>
                hi! {{ Auth()->user()->name }}
            </h1>
            <h5>
                Selamat Datang Di Applikasi Peduli diri
            </h5>
            <p>
                
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nisi ut harum ullam aspernatur minima sunt! Provident quas magnam expedita repellat iusto omnis laborum ullam in dicta nobis! Eius, libero!
            </p>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.birds.min.js"></script>
<script>
VANTA.BIRDS({
  el: "#oke",
 mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  backgroundColor: 0xffffff,
  color1: 0x2f2323,
  color2: 0xe4beff
})
</script>

        @stop
