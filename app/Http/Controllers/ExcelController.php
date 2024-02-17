<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use App\Imports\DataImport;
use Excel;
class ExcelController extends Controller
{
    
    public function index()
    { // export all data  // get method
        
        $data = Excel::download( new DataExport , "data.xlsx" );
        return $data; 

    }

  
    public function create()
    { 
       

       
    }

   
    public function store(Request $request)
    { // post method //impoert all data
       
       Excel::import(new DataImport, $request->file("file"));
        return redirect('/excel');
    }

   
    public function show(string $id)
    {
       
    }

  
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
