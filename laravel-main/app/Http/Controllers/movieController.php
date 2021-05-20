<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie{
    public $title;
    public $description;

    public function __construct($titleCon, $descrCon = ''){
        $this -> title = $titleCon;
        
        if(!$descrCon){
            $this -> description = 'No description found...';
        }else{
            $this -> description = $descrCon;
        }
    }

    public function getMovieInfo(){
        return '- Title: ' . $this -> title . "\n" . '- Description: ' .  $this -> description . "\n";
    }
}

class movieController extends Controller
{
    public function indexView(){
        $movie1 = new Movie('Mowgli', 'Il libro della Giungla è bla bla bla bla bla bla');
        $movie2 = new Movie('Tarzan');
        $movie3 = new Movie('Guardiani della Galassia', 'Descr bla bdasdsad asjhdjas asla bla bla bla');

        $descr1 = $movie1 -> getMovieInfo();
        $descr2 = $movie2 -> getMovieInfo();
        $descr3 = $movie3 -> getMovieInfo();

        dd($descr1, $descr2, $descr3);
        return view('pages.index');
    }
}
