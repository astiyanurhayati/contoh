<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Iklan;
use App\Models\Gelery;
use App\Models\General;
use App\Models\Submenu;
use App\Models\Visitor;
use App\Models\Mainmenu;
use App\Models\Portofolio;
use App\Models\Categoryblog;
use Illuminate\Http\Request;
use App\Models\Categoryporto;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{


  public function admin()
  {

    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $portofolio = Portofolio::all();
    $blog = Blog::all();
    $visitor = Visitor::all();
    $visitDay = Visitor::whereDate('tanggal', Carbon::today())->get();
    $startDate = Carbon::now()->startOfMonth();
    $endDate = Carbon::now()->endOfMonth();
    $visitMonth = Visitor::whereBetween('created_at', [$startDate, $endDate])->get();
    return view('backend.dahboard', compact(  'visitMonth', 'visitDay', 'visitor','blog', 'categoryporto','categoryblog', 'portofolio'));
  }
  public function index()
  {

    $general = General::first();
    $portofolio = Portofolio::all();
    $subMenu = Submenu::all();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();

    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('/');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/'),
        'tanggal' => date('Y-m-d')
      ]);
    }

    return view('frontend.index-b', compact('categoryblog', 'categoryporto', 'mainMenu', 'portofolio', 'subMenu', 'general'));
  }  

  public function portofolio()
  {
    $categoryporto = Categoryporto::all();
    $portofolios = Portofolio::with('categoryporto')->latest()->paginate(6);
    $mainMenu = Mainmenu::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('portofolio');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/portofolio'),
        'tanggal' => date('Y-m-d')
      ]);
    }

    return view('frontend.portofolio-b', compact( 'general', 'categoryblog','mainMenu', 'portofolios', 'categoryporto'));
  }
  public function detailPorto($slug)
  {
    $data = Portofolio::where('slug', $slug)->first();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('portofolio/' . $data->slug);
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('portofolio/' . $data->slug),
        'tanggal' => date('Y-m-d')
      ]);
    }


    return view('frontend.detail-portofolio-b', compact( 'general', 'categoryblog', 'categoryporto','mainMenu', 'data','template'));
  }

  public function blog()
  {
    $categoryblog  = Categoryblog::all();
   
    $blogs = Blog::with('categoryblog')->paginate(3);

    $blogsb = Blog::latest()->paginate(5);
    $mainMenu = Mainmenu::all();
    $general = General::first();
    $iklanblogs = Iklan::latest()->get();
    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('blog');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/blog'),
        'tanggal' => date('Y-m-d')
      ]);
    }
    $total = Blog::select('categoryblog_id', DB::raw('count(id) as total'))
    ->groupBy('categoryblog_id')
    ->get();
    return view('frontend.blog-b', compact('mainMenu', 'total' ,'blogsb','iklanblogs', 'categoryblog', 'general', 'blogs'));
  }

  public function detailBlog($slug)
  {
    $data = Blog::where('slug', $slug)->first();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $general = General::first();
    $categoryblog = Categoryblog::all();
    $subMenu = Submenu::all();
    $iklanblogs = Iklan::latest()->get();
    $blogsb = Blog::latest()->paginate(5);
    

    return view('frontend.detail-blog-b', compact('subMenu', 'iklanblogs', 'blogsb', 'general', 'categoryblog', 'categoryporto','mainMenu', 'categoryblog', 'data'));
  }

  public function blogSearch(Request $request)
  {
    $searchTerm = $request->input('search');
    $blogs = Blog::where('judul', 'like', '%' . $searchTerm . '%')
      ->orWhere('body', 'like', '%' . $searchTerm . '%')
      ->paginate(5);
    $general = General::first();
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $iklanblogs = Iklan::latest()->get();
    $total = Blog::select('categoryblog_id', DB::raw('count(id) as total'))
    ->groupBy('categoryblog_id')
    ->get();
    $blogsb = Blog::latest()->paginate(5);

    return view('frontend.blog-b', compact('blogs', 'blogsb', 'iklanblogs', 'searchTerm', 'general',  'categoryblog', 'mainMenu','categoryporto', 'total'));
  }

  public function filterBlog($category)
  {
    $category = Categoryblog::with('blogs')->where('slug', $category)->first();
    $blogs = $category->blogs()->latest()->paginate(5);
    $general = General::first();

    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $subMenu = Submenu::all();
    $iklanblogs = Iklan::latest()->get();
    $total = Blog::select('categoryblog_id', DB::raw('count(id) as total'))
    ->groupBy('categoryblog_id')
    ->get();

    return view('frontend.blog-b', compact('blogs', 'total', 'iklanblogs', 'general', 'categoryblog', 'mainMenu','categoryporto','category'));
  }


  function sitemap()
  {
    $posts = Mainmenu::getHeader()->where('name', '!=', '#');
    $subMenu = Submenu::getHeader()->where('url', '!=', '#');

    return response()->view('sitemap', [
      'collection' => $posts,
      'subMenu' => $subMenu
    ])->header('Content-Type', 'text/xml');
  }
}
