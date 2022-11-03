<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/landing.css');}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <title>ISFT N°38</title>
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap');

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Overpass', sans-serif;
  }

  @media (min-width: 2140px) {
    html {
      height: 100vh;
    }
  }

  @media all and (max-width: 600px) {
    .contenedorHeader {
      height: 100vh;
    }
  }


  ::-webkit-scrollbar {
    display: none;
  }

  span a {
    color: white;
    text-decoration: none;
  }

  body {
    background: #212529;
    width: 100vw;
  }

  .footer {
    color: white;
    text-align: center;
    padding: 20px;
  }

  ul li {
    width: 100%;
    height: 100%;
  }

  .dropdown-menu {
    padding: 0 !important;
  }

  nav svg {
    margin-right: 10px;
  }


  .rogelio ul li a {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  @media all and (max-width: 1024px) {
   
  
.nav-li {
      display: flex;
      justify-content:center;
    }
  }

  

  @media screen and (max-width: 768px) {
    ul li {
      width: 100%;
      font-size: 120%;
    }

    .show {
      height: 100%;
    }

    .footin {
      display: flex;
      flex-wrap: wrap;
      text-align: center;
    }
    
  }

  .nav-link {
    display: flex;
    justify-content:start;
}

  .nav-li {
    background-color: #212121;
  }


  /* botonas */


  a {
    color: #e1e1e1;
    font-weight: 800;
    cursor: pointer;
    position: relative;
    border: none;
    background: none;
    text-transform: uppercase;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-duration: 400ms;
    transition-property: color;
  }

  a:focus,
  a:hover {
    color: #fefefe;
  }

  a:focus:after,
  a:hover:after {
    left: 0%;
  }

  a:after {
    content: "";
    pointer-events: none;
    bottom: -2px;
    left: 50%;
    position: absolute;
    width: 0%;
    height: 2px;
    background-color: #fff;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-duration: 400ms;
    transition-property: width, left;
  }
  .nav-ul{
    display: flex;
    justify-content: center;
  }


  .menu-alumnos a{
    display: flex;
    justify-content: start;
  }
  
</style>

<body>
  <!-- HEADER -->
  <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg m-auto ">
    <div class="container-fluid">
      <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        <img src="logo1.png" width="45px" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse rogelio"  id="navbarToggleExternalContent">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll nav-ul" style="--bs-scroll-height: 400px;">
          <li class="nav-item">
            <a href="{{ route('carreras') }}" class="nav-link border-effect">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
              </svg>
              Carreras
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
              </svg>
              Alumnos
            </a>
            <ul class="dropdown-menu menu-alumnos" aria-labelledby="navbarDropdown" >
              <li class="nav-li">
                <a href="http://campus.isft38.edu.ar/" class="nav-link d-flex justify-content-start" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
                  </svg>
                  Campus
                </a>
              </li>
              <li class="nav-li">
                <a href="{{ route('programas') }}" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  Programas
                </a>
              </li>
              <li class="nav-li">
                <a href="{{ route('horarios.porCarrera') }}" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  DOCS
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('programas.create') }}" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
              Profesores
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="{{ route('horarios.porCarrera') }}" class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
              Horarios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="nav-li">
                <a href="{{ route('horarios.porCarrera') }}" class="nav-link">
                  Por Carrera
                </a>
              </li>
              <li class="nav-li">
                <a href="{{ route('horarios.porProfesor') }}" class="nav-link">
                  Por Profesor
                </a>
              </li>
              <li class="nav-li">
                <a href="{{ route('horarios.PorDiaHora') }}" class="nav-link">
                  Por dia / hora
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('contacto.index') }}" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg>
              Contacto
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- HEADER -->



  @yield('content')


  <!-- FOOTER -->

  <div class="footer" style="background:#212121;">
    <footer>
      <div style="text-align:center">
        <p>Sede central San Nicolás</p>
        <p>Avenida Central 1825</p>
      </div>
      <p class="text-center text-white">&copy; 2022 ISFT Sistemas</p>
    </footer>
  </div>
  <!-- FOOTER -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>