<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href=""
/>

<!-- Core Css -->
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

  <title>Project laravel-websockets</title>
  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-table/dist/bootstrap-table.min.css') }}">
</head>

<body>  
    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4 mt-4">
          <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                  <div class="col-9">
                      <h4 class="fw-semibold mb-8">laravel-websockets</h4>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item" aria-current="page">websockets</li>
                          </ol>
                      </nav>
                  </div>
                  <div class="col-3">
                      <div class="text-center mb-n5">
                          <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </header>
      <!--  Header End -->
      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Events</h4>
                  <hr>
                  <form>
                  <div class="row">
                      <div class="col-6">
                          <div class="form-group mb-4">
                              <label class="mr-sm-2" for="">App</label>
                              <select class="form-select mr-sm-2" id="">
                                  <option selected>Pilih...</option>
                                  <option value="1">DriveMOde</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-6">
                      <label class="mr-sm-2" for="">Port</label>
                        <div class="form-group">
                            <input type="number" class="form-control" value="6001">
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive rounded-2">
                        <table class="table border text-nowrap customize-table mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                        Type
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                        Socket
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                        Details
                                        </h6>
                                    </th>
                                    <th>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                        Time
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h6 class="fw-semibold mb-1">
                                                    0   
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge bg-primary-subtle text-primary rounded-3 fw-semibold fs-2">6001</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">
                                            4300 Users
                                        </p>
                                    </td>
                                    <td>
                                    <p class="mb-0 fw-normal">
                                           12:12:12 12:12:12
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.horizontal.init.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tables/bootstrap-table.init.js') }}"></script>
</body>

</html>