<?php //dump($scheduleList);?>

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
                <a class="nav-link" href="<?= $router->generate('menu') ?>">Carte</a>
              </li>
            <li class="nav-item btn-outline-light">
                <a class="nav-link active " aria-current="page" href="<?= $router->generate('schedule') ?>">Horaires</a>
            </li>
          </ul>
        </div>

      </nav>


      <main>
          <div class="container">

            <h2 class="schedule__title">Opening hours | Places</h2>

            <table class="table table-sm table-dark schedule__table mb-5">
                <thead>
                  <tr>
                    <th scope="col"><i class="bi bi-calendar-check"></i> Day</th>
                    <th scope="col"><i class="bi bi-clock"></i> Opening hour </th>
                    <th scope="col">Closing hour <i class="bi bi-clock-fill"></i></th>
                    <th scope="col"><i class="bi bi-geo-alt"></i> Place</th>
                  </tr>
                </thead>
                <tbody>
                  <!--Dynamisation de l'affichage des horaires 
                  On boucle sur scheduleList, qui contient une liste (un array) d'objet pour chaque ligne de notre table. Comme il s'agit à chaque fois d'instance de notre classe Schedule, on à accès à ses getters-->
                  <?php foreach ($scheduleList as $schedule) : ?>
                  <tr>
                    <th scope="row"><?= $schedule->getDay()?></th>
                    <td><?= $schedule->getOpenningHour()?> am</td>
                    <td><?= $schedule->getClosingHour()?> pm</td>
                    <td><?= $schedule->getPlace()?></td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>


        <div class="card schedule__map bg-dark text-white mb-5" >
            <div class="card-body">
              <h5 class="card-title text-center"><i class="bi bi-geo-alt"></i> Localization of our places</h5>
            </div>
            <img src="../public/assets/images/map.jpg" class="card-img-top" alt="...">
          </div>

        </div>

      </main>