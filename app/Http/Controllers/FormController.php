<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function masalahform()
    {
    	return view('pages/masalahform');
    }

   public function viewmasalah()
   {
   		$data_masalah = \App\Masalah::all();
   		return view ('pages/viewmasalah',['data_masalah' => $data_masalah]);
   }

   public function viewquery()
   {
   		$data_masalah = \App\Masalah::all();
   		$data_query = \App\query::all();
   		return view ('pages/viewquery',['data_masalah'=>$data_masalah],['data_query'=>$data_query]);
   }

   public function detailmasalah($id_masalah)
   {
   	$masalah = \App\Masalah::find($id_masalah);
   	$data_query = \App\query::all();
   		return view ('pages/detailmasalah',['data_masalah' => $masalah],['data_query'=> $data_query]);
   }

   public function edit($id_masalah)
   {
    return view ('pages/edit');
   }

   public function result()
   {
    
    return view ('pages/result');
   }
}
