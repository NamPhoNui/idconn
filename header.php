<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Aldrich&family=Mulish:wght@300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/styles/main.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/styles/product-slider.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/styles/responsive.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body <?php body_class(); ?>>
  <div class="app overflow-hidden">
    <header class="fixed top-0 w-full z-[71]">
      <div class="container">
        <div class="flex items-center">
          <a href="./index.html">
            <img src="<?php bloginfo( 'template_directory' ) ?>/assets/images/logo.png" alt="" class="logo" /></a>
          <i id="mobile-bar" class="fa-solid fa-bars mobile-btn hidden" onclick="handleBarClick()"></i>
        </div>
        <div class="header-menu flex items-center">
          <ul class="flex">
            <li>Giới thiệu</li>
            <li>Sản phẩm</li>
            <li>Hướng dẫn</li>
            <li>Hợp tác</li>
          </ul>
          <button class="login-btn">Đăng Nhập</button><button class="shop-btn">Shop Now</button>
        </div>
      </div>
    </header>
    <div id="overlay" class="hidden fixed top-0 right-0 bottom-0 left-0 w-full h-full bg-black opacity-50 z-[69]"
      onclick="handleOverlayClick()"></div>
    <div id="mobile-menu" class="hidden w-[50%] h-[100vh] py-5 fixed top-0 right-0 bg-[#33323F] text-[#eee] z-[99]">
      <div class="px-3 mb-5 flex justify-between items-center">
        <a href="./index.html">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/images/logo.png" alt="" class="mobile-logo" /> </a><i id="close-btn"
          class="fa-solid fa-xmark p-1 text-[24px]" onclick="handleCloseBtn()"></i>
      </div>
      <ul>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            About
          </li>
        </a>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            Sản Phẩm
          </li>
        </a>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            Hướng Dẫn
          </li>
        </a>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            Chính Sách
          </li>
        </a>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            Đăng Nhập
          </li>
        </a>
        <a>
          <li class="px-3 py-2 text-[18px] font-semibold border-t-[1px] border-[#d3d3d3] hover:bg-[#d3d3d3]">
            Shop Now
          </li>
        </a>
      </ul>
    </div>