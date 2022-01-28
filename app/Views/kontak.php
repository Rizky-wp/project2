<?= $this->extend('layout/theme'); ?>
<?= $this->section('content'); ?>
<section class="content pt-0 my-5">
    <div class="kontak container bg-white" style="
        ">
        <!-- <img src="/img/kontak.png" class="img-fluid" /> -->
        <div class="row h-100" style="background-image: url('/img/kontak.png'); background-size: cover; background-repeat: no-repeat; background-position: left;">
            <div class="col d-flex justify-content-end align-items-center ">
                <div class="d-flex flex-column bd-highlight mb-3 text-center" style="width: 10%;">
                    <div class="p-3 bd-highlight ">
                        <a href="https://instagram.com/kantahkotatasik?utm_medium=copy_link" class="">
                            <i class="fab fa-instagram fa-2x" style="color:#003E69 ;"></i>
                        </a>
                    </div>
                    <div class="p-3 bd-highlight ">
                        <a href="https://www.facebook.com/kantah.kotatasikmalaya.7" class="">
                            <i class="fab fa-facebook fa-2x " style="color:#003E69 ;"></i>
                        </a>
                    </div>
                    <div class="p-3 bd-highlight ">
                        <a href="https://twitter.com/kantahkotatasik?t=HoUzrtkl4Dz1itIeQhI6yw&s=08" class="">
                            <i class="fab fa-twitter fa-2x" style="color:#003E69 ;"></i>
                        </a>
                    </div>
                    <div class="p-3 bd-highlight ">
                        <a href="https://m.youtube.com/channel/UCLw-v2nDuGVWb_Lnt3cnKbg" class="">
                            <i class="fab fa-youtube fa-2x" style="color:#003E69 ;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>