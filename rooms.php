<?php
include (".includes/header_user.php");
$title = "Dashboard";
?>

<!-- BG awal -->
<div class="position-fixed top-0 start-0 w-100 h-100">
    <img src="assets/img/kamar/bg.jpg" alt="" class="w-100 h-75 object-fit-cover">
</div>
<!-- /BG awal -->

<!-- judul di tengah BG-->
<h1 class="position-absolute top-50 start-50 translate-middle text-white z-3 fw-bold fs-1">ROOMS</h1>
<!-- /judul di tengah BG-->

<div class="card p-0 mb-6" style="margin-top: 380px;">
<ul class="list-group mb-4">
              <li class="list-group-item p-6">
                <div class="d-flex gap-4 flex-sm-row flex-column align-items-center">
                  <div class="flex-shrink-0 d-flex align-items-center">
                    <img src="assets/img/kamar/DELUXE.jpg" alt="deluxe room" class="w-100">
                  </div>
                  <div class="flex-grow-1">
                    <div class="row text-center text-sm-start">
                      <div class="col-md-8">
                        <p class="me-3 mb-2">
                          <span class="text-primary">SINGLE ROOMS</span></a>
                        </p>
                        <div class="text-body-secondary mb-2 d-flex flex-wrap justify-content-center justify-content-sm-start">
                          <span class="me-1">Sold by:</span>
                          <span class="badge bg-label-success">In Stock</span>
                        </div>
                        <div class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                          <div class="read-only-ratings raty mb-2" data-read-only="true" data-score="4" data-number="5" title="good" style="pointer-events: none;"><img alt="1" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E" title="good">&nbsp;<img alt="2" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E" title="good">&nbsp;<img alt="3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E" title="good">&nbsp;<img alt="4" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E" title="good">&nbsp;<img alt="5" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='rgb(228,230,232)' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E" title="good"><input name="score" type="hidden" value="4" readonly=""></div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="text-md-end">
                          <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                          <div class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                            <div class="my-2 mt-md-8 mb-md-4"><span class="text-primary">$299/</span><s class="text-body">$359</s></div>
                            <!-- <button type="button" class="btn btn-primary">BOOK NOW</button> -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#isidata">BOOK NOW</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <div class="modal fade" id="isidata" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-body float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-fullname">Full Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-company">Company</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-email">Email</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                          </div>
                          <div class="form-text">You can use letters, numbers &amp; periods</div>
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-phone">Phone No</label>
                          <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941">
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-message">Message</label>
                          <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                                </div>
                             </div>


             
            </ul>
</div>