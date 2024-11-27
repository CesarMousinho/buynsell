@extends('layouts.app')

@section('content')

<!-- Preloader -->
<div class="preloader-wrapper">
  <div class="preloader">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</div>

<!-- ----------------- CARROUSEL CATEGORIAS --------------- -->

<section class="py-5 overflow-hidden">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
          <h2 class="section-title">Category</h2>
          <div class="d-flex align-items-center">
            <a href="#" class="btn btn-primary me-2">View All</a>
            <div class="swiper-buttons">
              <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
              <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="category-carousel swiper">
          <div class="swiper-wrapper">
            @foreach($categorias as $categoria)
              <a href="category.html" class="nav-link swiper-slide text-center">
                <img src="{{ asset('images/' . $categoria->image) }}" class="rounded-circle" alt="{{ $categoria->name }}">
                <h4 class="fs-6 mt-3 fw-normal category-title">{{ $categoria->name }}</h4>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ----------------- CARROUSEL CATEGORIAS --------------- -->

<!-- ------------------ GRADE DE ANÚNCIOS ---------------------------->
<div class="container">
  <section class="pb-5">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header d-flex flex-wrap justify-content-between my-4">
            <h2 class="section-title">Best Selling Products</h2>
            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary rounded-1">View All</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach ($anuncios as $value)
              <div class="col mb-4">
                <div class="product-item text-center">
                  <figure>
                    <a href="{{ url('/feed/categoria/' . $value->id) }}" title="{{ $value->titulo }}">
                      <img src="data:image/png;base64,{{ $value->imagem }}" alt="Product Thumbnail" class="img-fluid" height="180">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center mt-3">
                    <h3 class="fs-6 fw-bold">{{ $value->titulo }}</h3>
                    <div class="rating mb-2">
                      <span class="text-warning">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-4">
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border rounded-3 fw-normal">{{ $value->autor->name }}</span>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- ------------------ GRADE DE ANÚNCIOS ---------------------------->

<!-- ------------------ BANNER DE INSCRIÇÃO ------------------------>
<div class="container">
  <div class="container-xl">
    <div class="bg-secondary text-light py-5 my-5" style="background: url('images/fundosa.svg') no-repeat; background-size: cover;">
      <div class="row justify-content-center">
        <div class="col-md-5 p-3">
          <h2 class="text-yellow display-8">Receba os anúncios em primeira mão se inscrevendo no site!</h2>
          <p class="lead">Apenas Registre-se e torne-se o novo Membro da BuyN'Sell</p>
        </div>
        <div class="col-md-5 p-3">
          <form>
            <div class="mb-3">
              <label for="nome" class="form-label d-none">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label d-none">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-warning">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ------------------ BANNER DE INSCRIÇÃO ------------------------>

<!-- ------------------ GRADE IMAGENS AMOSTRATIVAS ---------------------- -->
<section class="py-3">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">
        <div class="banner-blocks">
          <div class="banner-ad d-flex align-items-center bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
            <div class="banner-content p-5">
              <h3 class="banner-title text-light">Items on SALE</h3>
              <p>Discounts up to 30%</p>
              <a href="#" class="btn-link text-white">Shop Now</a>
            </div>
          </div>
          <div class="banner-ad bg-success-subtle block-2" style="background: url('images/banner-ad-2.jpg') no-repeat; background-size: cover;">
            <div class="banner-content p-5">
              <h3 class="banner-title text-light">Combo offers</h3>
              <p>Discounts up to 50%</p>
              <a href="#" class="btn-link text-white">Shop Now</a>
            </div>
          </div>
          <div class="banner-ad bg-danger block-3" style="background: url('images/banner-ad-3.jpg') no-repeat; background-size: cover;">
            <div class="banner-content p-5">
              <h3 class="banner-title text-light">Discount Coupons</h3>
              <p>Discounts up to 40%</p>
              <a href="#" class="btn-link text-white">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ GRADE IMAGENS AMOSTRATIVAS ---------------------- -->

@endsection
