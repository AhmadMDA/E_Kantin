<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/csKeranjang.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/ceklist.js"></script>
<script type="text/javascript" src="/js/box.js"></script>
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
  <div class="description">Keranjang Anda</div>
  <span class="selamat">Ini isi keranjang anda, yuk segera di pesan!</span>
  <div class="cek-list">
    <button class="cek-button" onclick="ubahWarna()"></button>
  </div>
  
  <div class="card">
    <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
    <div class="detail-produk">
      <div class="nama-produk">Nama Produk</div>
      <div class="jumlah">
        <div class="jumlah">
            <button><i class="fas fa-minus">-</i></button>
            <span></span>
            <button><i class="fas fa-plus">+</i></button>
          </div>
      </div>
    </div>
    <div class="harga-dan-hapus">
      <div class="harga">Rp 100.000</div>
      <button class="hapus">hapus</button>
    </div>
  </div>
    <button class="pesan">Pesan</button>
</div>
<button class="kembali-button">Kembali</button>
  {{-- Footer --}}
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
        case 'pembayaran':
          window.location.href = '/pembayaran';
        break;
    }
}
  function logout() {
    window.location.href = '/Logout';
}

const kembaliButton = document.querySelector('.kembali-button');
    kembaliButton.addEventListener('click', function() {
    window.location.href = '/homepage'; 
});

var data = 0; // Inisialisasi data

function tambahData() {
data++;
updateData();
}

function kurangiData() {
if (data > 0) {
    data--;
    updateData();
}
}

function updateData() {
var spanElement = document.querySelector('.jumlah span');
spanElement.textContent = data;
}
</script>