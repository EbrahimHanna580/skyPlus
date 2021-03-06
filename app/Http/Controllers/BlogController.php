<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {
        $articles = Article::where('status', 'like', 'PUBLISHED')
                            ->orderBy('created_at', 'DESC')->get();

        return view('blog.index')->with(compact('articles', $articles));
    }

    public function viewBlog(Request $request) {

        $article = Article::find($request->id);

        return view('blog.single_blog')->with(compact('article', $article));
    }
}
=======
<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {
        $articles = Article::where('status', 'like', 'PUBLISHED')
                            ->orderBy('created_at', 'DESC')->get();

        return view('blog.index')->with(compact('articles', $articles));
    }

    public function viewBlog(Request $request) {

        $article = Article::find($request->id);

        return view('blog.single_blog')->with(compact('article', $article));
    }
}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
