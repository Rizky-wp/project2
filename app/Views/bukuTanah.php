<?= $this->extend('layout/theme'); ?>
<!-- css -->
<?= $this->section('css'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

<?= $this->endSection('css'); ?>
<?= $this->section('content'); ?>
<section class="content pt-0">
    <div class="container" style="">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col p-5 ">
                <span class="judul">Data Tanah</span>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row">
            <div class="col ">
                <table id="myTable" class="table table-borderless table-hover w-100">
                    <thead style="background-color: #37909E;">
                        <tr style="color: white;">
                            <th>Nama</th>
                            <th>No Surat</th>
                            <th>No Hak Milik</th>
                            <th>Luas</th>
                            <th>No Berkas</th>
                            <th>Daftar Isian</th>
                            <th>Tanggal Arsip</th>
                        </tr>
                    </thead>




                </table>


            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>
<?= $this->section('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var myTable;
        myTable = $('#myTable').DataTable({
            // paging: false,
            responsive: true,
            pageLength: 10,
            // data: data,
            lengthChange: false,
            processing: true,
            serverSide: true,
            order: [],
            ajax: {
                url: '<?= base_url('/home/data'); ?>',
                type: 'POST',
            },



            scrollX: true,
            // columnDefs: [{

            //     orderable: false,
            //     responsivePriority: 1,
            //     targets: -1,
            // }, ],
        });
    });
</script>
<?= $this->endSection('script'); ?>