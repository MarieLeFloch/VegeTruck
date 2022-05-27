<?php //dump($menu_details);?>

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

            <h2 class="menu__title"><?=$menu_details->getName();?></h2>

            <div class="card m-5 mb-5">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/images/<?=$menu_details->getPicture();?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title text-center">Ingredients</h5>
                    <ul class="card-text list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                      <li class="list-group-item">A fourth item</li>
                      <li class="list-group-item">And a fifth one</li>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="mb-5">
              <a type="button" class="btn btn-dark btn-outline-light menu__return" href="<?= $router->generate('menu')?>">Return</a>
            </div>

        </div>
      </main>