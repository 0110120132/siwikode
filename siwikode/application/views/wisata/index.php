<?php $this -> load -> view ('templates/header') ?>
    <body class="sb-nav-fixed">
        <?php $this -> load -> view('templates/navbar')?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="<?= base_url('home/index')?>">
                                <div class="sb-nav-link-icon"><i class="-alt"></i></div>
                                Data kuliner
                            </a><a class="nav-link" href="<?= base_url('wisata/index')?>">
                                <div class="sb-nav-link-icon"><i class="-alt"></i></div>
                                Data wisata
                            </a>
                            <a class="nav-link" href="<?= base_url('profesi/index')?>">
                                <div class="sb-nav-link-icon"><i class="-alt"></i></div>
                                Data profesi
                            </a>
                            
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <?php if($this->session->flashdata('flash') ): ?>
                        <div class="row mt-3">
                            <div class="col md-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">Data wisata
                                    <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Jenis Wisata
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama wisata</th>
                                            <!--
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <!--
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            -->
                                        </tr>
                                    </tfoot>

                                    <?php 
                                    
                                    $no= 1;
                                    foreach ($jenis_kuliner as $j_k): ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                 <?php echo $j_k['nama'];?>
                                                 <a href="<?= base_url(); ?>home/hapus/<?= $j_k['id']; ?>" class="btn btn-danger float-right" onclick="return confirm('Anda yakin ingin menghapusnya');">hapus</a> 
                                                 <a href="<?= base_url(); ?>home/ubah/<?= $j_k['id']; ?>" class="btn btn-warning float-right mr-3" onclick="return confirm('Anda yakin ingin mengubahnya');">ubah</a> 
                                            </td>
                                        </tr>
                                    
                                    <?php endforeach;?>
                                    
                                </table>
                                <a href="<?php echo base_url('Home/tambah_data') ?> " class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </main>
            <?php $this -> load -> view('templates/footer')?>
    </body>
</html>
