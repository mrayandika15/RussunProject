<?= $this->extend('layout_view') ?>
<?= $this->section('content') ?>
<div class="carousel-russun">
    <div class="inner-corousel-russun">
      <img src="<?= base_url('asset/home-1.png') ?>" alt="" class="carousel1-russun active" id="statement">
      <img src="<?= base_url('asset/home-2.jpg') ?>" alt="" class="carousel2-russun" id="statement">
      <img src="<?= base_url('asset/home-3.jpg') ?>" alt="" class="carousel3-russun" id="statement">
    </div>
  </div>

  <div class="nav-carousel">
    <div class="carousel-russun-made-left">
      <div class="carousel-bg1"></div>
      <div class="carousel-bg2"></div>
      <div class="carousel-bg3"></div>
    </div>
    
    
    <div class="carousel-russun-made-right">
      <div class="carousel-bg1-right"></div>
      <div class="carousel-bg2-right"></div>
      <div class="carousel-bg3-right"></div>
    </div>
  </div>


  <div class="carousel-text-russun">
    <div class="text">

      <img src="<?= base_url('asset/title-index1.png') ?>" alt="" id="index1">
      <img src="<?= base_url('asset/title-index2.png') ?>" alt="" id="index2">
    </div>
  <div class="circle-russun-container">
    <img src="<?= base_url('asset/circle-text-1.png') ?>" alt="" id="circle1">
    <img src="<?= base_url('asset/circle-text-2.png') ?>" alt="" id="circle2">
    <img src="<?= base_url('asset/circle-text-3.png') ?>" alt="" id="circle3">
  </div>
  </div>
<script src="<?= base_url('AppCarousel.js') ?>"></script>

<?= $this->endSection() ?>