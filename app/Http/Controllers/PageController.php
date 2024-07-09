<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Iklan;
use App\Models\Gelery;
use App\Models\General;
use App\Models\Submenu;
use App\Models\Visitor;
use App\Models\Mainmenu;
use App\Models\Template;
use App\Models\Portofolio;
use App\Models\Testimonial;
use App\Models\Categoryblog;
use Illuminate\Http\Request;
use App\Models\Categoryporto;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{


  public function admin()
  {
    $testimonial = Testimonial::all();
    $galeri = Gelery::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $portofolio = Portofolio::all();
    $blog = Blog::all();
    $visitor = Visitor::all();
    $visitDay = Visitor::whereDate('tanggal', Carbon::today())->get();
    $startDate = Carbon::now()->startOfMonth();
    $endDate = Carbon::now()->endOfMonth();
    $visitMonth = Visitor::whereBetween('created_at', [$startDate, $endDate])->get();
    return view('backend.dahboard', compact(  'visitMonth', 'visitDay', 'visitor','blog', 'categoryporto','categoryblog', 'testimonial', 'galeri', 'portofolio'));
  }
  public function index()
  {

    $general = General::first();
    // $feature = Feature::first();
 
    $testimonial = Testimonial::all();
    $portofolio = Portofolio::all();
    $template = Template::first();
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

    return view('frontend.index-b', compact('categoryblog', 'categoryporto', 'mainMenu', 'template', 'portofolio', 'testimonial', 'subMenu', 'general'));
  }

  public function about()
  {

    $template = Template::first();
    // $feature = Feature::first();
    $mainMenu = Mainmenu::all();
    $subMenu = Submenu::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $galery = Gelery::all();
    $about = About::first();

    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('/about');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/about'),
        'tanggal' => date('Y-m-d')
      ]);
    }


    return view('frontend.about-b', compact('about', 'galery', 'subMenu', 'general', 'categoryblog', 'categoryporto','mainMenu', 'template',));
  }
  
  

  public function portofolio()
  {

    $template = Template::first();

    $categoryporto = Categoryporto::all();
    $portofolios = Portofolio::with('categoryporto')->latest()->paginate(6);
    $mainMenu = Mainmenu::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();

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

    return view('frontend.portofolio-b', compact('subMenu', 'general', 'categoryblog','mainMenu', 'portofolios', 'template', 'categoryporto'));
  }
  public function detailPorto($slug)
  {
    $template = Template::first();
    $data = Portofolio::where('slug', $slug)->first();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();

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


    return view('frontend.detail-portofolio-b', compact('subMenu', 'general', 'categoryblog', 'categoryporto','mainMenu', 'data','template'));
  }

  public function blog()
  {
    $template = Template::first();
    $categoryblog  = Categoryblog::all();
    $blogs = Blog::with('categoryblog')->paginate(3);
    $blogsb = Blog::latest()->paginate(5);
    $mainMenu = Mainmenu::all();
    $general = General::first();
    $iklanblogs = Iklan::latest()->get();
    $mainMenu = Mainmenu::all();
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
    return view('frontend.blog-b', compact('mainMenu', 'total' ,'blogsb','iklanblogs', 'categoryblog', 'general', 'blogs', 'template'));
  }

  public function detailBlog($slug)
  {
    $data = Blog::where('slug', $slug)->first();
    $template = Template::first();
    $galery = Gelery::paginate(9);
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $general = General::first();
    $categoryblog = Categoryblog::all();
    $subMenu = Submenu::all();
    $iklanblogs = Iklan::latest()->get();
    $blogsb = Blog::latest()->paginate(5);
    

    return view('frontend.detail-blog-b', compact('subMenu', 'iklanblogs', 'blogsb', 'general', 'categoryblog', 'categoryporto','mainMenu', 'categoryblog', 'template', 'data', 'galery'));
  }

  public function blogSearch(Request $request)
  {
    $searchTerm = $request->input('search');
    $blogs = Blog::where('judul', 'like', '%' . $searchTerm . '%')
      ->orWhere('body', 'like', '%' . $searchTerm . '%')
      ->paginate(5);
    $general = General::first();
    $galery = Gelery::paginate(9);
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $subMenu = Submenu::all();
    $template = Template::first();
    $iklanblogs = Iklan::latest()->get();

    return view('frontend.blog-b', compact('blogs', 'iklanblogs', 'searchTerm', 'general', 'galery', 'categoryblog', 'mainMenu','categoryporto', 'subMenu', 'template'));
  }

  public function filterBlog($category)
  {
    $category = Categoryblog::with('blogs')->where('slug', $category)->first();
    $blogs = $category->blogs()->latest()->paginate(5);
    $general = General::first();
    $galery = Gelery::paginate(9);
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryporto = Categoryporto::all();
    $subMenu = Submenu::all();
    $template = Template::first();
    $iklanblogs = Iklan::latest()->get();

    return view('frontend.blog', compact('blogs', 'iklanblogs', 'template', 'general', 'galery', 'categoryblog', 'mainMenu','categoryporto', 'subMenu', 'category'));
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
