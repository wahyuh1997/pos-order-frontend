<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Color Admin | POS - Table Booking</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <!-- ================== BEGIN core-css ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/vendor.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/default/app.min.css" rel="stylesheet" />
  <!-- ================== END core-css ================== -->

  <!-- ================== BEGIN page-css ================== -->
  <link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" />
  <!-- ================== END page-css ================== -->
</head>

<body class='pace-top'>
  <!-- BEGIN #loader -->
  <div id="loader" class="app-loader">
    <span class="spinner"></span>
  </div>
  <!-- END #loader -->

  <!-- BEGIN #app -->
  <div id="app" class="app app-content-full-height app-without-sidebar app-without-header bg-white">
    <!-- BEGIN #content -->
    <div id="content" class="app-content p-0">
      <!-- BEGIN pos-booking -->
      <div class="pos pos-booking" id="pos-booking">
        <!-- BEGIN pos-booking-header -->
        <div class="pos-booking-header">
          <div class="logo">
            <a href="#">
              <div class="logo-img"><img src="<?= base_url(); ?>assets/img/pos/logo.svg" /></div>
              <div class="logo-text">Pine & Dine</div>
            </a>
          </div>
          <div class="time" id="time">00:00</div>
          <div class="nav">
            <div class="nav-item">
              <a href="pos_kitchen_order.html" class="nav-link">
                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8zm5.48-.079V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6zm0 3.75V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141z" />
                </svg>
              </a>
            </div>
            <div class="nav-item">
              <a href="pos_table_booking.html" class="nav-link">
                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                  <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                </svg>
              </a>
            </div>
            <div class="nav-item">
              <a href="pos_menu_stock.html" class="nav-link">
                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M7.5 7.793V1h1v6.5H15v1H8.207l-4.853 4.854-.708-.708L7.5 7.793z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- END pos-booking-header -->

        <!-- BEGIN pos-booking-body -->
        <div class="pos-booking-body">
          <!-- BEGIN pos-booking-content -->
          <div class="pos-booking-content">
            <div class="pos-booking-content-container">
              <div class="d-md-flex align-items-center mb-4">
                <div class="pos-booking-title flex-1">
                  <div class="fs-24px mb-1">Available Table (8/20)</div>
                  <div class="mb-2 mb-md-0 d-flex">
                    <div class="d-flex align-items-center me-3">
                      <i class="fa fa-circle fa-fw text-gray-700 fs-9px me-1"></i> Completed
                    </div>
                    <div class="d-flex align-items-center me-3">
                      <i class="fa fa-circle fa-fw text-warning fs-9px me-1"></i> Upcoming
                    </div>
                    <div class="d-flex align-items-center me-3">
                      <i class="fa fa-circle fa-fw text-success fs-9px me-1"></i> In-progress
                    </div>
                  </div>
                </div>
                <div>
                  <div class="input-group date mb-0" data-render="datepicker" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                    <input type="text" class="form-control" placeholder="Today's" />
                    <span class="input-group-text input-group-addon border-0">
                      <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-calendar-date-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm.066-2.544c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2zm-2.957-2.89v5.332H5.77v-4.61h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">01</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="pe-1 text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Reserved by Sean</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info">Reserved by Irene Wong (4pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">Reserved by Irene Wong (4pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">02</div>
                            <div class="desc">max 8 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Reserved by John (8pax)</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">Reserved by Terry (6pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">03</div>
                            <div class="desc">max 8 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">Reserved by Lisa (8pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">Reserved by Lisa (8pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">Reserved by Terry</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">04</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">Reserved by Richard (4pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">Reserved by Richard (4pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">Reserved by Paul (3pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">Reserved by Paul (3pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">Reserved by Paul (3pax)</div>
                          <div class="status upcoming"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">05</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">06</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">07</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">08</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">09</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">10</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">11</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">12</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">13</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">14</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">15</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">16</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">17</div>
                            <div class="desc">max 4 pax</div>
                          </div>
                          <div class="text-success">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                              <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">18</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">19</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" class="table-booking">
                    <div class="table-booking-container">
                      <div class="table-booking-header">
                        <div class="d-flex align-items-center">
                          <div class="flex-1">
                            <div class="title">TABLE</div>
                            <div class="no">20</div>
                            <div class="desc">max 6 pax</div>
                          </div>
                          <div class="text-gray-800">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-booking-body">
                        <div class="booking">
                          <div class="time">08:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00am</div>
                          <div class="info">Walk in breakfast</div>
                          <div class="status completed"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">11:00am</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking highlight">
                          <div class="time">12:00pm</div>
                          <div class="info">Walk in lunch</div>
                          <div class="status in-progress"><i class="fa fa-circle"></i></div>
                        </div>
                        <div class="booking">
                          <div class="time">01:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">02:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">03:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">04:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">05:00pm</div>
                          <div class="info-title">-</div>
                          <div class="info-desc"></div>
                        </div>
                        <div class="booking">
                          <div class="time">06:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">07:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">08:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">09:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                        <div class="booking">
                          <div class="time">10:00pm</div>
                          <div class="info">-</div>
                          <div class="status"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END pos-counter-content -->
        </div>
        <!-- END pos-booking-body -->
      </div>
      <!-- END pos-booking -->
    </div>
    <!-- END #content -->

    <!-- BEGIN theme-panel -->
    <div class="theme-panel">
      <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
      <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
        <h5>App Settings</h5>

        <!-- BEGIN theme-list -->
        <div class="theme-list">
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
          <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
        </div>
        <!-- END theme-list -->

        <div class="theme-panel-divider"></div>

        <div class="row mt-10px">
          <div class="col-8 control-label text-dark fw-bold">
            <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span>
            </div>
            <div class="lh-14">
              <small class="text-dark opacity-50">
                Adjust the appearance to reduce glare and give your eyes a break.
              </small>
            </div>
          </div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
              <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
            </div>
          </div>
        </div>

        <div class="theme-panel-divider"></div>

        <!-- BEGIN theme-switch -->
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
              <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
              <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
              <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
              <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
          <div class="col-md-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
              <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
            </div>
          </div>
        </div>
        <!-- END theme-switch -->

        <div class="theme-panel-divider"></div>

        <h5>Admin Design (5)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_html/index_v2.html" class="theme-version-link active">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/default.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_transparent/index_v2.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/transparent.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_apple/index_v2.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/apple.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_material/index_v2.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/material.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_facebook/index_v2.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/facebook.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_google/index_v2.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/google.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->

        <div class="theme-panel-divider"></div>

        <h5>Language Version (7)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_html/index.html" class="theme-version-link active">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/html.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_ajax/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/ajax.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_angularjs/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/angular1x.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_angularjs13/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/angular10x.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/laravel.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_vuejs/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/vuejs.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?>template_reactjs/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/reactjs.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/version/dotnet.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->

        <div class="theme-panel-divider"></div>

        <h5>Frontend Design (5)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="<?= base_url(); ?><?= base_url(); ?><?= base_url(); ?>frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?><?= base_url(); ?><?= base_url(); ?>frontend/template/template_e_commerce/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?><?= base_url(); ?><?= base_url(); ?>frontend/template/template_blog/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/blog.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?><?= base_url(); ?><?= base_url(); ?>frontend/template/template_forum/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/forum.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="<?= base_url(); ?><?= base_url(); ?><?= base_url(); ?>frontend/template/template_corporate/index.html" class="theme-version-link">
              <span style="background-image: url(<?= base_url(); ?>assets/img/theme/corporate.jpg);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->

        <div class="theme-panel-divider"></div>

        <a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
        <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
      </div>
    </div>
    <!-- END theme-panel -->
    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
  </div>
  <!-- END #app -->

  <!-- BEGIN #modalPosBooking -->
  <div class="modal modal-pos-booking fade" id="modalPosBooking">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-body">
          <div class="d-flex align-items-center mb-3">
            <h4 class="modal-title d-flex align-items-center"><img src="<?= base_url(); ?>assets/img/pos/icon-table-black.svg" height="30" class="me-2" /> Table 01 <small class="fs-13px fw-bold ms-2">max 4 pax</small></h4>
            <a href="#" data-bs-dismiss="modal" class="ms-auto btn-close"></a>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">08:00am</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">09:00am</div>
                  <input type="text" class="form-control" placeholder="" value="Reserved by Sean" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">10:00am</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">11:00am</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">12:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">01:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">02:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">03:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">04:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">05:00pm</div>
                  <input type="text" class="form-control" placeholder="" value="Reserved by Irene Wong (4pax)" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">06:00pm</div>
                  <input type="text" class="form-control" placeholder="" value="Reserved by Irene Wong (4pax)" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">07:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">08:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">09:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="form-group mb-2">
                <div class="input-group">
                  <div class="input-group-text fw-bold">10:00pm</div>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-default w-100px" data-bs-dismiss="modal">Cancel</a>
          <button type="submit" class="btn btn-success w-100px">Book</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END #modalPosBooking -->

  <!-- ================== BEGIN core-js ================== -->
  <script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/app.min.js"></script>
  <!-- ================== END core-js ================== -->

  <!-- ================== BEGIN page-js ================== -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url(); ?>assets/js/demo/pos-table-booking.demo.js"></script>
  <!-- ================== END page-js ================== -->
</body>

</html>