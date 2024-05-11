<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/csRWAd.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/navigation.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
  <div class="header">
    <div class="input-group mb-3">
      <div class="input-group mb-3">
        <div class="icon">E-KANTIN</div>
        <div class="Admin">Admin</div>
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
        <button class="menu-button" onclick="showMenu()">Semua Menu</button>
        <button class="menu-button" onclick="showAbout()">Laporan penjualan</button>
        <button class="menu-button" onclick="showAbout()">Input laporan penjualan</button>
        <button class="menu-button" onclick="showAbout()">Kelola pesanan</button>
        <button class="menu-button" onclick="showAbout()">Kelola akun customer</button>
        <button class="menu-button3" onclick="logout()">Keluar Akun</button>
      </div>
    </div>
<!-- Main content of your page -->
<div class="content">
  <div class="description">Deskripsi Produk</div>

  <div class="product">
      <div class="product-image">
          <!-- Image produk -->
          <img src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
      </div>
      
      <div class="product-details">
          <!-- Card produk -->
          <div class="card">
              <div class="product-name">Martabak</div>
              <div class="product-description">Deskripsi Produk</div>
              <div class="product-rating">Rating</div>
              <div class="product-price">Rp 25.000</div>
          </div>
      </div>
  </div>

  <!-- Card review produk -->
  <div class="review-card">
      <div class="review-header">Review Produk</div>
      <div class="review-content">
          <!-- Isi review -->
          <div class="review">
              <div class="reviewer">Nama Reviewer</div>
              <div class="rating">Rating</div>
              <div class="comment">Komentar</div>
          </div>
          <div class="view-all">
              <button class="btn-lihat-semua">Lihat Semua</button>
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
    const kembaliButton = document.querySelector('.kembali-button');
        kembaliButton.addEventListener('click', function() {
        window.location.href = '/BerandaAdmin'; 
    });



  </script>