<?php
    
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
    
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('role:Admin', ['only' => ['index','store']]);
         
    }

    
    public function index()
    {
        $siswa = DB::table('users')
        ->where('role', "siswa")
        ->count();
        $petugas = DB::table('users')
        ->where('role', "petugas")
        ->count();
        $spp = DB::table('spp')
        ->count();
        $spp1 = DB::table('spp')
        ->where('status', 1)
        ->count();
        $spp0 = DB::table('spp')
        ->where('status', 0)
        ->count();


        return view('admin/index',['siswa' => $siswa, 'petugas' => $petugas, 'spp' => $spp, 'spp1' => $spp1, 'spp0' => $spp0]);
       
    }
   
    public function show($id)
    {
       
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}