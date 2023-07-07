<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CorpFleet | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed mx-5 my-3">
  <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col-8">
                        <div class="row">
                        <div class="col-2">
                            <span> Nomor </span>
                        </div>
                        <div class="col-6">
                            <span>: {{$transaksi->no_mpp}} </span>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-2">
                            <span> Tanggal </span>
                        </div>
                        <div class="col-6">
                            <span>: {{$transaksi->tanggal}} </span>
                        </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <span> Kepada Yth. </span>
                                <br>
                                <span> {{$transaksi->nama_debitur}} </span>
                                <br>
                                <span> Di Tempat </span>
                                <br>
                                <br>
                                <span><strong>Perihal: Persetujuan Pembiayaan</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="../dist/img/logo-mtf.png" alt="Logo" class="mx-auto mt-3" height="100" width="200" style="display: block">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <span> Dengan Hormat, </span>
                    <br>
                    <span> Bersama surat ini kami memberitahukan bahwa telah Kami setujui pembiayaan untuk Alat Berat / Kendaraan: </span>
                </div>
                <br>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Jenis Barang </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->merk}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Tenor </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->tenor}} Bulan </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Total Unit </span>
                    </div>
                    <div class="col">
                        <span> 1 Unit </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->total_unit}} Unit </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Total Harga </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->harga_otr_nett_per_unit}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->harga_otr_nett_per_unit}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Uang Muka </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->down_payment}}% </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->down_payment}}% </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Nilai Pembiayaan </span>
                    </div>
                    <div class="col">
                        <span> Rp.  {{$transaksi->pokok_hutang}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->pokok_hutang}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Angsuran / Bulan </span>
                    </div>
                    <div class="col">
                        <span> Rp.  {{$transaksi->pokok_hutang}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->pokok_hutang}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Biaya Administrasi </span>
                    </div>
                    <div class="col">
                        <span> Rp.  {{$transaksi->biaya_admin_jual}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->biaya_admin_jual}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Biaya biaya_provisi </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->biaya_provisi}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->biaya_provisi}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Biaya Asuransi  </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->premi_asuransi_dibayar_dimuka}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->premi_asuransi_dibayar_dimuka}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Biaya Fidusia </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->biaya_fiducia}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->biaya_fiducia}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid; background-color:yellow;" >
                    <div class="col-4">
                        <span> Pembayaran Pertama ke MTF </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->total_pembayaran_ke_mtf}} </span>
                    </div>
                    <div class="col">
                        <span> Rp. {{$transaksi->total_pembayaran_ke_mtf}} </span>
                    </div>
                </div>
                <div class="row ml-3" style="border: 1px solid">
                    <div class="col-4">
                        <span> Term of Payment </span>
                    </div>
                    <div class="col">
                        <span> {{$transaksi->cara_pembayaran_angsuran}} </span>
                    </div>
                </div>
                <div class="mt-3">
                    <span> <strong> Pembayaran Pertama ke MTF </strong> mohon dapat dilakukan transfer ke rekening PT. Mandiri Tunas Finance dengan detail sebagai berikut : </span>
                </div>
                <div class="card" style="border-block: 1px solid">
                    <div class="row ml-3 mt-3" >
                        <div class="col-4">
                            <span> Bank </span>
                        </div>
                        <div class="col">
                            <span> Mandiri </span>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <div class="col-4">
                            <span> Cabang </span>
                        </div>
                        <div class="col">
                            <span> Imam Bonjol </span>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <div class="col-4">
                            <span> No. Rekening </span>
                        </div>
                        <div class="col">
                            <span> 122.000.5372.779 </span>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <div class="col-4">
                            <span> Atas Nama </span>
                        </div>
                        <div class="col">
                            <span> PT. Mandiri Tunas Finance </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="">
                    <span> Untuk rincian Giro/Autocoll/Autodebet angsuran yang dimaksud diatas akan diberikan dokumen terpisah </span>
                    <br>
                    <span> Demikian informasi yang dapat disampaikan, dan terimakasih untuk perhatiannya. </span>
                </div>
                <div class="mt-3">
                    <span class="text-sm"> Hormat kami, </span>
                </div>
                <div class="">
                    <strong> PT. Mandiri Tunas Finance </strong>
                </div>
                <div class="row">
                    <div class="col">
                        <br>
                        <br>
                        <br>
                        <br>
                        <strong> Billie </strong>
                        <br>
                        <strong> Relationship Manager Fleet </strong>
                    </div>
                    <div class="col">
                        <br>
                        <br>
                        <br>
                        <br>
                        <strong> Fajar Budi L </strong>
                        <br>
                        <strong> Dept Head Credit Fleet </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <script>window.print();</script>
</body>
</html>
