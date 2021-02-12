<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ford CMS - Modele</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="/css/main.css" rel="stylesheet" type="text/css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="" style="padding-left:0px;">
                    <center>
                    <img src="https://logodownload.org/wp-content/uploads/2014/02/ford-logo-1-1.png" height="30px"/>
                </center>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <div type="" class="">
                        <span class="">
                            <i class=""></i>
                        </span>
                    </div>
                </span>
            </div>  
             
        </div>     
       
        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">General</li>

                                 <!-- start Category  -->
                                 <li class="">
                                    <a href="/category" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Category
                                        <i class="metismenu-state-icon  caret-left"></i>
                                    </a>
                                    
                                </li>
                                <!-- End Category  -->

                                <!-- start Marque  -->
                                <li class="">
                                    <a href="/marque" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Marque
                                        <i class="metismenu-state-icon caret-left"></i>
                                    </a>
                                    
                                </li>
                                <!-- End marque  -->

                                <!-- start Model  -->
                                <li class="">
                                    <a href="#" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Model
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse" style="height: 7.04px;">
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                List Model
                                            </a>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                Ajouter Model
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <!-- End Model  -->


                                <!-- start Vehicle  -->
                                <li class="">
                                    <a href="#" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Vehicule
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse" style="height: 7.04px;">
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                List Vehicule
                                            </a>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                Ajouter un Vehicule
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <!-- End Vehicule  -->
                                
                               
                                <li class="app-sidebar__heading">Fiche Technique</li>
                                
                                @yield('parentoptionmenu')
                              
                                <li class="app-sidebar__heading">parametre</li>
                                
                                  <!-- start Fiche Technique  -->
                                  <li class="">
                                    <a href="/parentoption" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Fiche TECHNIQUE
                                        <i class="metismenu-state-icon caret-left"></i>
                                    </a>
                                    
                                </li>
                                <!-- End Fiche technique  -->


                                 <!-- start Fiche Technique  -->
                                 <li class="">
                                    <a href="#" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Fiche TECHNIQUE Enfant 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse" style="height: 7.04px;">
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                List Fiche TECHNIQUE Enfant
                                            </a>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                Ajouter une Fiche TECHNIQUE Enfant
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <!-- End Fiche technique  -->
                                


                                
                            </ul>
                        </div>
                    </div>
                </div>   
                 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>@yield('headcontent')
                                        <div class="page-title-subheading">@yield('subheadcontent')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                        
                            @yield('add')


                            
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                                <div class="row" > 
                                    <div class="col-md-12" >
                                        <div class="main-card mb-3 card" >
                                            <div class="card-body" >
                                                @yield('content')
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                 </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="/assets/scripts/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

@yield('script')
</body>

</html>
