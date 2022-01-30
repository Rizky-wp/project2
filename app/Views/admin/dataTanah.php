<?= $this->extend('layout/admin'); ?>
<!-- css -->
<?= $this->section('css'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

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
                            <th>Action</th>
                        </tr>
                    </thead>




                </table>


            </div>
        </div>
    </div>



</section>
<!-- Modal -->
<div class="modal fade" id="formUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#" id="form">
                    <div class="mb-5">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="namaData" required>
                        <!-- <div id="namaData" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-5">
                        <label for="noSurat" class="form-label">Nomer Surat</label>
                        <input name="noSurat" type="number" class="form-control" id="noSurat" aria-describedby="" required>
                    </div>
                    <div class="mb-5">
                        <label for="noHakMilik" class="form-label">Nomer Hak Milik</label>
                        <input name="noHakMilik" type="text" class="form-control" id="noHakMilik" aria-describedby="" required>
                    </div>
                    <div class="mb-5">
                        <label for="luas" class="form-label">Luas M2</label>
                        <input name="luas" type="number" min="0" class="form-control" id="luas" aria-describedby="" required>
                    </div>
                    <div class="mb-5">
                        <label for="noBerkas" class="form-label">Nomer Berkas</label>
                        <input name="noBerkas" type="text" class="form-control" id="noBerkas" aria-describedby="" required>
                    </div>
                    <div class="mb-5">
                        <label for="daftarIsian" class="form-label">Daftar Isian</label>
                        <input name="daftarIsian" type="text" class="form-control" id="daftarIsian" aria-describedby="" required>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- delete modal -->
<div class="modal fade" id="formDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <h3>Apakah yakin?</h3>
                </center>
            </div>
            <div class="modal-footer justify-content-around">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button id="submit" type="button" class="btn btn-success">&nbsp&nbsp&nbspYes&nbsp&nbsp&nbsp</button>
            </div>
        </div>
    </div>
</div>
<!-- end delete modal -->
<script type="text/javascript">
    $(document).ready(function() {
        var myTable;
        var form = $('#form');
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
                url: '<?= base_url('/admin/data'); ?>',
                type: 'POST',
            },



            scrollX: true,
            columnDefs: [{

                orderable: false,
                responsivePriority: 1,
                targets: -1,
            }, ],
        });

        // fungsi Update
        function update() {
            $('#formUpdate').modal('show');


            //data yang diambil dari input
            $("#noSurat").prop('disabled', true);
            $('#nama').val(nama);
            $('#noSurat').val(noSurat);
            $('#noHakMilik').val(noHakMilik);
            $('#luas').val(luas);
            $('#noBerkas').val(noBerkas);
            $('#daftarIsian').val(daftarIsian);
            //Jika klik button add
            form.validate({

                submitHandler: function() {

                    var data = new FormData();
                    data.append("nama", $('#nama').val());
                    data.append("noSurat", noSurat);
                    data.append("noHakMilik", $('#noHakMilik').val());
                    data.append("luas", $('#luas').val());
                    data.append("noBerkas", $('#noBerkas').val());
                    data.append("daftarIsian", $('#daftarIsian').val());

                    $.ajax({
                        url: '<?= base_url("/admin/update"); ?>',
                        method: 'post',
                        data: data,
                        processData: false,
                        cache: false,
                        contentType: false,
                        success: function(data) {
                            $('#formUpdate').modal('hide');
                            alert('Update berhasil');
                        },
                        error: function(e) {
                            e.preventDefault();
                            alert('Update gagal!')
                        },
                    }).always(function() {
                        myTable.ajax.reload();
                        form.validate().destroy();
                    });
                },
                invalidHandler: function() {
                    alert('Isilah form dengan benar!')
                },
            });
        };
        // fungsi delete
        function remove() {
            $('#formDelete').modal('show');
            var data = new FormData();
            data.append("noSurat", noSurat);
            $('#submit').click(function() {
                $.ajax({
                    url: '<?= base_url("/admin/delete"); ?>',
                    method: 'post',
                    data: data,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data) {
                        $('#formDelete').modal('hide');
                        alert('Delete berhasil');
                    },
                    error: function(e) {
                        alert('Delete gagal!')
                    },
                }).always(function() {
                    myTable.ajax.reload();
                });
            });

        };
        // update data
        $('#myTable tbody').on('click', '.tampilUpdate', function(e) {
            e.preventDefault();

            nama = myTable.row($(this).parents('tr')).data()[0];
            noSurat = myTable.row($(this).parents('tr')).data()[1];
            noHakMilik = myTable.row($(this).parents('tr')).data()[2];
            luas = myTable.row($(this).parents('tr')).data()[3];
            noBerkas = myTable.row($(this).parents('tr')).data()[4];
            daftarIsian = myTable.row($(this).parents('tr')).data()[5];


            update();

            return false
        });
        $('#myTable tbody').on('click', '.tampilDelete', function(e) {
            e.preventDefault();
            noSurat = myTable.row($(this).parents('tr')).data()[1];
            remove();
            return false
        });
    });
</script>
<?= $this->endSection('content'); ?>

<!-- js -->
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>