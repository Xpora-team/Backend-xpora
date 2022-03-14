<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" id="accordionSidebar">
        <!-- Main Content -->
        <div id="content">
            <button class="btn hBack" type="button">Kembali</button>
            <!-- Begin Page Content -->
            <table class="table-striped">
                <thead>
                    <h1>Create Akun</h1><br>
                    <div class="container">
                        <div class="main-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                                <div class="mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="<?= $action ?>">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="font-weight-bold">Detail Diri</h5>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="nik" placeholder="NIK">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik usaha">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="no_telp" placeholder="No telepon">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="npwp" placeholder="NPWP">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 text-secondary">
                                                        <input type="text" class="form-control" name="domisili" placeholder="Domisili">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="font-weight-bold">Detail Usaha</h5>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="domisili_usaha" placeholder="Domisili perusahaan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="email" placeholder="Email perusahaan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="website" placeholder="website perusahaan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="bidang_usaha" placeholder="Bidang Usaha">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="komoditi" placeholder="Komoditi Usaha">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6 text-secondary">
                                                            <input type="text" class="form-control" name="skala" placeholder="Skala Produksi">
                                                        </div>
                                                        <div class="col-sm-6 text-secondary">
                                                            <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="nib" placeholder="NIB Perusahaan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="npwp_perusahaan" placeholder="NPWP Perusahaan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="no_siup" placeholder="No. SIUP">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="no_peb" placeholder="No. PEB">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="no_akta" placeholder="No. Akta Perusahaan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="font-weight-bold">User Type</h5>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-12 text-secondary">
                                                                <input type="text" class="form-control" name="user_type" placeholder="User Type">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-10 text-secondary">
                                                                <input type="submit" style="float: right;" class="btn btn-secondary px-3" value="Create Account">
                                                            </div>
                                                            <div class="col-sm-2 text-secondary">
                                                                <input type="button" style="float: right;" class="btn btn-secondary px-3" value="Cancel">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </tr>

                    </tbody>
                    <!-- akhir tbody -->
            </table>
            <!-- Page -->
        </div>
    </div>
</div>


<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>