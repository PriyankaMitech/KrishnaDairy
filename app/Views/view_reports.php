<?php include('sidebar.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/reports/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="public/reports/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/reports/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="public/reports/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/reports/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="public/assets/css/reports.css">
    <div class="container-fluid py-4">
        <h1 class="text-center mb-4">Inventory Report</h1>
        <div class="card">
           
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Unit</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['inventory'] as $product): ?>
                            <tr>
                                <td><?= $product['title'] ?></td>
                                <td><?= $product['category'] ?></td>
                                <td><?= $product['unit'] ?></td>
                                <td><?= $product['type'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['created_at'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10
                of 57 entries</div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                            aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1"
                            tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                            tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                            tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                            tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                            tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6"
                            tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1"
                            data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- /.card-body -->
    </div>
    <?php include('footer.php'); ?>
    <script src="public/reports/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/reports/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="public/reports/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/reports/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="public/reports/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/reports/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="public/reports/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/reports/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="public/reports/plugins/jszip/jszip.min.js"></script>
    <script src="public/reports/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="public/reports/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="public/reports/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="public/reports/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="public/reports/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/reports/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="public/reports/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</main>