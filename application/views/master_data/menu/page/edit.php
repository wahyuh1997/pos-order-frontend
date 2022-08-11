<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<!-- panel search -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"></h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <form id="regCrudForm" data-redurl="<?= base_url('master-data/menu'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel-body">
      <div class="mb-3 row">
        <label for="nama_menu" class="col-sm-2 col-form-label">Nama Makanan <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?= $data['nama_menu']; ?>" autocomplete="off" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-6">
          <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control" autocomplete="off"><?= $data['keterangan']; ?></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" value="<?= $data['harga']; ?>" required>
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis Makanan <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="jenis" name="jenis" required>
            <option selected value="">Select Option</option>
            <option value="makanan" <?= $data['jenis'] == 'makanan' ? 'selected' : null; ?>>Makanan</option>
            <option value="minuman" <?= $data['jenis'] == 'minuman' ? 'selected' : null; ?>>Minuman</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kategori_id" class="col-sm-2 col-form-label">Kategori <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="kategori_id" name="kategori_id" required>
            <option selected value="">Select Option</option>
            <?php foreach ($kategori as $kat) : ?>
              <option value=<?= $kat['id']; ?> <?= $data['kategori_id'] == $kat['id'] ? 'selected' : null; ?>><?= $kat['nama_kategori']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="status" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-8">

          <input type="hidden" id="status" name="status" value="<?= $data['status']; ?>">
          <input type="checkbox" id="switchery-default" <?= $data['status'] == 1 ? 'checked' : null; ?> />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" id="image" name="image" accept="image/*">
          <br>
          <img src="<?= base_url('assets/img/product/') . $data['image']; ?>" class="h-150px rounded">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="attributes" class="col-sm-2 col-form-label">Ukuran</label>
        <div class="col-sm-6">
          <button type="button" class="btn btn-sm btn-primary btn-add"><i class="fa fa-plus"></i> Tambah Ukuran</button>

          <?php if (count($data['atribute']) > 0) : ?>
            <?php foreach ($data['atribute'] as $key => $attr) : ?>

              <div class="row mt-1">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="">Jenis Ukuran</label>
                    <input type="text" class="form-control attributes" name="attribute[<?= $key; ?>][nama]" value="<?= $attr['nama']; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="col-lg-6 ps-0">
                  <div class="mb-3">
                    <label for="">Harga</label>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="input-group">
                          <span class="input-group-text">+ Rp.</span>
                          <input type="number" class="form-control" name="attribute[<?= $key; ?>][harga]" value="<?= $attr['harga']; ?>" min="0" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-times"></i> Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu'); ?>" class="btn btn-secondary">Back</a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>