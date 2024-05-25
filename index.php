<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <!-- header start  -->
    <?php 
    include("./includes/header.php") 
      ?>
      <!-- header end  -->
  </head>
  <body>
    <!-- nav bar start  -->
    <?php
  include("./includes/navbar.php") 
   ?>
   <!-- nav bar end  -->
    
   
    <!-- section 1 -->
    <div class="container section-1">
        <div class="row">
         
          <!-- hero section  -->
            <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
                <h1 class="section1-heading text-center text-white ">
                    Welcome to Usman's E-Commerece
                </h1>

               <a href="#products" class="btn btn-outline-success">Explore our products</a>
            </div>
            <div class="col-sm-12 col-md-6">
              
              <!-- lottie code -->
              <!-- mx auto is used to align animation -->
              <br>
    <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 400px; height: 200px;" loop autoplay></dotlottie-player>
            </div>
        </div>
    </div>
     <!-- section 1 end  -->
    <hr>
     
    <!-- section 2 -->
     <div class="container section-2">
        <div class="row">
            <h2 class="text-dark text-center">Categories</h2>
            <!-- category card 1 -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./assets/image/cosemtics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cosmetics</h5>
                      <p class="card-text"><ul>
                        <li>Glower</li>
                        <li>Lipstick</li>
                        <li>Blush</li>
                        <li>BB Cream</li>
                      </ul></p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div>
            <!-- category card 2 -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./assets/image/electronics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Electronics</h5>
                      <p class="card-text"><ul>
                        <li>Mobiles</li>
                        <li>Tab</li>
                        <li>Laptop</li>
                        <li>Desktop</li>
                      </ul></p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  <!-- category card 3 -->
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./assets/image/fashion-logo-design.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Fashion</h5>
                      <p class="card-text"><ul>
                        <li>Ethnic wear</li>
                        <li>Casual wear</li>
                        <li>Men's wear</li>
                        <li>Women's wear</li>
                      </ul></p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div>
        </div>
    </div>
    <!-- section 2 end  -->
    <hr>
     <!-- section 3 -->
     <div id="products" class="container">
        <div class="row">
          <!-- copied cards from section 2  -->
            <div class="col-sm-12 col-md-12">
              <div class="container section-2">
                <div class="row">
                    <h2 class="text-dark text-center">Products</h2>
                    <!-- products card 1 from bootstrap
                      
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- section 3 end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js  -->
    <script src="./assets/js/main.js"></script>
    <!-- custom js end  -->

  </body>
</html>