<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kuliner
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $kuliner['id']; ?>">

                        <div class="form-group">
                            <label for="nama">Nama Kuliner</label>
                            <input type="text" name="nama" class="form-control" value="<?= $kuliner['nama']; ?>">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>