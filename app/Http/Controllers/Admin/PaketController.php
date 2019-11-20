<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Paket_data;
use App\Kode_output;
use Illuminate\Http\Request;
use Datatables;
use DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketlist = Paket_data::all();
        $kodeoutput = Kode_output::pluck('nmoutput','kdoutput');
        $filter_abat=DB::table('tblkdoutput')
                    ->leftjoin('tblabat','tblkdoutput.tblabat_id','=','tblabat.id')
                    ->leftjoin('tblrehabbangun','tblkdoutput.tblabat_id','=','tblrehabbangun.id')
                    ->leftjoin('tblabjiat','tblkdoutput.tblabat_id','=','tblabjiat.id')
                    ->select('tblabat.*','tblrehabbangun.*','tblabjiat.*')
                    //->groupBy('tblabat_id')
                    ->get();
        
        //dd($filter_abat);
        return view('admin.paket.list', compact('paketlist','kodeoutput'));
    }

    public function kdoutputAjax($kdoutput){
        if($id==0){
            $paketlist = Paket_data::all();
        }else{
            $paketlist = Paket_data::where('kdoutput_id','=',$kdoutput)->get();
        }
        return $paketlist;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function show(Paket_data $paket_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket_data $paket_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket_data $paket_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket_data $paket_data)
    {
        //
    }

    // public function filter(Paket_data $paket_data)
    // {
    //     $filter=DB::table('tblkdoutput')
    //             ->join('tblabat','tblkdoutput.tblabat_id','=','tblabat.id')
    //             ->join('tblrehabbangun','tblkdoutput.tblabat_id','=','tglrehabbangun.id')
    //             ->join('tblabjiat','tblkdoutput.tblabat_id','=','tglabjiat.id')
    //             ->get()
    // }
}
