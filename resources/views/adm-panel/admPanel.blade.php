<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
    
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="{{ url('./css/dataTables.bootstrap5.min.css') }}" />
        <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>
        <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Admin Dashboard</title>
</head>
<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="/"
          >DIAZ CONSTRUCTIONS</a
        >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="topNavBar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">LogOut</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row jumbotron">
          <div class="bg-light p-5 rounded-lg m-3">
              <a class="jumbotron"href="/admDashBoard"><h1 class="display-4 text-center">Administration Dashboard</h1></a>
              <p class="lead text-center">Here you can manage the content of the web site</p>
              <hr class="my-4">
              <div class="row d-flex justify-content-center">
                  <div class="col-md-3 mb-3">
                      <div class="card bg-primary text-white h-100">
                          <div class="card-body py-5 text-center"><h3>Images Administration</h3></div>
                          <div class="card-footer d-flex">
                              <a class="btn btn-light"  data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                      View Options
                              </a>
                              <div class="row">
                                  <div class="col">
                                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                                          <a href="/admDashBoard/imagesView/create" class="btn btn-success mx-2 mb-1">Upload Image</a>
                                          <a href="/admDashBoard/imagesView" class="btn btn-success mx-2">Uploaded Images</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card bg-primary text-white h-100">
                    <div class="card-body py-5 text-center"><h4>Web Content Administration</h4></div>
                      <div class="card-footer d-flex">
                          <a class="btn btn-light"  data-bs-toggle="collapse" href="#webContentOptions" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                              View Options
                          </a>
                          <div class="row">
                              <div class="col">
                                  <div class="collapse multi-collapse" id="webContentOptions">
                                      <a href="/admDashBoard/updateWebContent/1" class="btn btn-success mx-2 mb-1">Edit Web Content</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card bg-primary text-white h-100">
                    <div class="card-body py-5 text-center"><h4>Reviews Administration</h4></div>
                    <div class="card-footer d-flex">
                      <a class="btn btn-light"  data-bs-toggle="collapse" href="#reviewsCheckOptions" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                          View Options
                      </a>
                      <div class="row">
                          <div class="col">
                              <div class="collapse multi-collapse" id="reviewsCheckOptions">
                                  <a href="/admDashBoard/reviewsCheck" class="btn btn-success mx-2 mb-1">Manage Reviews</a>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      
      <div class="row">
        <div class="col-md-6 mb-3 w-100">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Edit Section
            </div>
            <div class="card-body">
                <div class="container-fluid">
                @yield('createImages')
                @yield('updateWebC')
                </div>

              {{-- <canvas class="chart" width="400" height="200"></canvas> --}}
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Area Chart Example
            </div>
            <div class="card-body">
              <canvas class="chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Tables
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="example"
                  class="table table-striped data-table"
                  style="width: 100%"
                >
                
                @yield('viewImages')
                @yield('updateImages')
                @yield('createWebC')
                @yield('reviewStatusCheck')
                @yield('reviewStatusEdit')
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <script src="./js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    {{-- <script src="./js/jquery-3.5.1.js"></script> --}}
    <script src="{{ url('./js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('./js/dataTables.bootstrap5.min.js') }}"></script>
    {{-- <script src="{{ url('./js/script.js') }}"></script> --}}
  </body>
</html>


</body>
</html>