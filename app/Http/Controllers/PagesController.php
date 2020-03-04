<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;


class PagesController extends BaseAPIController {


    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index() {
        $articles = Article::where('status', 'like', 'PUBLISHED')
                            ->orderBy('created_at', 'desc')->limit(3)->get();
        return view('index')->with(compact('articles', $articles));
    }



}
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;


class PagesController extends BaseAPIController {


    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index() {
        $articles = Article::where('status', 'like', 'PUBLISHED')
                            ->orderBy('created_at', 'desc')->limit(3)->get();
        return view('index')->with(compact('articles', $articles));
    }



}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
