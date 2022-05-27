<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="<?= $router->generate('main-home')?>"><i class="bi bi-flower3"></i> Vege'Truck</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav px-1 text-white">
            <li class="nav-item btn-outline-light">
              <a class="nav-link active " aria-current="page" href="<?= $router->generate('main-home')?>">Home</a>
            </li>
            <li class="nav-item btn-outline-light">
              <a class="nav-link" href="<?= $router->generate('menu')?>">Menu</a>
            </li>
            <li class="nav-item btn-outline-light">
              <a class="nav-link" href="<?= $router->generate('schedule') ?>">Schedule</a>
            </li>
          </ul>
        </div>
      </nav>

      <main>
        <div class="card bg-dark text-white text-center font-weight-bold">
          <img src="../public/assets/images/foodtruck_desktop.jpg" class="card-img img__home img__desktop" alt="...">
          <img src="../public/assets/images/foodtruck_tablet.jpg" class="card-img img__home img__tablet" alt="...">
          <img src="../public/assets/images/foodtruck_mobile.jpg" class="card-img img__home img__mobile" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title home__title">Welcome to Vege'Truck</h5>
            <p class="card-text home__present">Throughout the whole year we offer a selection of seasonnal, local and vegetal products</p>
            <a type="button" class="btn btn-dark btn-outline-light " href="<?= $router->generate('menu')?>">See the menu</a>
          </div>
        </div>
      </main>