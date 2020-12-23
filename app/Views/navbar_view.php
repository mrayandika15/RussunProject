<?php
$session = session();
?>



<link href="<?= base_url('style_nav.css') ?>" rel="stylesheet">

<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="<?= site_url('home/index') ?>">RussunProject</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    
        

                    <?php if($session->get('isLoggedIn')): ?>
                    
                    
                <?php if(session()->get('role')==0): ?>
                    <li><a href="<?= site_url('barang/index') ?>">ListBaju</a></li> 
                    <li><a href="<?= site_url('barang/create') ?>">Insert</a></li> 
                    <?php else: ?>
                    <li><a href="<?= site_url('etalase/index') ?>">Product</a></li> 

                    <?php endif ?>
                    
                    <li><a href="<?= site_url('Auth/logout') ?>">Logout</a></li>
                    <?php else : ?>
                    <li><a href="<?= site_url('Auth/Login') ?>">Login</a></li>
                    
                    <li><a href="<?= site_url('Auth/register') ?>">Register</a></li>


                    <?php endif ?>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
   

<!-- Jquery needed -->

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });

        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

    </script>

    