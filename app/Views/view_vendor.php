<?php include('sidebar.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <link rel="stylesheet" href="public/assets/css/inventry.css">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Vendor Table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <table class="table align-items-center mb-0">
                            <div class="col-md-12 mb-lg-0 mb-4">
                                <div class="card mt-4">
                                    <div class="card-header pb-0 p-3">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">Vendor List</h6>
                                            </div>
                                            <div class="col-6 text-end">
                                                <a class="btn bg-gradient-dark mb-0 add-inventory-btn"
                                                    href="javascript:;"><i
                                                        class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                                    Vendor</a>
                                            </div>
                                        </div>
                                        <?php if(session()->has('success')): ?>
                                        <div id="successMessage" class="alert alert-success">
                                            <?= session()->get('success') ?>
                                        </div>
                                        <script>
                                        setTimeout(function() {
                                            document.getElementById('successMessage').style.display = 'none';
                                        }, 3000); // 3000 milliseconds = 3 seconds
                                        </script>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row add-inventory-section" style="display: none;">
                                            <div class="col-12">
                                                <form action="<?= base_url('Vendor'); ?>" method="post">
                                                    <div class="row align-items-start">

                                                        <div class="col-4">
                                                            <label for="vendor-name"
                                                                class="form-label text-center">Vendor Name :</label>
                                                            <input type="text" class="form-control" id="vender-name"
                                                                name="vendor_name" value="">
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="vendor-company"
                                                                class="form-label text-center">Company Name :</label>
                                                            <input type="text" class="form-control" id="company-name"
                                                                name="company_name" value="">
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="vendor-email"
                                                                class="form-label text-center">Email :</label>
                                                            <input type="text" class="form-control" id="email"
                                                                name="email" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-start">

                                                        <div class="col-4">
                                                            <label for="vendor-gst" class="form-label text-center">GSTIN
                                                                :</label>
                                                            <input type="text" class="form-control" id="gst_number"
                                                                name="gst_number" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="vendor-pan" class="form-label text-center">PAN
                                                                Number :</label>
                                                            <input type="text" class="form-control" id="pan_number"
                                                                name="pan_number" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="vendor-mobile"
                                                                class="form-label text-center">Contact Number :</label>
                                                            <input type="number" class="form-control"
                                                                id="vmobile_number" name="vmobile_number" value="">
                                                        </div>
                                                        </div>
                                                        <div class="row align-items-start">
                                                        <div class="col-4">
                                                            <label for="vendor-poc"
                                                                class="form-label text-center">POC Number :</label>
                                                            <input type="number" class="form-control"
                                                                id="poc" name="poc" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="vendor-product"
                                                                class="form-label text-center">Vendor Product :</label>
                                                            <input type="text" class="form-control"
                                                                id="v_product" name="v_product" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="vendor-rate"
                                                                class="form-label text-center">Vendor Rate :</label>
                                                            <input type="text" class="form-control"
                                                                id="v_rate" name="v_rate" value="">
                                                        </div>
                                                    
                                                        </div>
                                                    <div class="row align-items-start">

                                                        <div class="col-6">
                                                            <label for="vendor-address"
                                                                class="form-label text-center">Address :</label>
                                                            <input type="text" class="form-control" id="address"
                                                                name="address" value="">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="vendor-address"
                                                                class="form-label text-center">Billing Address :</label>
                                                            <input type="text" class="form-control" id="billing_address"
                                                                name="billing_address" value="">
                                                        </div>

                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Vendor</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const addInventoryBtn = document.querySelector('.add-inventory-btn');
        const addInventorySection = document.querySelector('.add-inventory-section');

        addInventoryBtn.addEventListener('click', function() {
            addInventorySection.style.display = 'block';
        });
    });
    </script>
   

</main>