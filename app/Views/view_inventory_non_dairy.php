<?php include('sidebar.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <link rel="stylesheet" href="public/assets/css/inventry.css">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3"> Non Diary Inventory Table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <table class="table align-items-center mb-0">
                            <div class="col-md-12 mb-lg-0 mb-4">
                                <div class="card mt-4">
                                    <div class="card-header pb-0 p-3">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">Non Diary Inventory List</h6>
                                            </div>
                                            <div class="col-6 text-end">
                                                <a class="btn bg-gradient-dark mb-0 add-inventory-btn"
                                                    href="javascript:;"><i
                                                        class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Non-Diary
                                                    Inventory</a>
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
                                                <form action="<?= base_url('Inventory'); ?>" method="post">

                                                <div class="row align-items-start">
                                                        <div class="col-4">
                                                            <label for="inventory-title"
                                                                class="form-label text-center">Product</label>

                                                            <select id="mainSelection" class="form-select form-control"
                                                                name="product">
                                                                <?php
                                                                $uniqueTitles = array_unique(array_column($data['product'], 'product'));
                                                                foreach ($uniqueTitles as $product):
                                                            ?>
                                                                <option value="<?= $product; ?>"><?= ucfirst($product); ?>
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="inventory-source"
                                                                class="form-label text-center">Source</label>
                                                            <select id="inventory-source"
                                                                class="form-select form-control" name="source">
                                                                <option value="in-house">In-house</option>
                                                                <option value="vendor">Vendor</option>
                                                            </select>
                                                        </div>

                                                        <!-- Vendor Name (if source is Vendor) -->
                                                        <div class="col-4" id="vendor-name-wrapper"
                                                            style="display: none;">
                                                            <label for="vendor-name"
                                                                class="form-label text-center">Vendor Name</label>
                                                            <input type="text" class="form-control" id="vendor-name"
                                                                name="vendor_name" placeholder="Enter vendor name">
                                                        </div>

                                                    </div>
                                                    <div class="row align-items-start">

                                                        <div class="col-4">
                                                            <label for="inventory-category"
                                                                class="form-label text-center">Category</label>
                                                            <select id="categorySelection"
                                                                class="form-select form-control" name="category">
                                                                <?php
                                                                        // Get the selected title from the form submission or default to the first title
                                                                        $selectedTitle = isset($_POST['product']) ? $_POST['product'] : ($data['product'][0]['product'] ?? '');

                                                                        // Get the selected category from the form submission or default to the first category of the selected title
                                                                        $selectedCategory = isset($_POST['category']) ? $_POST['category'] : '';

                                                                        // Filter products based on the selected title
                                                                        $filteredProducts = array_filter($data['product'], function($product) use ($selectedTitle) {
                                                                            return $product['product'] === $selectedTitle;
                                                                        });

                                                                        // Get unique categories for the filtered products
                                                                        $uniqueCategories = array_unique(array_column($filteredProducts, 'category'));

                                                                        // Generate options for the category dropdown
                                                                        foreach ($uniqueCategories as $category):
                                                                        ?>
                                                                <option value="<?= $category; ?>"
                                                                    <?php if($selectedCategory === $category) echo 'selected'; ?>>
                                                                    <?= ucfirst($category); ?>
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="inventory-quantity"
                                                                class="form-label text-center">Quantity</label>
                                                            <input type="number" class="form-control"
                                                                id="inventory-quantity" name="unit" value="1">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="inventory-unit"
                                                                class="form-label ">Measurement</label>
                                                            <select id="inventory-unit" class="form-select form-control"
                                                                name="measurement">
                                                                <option value="kg">kg</option>
                                                                <option value="ltr">ltr</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-start">


                                                        <div class="col-4">
                                                            <label for="inventory-price"
                                                                class="form-label">Price</label>
                                                            <input type="number" class="form-control"
                                                                id="inventory-price" name="price"
                                                                placeholder="Per Liter or Kg">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="inventory-packaging"
                                                                class="form-label">Packaging</label>
                                                            <select id="inventory-packaging"
                                                                class="form-select form-control" name="packaging">
                                                                <option value="pouch">Pouch</option>
                                                                <option value="loose">Loose</option>
                                                                <option value="pre-packed">Pre-packed</option>
                                                            </select>
                                                        </div>


                                                        <div class="col-4">
                                                            <label for="shelf-life" class="form-label">Shelf Life (in
                                                                days)</label>
                                                            <input type="number" class="form-control" id="shelf-life"
                                                                name="shelf_life_days"
                                                                placeholder="Enter shelf life in days">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Inventory</button>
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
        <script>
        document.getElementById('inventory-source').addEventListener('change', function() {
            var vendorNameWrapper = document.getElementById('vendor-name-wrapper');
            if (this.value === 'vendor') {
                vendorNameWrapper.style.display = 'block';
            } else {
                vendorNameWrapper.style.display = 'none';
            }
        });
        </script>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Non Diary Inventory Details</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Type
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Source
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Vendor name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            product
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Unit
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Measurement
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Price
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Packaging
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Shelf life Days
                                        </th>


                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
$currentDate = date('Y-m-d'); // Get the current date
foreach ($data['inventory'] as $product):
    $createdAtDate = date('Y-m-d', strtotime($product['created_at']));
    // Check if the current date matches the created_at date of the product
    if ($currentDate == $createdAtDate):
?>
                                    <tr>

                                        <td class="text-center"><?= $product['type'] ?></td>
                                        <td class="text-center"><?= $product['source'] ?></td>
                                        <td class="text-center"><?= $product['vendor_name'] ?></td>
                                        <td><?= $product['product'] ?></td>
                                        <td><?= $product['category'] ?></td>
                                        <td class="text-center"><?= $product['unit'] ?></td>
                                        <td class="text-center"><?= $product['measurement'] ?></td>
                                        <td class="text-center"><?= $product['price'] ?></td>
                                        <td class="text-center"><?= $product['packaging'] ?></td>
                                        <td class="text-center"><?= $product['shelf_life_days'] ?></td>


                                        <td></td>
                                        <!-- This column can be used for additional actions/buttons if needed -->
                                    </tr>
                                    <?php 
    endif; // End of date check
endforeach; 
?>



                                </tbody>
                            </table>
                        </div>
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