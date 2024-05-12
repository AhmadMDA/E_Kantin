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
        <div class="iconF">
          <a href="{{ route('Customer.RiwayatTransaksi') }}">
              <img src="{{ asset('/img/lists.png') }}" alt="list">
          </a>
          <a href="{{ route('Customer.keranjang') }}">
              <img src="{{ asset('/img/check-out.png') }}" alt="cart">
          </a>
      </div>
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