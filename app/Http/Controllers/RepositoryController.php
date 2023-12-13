<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index () {

$repositories=Repository::all();
$data =[
    'repositories'=>$repositories
 ];
 return view('repository.index', $data);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
}
