<?php //dump($menuList);?>

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
                <a class="nav-link" href="<?= $router->generate('main-home')?>">Home</a>
              </li>
            <li class="nav-item btn-outline-light">
                <a class="nav-link active " aria-current="page" href="<?= $router->generate('menu') ?>">Menu</a>
              </li>
            <li class="nav-item btn-outline-light">
              <a class="nav-link" href="<?= $router->generate('schedule') ?>">Schedule</a>
            </li>
          </ul>
        </div>

      </nav>

      <main>
        <div class="container">

            <h2 class="menu__title">Main courses</h2>

              <div class="row row-cols-1 row-cols-md-2 g-4 m-2">
                <!-- Dynamisation des cartes Plats principaux 
                  On boucle sur scheduleList, qui contient une liste (un array) d'objet pour chaque ligne de notre table. Comme il s'agit à chaque fois d'instance de notre classe Schedule, on à accès à ses getters-->
                  <?php foreach ($menuList as $menu) : 
                  // Dans les cas où il s'agit d'un plat principal, soit type = 1
                     if (($menu->getType()) == 1) :?>
                  <div class="col">
                    <div class="card">
                      <img src="assets/images/<?= $menu->getPicture()?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $menu->getName()?></h5>
                        <p class="card-text"><?= $menu->getDescription()?></p>
                        <a type="button" class="btn btn-dark btn-outline-light" href="<?= $router->generate('menu-details', ['id' => $menu->getId()]) ?>">See more</a>
                      </div>
                      <div class="card-footer text-center">
                          <small class="text-muted "><?= $menu->getPrice()?>€</small>
                      </div>
                    </div>
                  </div>
                  <?php endif; endforeach; ?>
              </div>

          <h2 class="menu__title">Desserts</h2>

            <!-- Dynamisation des cartes Desserts -->
            <div class="row row-cols-1 row-cols-md-2 g-4 m-2 mb-5">
            <?php foreach ($menuList as $menu) : 
                if ($menu->getType() == 2) :?>
              <div class="col">
                <div class="card">
                  <img src="assets/images/<?= $menu->getPicture()?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $menu->getName()?></h5>
                    <p class="card-text"><?= $menu->getDescription()?></p>
                  </div>
                  <div class="card-footer text-center">
                      <small class="text-muted "><?= $menu->getPrice()?>€</small>
                  </div>
                </div>
              </div>
              <?php endif; endforeach; ?>
            </div>


        </div>
      </main>