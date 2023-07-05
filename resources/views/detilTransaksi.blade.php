<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CorpFleet | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="user-panel d-flex">
                <span class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </span>
                <div class="media-body ml-2 mt-1 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{'Hi, ' }}{{ auth()->user()->name }}</span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0 font-weight-bold">{{'Hi, ' }}{{ auth()->user()->name }}</h6>
            </div>
            <a href="" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>{{ __('My profile') }}</span>
            </a>
            <div class="dropdown-divider"></div>
            <form role="form" method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <div
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>{{ __('Logout') }}</span>
                </div>
            </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo-mtf.png" alt="Logo" class="brand-image " style="opacity: .8">
      <span style="font-style: italic" class="text-lg">#yok<b style="color: #F2BE22">bisa</b>yok</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('detail-transaksi')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detil Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MPP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PO</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0">Detil Transaksi</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Detil Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="" method="POST" id="editForm">
          @csrf @method('POST')
          <div class="form-group">
              <div class="row">
                  <label for="name" class="form-control-label col-2">Nama Debitur</label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="alamat" class="form-control-label col-2">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="jenis_pembiayaan" class="form-control-label col-2">Jenis Pembiayaan</label>
                  <select name="jenis_pembiayaan" id="jenis_pembiayaan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Jenis Pembiayaan --</option>
                      <option value="Consumer Finance">Consumer Finance</option>
                      <option value="Financial Lease">Financial Lease</option>                        
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="jaminan" class="form-control-label col-2">Jenis Jaminan</label>
                  <select name="jaminan" id="jaminan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Jaminan --</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Passenger">Passenger</option>
                      <option value="Alat Berat">Alat Berat</option>
                      <option value="Invoice / Faktur">Invoice / Faktur</option>
                      <option value="Tanah / Bangunan">Tanah / Bangunan</option>
                      <option value="Bank Garansi">Bank Garansi</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="tujuan_pembiayaan" class="form-control-label col-2">Tujuan Pembiayaan</label>
                  <select name="tujuan_pembiayaan" id="tujuan_pembiayaan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Tujuan Pembiayaan --</option>
                      <option value="Operasional">Operasional</option>
                      <option value="Direntalkan">Direntalkan</option>
                      <option value="COP/MOP">COP/MOP</option>                        
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="segment_industri" class="form-control-label col-2">Segmen Industri</label>
                  <select name="segment_industri" id="segment_industri" class="form-control form-control-sm col-3" required>
                    <option value="" disabled selected>Pilih Industri</option>
                    <option value="Sawit">Sawit</option>
                    <option value="Batubara">Batubara</option>
                    <option value="Pertambangan Lainnya">Pertambangan Lainnya</option>
                    <option value="Transportasi">Transportasi</option>
                    <option value="Konstruksi">Konstruksi</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
              </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Bowheer</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="bowheer_name" class="form-control-label col-2">Nama Bowheer</label>
                  <input type="text" name="bowheer_name" id="bowheer_name" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="bowheer_type" class="form-control-label col-2">Bowheer Type</label>
                  <select name="bowheer_type" id="bowheer_type" class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>Pilih Type Bowheer</option>
                      <option value="Perseorangan">Perseorangan</option>
                      <option value="Perusahaan">Perusahaan</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="industri_bowheer" class="form-control-label col-2">Industri Bowheer</label>
                  <select name="industri_bowheer" id="industri_bowheer" class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>Pilih Industri</option>
                      <option value="Sawit">Sawit</option>
                      <option value="Batubara">Batubara</option>
                      <option value="Pertambangan Lainnya">Pertambangan Lainnya</option>
                      <option value="Transportasi">Transportasi</option>
                      <option value="Konstruksi">Konstruksi</option>
                      <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Umum</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="asset_type" class="form-control-label col-2">Asset Type</label>
                  <input type="number" name="asset_type" id="asset_type" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="asset_status" class="form-control-label col-2">Asset Status</label>
                  <input type="text" name="asset_status" id="asset_status" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="category" class="form-control-label col-2">Category</label>
                  <input type="text" name="category" id="category" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="merk" class="form-control-label col-2">Merk</label>
                  <input type="text" name="merk" id="merk" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="kondisi_kendaraan" class="form-control-label col-2">Kondisi Kendaraan</label>
                <input type="text" name="kondisi_kendaraan" id="kondisi_kendaraan" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="tahun" class="form-control-label col-2">Tahun</label>
                <input type="number" name="tahun" id="tahun" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_unit" class="form-control-label col-2">Total Unit</label>
                <input type="number" name="total_unit" id="total_unit" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="stnk_name" class="form-control-label col-2">Nama di STNK</label>
                <input type="text" name="stnk_name" id="stnk_name" class="form-control form-control-sm col-3" >
            </div>
          </div><div class="form-group">
            <div class="row">
                <label for="user_asset" class="form-control-label col-2">Pengguna Kendaraan</label>
                <input type="text" name="user_asset" id="user_asset" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="lokasi_asset" class="form-control-label col-2">Lokasi Asset</label>
                <input type="text" name="lokasi_asset" id="lokasi_asset" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
              <strong>Informasi Dealer</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="dealer" class="form-control-label col-2">Nama Dealer</label>
                  <input type="text" name="dealer" id="dealer" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="pic" class="form-control-label col-2">PIC Dealer</label>
                <input type="text" name="pic" id="pic" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="no_telp_dealer" class="form-control-label col-2">No Telp PIC Dealer</label>
                <input type="number" name="no_telp_dealer" id="no_telp_dealer" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Karoseri</strong>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="karoseri" class="form-control-label col-2">Nama Karoseri</label>
                <input type="text" name="karoseri" id="karoseri" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="pic_karoseri" class="form-control-label col-2">PIC Karoseri</label>
                <input type="text" name="pic_karoseri" id="pic_karoseri" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="no_telp_karoseri" class="form-control-label col-2">No Telp PIC Karoseri</label>
                <input type="number" name="no_telp_karoseri" id="no_telp_karoseri" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Data Perhitungan</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="harga_karoseri" class="form-control-label col-2">Harga Karoseri</label>
                  <input type="number" name="harga_karoseri" id="harga_karoseri" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="harga_otr_per_unit" class="form-control-label col-2">Harga OTR per Unit</label>
                <input type="number" name="harga_otr_per_unit" id="harga_otr_per_unit" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_harga" class="form-control-label col-2">Total Harga</label>
                <input type="number" name="total_harga" id="total_harga" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="harga_phjmb" class="form-control-label col-2">Harga PHJMB</label>
                <input type="number" name="harga_phjmb" id="harga_phjmb" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="down_payment" class="form-control-label col-2">Down Payment</label>
                <input type="number" name="down_payment" id="down_payment" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="premi_asuransi_dibayar_dimuka" class="form-control-label col-2">Premi Asuransi dibayar dimuka</label>
                <input type="number" name="premi_asuransi_dibayar_dimuka" id="premi_asuransi_dibayar_dimuka" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="premi_asuransi_cover_giro" class="form-control-label col-2">Premi Asuransi Cover Giro</label>
                <input type="number" name="premi_asuransi_cover_giro" id="premi_asuransi_cover_giro" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="pokok_hutang" class="form-control-label col-2">Pokok Hutang</label>
                <input type="number" name="pokok_hutang" id="pokok_hutang" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="tenor" class="form-control-label col-2">Tenor</label>
                <input type="number" name="tenor" id="tenor" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="type_pembayaran" class="form-control-label col-2">Type Pembayaran</label>
                <input type="number" name="type_pembayaran" id="type_pembayaran" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_dasar" class="form-control-label col-2">Rate Dasar</label>
                <input type="number" name="rate_dasar" id="rate_dasar" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_jual" class="form-control-label col-2">Rate Jual</label>
                <input type="number" name="rate_jual" id="rate_jual" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_asuransi" class="form-control-label col-2">Rate Premi Asuransi</label>
                <input type="number" name="rate_asuransi" id="rate_asuransi" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="jenis_cover_asuransi" class="form-control-label col-2">Jenis Cover Asuransi</label>
                <select name="jenis_cover_asuransi" id="jenis_cover_asuransi" class="form-control form-control-sm col-3" required>
                  <option value="" disabled selected>Pilih Jenis Asuransi</option>
                  <option value="All Risk">All Risk</option>
                  <option value="Kombinasi">Kombinasi</option>
                  <option value="TLO">TLO</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="perusahaan_asuransi" class="form-control-label col-2">Perusahaan Asuransi</label>
                <input type="text" name="perusahaan_asuransi" id="perusahaan_asuransi" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="perluasan_asuransi" class="form-control-label col-2">Perluasan Asuransi</label>
                <select name="perluasan_asuransi" id="perluasan_asuransi" class="form-control form-control-sm col-3" required>
                  <option value="" disabled selected>Pilih Perluasan Asuransi</option>
                  <option value="Wilayah 1">Wilayah 1</option>
                  <option value="Wilayah 2">Wilayah 2</option>
                  <option value="Wilayah 3">Wilayah 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_admin_dasar" class="form-control-label col-2">Biaya Admin Dasar</label>
                <input type="number" name="biaya_admin_dasar" id="biaya_admin_dasar" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_admin_jual" class="form-control-label col-2">Biaya Admin Jual</label>
                <input type="number" name="biaya_admin_jual" id="biaya_admin_jual" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_provisi" class="form-control-label col-2">Biaya Provisi</label>
                <input type="number" name="biaya_provisi" id="biaya_provisi" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_fidusia" class="form-control-label col-2">Biaya Fidusia</label>
                <input type="number" name="biaya_fidusia" id="biaya_fidusia" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="angsuran_per_bulan" class="form-control-label col-2">Angsuran per Bulan</label>
                <input type="number" name="angsuran_per_bulan" id="angsuran_per_bulan" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_pembayaran_ke_mtf" class="form-control-label col-2">Total pembayaran ke MTF</label>
                <input type="number" name="total_pembayaran_ke_mtf" id="total_pembayaran_ke_mtf" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_pembayaran_ke_dealer" class="form-control-label col-2">Total pembayaran ke Dealer</label>
                <input type="number" name="total_pembayaran_ke_dealer" id="total_pembayaran_ke_dealer" class="form-control form-control-sm col-3" >
            </div>
          </div>
           <div class="form-group">
              <div class="row">
                  <label for="pelunasan" class="form-control-label col-2">Pelunasan ke Dealer</label>
                  <input type="number" name="pelunasan" id="pelunasan" class="form-control form-control-sm col-3" >
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="cara_pembayaran" class="form-control-label col-2">Cara Pembayaran</label>
                <input type="number" name="cara_pembayaran" id="cara_pembayaran" class="form-control form-control-sm col-3" >
            </div>
          </div>
          <div class="d-grid text-right col-md-11 mt-3">
              <button type="submit" class="btn btn-dim btn-outline-primary btn-sm">Simpan</button>
              <a href="" class="btn btn-dim btn-outline-danger btn-sm">Batal</a>
          </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 </strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --> --}}
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
