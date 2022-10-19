<?php

namespace ProcessDrive\LaravelCloudTranslation\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use ProcessDrive\LaravelCloudTranslation\CloudTranslate;
use ProcessDrive\LaravelCloudTranslation\Models\Translations;
use DB;
use DataTables;

class TransController extends Controller
{
   public function index ()
   {
        return view('LaravelCloudTranslation::translation');
   }

   public function getTranslation(Request $request)
   {
       if ($request->ajax()) {
           $data =  Translations::all();
           $language = $request->get('lang');
           return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('text', function($row) use ($language){
                    return $row->text[$language];
                })
               ->addColumn('action', function($row){
                   $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                   return $actionBtn;
               })
               ->rawColumns(['action'])
               ->make(true);
       }
   }

}
