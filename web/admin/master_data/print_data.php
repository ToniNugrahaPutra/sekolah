<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.no_induk = '$_GET[no_induk]' AND tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($d=mysqli_fetch_array($executeSat)) {		
?>    
    <!-- BEGIN: Content-->
        <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">
                        <fieldset class="col-12 col-md-5 mb-1 mb-md-0"></fieldset>
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <button class="btn btn-danger btn-print mb-1 mb-md-0"> 
                             <i class="fas fa-print"></i> Cetak</button>
                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">
                            <div class="col-sm-3 col-4 text-center pt-1">
                                <div class="media pl-3 pt-1">
                                    <img src="master_data/logo/<?php echo $logo;?>" class="img-fluid" width="100" />
                                </div>                                                                
                            </div>
                            <div class="col-sm-9 col-8 text-left pt-1">
                               <h3 class="text-uppercase"><?php echo $nm_usaha;?></h3>
                                <div class="invoice-details mt-2">
                                    <h6><?php echo $alamat;?></h6>
                                    <p><?php echo $kecamatan;?> - <?php echo $kota;?><br /><?php echo $telepon;?> - <?php echo $hp;?></p>
                                </div>
                            </div>
                        </div>
                         <p class="text-bold-700 p-1 text-center" style="color:<?php echo $headerfooter;?>">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            
                            <div class="col-sm-9 col-12 text-left">
                                <h5 class="text-uppercase">Data <?php echo $d['kategori'];?></h5>
                                <div class="company-info my-2">
                                    <p><?php echo $d['nama'];?></p>
                                    <p><?php echo $d['alamat'];?></p>
                                    <p>Tempat tanggal lahir</p>
                                    <p><?php echo $d['kota_lahir'];?>, <?php echo $d['ttl'];?></p>
                                </div>
                                <div class="company-contact">
                                    <p><i class="fas fa-envelope"></i><?php echo $d['email'];?></p>
                                    <p><i class="fas fa-phone"></i><?php echo $d['hp'];?></p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 text-left">
                                <div class="media pt-1">
                                    <img src="master_data/anggota/<?php echo $d['pas_foto'];?>" class="img-thumbnail" />
                                </div>
                                <div class="recipient-info my-2">
                                	<h5 class="border-secondary p-1">No.Induk : <?php echo $d['no_induk'];?></h5>
                                    <p></p>                                    
                                </div>
                                <div class="recipient-contact pb-2"></div>
                            </div>
                        </div>
                        <p class="text-bold-700 p-1 text-center" style="color:<?php echo $headerfooter;?>">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        <!--/ Invoice Recipient Details -->
                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-center">
                            <p>Bukti pendataan <?php echo $d['kategori'];?> yang diterbitkan oleh <?php echo $nm_usaha;?>
                                <p class="bank-details mb-0">
                                    <span class="mr-4">TERTANGGAL: <strong><?php echo date ("d-m-Y");?></strong></span>
                                    <span><strong><?php echo $kota;?></strong></span>
                                </p>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php } ?>
    