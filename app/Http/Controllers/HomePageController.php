<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Paket;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use PDF;





class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['laundry'] = Laundry::take(4)->get();
        $data['page'] = "Home";
        $cekAuth=Auth::check(); 
        if ($cekAuth==1) {
            return view('homepage_auth',$data);
        }else{
            return view('homepage',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

     public function profile()
     {
        $data['page'] = "Profile";
        $id_user=Auth::user()->id;
        $data['id_user']=Auth::user()->id;
        $data['profile'] = User::where('id', $id_user)->get();
        return view('profile',$data);

     }

     public function laundry()
     {
        $cekAuth=Auth::check();
        if ($cekAuth==1) {
            $id_user=Auth::user()->id;
            $data['laundry'] = Laundry::all();
            $data['page'] = "Store";
            $data['id_user']=Auth::user()->id;
            $data['profile'] = User::where('id', $id_user)->get();
            return view('homepage_store',$data);
        }else{
            $data['laundry'] = Laundry::all();
            $data['page'] = "Store";
            return view('homepage_store_guest',$data);
        }

     }

     public function detail()
    {
        $cekAuth=Auth::check();
        $id=request()->get('str');
        
        if ($cekAuth==1) {
            $data['store'] = request()->get('str');
            $data['laundry'] = Laundry::where('id', $id)->get();
            $data['paket'] = Paket::where('id_toko', $id)->get();
            $data['page'] = "Store";
            return view('homepage_product',$data);
        }else{
            $data['store'] = request()->get('str');
            $data['laundry'] = Laundry::where('id', $id)->get();
            $data['paket'] = Paket::where('id_toko', $id)->get();
            $data['page'] = "Store";
            return view('homepage_product_guest',$data);
        }
    }



    public function create()
    {
        $data['page'] = "Store";
        $id_toko=request()->get('str');
        $id_paket=request()->get('prd');
        $data['user']=Auth::user()->id;
        $data['laundry'] = Laundry::where('id', $id_toko)->get();
        $data['user'] = User::where('id', Auth::user()->id)->get();
        $data['laundry'] = Laundry::where('id', $id_toko)->get();
        $data['paket'] = Paket::where('id', $id_paket)->get();
        return view('purchase',$data);
    }


    public function confirm()
    {
        $data['page'] = "Store";
        $id_paket=request()->post('id_paket');
        $id_toko=request()->post('id_toko');
        $berat=request()->post('berat');
        $harga=request()->post('harga');
        
        $data['total']=$berat*$harga;
        $data['paket'] = Paket::where('id', $id_paket)->get();
        $data['laundry'] = Laundry::where('id', $id_toko)->get();
        $data['berat']=request()->post('berat');
        $data['id_user']=Auth::user()->id;
        $data['id_toko']=request()->post('id_toko');
        $data['id_paket']=request()->post('id_paket');
        $data['berat']=request()->post('berat');
        return view('confirm',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'id_user' => 'required',
                'id_toko' => 'required',
                'id_paket' => 'required',
                'berat' => 'required',
                'total' => 'required',
                'payment' => 'required',
                'status' => 'required'
            ],
            [
                'id_user.required' => 'Nama Pelanggan Wajib Diisi',
                'id_toko.required' => 'Nama Laundry Wajib Diisi',
                'id_paket.required' => 'Paket Wajib Diisi',
                'berat.required' => 'Berat Cucian Wajib Diisi',
                'total.required' => 'Total Biaya Wajib Diisi',
                'payment.required' => 'Metode Pembayaran Wajib Diisi',
                'status.required' => 'Status Wajib Diisi'          
            ]
        );

        Transaksi::create($validated);
        return redirect('/orderan')->withSuccess(['Berhasil Melakukan Orderan, Mohon Menunggu Konfirmasi Admin Laundry Yang Dituju!']);
    }

    public function orderan()
    {
       $data['page'] = "Orderan";
       $id_user=Auth::user()->id;
       $data['id_user']=Auth::user()->id;
       $data['transaksi'] = DB::table('transaksis')
       ->join('users', 'transaksis.id_user', '=', 'users.id')
       ->join('laundries', 'transaksis.id_toko', '=', 'laundries.id')
       ->join('pakets', 'transaksis.id_paket', '=', 'pakets.id')
       ->select('laundries.nama as nama_laundry','users.nama as nama_user','pakets.nama_paket','transaksis.*')
       ->where('transaksis.id_user',$id_user)
       ->get();
       return view('orderan',$data);

    }

    public function invoice(string $id)
    {
        $id_user=Auth::user()->id;
        $data['id']=$id;
        $data['page']="Orderan";
        $data['transaksi'] = DB::table('transaksis')
        ->join('users', 'transaksis.id_user', '=', 'users.id')
        ->join('laundries', 'transaksis.id_toko', '=', 'laundries.id')
        ->join('pakets', 'transaksis.id_paket', '=', 'pakets.id')
        ->select('laundries.nama as nama_laundry','users.nama as nama_user','pakets.nama_paket','pakets.harga as harga_paket','transaksis.*')
        ->where('transaksis.id',$id)
        ->get();
 
        // return view('invoice',$data);

	    $pdf = PDF::loadview('invoice',$data)->setOptions(['defaultFont' => 'sans-serif']);
	    return $pdf->download('INV'.$id.'.pdf');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
