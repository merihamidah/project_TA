@php
    function checkRouteActive($route){
        if(Route::current()->uri == $route) return 'active';
    }
@endphp


<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <a class="nav-link {{checkRouteActive('beranda')}}" href="{{url('beranda')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Beranda
                </a>
                <a class="nav-link {{checkRouteActive('artikel')}}" href="{{url('artikel')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Artikel
                </a> 
                <div class="sb-sidenav-menu-heading">Data User</div>
                 <a class="nav-link {{checkRouteActive('ibuhamil')}}" href="{{url('ibuhamil')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Ibu Hamil
                </a>             
                <a class="nav-link {{checkRouteActive('admin')}}" href="{{url('admin')}}">
                   <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                   Admin
               </a>     
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{url('login')}}">Login</a>
                                <a class="nav-link" href="{{url('register')}}">Register</a>
                                <a class="nav-link" href="{{url('forgotpass')}}">Forgot Password</a>
                            </nav>
                        </div>
                        
            </div>
        </div>
       
    </nav>
</div>