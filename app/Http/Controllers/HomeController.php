<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Followable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

/*
       $questions = Question::with([
            'user',
            'answers' => function($query){ 
                    $query->orderBy('created_at','desc');
                },
            'tags'
            ])->latest()->get(); 
            */
            
   $tempquestions = DB::table('questions')
        ->join('question_tag','question_tag.question_id','=','questions.id')->whereIn('question_tag.tag_id',function($query){
            $query->select('followable_id')
                ->from(with(new Followable)->getTable())
                ->where('user_id',Auth::id())
                ->where('followable_type','App\Tag');
        })
       ->select('questions.id')->get();
                 
    $qids = array();
    foreach($tempquestions as $question){
        array_push($qids, $question->id);
    }
    
    $questions = Question::with([
            'user',
            'answers' => function($query){ 
                    $query->orderBy('created_at','desc');
                },
            'tags'
            ])->whereIn('id',$qids)->latest()->get(); 
      $user_bookmarks = array();
        foreach(Auth::user()->bookmarks as $bookmark)
            array_push($user_bookmarks, $bookmark->pivot->answer_id);

        $wantquestions = Auth::user()->following_questions()->get();
        $wids = array();
       foreach($wantquestions as $question)
            array_push($wids,$question->id);

        return view('home',['questions' => $questions,'user_bookmarks' => $user_bookmarks,'wids' => $wids]);

    }
        
       
    
}
