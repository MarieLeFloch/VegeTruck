<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="./index.html"><i class="bi bi-flower3"></i> Vege'Truck</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav px-1 text-white">
            <li class="nav-item btn-outline-light">
                <a class="nav-link" href="./index.html">Accueil</a>
              </li>
              <li class="nav-item btn-outline-light">
                <a class="nav-link" href="./menu.html">Carte</a>
              </li>
            <li class="nav-item btn-outline-light">
                <a class="nav-link active " aria-current="page" href="./schedule.html">Horaires</a>
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
                    <th scope="col"><i class="bi bi-clock"></i> Opening hours </th>
                    <th scope="col">Closing hours <i class="bi bi-clock-fill"></i></th>
                    <th scope="col"><i class="bi bi-geo-alt"></i> Place</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Monday</th>
                    <td>12 am</td>
                    <td>16 pm</td>
                    <td>Scaly Place</td>
                  </tr>
                  <tr>
                    <th scope="row">Wednesday</th>
                    <td>10 am</td>
                    <td>17 pm</td>
                    <td>Bolivar Park</td>
                  </tr>
                  <tr>
                    <th scope="row">Friday</th>
                    <td>11 am</td>
                    <td>22 pm</td>
                    <td>Daily Main street</td>
                  </tr>
                  <tr>
                    <th scope="row">Saturday</th>
                    <td>10 am</td>
                    <td>23 pm</td>
                    <td>Royal Place</td>
                  </tr>
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