

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .carousel-milestone-caption {
      top: 20%; /* Adjust the top value as needed */
      bottom: auto;
/*      transform: translateY(-10%); /* Optional: fine-tune positioning */*/
    }
    .carousel-milestone-indicators button {
      width: 10px !important; 
      height: 10px !important;
      border-radius: 50%;
      border: none ;
      background-color: #000 !important; 
      padding: 0 ;
    }
    .carousel-milestone-indicators .active {
      background-color: #fff;
    }
    .carousel-milestone-inner img {
      height: 400px;
      object-fit: cover ; 
    }

    @media (max-width: 576px) 
    { 
    .carousel-milestone-caption {
      top: 30% !important; /* Adjust the top value as needed */
      bottom: auto;
      transform: translateY(-20%); /* Optional: fine-tune positioning */
    }
    .carousel-milestone-indicators button {
      width: 10px !important; 
      height: 10px !important;
      border-radius: 50%;
      border: none ;
      background-color: #000 ; 
      padding: 0 ;
    }
      .carousel-milestone-inner {
      height: 450px;
    }
      .carousel-milestone-inner img {
      height: 450px;
     }
    }
</style>
</head>
<body>
<div id="componentCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-milestone-inner" style="height:600px !important">
    @foreach($carouselmilestone as $index => $carousel)
    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
      <img class="d-block mh-100 w-100 px-2" src="{{ $carousel['img_url'] }}" alt="carousel image {{ $index + 1 }}">
      <div class="carousel-milestone-caption d-none d-md-block">
        <h3 class="fw-bold mt-3 text-center">{{ $carousel['header'] }}</h3>
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
  <div class="carousel-milestone-indicators text-center">
    @foreach($carouselmilestone as $index => $carousel)
    <button type="button" data-bs-target="#componentCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"  aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="image_carousel {{ $index + 1 }}">
    </button>
    @endforeach
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
