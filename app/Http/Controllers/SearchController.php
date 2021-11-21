<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $req)
    {
        if(isset($_GET['query']))
        {        
         $query = $_GET['query'];   
         
          $contres = DB::table('clients')
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('spouse', 'like', '%'.$query.'%')
            ->orWhere('spouse_work', 'like', '%'.$query.'%')
            ->orWhere('children_count', 'like', '%'.$query.'%')
            ->orWhere('famliy_member_count', 'like', '%'.$query.'%')
            ->orWhere('income_generators_count', 'like', '%'.$query.'%')
            ->orWhere('pasport_series', 'like', '%'.$query.'%')
            ->paginate(5);
           return view('clent',['a'=>$contres]);

        }
    }
    public function search2(Request $req)
    { 
        if(isset($_GET['query']))
        {        
         $query = $_GET['query'];   
         
          $contres = DB::table('clemtfamlimembers')
            ->where('full_name', 'like', '%'.$query.'%')
            ->orWhere('relation_type', 'like', '%'.$query.'%')
            ->orWhere('work', 'like', '%'.$query.'%')
            ->orWhere('work_adress', 'like', '%'.$query.'%')
            ->orWhere('income', 'like', '%'.$query.'%')
            ->paginate(10);
            $b = DB::table('deals')
            ->where('id', 'like', '%'.$query.'%')
            ->orWhere('idy', 'like', '%'.$query.'%')
            ->orWhere('payment_term', 'like', '%'.$query.'%')
            ->orWhere('mani_famliy_expene', 'like', '%'.$query.'%')
            ->orWhere('created_by', 'like', '%'.$query.'%')
            ->orWhere('created_at', 'like', '%'.$query.'%')
            ->orWhere('created_by_conclusion', 'like', '%'.$query.'%')
            ->orWhere('monitored_by', 'like', '%'.$query.'%')
            ->orWhere('monitored_at', 'like', '%'.$query.'%')
            ->orWhere('committee_member', 'like', '%'.$query.'%')
            ->orWhere('committee_conslusion', 'like', '%'.$query.'%')
            ->orWhere('committee_date', 'like', '%'.$query.'%')
            ->paginate(10);
            return view('malumot',['a'=>$contres], compact('b'));
         }
                    
        // if(isset($_GET['query'])){
        //    $search=$_GET['query'];   
        //    $contres=DB::table('clemtfamlimembers')->where('full_name','LIKE','%'.$search.'%')->paginate(10);
        //    return view('malumot',['a'=>$contres]);
        // }
        
    }
    public function search25(Request $req)
    {
        if(isset($_GET['query']))
        {        
         $query = $_GET['query'];   
         
          $contres = DB::table('clients')
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('spouse', 'like', '%'.$query.'%')
            ->orWhere('spouse_work', 'like', '%'.$query.'%')
            ->orWhere('children_count', 'like', '%'.$query.'%')
            ->orWhere('famliy_member_count', 'like', '%'.$query.'%')
            ->orWhere('income_generators_count', 'like', '%'.$query.'%')
            ->orWhere('pasport_series', 'like', '%'.$query.'%')
            ->paginate(5);
           return view('Dels.praduct',['a'=>$contres]);

        }else{
            return view('clent');
        }
    }
    public function search3(Request $req)
    { 
        if(isset($_GET['query']))
        {        
         $query = $_GET['query'];   
         
          $contres = DB::table('deals')
            ->where('id', 'like', '%'.$query.'%')
            ->orWhere('idy', 'like', '%'.$query.'%')
            ->orWhere('payment_term', 'like', '%'.$query.'%')
            ->orWhere('mani_famliy_expene', 'like', '%'.$query.'%')
            ->orWhere('created_by', 'like', '%'.$query.'%')
            ->orWhere('created_at', 'like', '%'.$query.'%')
            ->orWhere('created_by_conclusion', 'like', '%'.$query.'%')
            ->orWhere('monitored_by', 'like', '%'.$query.'%')
            ->orWhere('monitored_at', 'like', '%'.$query.'%')
            ->orWhere('committee_member', 'like', '%'.$query.'%')
            ->orWhere('committee_conslusion', 'like', '%'.$query.'%')
            ->orWhere('committee_date', 'like', '%'.$query.'%')
            ->paginate(10);
            return view('Dels.delsedit',['a'=>$contres]);
        }        
    }
 
}
