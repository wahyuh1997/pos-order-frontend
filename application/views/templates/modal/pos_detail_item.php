<div class="modal-body p-0">
  <a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
  <div class="pos-product">
    <div class="pos-product-img">
      <div class="img" style="background-image: url(<?= $this->image_server . $data['menuImage']; ?>)"></div>
    </div>
    <div class="pos-product-info">
      <div class="title"><?= $data['menuName']; ?></div>
      <div class="price">TWD<?= currency_format($data['menuPrice']); ?></div>
      <hr />
      <div class="option-row">
        <div class="qty">
          <div class="input-group">
            <a href="#" class="btn btn-default pos-product-minqty"><i class="fa fa-minus"></i></a>
            <input type="text" id="pos-product-qty" class="form-control border-0 text-center" name="" value="1" />
            <a href="#" class="btn btn-default pos-product-addqty"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>

      <?php foreach ($data['attributes'] as $key => $attr) : ?>
        <div class="option-row">
          <div class="option-title"><?= $attr['menuAttrName']; ?></div>
          <div class="option-list">

            <?php foreach ($attr['selections'] as $i => $selections) : ?>
              <div class="option">
                <input type="checkbox" name="addon[sos]" value="<?= $selections['menuAttrSelectId']; ?>" data-attrid="<?= $attr['menuAttrId']; ?>" class="option-input" id="addon-<?= $key ?>-<?= $i ?>" />
                <label class="option-label" for="addon-<?= $key ?>-<?= $i ?>">
                  <span class="option-text"><?= $selections['menuAttrSelectName']; ?></span>
                  <span class="option-price">+<?= currency_format($selections['menuAttrSelectPrice']); ?></span>
                </label>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      <?php endforeach; ?>
      <div class="btn-row" <?= count($data['attributes']) == 0 ? 'style="margin-top: 90px;"' : null; ?>>
        <a href="#" class="btn btn-default" data-bs-dismiss="modal">{{Cancel}}</a>
        <a href="#" id="add-to-cart" class="btn btn-success" data-id="<?= $data['menuId']; ?>" data-menuTypeId="<?= $data['menuTypeId']; ?>" data-title="<?= $data['menuName']; ?>">{{Add to cart}} <i class="fa fa-plus fa-fw ms-2"></i></a>
      </div>
    </div>
  </div>
</div>