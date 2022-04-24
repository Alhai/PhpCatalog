<?php 
require "my-functions.php"; 
require "catalog.php";
//    require "database.php"; 
  ?>

<!-- Contact Section-->
<section class="page-section" id="catalog">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nos Vedettes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="card_catalog"> 
                 <?php showsProduct($products) ?>
                 
                </div>
            </div>
        </section>




