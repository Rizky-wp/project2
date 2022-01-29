<?= $this->extend('layout/admin'); ?>
<!-- css -->
<?= $this->section('css'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<?= $this->endSection('css'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<section class="content pt-0">
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col p-5 ">
                <span class="judul">Data Tanah</span>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row">
            <div class="col">
                <table id="datatable" class="table table-borderless table-hover w-100">
                    <thead style="background-color: #37909E;">
                        <tr style="color: white;">
                            <th>Nama</th>
                            <th>No Surat</th>
                            <th>No Hak Milik</th>
                            <th>Luas</th>
                            <th>No Berkas</th>
                            <th>Daftar Isian</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tr>
                        <td align="center"></td>
                        <td></td>
                        <td align="center"></td>
                    </tr>

                </table>


            </div>
        </div>
    </div>


    </div>
</section>

<?= $this->endSection('content'); ?>

<!-- js -->
<?= $this->section('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable({
            "pageLength": 4,
            "lengthChange": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                type: "POST",
                url: "<?php echo base_url(); ?>buku/read1/",
            },
            "scrollX": true,
            "autoWidth": true,
            "columnDefs": [{
                "targets": [3, 8],
                "orderable": false,
            }, ],
        });
    });
</script>
<?= $this->endSection('script'); ?>