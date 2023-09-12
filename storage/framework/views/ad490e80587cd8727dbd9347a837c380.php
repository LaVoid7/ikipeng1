<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Procurements</title>
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-6">
                    <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
                </div>
                <div class="col-lg-3 col-xl-6">
                    <ul class="list-inline mb-0 float-end">
                    </ul>
                </div>
            </div>
            <hr>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover mb-0 datatable" id="procurmentsTable">
                    <thead>
                        <thead>
                            <tr>
                                <th scope="col">Unit Bisnis</th>
                                <th scope="col">Juspeng</th>
                                <th scope="col">Tanggal terima juspeng</th>
                                <th scope="col">Custommer</th>
                                <th scope="col">Portofolio</th>
                                <th scope="col">Jenis anggaran </th>
                                <th scope="col">Customer</th>
                                <th scope="col">Anggaran</th>
                            </tr>
                        </thead>
                </table>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('scripts'); ?>
    <script type="module">
        $(document).ready(function() {
            $("#procurmentsTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/getprocurement",
                columns: [
                    { data: "id", name: "id", visible: false },
                    { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
                    { data: "unit_bisnis", name: "unit_bisnis"},
                    { data: "juspeng", name: "juspeng"},
                    { data: "tgl_penerimaan_juskeb", name: "tgl_penerimaan_juskeb"},
                    { data: "custommer", name: "custommer"}
                    { data: "portofolio", name: "portofolio"}
                    { data: "jenis_anggaran", name: "jenis_anggaran"}
                    { data: "customer", name: "customer", searchable: false}
                    { data: "anggaran", name: "anggaran", searchable: false}
                ],
                order: [[0, "desc"]],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });
            $(".datatable").on("click", ".btn-delete", function (e) {
                e.preventDefault();

                var form = $(this).closest("form");
                var name = $(this).data("name");

                Swal.fire({
                    title: "Apakah anda yakin untuk menghapus\n" + name + "?",
                    text: "Anda tidak bisa mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "bg-primary",
                    confirmButtonText: "Iya!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/procurement/index.blade.php ENDPATH**/ ?>