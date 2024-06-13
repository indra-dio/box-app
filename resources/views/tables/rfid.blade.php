<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BOX App</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Dropdown -->
  <link rel="stylesheet" href="../../assets/vendor/select2/dist/css/select2.min.css">
  <!-- Sweet Alerts -->
  <link rel="stylesheet" href="../../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../css/argon.css?v=1.2.1" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Default </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Master Data</span>
              </a>
              <div class="collapse show" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item active">
                    <a href="{{ url('tables/rfid') }}" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> T </span> -->
                      <span class="sidenav-normal"> Tag RFID </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/sortable.html" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> S </span> -->
                      <span class="sidenav-normal"> BOX </span>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="../../pages/tables/datatables.html" class="nav-link">
                      <span class="sidenav-mini-icon"> D </span>
                      <span class="sidenav-normal"> Datatables </span>
                    </a>
                  </li> -->
                </ul>
              </div>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Session::get('user_name') }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span></button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">TAG RFID</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tag RFID</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{ url('rfid/add') }}" class="btn btn-neutral">ADD</a>
              <a href="#" class="btn btn-neutral" data-toggle="modal" data-target="#importRfidModal">IMPORT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <!-- <div class="card-header">
              <h3 class="mb-0">Datatable</h3>
              <p class="text-sm mb-0">
                This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
              </p>
            </div> -->
              <!-- Button trigger modal -->
            <div class="table-responsive py-4">
              <table class="table table-flush" id="rfid-table">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Tag RFID</th>
                    <th>Box Id</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Tag RFID</th>
                    <th>Box Id</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <!-- <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                </tbody> -->
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Argon Scripts -->

  <!-- Modal -->
  <div class="modal fade" id="addRfidModal" tabindex="-1" role="dialog" aria-labelledby="addRfidModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addRfidModalLabel">Add RFID</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form id="addRfidForm">
                      @csrf
                      <div class="form-group">
                          <label for="tag">Tag</label>
                          <input type="text" class="form-control" id="tag" name="tag" required>
                      </div>
                      <div class="form-group">
                          <label class="form-control-label" for="box">Box Type</label>
                          <select class="form-control" id="box" name="box" data-toggle="select" data-live-search="false" required>
                            <!-- <option value="" selected disabled>Select Box</option> -->
                            <!-- Data akan dimuat menggunakan AJAX -->
                        </select>
                      </div>
                      <button type="button" class="btn btn-primary" onclick="addRFID()" >Save</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="deleteRfidModal" tabindex="-1" role="dialog" aria-labelledby="deleteRfidModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteRfidModalLabel">Delete RFID</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form id="deleteRfidForm">
                      @csrf
                      <div class="form-group">
                          <label for="tag">Tag</label>
                          <input type="text" class="form-control" id="tag_delete" name="tag_delete" readonly>
                      </div>
                      <button type="button" class="btn btn-danger" onclick="deleteRFID()" >Delete</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="importRfidModal" tabindex="-1" role="dialog" aria-labelledby="importRfidModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="importRfidModalLabel">Import RFID</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('rfid.import-data-rfid') }}" method="POST" enctype="multipart/form-data" id="importRfidForm">
                      @csrf
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="importRfid" id="importRfid" lang="en">
                          <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Import</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <!-- Core -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script> -->
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="../../assets/vendor/select2/dist/js/select2.min.js"></script>
  <script src="../../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.2.1"></script>

  <script>
    $(document).ready(function() {
        $('#rfid-table').DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": "{{ route('rfid.get-data-rfid') }}",
            "columns": [
                { "data": "id" },
                { "data": "tag_rfid" },
                { "data": "box_id" },
                { "data": "tag_status" },
                { "data": "action" },
                // Tambahkan kolom lain sesuai kebutuhan
            ]
        });

        $('#addRfidModal').on('show.bs.modal', function () {
          loadBox();
          // Load locations when modal is shown
        });

        $('#addRfidModal').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            // $('#box').selectpicker('refresh');
        });

        // $('#updateRfidModal').on('show.bs.modal', function () {
        //   // Load locations when modal is shown
        //   var button = $(event.relatedTarget) // Button that triggered the modal
        //   var tag = button.data('tag') 
        //   var modal = $(this)
        //   modal.find('.modal-body input[name="tag_update"]').val(tag);
        //   // loadBox();
        // });

        // $('#updateRfidModal').on('hidden.bs.modal', function () {
        //     $(this).find('form').trigger('reset');
        //     // $('#box').selectpicker('refresh');
        // });

        $('#deleteRfidModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var tag = button.data('tag') 
            var modal = $(this)
            modal.find('.modal-body input[name="tag_delete"]').val(tag);
        });
    
        // Load locations for the dropdown
        function loadBox() {
            $.ajax({
                url: '{{ route("box.get-data-box") }}',
                method: 'GET',
                success: function(data) {
                    var boxDropdown = $('#box');
                    boxDropdown.empty();
                    boxDropdown.append('<option value="" selected disabled>Select Type Box</option>');

                    data.forEach(function(box, index) {

                      Object.keys(box).forEach(function(key) {
                        boxDropdown.append('<option value="'+box[key].id+'">'+box[key].type_box+' ('+box[key].id+')</option>');
                      });

                  });
                },
                error: function() {
                    alert('Cannot load data box!.');
                }
            });
        };

      });

      function addRFID() {
          var tag = document.getElementById("tag").value;
          var box_id = document.getElementById("box").value;

          fetch('/rfid/add-data-rfid', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
              },
              body: JSON.stringify({ tag:tag, box_id:box_id })
          })
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }
              return response.json();
          })
          .then(data => {
            console.log(data);
            if (data.message==="success") {
              swal("Good job!", "Data inserted successfully", "success");
            }else if (data.message==="failed-tag") {
              swal("Failed!", "Please insert Tag", "warning");
            }else if (data.message==="failed-box") {
              swal("Failed!", "Please select type box", "warning");
            }else{
              swal("Failed!", "Please try again", "warning");
            }
              // alert(data.message); // Tampilkan pesan sukses
              // Lakukan tindakan lain seperti membersihkan input atau memperbarui tampilan

              $('#addRfidModal').modal('hide');
              $('#rfid-table').DataTable().ajax.reload();
          })
          .catch(error => {
              console.error('There was an error!', error);
              alert('There was an error!'); // Tampilkan pesan kesalahan
          });
      };

      function deleteRFID() {
          var tag = document.getElementById("tag_delete").value;

          fetch('/rfid/delete-data-rfid', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
              },
              body: JSON.stringify({ tag:tag })
          })
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }
              return response.json();
          })
          .then(data => {
            console.log(data);
            if (data.message==="success") {
              swal("Good job!", "Data deleted successfully", "success");
            }else{
              swal("Failed!", "Please try again", "warning");
            }
              // alert(data.message); // Tampilkan pesan sukses
              // Lakukan tindakan lain seperti membersihkan input atau memperbarui tampilan

              $('#deleteRfidModal').modal('hide');
              $('#rfid-table').DataTable().ajax.reload();
          })
          .catch(error => {
              console.error('There was an error!', error);
              alert('There was an error!'); // Tampilkan pesan kesalahan
          });
      };

</script>
</body>

</html>