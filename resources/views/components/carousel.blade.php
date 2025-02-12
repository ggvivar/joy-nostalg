<div>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    
    .carousel-caption {
      top: 20%; 
      bottom: auto;
      transform: translateY(-10%);
    }
    .carousel-caption span{
      text-shadow: 3px 3px 0px rgba(0,0,0, 0.4);
      font-size: 2rem;
    }
    .carousel-indicators button {
      width: 10px !important; 
      height: 10px !important;
      border-radius: 50%;
      border: none ;
      background-color: #000 ; 
      padding: 0 ;
    }
    .carousel-indicators .active {
      background-color: #fff;
    }
    .carousel-inner img {
/*      width: 1366px;*/
      height: 580px;
      object-fit: fill; 
    }

    @media (max-width: 576px) 
    { 
    .carousel-indicators button {
      width: 10px !important; 
      height: 10px !important;
      border-radius: 50%;
      border: none ;
      background-color: #000 ; 
      padding: 0 ;
    }
      .carousel-inner {
      height: 345px!important;
    }
      .carousel-inner img {
      height: 345px!important;
     }
      .carousel-caption span{
      font-size: 18px;
      text-shadow: 5px 5px 0px rgba(0,0,0, 0.5);

    }
    }
</style>
</head>
<body>
<div id="componentCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach($carouselcontents as $index => $carousel)
    <button type="button" data-bs-target="#componentCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"  aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="image_carousel {{ $index + 1 }}">
    </button>
    @endforeach
  </div>

  <div class="carousel-inner" style="height:580px">
    @foreach($carouselcontents as $index => $carousel)
    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
      <img class="d-block mh-100 w-100" src="{{ $carousel['img_url'] }}" alt="carousel image {{ $index + 1 }}">
      <div class="carousel-caption">
        <span class="fw-bold">{{ $carousel['header'] }}</span>
        <p>{{ $carousel['content'] }}</p>
      </div>
    </div>
    @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#componentCarousel" data-bs-slide="prev">
    <i class="bi bi-arrow-left-circle-fill fs-3 text-white"></i>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#componentCarousel" data-bs-slide="next">
    <i class="bi bi-arrow-right-circle-fill fs-3 text-white"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
