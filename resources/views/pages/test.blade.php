<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" /> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/mbd.css')}}" /> --}}
        @vite('resources/css/mbd.css')
        @vite('resources/css/mbd.min.css')



        <title>Sidebar & navbar</title>

    </head>

<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i
            ><span>Main dashboard</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple active"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Webiste traffic</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-chart-line fa-fw me-3"></i
          ><span>Analytics</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-globe fa-fw me-3"></i
          ><span>International</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-building fa-fw me-3"></i
          ><span>Partners</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-3"></i
          ><span>Calendar</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
          >
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
       >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
             src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
             height="25"
             alt=""
             loading="lazy"
             />
      </a>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
  <div class="container pt-4">

  </div>
</main>
  <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    @vite('resources/js/mbd.min.js')
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/main.js"></script>
    @vite('resources/js/main.js')
<!--Main layout-->  