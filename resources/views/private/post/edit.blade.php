<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/index">Perpustakaan Digital</a>
                    </div>
                    <div class="sb-sidenav-footer">
                      
                    </div>
                </nav>
            </div>
         <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 pb">Edit Buku | {{ $book->Judul }}</h1>  
                        <hr>                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Masukan Kembali Data Yang Ingin Dirubah
                            </div>
                            <div class="card-body">
                              <form method="POST" action="/buku/edit/" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Judul</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="Judul" value="{{ $book->Judul }}" required>
                                  <input type="hidden" class="form-control" id="exampleInputEmail1" name="id" value="{{ $book->BukuID }}" required>
                                </div>
                                <div class="mb-3">
                                  <label for="2" class="form-label">Penulis</label>
                                  <input type="text" class="form-control" id="2" name="Penulis" value="{{ $book->Penulis }}" required>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->Penerbit }}" name="Penerbit" required>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->TahunTerbit }}" name="TahunTerbit" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                <button type="reset" class="btn btn-outline-danger">Reset</button>

                              </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
    
