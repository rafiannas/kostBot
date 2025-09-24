<div class="body-wrapper">
        <div class="container-fluid">
          <button type="submit" class="btn btn-primary hstack gap-6 mb-4"><i class="ti ti-plus fs-4"></i>Create Book</button>

          <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h4 class="card-title mb-0">Booking Transaction</h4>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive mb-4 border rounded-1">

                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Booking ID</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Type</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Check In</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Check Out</h6>
                      </th>
                       <th>
                        <h6 class="fs-4 fw-semibold mb-0">Guest</h6>
                      </th>
                       <th>
                        <h6 class="fs-4 fw-semibold mb-0">Total Price</h6>
                      </th>
                       <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($booking as $bk): ?>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0"><?= $bk->bookId ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4"><?= $bk->customerName ?></p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                         <p class="mb-0 fw-normal fs-4"><?= $bk->roomType ?></p>
                        </div>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0"><?= $bk->checkIn ?></h6>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0"><?= $bk->checkOut ?></h6>
                      </td>
                       <td>
                        <h6 class="fs-4 fw-semibold mb-0"><?= $bk->guest ?></h6>
                      </td>
                       <td>
                        <h6 class="fs-4 fw-semibold mb-0">$ <?= $bk->totalPrice ?>.00</h6>
                      </td>
                       <td>
                        <?php if ($bk->status == 'Cancel'): ?>
                        <span class="badge bg-danger-subtle text-danger"><?= $bk->status ?></span>
                        <?php elseif ($bk->status == 'Check In'): ?>
                        <span class="badge bg-primary-subtle text-primary"><?= $bk->status ?></span>
                        <?php elseif ($bk->status == 'Check Out'): ?>
                        <span class="badge bg-success-subtle text-success"><?= $bk->status ?></span>
                        <?php elseif ($bk->status == 'Payment'): ?>
                        <span class="badge bg-info-subtle text-info"><?= $bk->status ?></span>
                        <?php elseif ($bk->status == 'Booked'): ?>
                        <span class="badge bg-warning-subtle text-warning"><?= $bk->status ?></span>
                         <?php endif; ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>