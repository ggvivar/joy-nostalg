<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <style>
      body {
         font-family: 'Roboto', sans-serif !important;
      }
      .navbar-brand {
         font-size: 1.75rem;
      }
      .nav-link {
         font-size: 1.5rem !important;
                  border-radius: 20px;
         padding-left: 15px !important;
         padding-right: 15px !important;
         margin: 0 10px!important;
      }
      .navbar-brand img {
         height: 65px;
         max-width: 100%;
         object-fit: cover;
         border: 0;
         margin: 0;
      }
      .navbar {
         height: 96px;
         background-color: #FCC737;
      }

      .nav-link:hover {
/*         font-weight: bold !important;*/
         background-color: #E87C0C !important;
         border-radius: 20px;
         padding-left: 15px !important;
         padding-right: 15px !important;
         margin: 0 10px!important;
      }

      @media (max-width: 992px) {
         .navbar {
            height: 100%;
         }
         .navbar-brand {
            font-size: 1.5rem;
         }
         .nav-link {
            font-size: 1.25rem;
         }
      }
      @media (max-width: 576px) {
         .navbar-header{
            margin-left: 10px !important;
            margin-right: 0px !important;

         }
         .navbar-brand img {
            height:2.75rem;
            object-fit: scale-down;
            align-content: center!important;
         }
         .navbar-nav {
            display: block;
            width: 100%;
         }

         .dropdown-item {
            width: 100%;
            padding: 10px;
            text-align: center;
         }
      }
      .active-nav {
         background-color: #E87C0C !important;
         border-radius: 20px;
         padding-left: 15px !important;
         padding-right: 15px !important;
         margin: 0 10px!important;
      }
      .active-nav-menu{
         font-weight: bold !important;
         color:white!important;
         font-size:1.75rem!important;
         /*         background-color: #F1EE8E !important;*/
         border-radius: 20px;
         padding-left: 15px !important;
         padding-right: 15px !important;
         }
.dropdown-menu {
  background-color: rgba(255, 255, 255, 0.3)!important;
  backdrop-filter: blur(15px)!important;
}
</style>
</head>
   <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light">
   <div class="container-fluid d-flex align-items-center navbar-header" style="margin-left: 30px; margin-right: 30px;">
      <a class="navbar-brand me-auto d-flex align-items-center" style="text-decoration: none; margin-right: 20px" href="/">   
         <img alt="Joy Nostalg Logo" src="{{asset('img/Photos/icons/jn_logo.png')}}">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
         <div class="d-flex justify-content-center flex-grow-1">
            @foreach($navList as $item)
            <a class="nav-link text-white {{ URL::current()==$item['url'] ? 'active-nav' : '' }}" 
            style="margin: 0 25px;" 
            href="{{ $item['url'] }}">
            {{ $item['label'] }}
         </a>
         @endforeach
      </div>
   </div>

     <nav class="navbar bg-warning d-lg-none d-md-none  pr-2">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
   </nav>

</div>

</nav>
<div class="collapse" id="navbarToggleExternalContent">
 <div class="navbar d-flex justify-content-center text-center ">
   <div class="row">
      @foreach($navList as $item)
      <div class="col-sm-12">
         <a class="dropdown-item fs-5 {{ URL::current() == $item['url'] ? 'active-nav-menu' : '' }}" href="{{ $item['url'] }}">
            {{ $item['label'] . Request::is(trim($item['url'], '/')) }}
         </a>
      </div>
      @endforeach
   </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
 document.addEventListener('click', function (event) {
  const navbarToggle = document.querySelector('#navbarToggleExternalContent');
  const button = document.querySelector('.navbar-toggler');
  if (!navbarToggle.contains(event.target) && !button.contains(event.target)) {
   $(navbarToggle).collapse('hide');
}
});
</script>


