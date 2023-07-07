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
<body class="hold-transition sidebar-mini layout-fixed mx-3 my-3">
  <section class="content">
      <div class="container-fluid">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="text-center"><strong>Memo Pencairan Pembiayaan</strong></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <img src="../dist/img/logo-mtf.png" alt="Logo" class="mx-auto mt-3" height="75" width="150" style="display: block">
              </div>
              <div class="col ml-5">
                <div class="row">
                  <div class="col-2">
                    <span> No MPP </span>
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
                <div class="row">
                  <div class="col-2">
                    <span> Kepada </span>
                  </div>
                  <div class="col-6">
                    <span>: Komite Mandiri Tunas Finance </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <span> Dari </span>
                  </div>
                  <div class="col-6">
                    <span>: Divisi Corporate Fleet </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <span> Perihal </span>
                  </div>
                  <div class="col-6">
                    <span>: Realisasi Pembiayaan a/n {{$transaksi->nama_debitur}} </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <h5> Latar Belakang </h5>
            <div class="card-body table-responsive p-0">
              <table class="table table-sm table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Fasilitas</th>
                    <th>OS Pokok Hutang</th>
                    <th>Angsuran / Bulan</th>
                    <th>Jumlah Unit</th>
                    <th>Catatan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Eksisting</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Pending</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Pengajuan</td>
                    <td>Rp. {{$transaksi->pokok_hutang}}</td>
                    <td>Rp. {{$transaksi->angsuran_per_bulan}}</td>
                    <td>{{$transaksi->total_unit}} unit</td>
                    <td>{{$transaksi->merk}}</td>
                  </tr>
                </tbody>
              </table>
              <div class="mt-4">
                <strong>* Detail transaksi terlampir </strong>
                <br>
                <strong>* Persetujuan plafond terlampir </strong>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <h5> Catatan </h5>
            <br>
            <br>
            <br>
            <br>
          </div>
          <hr>
          <div class="card-body">
            <div>
              <strong> Diajukan oleh, <strong>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="card">
                  <br>
                  <br>
                  <br>
                  <br>
                  <span> Mangetar Sormin </span>
                  <span> Account Manager Fleet </span>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <br>
                  <br>
                  <br>
                  <br>
                  <span> Billie </span>
                  <span> Relationship Manager Fleet </span>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <span> Catatan: </span>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="card card-secondary">
                  <span> Direkomendasikan oleh, </span>
                </div>
                <div class="card">
                  <br>
                  <br>
                  <br>
                  <br>
                  <span> Ido Aprilia Tarigan </span>
                  <span> Credit Analyst Fleet </span>
                </div>
                <div class="card">
                  <span> Catatan: </span>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col">
                <div class="card card-secondary">
                  <span> Disetujui oleh, </span>
                </div>
                <div class="card">
                  <br>
                  <br>
                  <br>
                  <br>
                  <span> Fajar Budi L </span>
                  <span> Dept Head Credit Fleet </span>
                </div>
                <div class="card">
                  <span> Catatan: </span>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>

  <script>window.print();</script>
</body>
</html>
