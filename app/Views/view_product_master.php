<?php include('sidebar.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <link rel="stylesheet" href="public/assets/css/product.css">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Product Master table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <table class="table align-items-center mb-0">
                            <div class="col-md-12 mb-lg-0 mb-4">
                                <div class="card mt-4">
                                    <div class="card-header pb-0 p-3">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">Product Master List</h6>
                                            </div>
                                            <div class="col-6 text-end">
                                                <a class="btn bg-gradient-dark mb-0 add-product-btn"
                                                    href="javascript:;"><i
                                                        class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                                    Product Master</a>
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
                                        <div class="row add-product-section" style="display: none;">
                                            <div class="col-12">
                                                <form action="<?= base_url('saveProductmaster'); ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="type" class="form-label">Type</label>
                                                                <select class="form-select form-control" id="type"
                                                                    name="type">
                                                                    <option value="dairy">Dairy</option>
                                                                    <option value="non_dairy">Non-Dairy</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="product" class="form-label">Product</label>
                                                                <input type="text" class="form-control" id="product"
                                                                    name="product">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="category"
                                                                    class="form-label">Category</label>
                                                                <input type="text" class="form-control" id="category"
                                                                    name="category">
                                                            </div>
                                                        </div>                                                          
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Add
                                                        Product Master</button>
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
        const addProductBtn = document.querySelector('.add-product-btn');
        const addProductSection = document.querySelector('.add-product-section');
        const sourceSelect = document.getElementById('source');
        const vendorInfo = document.querySelector('.vendor-info');

        addProductBtn.addEventListener('click', function() {
            addProductSection.style.display = 'flex';
        });

        sourceSelect.addEventListener('change', function() {
            if (sourceSelect.value === 'vendor') {
                vendorInfo.style.display = 'flex';
            } else {
                vendorInfo.style.display = 'none';
            }
        });
    });
    </script>

</main>