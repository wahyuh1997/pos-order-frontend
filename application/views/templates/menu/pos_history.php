<?php if (count($data_all_order['data']) == 0) : ?>
  <div>
    <div class="mb-3 mt-n5">
      <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
        <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
      </svg>
    </div>
    <h4>{{No order history found}}</h4>
  </div>
<?php else : ?>
  <?php foreach ($data_all_order['data'] as $history) : ?>
    <?php if (date('Y-m-d', strtotime($history['createdAt'])) == date('Y-m-d')) : ?>
      <div class="row border-bottom py-2">
        <div class="col-12 d-flex justify-content-between">
          <h6>{{Table}} <?= $history['orderType']; ?> </h6>
          <div class="h5">{{Order}} : <b>#<?= $history['orderNumber']; ?></b></div>
        </div>
        <h6>{{Table}} <?= $history['tableName']; ?> </h6>
        <div class="col-12 d-flex justify-content-between">
          <div class="row">
            <div class="col-12 mb-2">
              <button type="button" class="btn btn-sm btn-primary load-order-history" data-orderid="<?= $history['orderId']; ?>">{{Load}}</button>
              <a href="<?= base_url('order/') . 'delete?orderId=' . $history['orderId']; ?>" class="btn btn-danger btn-sm btn-del">{{Delete}}</a>
            </div>
            <div class="col-12">
              <a href="<?= base_url('pos/bill/' . $history['orderId']); ?>" class="btn btn-sm btn-primary ms-auto btn-print"><i class="fa fa-file-invoice-dollar"></i> {{Receipt}}</a>
              <a href="<?= base_url('pos/bill_qty/' . $history['orderId']); ?>" class="btn btn-sm btn-primary ms-auto btn-print"><i class="fa fa-file-invoice-dollar"></i> {{Kitchen}}</a>
              <?php if ($history['isCheckout'] == 0) : ?>
                <a href="#modal-dialog" class="btn btn-info btn-sm checkout" data-bs-toggle="modal" data-orderid="<?= $history['orderId']; ?>">{{Checkout}}</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>