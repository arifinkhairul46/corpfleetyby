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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/logo-mtf.png" alt="logo-mtf" height="50" width="100">
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
                  <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
      <img src="../dist/img/logo-mtf.png" alt="Logo" class="brand-image " style="opacity: .8">
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
            <h2 class="m-0">Edit Detil Transaksi</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Detil Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{route('detail.update', $transaksi->id)}}" method="POST" id="editForm">
          @csrf @method('PUT')
          <div class="form-group">
            <div class="row">
                <label for="no_mpp" class="form-control-label col-2">No MPP</label>
                <input type="text" name="no_mpp" id="no_mpp" class="form-control form-control-sm col-3" value="{{$transaksi->no_mpp}}" >
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="tanggal" class="form-control-label col-2">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control form-control-sm col-3" value="{{$transaksi->tanggal}}" >
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="nama_debitur" class="form-control-label col-2">Nama Debitur</label>
                  <input type="text" name="nama_debitur" id="nama_debitur" class="form-control form-control-sm col-3" value="{{$transaksi->nama_debitur}}" required>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="alamat_debitur" class="form-control-label col-2">Alamat Debitur</label>
                  <input type="text" name="alamat_debitur" id="alamat_debitur" class="form-control form-control-sm col-3" value="{{$transaksi->alamat_debitur}}" required>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="jenis_pembiayaan" class="form-control-label col-2">Jenis Pembiayaan</label>
                  <select name="jenis_pembiayaan" id="jenis_pembiayaan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Jenis Pembiayaan --</option>
                      <option value="Consumer Finance" @if ($transaksi->jenis_pembiayaan == 'Consumer Finance') selected @endif>Consumer Finance</option>
                      <option value="Financial Lease" @if ($transaksi->jenis_pembiayaan == 'Finacial Lease') selected @endif>Financial Lease</option>                        
                      <option value="Anjak Piutang" @if ($transaksi->jenis_pembiayaan == 'Anjak Piutang') selected @endif>Anjak Piutang</option>                        
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="jenis_jaminan" class="form-control-label col-2">Jenis Jaminan</label>
                  <select name="jenis_jaminan" id="jenis_jaminan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Jaminan --</option>
                      <option value="Commercial" @if ($transaksi->jenis_jaminan == 'Commercial') selected @endif >Commercial</option>
                      <option value="Passenger" @if ($transaksi->jenis_jaminan == 'Passenger') selected @endif>Passenger</option>
                      <option value="Alat Berat" @if ($transaksi->jenis_jaminan == 'Alat Berat') selected @endif>Alat Berat</option>
                      <option value="Invoice / Faktur" @if ($transaksi->jenis_jaminan == 'Invoice / Faktur') selected @endif>Invoice / Faktur</option>
                      <option value="Tanah / Bangunan" @if ($transaksi->jenis_jaminan == 'Tanah / Bangunan') selected @endif>Tanah / Bangunan</option>
                      <option value="Bank Garansi" @if ($transaksi->jenis_jaminan == 'Bank Garansi') selected @endif>Bank Garansi</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="tujuan_pembiayaan" class="form-control-label col-2">Tujuan Pembiayaan</label>
                  <select name="tujuan_pembiayaan" id="tujuan_pembiayaan"  class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>-- Pilih Tujuan Pembiayaan --</option>
                      <option value="Operasional" @if ($transaksi->tujuan_pembiayaan == 'Operasional') selected @endif>Operasional</option>
                      <option value="Direntalkan" @if ($transaksi->tujuan_pembiayaan == 'Direntalkan') selected @endif>Direntalkan</option>
                      <option value="COP/MOP" @if ($transaksi->tujuan_pembiayaan == 'COP/MOP') selected @endif>COP/MOP</option>                        
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="segmen_industri" class="form-control-label col-2">Segmen Industri</label>
                  <select name="segmen_industri" id="segmen_industri" class="form-control form-control-sm col-3" required>
                    <option value="" disabled selected>Pilih Industri</option>
                    <option value="Sawit" @if ($transaksi->segmen_industri == 'Sawit') selected @endif>Sawit</option>
                    <option value="Batubara" @if ($transaksi->segmen_industri == 'Batubara') selected @endif>Batubara</option>
                    <option value="Pertambangan Lainnya" @if ($transaksi->segmen_industri == 'Pertambangan Lainnya') selected @endif>Pertambangan Lainnya</option>
                    <option value="Transportasi" @if ($transaksi->segmen_industri == 'Transportasi') selected @endif>Transportasi</option>
                    <option value="Konstruksi" @if ($transaksi->segmen_industri == 'Konstruksi') selected @endif>Konstruksi</option>
                    <option value="Lainnya" @if ($transaksi->segmen_industri == 'Lainnya') selected @endif>Lainnya</option>
                </select>
              </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Bowheer</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="bowheer" class="form-control-label col-2">Nama Bowheer</label>
                  <input type="text" name="bowheer" id="bowheer" class="form-control form-control-sm col-3" value="{{$transaksi->bowheer}}" required>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="bowheer_type" class="form-control-label col-2">Bowheer Type</label>
                  <select name="bowheer_type" id="bowheer_type" class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>Pilih Type Bowheer</option>
                      <option value="Perseorangan" @if ($transaksi->bowheer_type == 'Perseorangan') selected @endif>Perseorangan</option>
                      <option value="Perusahaan" @if ($transaksi->bowheer_type == 'Perusahaan') selected @endif>Perusahaan</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="bowheer_industri" class="form-control-label col-2">Industri Bowheer</label>
                  <select name="bowheer_industri" id="bowheer_industri" class="form-control form-control-sm col-3" required>
                      <option value="" disabled selected>Pilih Industri</option>
                      <option value="Sawit" @if ($transaksi->bowheer_industri == 'Sawit') selected @endif>Sawit</option>
                      <option value="Batubara" @if ($transaksi->bowheer_industri == 'Batubara') selected @endif>Batubara</option>
                      <option value="Pertambangan Lainnya" @if ($transaksi->bowheer_industri == 'Pertambangan Lainnya') selected @endif>Pertambangan Lainnya</option>
                      <option value="Transportasi" @if ($transaksi->bowheer_industri == 'Transportasi') selected @endif>Transportasi</option>
                      <option value="Konstruksi" @if ($transaksi->bowheer_industri == 'Konstruksi') selected @endif>Konstruksi</option>
                      <option value="Lainnya" @if ($transaksi->bowheer_industri == 'Lainnya') selected @endif>Lainnya</option>
                  </select>
              </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Umum</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="asset_type" class="form-control-label col-2">Asset Type</label>
                  <input type="text" name="asset_type" id="asset_type" class="form-control form-control-sm col-3" value="{{$transaksi->asset_type}}">
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="asset_status" class="form-control-label col-2">Asset Status</label>
                  <input type="text" name="asset_status" id="asset_status" class="form-control form-control-sm col-3" value="{{$transaksi->asset_status}}" >
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="category" class="form-control-label col-2">Category</label>
                  <input type="text" name="category" id="category" class="form-control form-control-sm col-3" value="{{$transaksi->category}}">
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="merk" class="form-control-label col-2">Merk</label>
                  <input type="text" name="merk" id="merk" class="form-control form-control-sm col-3" value="{{$transaksi->merk}}">
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="kondisi_kendaraan" class="form-control-label col-2">Kondisi Kendaraan</label>
                <input type="text" name="kondisi_kendaraan" id="kondisi_kendaraan" class="form-control form-control-sm col-3" value="{{$transaksi->kondisi_kendaraan}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="tahun_unit" class="form-control-label col-2">Tahun Unit</label>
                <input type="text" name="tahun_unit" id="tahun" class="form-control form-control-sm col-3" value="{{$transaksi->tahun_unit}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_unit" class="form-control-label col-2">Total Unit</label>
                <input type="number" name="total_unit" id="total_unit" class="form-control form-control-sm col-3" value="{{$transaksi->total_unit}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="stnk_name" class="form-control-label col-2">Nama di STNK</label>
                <input type="text" name="stnk_name" id="stnk_name" class="form-control form-control-sm col-3" value="{{$transaksi->stnk_name}}">
            </div>
          </div><div class="form-group">
            <div class="row">
                <label for="user_asset" class="form-control-label col-2">Pengguna Kendaraan</label>
                <input type="text" name="user_asset" id="user_asset" class="form-control form-control-sm col-3" value="{{$transaksi->user_asset}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="location_asset" class="form-control-label col-2">Lokasi Asset</label>
                <input type="text" name="location_asset" id="location_asset" class="form-control form-control-sm col-3" value="{{$transaksi->location_asset}}">
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
              <strong>Informasi Dealer</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="dealer_name" class="form-control-label col-2">Nama Dealer</label>
                  <input type="text" name="dealer_name" id="dealer_name" class="form-control form-control-sm col-3" value="{{$transaksi->dealer_name}}">
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="no_pic_dealer" class="form-control-label col-2">No Telp PIC Dealer</label>
                <input type="number" name="no_pic_dealer" id="no_pic_dealer" class="form-control form-control-sm col-3" value="{{$transaksi->no_pic_dealer}}">
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Informasi Karoseri</strong>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="karoseri_name" class="form-control-label col-2">Nama Karoseri</label>
                <input type="text" name="karoseri_name" id="karoseri_name" class="form-control form-control-sm col-3" value="{{$transaksi->karoseri_name}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="pic_karoseri" class="form-control-label col-2">PIC Karoseri</label>
                <input type="text" name="pic_karoseri" id="pic_karoseri" class="form-control form-control-sm col-3" value="{{$transaksi->pic_karoseri}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="no_telp_karoseri" class="form-control-label col-2">No Telp PIC Karoseri</label>
                <input type="number" name="no_telp_karoseri" id="no_telp_karoseri" class="form-control form-control-sm col-3" value="{{$transaksi->no_telp_karoseri}}">
            </div>
          </div>
          <div class="mb-3 mx-3" style="font-style: italic">
            <strong>Data Perhitungan</strong>
          </div>
          <div class="form-group">
              <div class="row">
                  <label for="harga_karoseri" class="form-control-label col-2">Harga Karoseri</label>
                  <input type="number" name="harga_karoseri" id="harga_karoseri" class="form-control form-control-sm col-3" value="{{$transaksi->harga_karoseri}}">
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="harga_otr_nett_per_unit" class="form-control-label col-2">Harga OTR per Unit</label>
                <input type="number" name="harga_otr_nett_per_unit" id="harga_otr_nett_per_unit" class="form-control form-control-sm col-3" value="{{$transaksi->harga_otr_nett_per_unit}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_harga" class="form-control-label col-2">Total Harga</label>
                <input type="number" name="total_harga" id="total_harga" class="form-control form-control-sm col-3" value="{{$transaksi->total_harga}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="harga_phjmb" class="form-control-label col-2">Harga PHJMB</label>
                <input type="number" name="harga_phjmb" id="harga_phjmb" class="form-control form-control-sm col-3" value="{{$transaksi->harga_phjmb}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="down_payment" class="form-control-label col-2">Down Payment</label>
                <input type="number" name="down_payment" id="down_payment" class="form-control form-control-sm col-3" value="{{$transaksi->down_payment}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="premi_asuransi_dibayar_dimuka" class="form-control-label col-2">Premi Asuransi dibayar dimuka</label>
                <input type="number" name="premi_asuransi_dibayar_dimuka" id="premi_asuransi_dibayar_dimuka" class="form-control form-control-sm col-3" value="{{$transaksi->premi_asuransi_dibayar_dimuka}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="premi_asuransi_cover_giro" class="form-control-label col-2">Premi Asuransi Cover Giro</label>
                <input type="number" name="premi_asuransi_cover_giro" id="premi_asuransi_cover_giro" class="form-control form-control-sm col-3" value="{{$transaksi->premi_asuransi_cover_giro}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="pokok_hutang" class="form-control-label col-2">Pokok Hutang</label>
                <input type="number" name="pokok_hutang" id="pokok_hutang" class="form-control form-control-sm col-3" value="{{$transaksi->pokok_hutang}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="tenor" class="form-control-label col-2">Tenor</label>
                <input type="number" name="tenor" id="tenor" class="form-control form-control-sm col-3" value="{{$transaksi->tenor}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="type_pembayaran" class="form-control-label col-2">Type Pembayaran</label>
                <input type="number" name="type_pembayaran" id="type_pembayaran" class="form-control form-control-sm col-3" value="{{$transaksi->type_pembayaran}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_dasar" class="form-control-label col-2">Rate Dasar</label>
                <input type="text" name="rate_dasar" id="rate_dasar" class="form-control form-control-sm col-3" value="{{$transaksi->rate_dasar}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_jual" class="form-control-label col-2">Rate Jual</label>
                <input type="text" name="rate_jual" id="rate_jual" class="form-control form-control-sm col-3" value="{{$transaksi->rate_jual}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="rate_premi_asuransi" class="form-control-label col-2">Rate Premi Asuransi</label>
                <input type="text" name="rate_premi_asuransi" id="rate_premi_asuransi" class="form-control form-control-sm col-3" value="{{$transaksi->rate_premi_asuransi}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="jenis_cover_asuransi" class="form-control-label col-2">Jenis Cover Asuransi</label>
                <select name="jenis_cover_asuransi" id="jenis_cover_asuransi" class="form-control form-control-sm col-3" required>
                  <option value="" disabled selected>Pilih Jenis Asuransi</option>
                  <option value="All Risk" @if ($transaksi->jenis_cover_asuransi == 'All Risk') selected @endif>All Risk</option>
                  <option value="Kombinasi" @if ($transaksi->jenis_cover_asuransi == 'Kombinasi') selected @endif>Kombinasi</option>
                  <option value="TLO" @if ($transaksi->jenis_cover_asuransi == 'TLO') selected @endif>TLO</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="perusahaan_asuransi" class="form-control-label col-2">Perusahaan Asuransi</label>
                <input type="text" name="perusahaan_asuransi" id="perusahaan_asuransi" class="form-control form-control-sm col-3" value="{{$transaksi->perusahaan_asuransi}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="perluasan_asuransi" class="form-control-label col-2">Perluasan Asuransi</label>
                <select name="perluasan_asuransi" id="perluasan_asuransi" class="form-control form-control-sm col-3" required>
                  <option value="" disabled selected>Pilih Perluasan Asuransi</option>
                  <option value="Wilayah 1" @if ($transaksi->perluasan_asuransi == 'Wilayah 1') selected @endif>Wilayah 1</option>
                  <option value="Wilayah 2" @if ($transaksi->perluasan_asuransi == 'Wilayah 2') selected @endif>Wilayah 2</option>
                  <option value="Wilayah 3" @if ($transaksi->perluasan_asuransi == 'Wilayah 3') selected @endif>Wilayah 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_admin_dasar" class="form-control-label col-2">Biaya Admin Dasar</label>
                <input type="number" name="biaya_admin_dasar" id="biaya_admin_dasar" class="form-control form-control-sm col-3" value="{{$transaksi->biaya_admin_dasar}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_admin_jual" class="form-control-label col-2">Biaya Admin Jual</label>
                <input type="number" name="biaya_admin_jual" id="biaya_admin_jual" class="form-control form-control-sm col-3" value="{{$transaksi->biaya_admin_jual}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_provisi" class="form-control-label col-2">Biaya Provisi</label>
                <input type="number" name="biaya_provisi" id="biaya_provisi" class="form-control form-control-sm col-3" value="{{$transaksi->biaya_provisi}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="biaya_fiducia" class="form-control-label col-2">Biaya Fidusia</label>
                <input type="number" name="biaya_fiducia" id="biaya_fiducia" class="form-control form-control-sm col-3" value="{{$transaksi->biaya_fiducia}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="angsuran_per_bulan" class="form-control-label col-2">Angsuran per Bulan</label>
                <input type="number" name="angsuran_per_bulan" id="angsuran_per_bulan" class="form-control form-control-sm col-3" value="{{$transaksi->angsuran_per_bulan}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_pembayaran_ke_mtf" class="form-control-label col-2">Total pembayaran ke MTF</label>
                <input type="number" name="total_pembayaran_ke_mtf" id="total_pembayaran_ke_mtf" class="form-control form-control-sm col-3" value="{{$transaksi->total_pembayaran_ke_mtf}}">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="total_pembayaran_ke_dealer" class="form-control-label col-2">Total pembayaran ke Dealer</label>
                <input type="number" name="total_pembayaran_ke_dealer" id="total_pembayaran_ke_dealer" class="form-control form-control-sm col-3" value="{{$transaksi->total_pembayaran_ke_dealer}}">
            </div>
          </div>
           <div class="form-group">
              <div class="row">
                  <label for="pelunasan_mtf_to_dealer" class="form-control-label col-2">Pelunasan ke Dealer</label>
                  <input type="number" name="pelunasan_mtf_to_dealer" id="pelunasan_mtf_to_dealer" class="form-control form-control-sm col-3" value="{{$transaksi->pelunasan_mtf_to_dealer}}">
              </div>
          </div>
          <div class="form-group">
            <div class="row">
                <label for="cara_pembayaran_angsuran" class="form-control-label col-2">Cara Pembayaran</label>
                <select name="cara_pembayaran_angsuran" id="cara_pembayaran_angsuran"  class="form-control form-control-sm col-3" required>
                  <option value="" disabled selected>-- Pilih Cara Pembayaran --</option>
                  <option value="Autocoll" @if ($transaksi->cara_pembayaran_angsuran == 'Autocoll') selected @endif>Autocoll</option>
                  <option value="Giro" @if ($transaksi->cara_pembayaran_angsuran == 'Giro') selected @endif>Giro</option>
                  <option value="Standing Instruction" @if ($transaksi->cara_pembayaran_angsuran == 'Standing Instruction') selected @endif>Standing Instruction</option>                        
                  <option value="Potong Gaji" @if ($transaksi->cara_pembayaran_angsuran == 'Potong Gaji') selected @endif>Potong Gaji</option>                        
              </select>
            </div>
          </div>
          <div class="d-grid text-right col-md-11 mt-3">
              <button type="submit" class="btn btn-dim btn-outline-primary btn-sm">Simpan</button>
              <a href="{{route('home')}}" class="btn btn-dim btn-outline-danger btn-sm">Batal</a>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->print
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --> --}}
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
