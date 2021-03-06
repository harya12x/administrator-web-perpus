    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-regular fa-file"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Web</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Perpustakaan
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fa-solid fa-box-archive"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin Controller</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master</h6>
                        <a class="collapse-item" href="<?= base_url('user/anggota'); ?>">Input anggota</a>
                        <a class="collapse-item" href="<?= base_url('user/penerbit'); ?>">Input penerbit</a>
                        <a class="collapse-item" href="<?= base_url('user/pengarang'); ?>">Input pengarang</a>
                        <a class="collapse-item" href="<?= base_url('user/jenis_buku'); ?>">Input jenis buku</a>
                        <a class="collapse-item" href="<?= base_url('user/data_peminjaman'); ?>">Input peminjam</a>
                    </div>
            </li>





            <!-- Heading -->
            <div class="sidebar-heading">
                Data Buku
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/databuku') ?>">

                    <span>Data Buku</span></a>
            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Data
                                </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Kode buku</td>
                                            <td>Judul buku</td>
                                            <td>Kode jenis buku</td>
                                            <td>Kode penerbit</td>
                                            <td>Kode pengarang</td>
                                            <td>Stok</td>
                                            <td>Setting</td>
                                        </tr>
                                        <?php foreach ($buku as $book) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $book['kd_buku']; ?></td>
                                            <td><?= $book['judul']; ?></td>
                                            <td><?= $book['kd_jenis_buku']; ?></td>
                                            <td><?= $book['kd_penerbit']; ?></td>
                                            <td><?= $book['kd_pengarang']; ?></td>
                                            <td><?= $book['stok']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>user/edit_data_buku/<?= $book['kd_buku']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url() ?>user/hapus_data_buku/<?= $book['kd_buku']; ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                        </thead>


                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- /.container-fluid -->
                            </div>
                        </div>
                    </div>

                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PT Digiwork Web 2022</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->


            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?= form_open_multipart('user/proses_tambah_data'); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Kode Buku</label>
                                <input type="number" name="kd_buku" class=" form-control"></input>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class=" form-control" required=""></input>
                                    <div class="form-group">
                                        <label>Kode Jenis Buku</label>
                                        <select name="kd_jenis_buku" class="form-control">
                                            <?php foreach ($data_jenisbuku as $j) : ?>
                                                <option value="<?= $j->kd_jenis_buku ?>"><?= $j->kd_jenis_buku ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Penerbit</label>
                                        <select name="kd_penerbit" class="form-control">
                                            <?php foreach ($data_penerbit as $pnrbt) : ?>
                                                <option value="<?= $pnrbt->kd_penerbit ?>"><?= $pnrbt->kd_penerbit ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Pengarang</label>
                                        <select name="kd_pengarang" class="form-control">
                                            <?php foreach ($data_pengarang as $pngrg) : ?>
                                                <option value="<?= $pngrg->kd_pengarang ?>"><?= $pngrg->kd_pengarang ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="number" name="stok" class=" form-control" required=""></input>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>