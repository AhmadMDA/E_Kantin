<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/cshomepage.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/navigation.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
  <div class="header">
    <div class="input-group mb-3">
      <div class="icon">E-KANTIN</div>
        <input type="text" class="form-control input-text" placeholder="Cari menu yang anda cari di sini!" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
          </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
          </div>
      </div>        
    </div>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <button class="openSidebarButton" onclick="showSidebar()"> <img src="{{ asset('/img/menu.png') }}" alt="E Kantin Logo">
      </button>
      <div class="sidebar-content">
        <div class="customer-icon">
          <img src="{{ asset('/img/user.png') }}" alt="Icon 2">
          
        </div>
        <span class="customer-name">Yu Ji Min</span>
        <button class="menu-button" onclick="goToRoute('homepage')">Semua Menu</button>
        <button class="menu-button" onclick="showAbout()">Tentang Kami</button>
        <button class="menu-button3" onclick="logout()">Keluar Akun</button>
      </div>
    </div>
  
    <!-- Main content of your page -->
    <div class="content">
      <div class="description">HI. AHMAD MAULANA DANI AKBAR!!</div>
        <span class="selamat">Selamat Datang di E-Kantin Jurusan Teknologi Informasi</span>
        <div class="container">
          <div class="card-box">
            <div class="rekMenu">REKOMENDASI MENU</div>
            <div class="menu-container">
              <!-- Card 1 -->
              <div class="menu-card">
                <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 1 <span class="menu-price">Rp 20.000</span></h3>
                  <p>Deskripsi menu 1</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button onclick="goToRoute('pesanan')">Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 2 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 2 <span class="menu-price">Rp 25.000</span></h3>
                  <p>Deskripsi menu 2</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 3 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 3 <span class="menu-price">Rp 30.000</span></h3>
                  <p>Deskripsi menu 3</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 4 <span class="menu-price">Rp 35.000</span></h3>
                  <p>Deskripsi menu 4</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 5 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 5 <span class="menu-price">Rp 40.000</span></h3>
                  <p>Deskripsi menu 5</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 6 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 6 <span class="menu-price">Rp 45.000</span></h3>
                  <p>Deskripsi menu 6</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 7 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 7 <span class="menu-price">Rp 50.000</span></h3>
                  <p>Deskripsi menu 7</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
              <!-- Card 8 -->
              <div class="menu-card">
                <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                <div class="menu-info">
                  <h3>Menu 8 <span class="menu-price">Rp 55.000</span></h3>
                  <p>Deskripsi menu 8</p>
                  <div class="menu-rating">
                    <div class="rating-stars">
                      <!-- Isi dengan ikon bintang atau semacamnya -->
                    </div>
                    <button>Pesan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation">
              <button onclick="prevMenu()">&lt;</button>
              <button onclick="showMenu(1)">1</button>
              <button onclick="showMenu(2)">2</button>
              <button onclick="showMenu(3)">3</button>
              <button onclick="nextMenu()">&gt;</button>
          </div>
          </div>
        </div>


    <footer class="footer">
      <div class="left-icons">
        {{-- <img src="{{ asset('/img/KampusB.png') }}" alt="Icon 1"> 
      <img src="{{ asset('/img/JTI.png') }}" alt="Icon 2"> --}}
       </div>
      <div class="right-text">
        ©Kelompok 4-Sistem Informasi E-Kantin Jurusan Teknologi Informasi | D4 Sistem Informasi Bisnis | Politeknik Negeri Malang
      </div>
    </footer>
  </body>
    
<script>
      function goToRoute(routeName) {
        switch(routeName) {
            case 'homepage':
                window.location.href = '/homepage';
                break;
            case 'pesanan':
              window.location.href = '/pesanan';
            break;
            case 'description':
              window.location.href = '/description';
            break;
        }
    }
      function logout() {
        window.location.href = '/Logout';
    }
</script>