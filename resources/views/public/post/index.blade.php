<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/index">Perpustakaan Digital</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
           @include('layouts.navbar')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">                            
                            <a class="nav-link pt-3" href="/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            @include('layouts.menu')
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                    </div>
                    <div class="sb-sidenav-footer">
                      
                    </div>
                </nav>
            </div>
         <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Perpustakaan Digital</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>  
                        

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Buku
                            </div>

                            @foreach ($data_buku as $data )
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id Buku</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tahun Terbit</th>
                                        <th colspan="4" scope="col" class="center">Menu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="justify-content-centre" scope="row">{{ $data->BukuID }}</th>
                                        <td>{{ $data->Judul  }}</td>
                                        <td>{{ $data->Penulis }}</td>
                                        <td>{{ $data->Penerbit }}</td>
                                        <td>{{ $data->TahunTerbit }}</td>
                                        <td>
                                            
                                            <button class="btn btn-success">Edit</button>

                                            {{-- <form action="{{ route('delete/buku', BukuID) }}" method="post">
                                                @csrf
                                                @method('DELETE') --}}
                                                    <button class="btn btn-danger ml-5">Hapus</button>
                                            {{-- </form> --}}

                                            <a href="{{ url('/ulasan') }}" rel="noopener noreferrer">
                                                <button class="btn btn-warning ml-5">Ulas</button>
                                            </a>
                                            <a href="{{ url('/peminjaman') }}"  rel="noopener noreferrer">
                                                <button class="btn btn-dark ml-5">Pinjam</button>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                    </tbody>
                                </table>
                            </div>
                            @endforeach                           
                            
                        
                            
                        </div>
                    </div>
                </main>
                @include('layouts.footer')
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
