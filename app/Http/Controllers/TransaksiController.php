<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $transaksi = Transaksi::all();
            return view('index', compact('transaksi'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $transaksi = Transaksi::all();
            return view('detilTransaksi', compact('transaksi'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_debitur' => 'required',
            'alamat_debitur' => 'required'
        ]);

        $transaksi = Transaksi::create([
            'nama_debitur' => $request->nama_debitur,
            'alamat_debitur' => $request->alamat_debitur,
            'jenis_pembiayaan' => $request->jenis_pembiayaan,
            'jenis_jaminan' => $request->jenis_jaminan,
            'tujuan_pembiayaan' => $request->tujuan_pembiayaan,
            'segmen_industri' => $request->segmen_industri,
            'bowheer' => $request->bowheer,
            'bowheer_type' => $request->bowheer_type,
            'bowheer_industri' => $request->bowheer_industri,
            'asset_type' => $request->asset_type,
            'asset_status' => $request->asset_status,
            'category' => $request->category,
            'merk' => $request->merk,
            'kondisi_kendaraan' => $request->kondisi_kendaraan,
            'tahun_unit' => $request->tahun_unit,
            'stnk_name' => $request->stnk_name,
            'user_asset' => $request->user_asset,
            'location_asset' => $request->location_asset,
            'dealer_name' => $request->dealer_name,
            'no_pic_dealer' => $request->no_pic_dealer,
            'karoseri_name' => $request->karoseri_name,
            'pic_karoseri' => $request->pic_karoseri,
            'no_telp_karoseri' => $request->no_telp_karoseri,
            'harga_karoseri' => $request->harga_karoseri,
            'harga_otr_nett_per_unit' => $request->harga_otr_nett_per_unit,
            'total_unit' => $request->total_unit,
            'total_harga' => $request->total_harga,
            'harga_phjmb' => $request->harga_phjmb,
            'down_payment' => $request->down_payment,
            'premi_asuransi_dibayar_dimuka' => $request->premi_asuransi_dibayar_dimuka,
            'premi_asuransi_cover_giro' => $request->premi_asuransi_cover_giro,
            'pokok_hutang' => $request->pokok_hutang,
            'tenor' => $request->tenor,
            'type_pembayaran' => $request->type_pembayaran,
            'rate_dasar' => $request->rate_dasar,
            'rate_jual' => $request->rate_jual,
            'rate_premi_asuransi' => $request->rate_premi_asuransi,
            'jenis_cover_asuransi' => $request->jenis_cover_asuransi,
            'perusahaan_asuransi' => $request->perusahaan_asuransi,
            'perluasan_asuransi' => $request->perluasan_asuransi,
            'biaya_admin_dasar' => $request->biaya_admin_dasar,
            'biaya_admin_jual' => $request->biaya_admin_jual,
            'biaya_provisi' => $request->biaya_provisi,
            'biaya_fiducia' => $request->biaya_fiducia,
            'angsuran_per_bulan' => $request->angsuran_per_bulan,
            'total_pembayaran_ke_mtf' => $request->total_pembayaran_ke_mtf,
            'total_pembayaran_ke_dealer' => $request->total_pembayaran_ke_dealer,
            'pelunasan_mtf_to_dealer' => $request->pelunasan_mtf_to_dealer,
            'status' => $request->status,
            'no_mpp' => $request->no_mpp,
            'tanggal' => $request->tanggal,
            'cara_pembayaran_angsuran' => $request->cara_pembayaran_angsuran,
        ]);

        return redirect()->route('home')->withSuccess('Success add new Transaksi Detail');
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi, $id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::where('id', $id)->first();
            return view('edit.index', compact('transaksi'));
        }
    }

    public function preview(Transaksi $transaksi, $id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::where('id', $id)->first();
            return view('preview.index', compact('transaksi'));
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_debitur' => 'required',
            'alamat_debitur' => 'required'
        ]);

        $transaksi = Transaksi::where('id', $id)->update([
            'nama_debitur' => $request->nama_debitur,
            'alamat_debitur' => $request->alamat_debitur,
            'jenis_pembiayaan' => $request->jenis_pembiayaan,
            'jenis_jaminan' => $request->jenis_jaminan,
            'tujuan_pembiayaan' => $request->tujuan_pembiayaan,
            'segmen_industri' => $request->segmen_industri,
            'bowheer' => $request->bowheer,
            'bowheer_type' => $request->bowheer_type,
            'bowheer_industri' => $request->bowheer_industri,
            'asset_type' => $request->asset_type,
            'asset_status' => $request->asset_status,
            'category' => $request->category,
            'merk' => $request->merk,
            'kondisi_kendaraan' => $request->kondisi_kendaraan,
            'tahun_unit' => $request->tahun_unit,
            'stnk_name' => $request->stnk_name,
            'user_asset' => $request->user_asset,
            'location_asset' => $request->location_asset,
            'dealer_name' => $request->dealer_name,
            'no_pic_dealer' => $request->no_pic_dealer,
            'karoseri_name' => $request->karoseri_name,
            'pic_karoseri' => $request->pic_karoseri,
            'no_telp_karoseri' => $request->no_telp_karoseri,
            'harga_karoseri' => $request->harga_karoseri,
            'harga_otr_nett_per_unit' => $request->harga_otr_nett_per_unit,
            'total_unit' => $request->total_unit,
            'total_harga' => $request->total_harga,
            'harga_phjmb' => $request->harga_phjmb,
            'down_payment' => $request->down_payment,
            'premi_asuransi_dibayar_dimuka' => $request->premi_asuransi_dibayar_dimuka,
            'premi_asuransi_cover_giro' => $request->premi_asuransi_cover_giro,
            'pokok_hutang' => $request->pokok_hutang,
            'tenor' => $request->tenor,
            'type_pembayaran' => $request->type_pembayaran,
            'rate_dasar' => $request->rate_dasar,
            'rate_jual' => $request->rate_jual,
            'rate_premi_asuransi' => $request->rate_premi_asuransi,
            'jenis_cover_asuransi' => $request->jenis_cover_asuransi,
            'perusahaan_asuransi' => $request->perusahaan_asuransi,
            'perluasan_asuransi' => $request->perluasan_asuransi,
            'biaya_admin_dasar' => $request->biaya_admin_dasar,
            'biaya_admin_jual' => $request->biaya_admin_jual,
            'biaya_provisi' => $request->biaya_provisi,
            'biaya_fiducia' => $request->biaya_fiducia,
            'angsuran_per_bulan' => $request->angsuran_per_bulan,
            'total_pembayaran_ke_mtf' => $request->total_pembayaran_ke_mtf,
            'total_pembayaran_ke_dealer' => $request->total_pembayaran_ke_dealer,
            'pelunasan_mtf_to_dealer' => $request->pelunasan_mtf_to_dealer,
            'status' => $request->status,
            'no_mpp' => $request->no_mpp,
            'tanggal' => $request->tanggal,
            'cara_pembayaran_angsuran' => $request->cara_pembayaran_angsuran,
        ]);

        return redirect()->route('home')->withSuccess('Success Update Transaksi Detail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

    public function print($id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::where('id', $id)->first();
            return view('mpp', compact('transaksi'));
        }
    }

    public function po($id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::where('id', $id)->first();
            return view('po', compact('transaksi'));
        }
    }

    public function po_cust($id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::where('id', $id)->first();
            return view('po-cust', compact('transaksi'));
        }
    }
}
