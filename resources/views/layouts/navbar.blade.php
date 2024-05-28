<header id="header" class="fixed-top d-flex align-items-center ">
       <div class="container-fluid">
           <div class="row justify-content-center align-items-center">
               <div class="col-xl-11 d-flex align-items-center justify-content-between">
                   <!-- <h1 class="logo"><a href="#hero">BizPage</a></h1> -->
                   <!-- Uncomment below if you prefer to use an image logo -->
                   <a href="#hero" class="logo"><img src="{{ asset('assets/img/Group23.png') }}" alt=""
                           class="img-fluid"></a>
                   <nav id="navbar" class="navbar">
                       <ul>
                           <li><a class="nav-link " href="{{ route('beranda') }}">Profil</a></li>
                           <!-- <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li> -->
                           <li class="dropdown"><a href="#"><span>Layanan</span> <i
                                       class="bi bi-chevron-down"></i></a>
                               <ul>
                                   <li><a href="{{ route('pemadanan') }}">Pemadanan NIK dan NPWP</a></li>
                                   <li><a href="{{ route('asistensi') }}">Asistensi Pelaporan SPT Tahunan Wajib Pajak</a></li>
                                   <li><a href="{{ route('ebiling') }}">Pelayanan E-Billing</a></li>
                               </ul>
                           </li>
                           <li class="dropdown"><a href="#"><span>Program Kerja</span> <i
                                       class="bi bi-chevron-down"></i></a>
                               <ul>
                                   <li><a href="#">Relawan DJP</a></li>
                                   <li><a href="#">UPS (Update Seputar Pajak)</a></li>
                                   <li><a href="#">Study Banding</a></li>
                                   <li><a href="#">Kompetisi</a></li>
                               </ul>
                           <li><a class="nav-link scrollto " href="{{ route('kalkulator') }}">Kalkulator</a></li>
                           <li><a class="nav-link scrollto " href="{{ route('berita') }}">Berita</a></li>
                           <li><a class="nav-link scrollto" href="{{ route('galery') }}">Gallery</a></li>
                       </ul>
                       <i class="bi bi-list mobile-nav-toggle"></i>
                   </nav>
                   <!-- .navbar
                        <li class="dropdown"><a href="#"><span>Kalkulator Pajak</span> <i
                                       class="bi bi-chevron-down"></i></a>
                               <ul>
                                   <li><a href="{{ route('pph21') }}">PPH 21</a></li>
                                   <li><a href="{{ route('pph22') }}">PPH 22</a></li>
                                   <li><a href="{{ route('kalkulator') }}">Kalkulator</a></li>
                               </ul>
                           </li>
                    -->
               </div>
           </div>
       </div>
   </header>
