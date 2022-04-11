@include('head')
{{-- // header --}}
    {{-- // header --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; z-index:1; width:100%">
      <div class="container-fluid">
        <img src="img/logo-toy (2).png" alt="" style="width: 65px; margin:0px 30px">
        <a class="navbar-brand" href="#" >Spaceship</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">All Products</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Toys for Boy</a></li>
                <li><a class="dropdown-item" href="#">Toys for Girl</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" style="margin: 10px">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success me-2" type="submit">Search</button>
            <button class="btn btn-outline-primary">
              <a href="{{route('login')}}" class="login">Login</a> 
            </button>
          </form>

        </div>
      </div>
    </nav>
    {{-- // end header --}}

<style>
  /* header */
.navbar{
    /* box-shadow:  0px 10px 10px #40587D !important; */
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px !important;
}
.navbar-brand {
    font-family: 'Rubik Moonrocks', sans-serif;
    font-size: 1.8em;
    font-weight: 500;
}

.navbar-brand:hover {
    color: #5cb85c;
}

.nav-link{
    font-weight: 500 !important;
}

a:hover{
    color: #40587D !important;
}

.login:hover{
    color: #fff !important;
}


</style>