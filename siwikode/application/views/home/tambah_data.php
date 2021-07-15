<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kuliner
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('Home/tambah_data'); ?>" method="post">

                        <div class="form-group">
                            <label for="nama">Nama Kuliner</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>