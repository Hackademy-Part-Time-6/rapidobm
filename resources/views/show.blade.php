<x-layout>
<div class="container">
<div class="row my-5">
<div class="col-12 col-md-6"
<div id="adImages" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
<button type="button" data-bs-target="#adImages" data-bs-slide-to="0"
class="active" arial-current="true" arial-label="Slide 1"> </button>

<button type="button" data-bs-target="#adImages" data-bs-slide-to="1"
class="active" arial-label="Slide 2"> </button>

<button type="button" data-bs-target="#adImages" data-bs-slide-to="2"
class="active" arial-label="Slide 3"> </button>

</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="https://picsum.photos/id/237/200/300" class="d-block w-100" alt="">
</div>

<div class="carousel-item">
    <img src="https://picsum.photos/id/237/200/300" class="d-block w-100" alt="">
    </div>

    <div class="carousel-item">
        <img src="https://picsum.photos/id/237/200/300" class="d-block w-100" alt="">
    </div>
</div>



<button class="carousel-control-prev" type="button" data-bs-target="#adImages"
data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
data-bs-slide="next">
<span class= "visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#adImages"
data-bs-slide="prev">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
data-bs-slide="next">
<span class= "visually-hidden">Next</span>
</button>
</div>
</div>

<div class="col-12 col-md-6">
    <div><b>Titulo:</b>{{ $ad->title }}</div>
    <div><b>Precio:</b>{{ $ad->price }}</div>
    <div><b>Descripcion:</b>{{ $ad->body }}</div>
    <div><b>Publicado el:</b>{{ $ad->created_at->format('d/m/Y') }}</div>
    <div><b>Por:</b>{{ $ad->user->name }}</div>
    <div><a href="{{ route('category.ads', $ad->category)}}">{{ $ad->category->name}}</a>
    </div>

    <div><a href="#" class="btn btn-success"> Comprar</a></div>
</div>
</div>
</div>
</x-layout>