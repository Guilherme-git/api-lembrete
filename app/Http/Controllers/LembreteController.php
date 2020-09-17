<?php

namespace App\Http\Controllers;


use App\Models\Lembrete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LembreteController extends Controller
{
    public function create(Request $request)
    {
        $lembrete = new Lembrete();

        $lembrete->title = $request->title;
        $lembrete->date = $request->date;
        $lembrete->text = $request->text;
        $status = $lembrete->save();

        if($status)
        {
            $lembrete = [
                "title"=>$request->title,
                "date"=>$request->date,
                "text"=>$request->text
            ];
            return json_encode($lembrete);
        }
    }

    public function show()
    {
      $lembrete = DB::table('lembrete')
          ->orderBy('id','DESC')
          ->get();

      return json_encode($lembrete);
    }

    public function delete(Request $request)
    {
        Lembrete::destroy($request->id);
    }
    
    public function searchEdit(Request $request)
    {
        $lembrete = DB::table('lembrete')
            ->orderBy('id','DESC')
            ->where('id','=',$request->id)
            ->get();

        if($lembrete){
            return json_encode($lembrete);
        }
    }

    public function edit(Request $request)
    {
        $lembrete = Lembrete::find($request->id);
        $lembrete->title = $request->title;
        $lembrete->date = $request->date;
        $lembrete->text = $request->text;
        $status = $lembrete->save();

        if($status)
        {
            $lembrete = [
                "title"=>$request->title,
                "date"=>$request->date,
                "text"=>$request->text
            ];
            return json_encode($lembrete);
        }
    }
}
