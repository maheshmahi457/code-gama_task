<?php

namespace App\Http\Controllers;

use App\Models\Statastics;
use App\Models\Tags;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function insertData(Request $request){
        $data = $request->all();
        $objTag = new Tags;
        $tagName = $objTag->select('id')->where('tag_name',$data['tags_id'])->first();
        $data['tags_id'] = $tagName->id;
        $result = Statastics::create($data);
        if($result) return redirect('/home')->with('inserted tag successfully');
    }

    public function insertTag(Request $request){
        $data = $request->all();
        $result = Tags::create($data);
        if($result) return redirect('/home')->with('inserted tag successfully');
    }

    public function display(Request $request){
        $objStats = new Statastics();
        $tagName = isset($request->tag_name) ? $request->tag_name : '';
        $stats = [];
        $stats = $objStats->select('tags_id',DB::raw("sum(que_accepted) as que_accepted"),
        DB::raw("sum(que_voted) as que_voted"),
        DB::raw("sum(ans_voted) as ans_voted"),
        DB::raw("sum(que_viewed) as que_viewed"),
        DB::raw("sum(comments) as comments"))
        ->join('tags as t','tags_id','t.id')->where('t.tag_name',$tagName)
        ->groupBy('tags_id')->get()->toArray();
        if(!empty($stats) && isset($stats[0])){
            foreach(array_keys($stats[0]) as $colum){
                if($colum != 'tags_id')
                    $result[] = (object) ['field' => $colum, 'value' => $stats[0][$colum]];
            }
        }
        return view('display',compact('result','tagName'));
    }

    public function home(Request $request){
        $tags = Tags::all();
        return view('home',compact('tags'));
    }
}
