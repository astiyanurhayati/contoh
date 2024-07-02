<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Productclick;
use App\Models\Shop;
use App\Models\Staf;
use App\Models\About;
use App\Models\Price;
use App\Models\Gelery;
use App\Models\Recipe;
use App\Models\Feature;
use App\Models\General;
use App\Models\Opening;
use App\Models\Slidder;
use App\Models\Special;
use App\Models\Submenu;
use App\Models\Visitor;
use App\Models\Mainmenu;
use App\Models\Pagestaf;
use App\Models\Template;
use App\Models\Portofolio;
use App\Models\Sliderecipe;
use App\Models\Testimonial;
use App\Models\Categoryblog;
use Illuminate\Http\Request;
use App\Models\Categoryporto;
use App\Models\Categoryproduk;
use App\Models\Categoryrecipe;
use App\Models\Formcontact;
use App\Models\Iklan;
use Illuminate\Support\Carbon;

class PageController extends Controller
{


  public function admin()
  {
    $slidder = Slidder::all();
    $testimonial = Testimonial::all();
    $galeri = Gelery::all();
    $slideRecipe = Sliderecipe::all();
    $categoryporto = Categoryporto::all();
    $categoryproduk = Categoryproduk::all();
    $categoryblog = Categoryblog::all();
    $categoryrecipe  = Categoryrecipe::all();
    $portofolio = Portofolio::all();
    $shop = Shop::all();
    $contactMessage = Formcontact::all();

    $staff = Staf::all();
    $blog = Blog::all();
    $special = Special::all();
    $recipe = Recipe::all();
    $price = Price::all();
    $visitor = Visitor::all();
    $visitDay = Visitor::whereDate('tanggal', Carbon::today())->get();

    $startDate = Carbon::now()->startOfMonth();
    $endDate = Carbon::now()->endOfMonth();
    $visitMonth = Visitor::whereBetween('created_at', [$startDate, $endDate])->get();


    return view('backend.dahboard', compact('contactMessage', 'shop', 'visitMonth', 'visitDay', 'visitor', 'price', 'recipe', 'special', 'blog', 'staff', 'categoryrecipe', 'categoryporto', 'categoryproduk', 'categoryblog', 'slideRecipe', 'slidder', 'testimonial', 'galeri', 'portofolio'));
  }
  public function index()
  {

    $general = General::first();
    $slidder = Slidder::all();
    $specialies = Special::all();
    $feature = Feature::first();
    $recipe = Recipe::paginate(6);
    $testimonial = Testimonial::all();
    $portofolio = Portofolio::all();
    $template = Template::first();
    $subMenu = Submenu::all();
    $mainMenu = Mainmenu::all();
    $price = Price::all();
    $categoryporto = Categoryporto::all();
    $categoryproduk = Categoryproduk::all();

    $slideRecipe = Sliderecipe::all();
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

    return view('frontend.index-b', compact('categoryblog', 'slideRecipe', 'categoryproduk', 'categoryporto', 'price', 'mainMenu', 'template', 'portofolio', 'slidder', 'specialies', 'feature', 'recipe', 'testimonial', 'subMenu', 'general'));
  }

  public function about()
  {

    $template = Template::first();
    $feature = Feature::first();
    $mainMenu = Mainmenu::all();
    $subMenu = Submenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();

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


    return view('frontend.about-b', compact('about', 'subMenu', 'general', 'categoryblog', 'categoryporto', 'categoryproduk', 'mainMenu', 'template', 'feature'));
  }
  public function recipe()
  {
    $recipe = Recipe::paginate(6);
    $mainMenu = Mainmenu::all();

    $template = Template::first();
    $subMenu = Submenu::all();
    $categories = Categoryrecipe::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();

    $general = General::first();

    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('recipe');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/recipe'),
        'tanggal' => date('Y-m-d')
      ]);
    }


    return view('frontend.recipe', compact('general', 'categoryblog', 'categoryporto', 'categoryproduk', 'categories', 'subMenu', 'mainMenu', 'recipe', 'template'));
  }

  public function detailRecipe($slug)
  {

    $recipe = Recipe::with('kategori_resep')->where('slug', $slug)->first();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $template = Template::first();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();

    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('recipe/' . $recipe->slug);
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('recipe/' . $recipe->slug),
        'tanggal' => date('Y-m-d')
      ]);
    }


    return view('frontend.detailRecipe', compact('general', 'subMenu', 'categoryblog', 'template', 'categoryporto', 'categoryproduk', 'mainMenu', 'recipe'));
  }

  public function portofolio()
  {

    $template = Template::first();

    $categoryporto = Categoryporto::all();
    $portofolios = Portofolio::with('categoryporto')->latest()->paginate(6);
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
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

    return view('frontend.portofolio-b', compact('subMenu', 'general', 'categoryblog', 'categoryproduk', 'mainMenu', 'portofolios', 'template', 'categoryporto'));
  }
  public function detailPortofolio($slug)
  {
    $template = Template::first();
    $datas = Portofolio::all();
    $data = Portofolio::where('slug', $slug)->first();

    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
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


    return view('frontend.detailPortofolio', compact('subMenu', 'general', 'categoryblog', 'categoryporto', 'categoryproduk', 'mainMenu', 'data', 'datas', 'template'));
  }

  public function blog()
  {
    $template = Template::first();

    $feature = Feature::first();
    $categoryblog  = Categoryblog::all();
    $galery = Gelery::paginate(9);
    $blogs = Blog::paginate(5);
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();
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


    return view('frontend.blog-b', compact('subMenu', 'iklanblogs', 'categoryblog', 'general', 'categoryporto', 'categoryproduk', 'mainMenu', 'blogs', 'galery', 'categoryblog', 'template', 'feature'));
  }

  public function detailBlog($slug)
  {
    $data = Blog::where('slug', $slug)->first();
    $template = Template::first();

    $galery = Gelery::paginate(9);
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $general = General::first();
    $categoryblog = Categoryblog::all();
    $subMenu = Submenu::all();
    $iklanblogs = Iklan::latest()->get();

    return view('frontend.detailBlog', compact('subMenu', 'iklanblogs', 'general', 'categoryblog', 'categoryporto', 'categoryproduk', 'mainMenu', 'categoryblog', 'template', 'data', 'galery'));
  }

  public function blogSearch(Request $request)
  {
    $searchTerm = $request->input('search');

    // return $searchTerm;

    // Lakukan pencarian blog berdasarkan $searchTerm
    $blogs = Blog::where('judul', 'like', '%' . $searchTerm . '%')
      ->orWhere('body', 'like', '%' . $searchTerm . '%')
      ->paginate(5);
    $general = General::first();
    $galery = Gelery::paginate(9);
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $subMenu = Submenu::all();
    $template = Template::first();
    $iklanblogs = Iklan::latest()->get();



    return view('frontend.blog', compact('blogs', 'iklanblogs', 'searchTerm', 'general', 'galery', 'categoryblog', 'mainMenu', 'categoryproduk', 'categoryporto', 'subMenu', 'template'));
  }

  public function filterBlog($category)
  {
    $category = Categoryblog::with('blogs')->where('slug', $category)->first();
    $blogs = $category->blogs()->latest()->paginate(5);
    $general = General::first();
    $galery = Gelery::paginate(9);
    $categoryblog = Categoryblog::all();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $subMenu = Submenu::all();
    $template = Template::first();
    $iklanblogs = Iklan::latest()->get();

    return view('frontend.blog', compact('blogs', 'iklanblogs', 'template', 'general', 'galery', 'categoryblog', 'mainMenu', 'categoryproduk', 'categoryporto', 'subMenu', 'category'));
  }

  public function staff()
  {
    $template = Template::first();

    $staff = Pagestaf::first();
    $stafs = Staf::all();
    $mainMenu = Mainmenu::all();
    $subMenu = Submenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryblog = Categoryblog::all();
    $categoryporto = Categoryporto::all();
    $general = General::first();


    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('staff');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/staff'),
        'tanggal' => date('Y-m-d')
      ]);
    }
    return view('frontend.staff', compact('general', 'categoryblog', 'categoryporto', 'categoryproduk', 'subMenu', 'mainMenu', 'staff', 'stafs', 'template'));
  }

  public function detailStaff($slug)
  {

    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $template = Template::first();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();
    $data = Staf::where('slug', $slug)->first();
    return view('frontend.detailStaff', compact('data', 'mainMenu', 'categoryproduk', 'template', 'categoryporto', 'categoryblog', 'general', 'subMenu'));
  }

  public function shop()
  {
    $template = Template::first();

    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();

    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('shop');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/shop'),
        'tanggal' => date('Y-m-d')
      ]);
    }

    $shops = Shop::with('categoryproduk')->paginate(9);
    return view('frontend.shop', compact('general', 'subMenu', 'shops', 'categoryblog', 'categoryporto', 'categoryproduk', 'mainMenu', 'template'));
  }

  public function detailShop($slug)
  {
    $data = Shop::where('slug', $slug)->first();
    $general = General::first();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $template = Template::first();
    $subMenu = Submenu::all();

    $relate = $data->categoryproduk->id;
    $datas  = Shop::where('categoryproduk_id', $relate)->get();

    return view('frontend.detailShop', compact('subMenu', 'data', 'datas', 'general', 'mainMenu', 'categoryproduk', 'categoryporto', 'categoryblog', 'template'));
  }

  public function shopSearch(Request $request)
  {

    $filter = $request->filter;
    $query = $request->input('search');
    $template = Template::first();
    $mainMenu = Mainmenu::all();
    $categoryproduk = Categoryproduk::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();
    $subMenu = Submenu::all();

    if ($filter === "popular") {
      $shops = Shop::orderByRaw("CASE WHEN information = 'Popular' THEN 0 ELSE 1 END, information DESC")->paginate(9);

    } elseif ($filter === 'new') {
      $shops = Shop::latest()->paginate(9);
    } elseif ($filter === 'low-high') {
      $shops = Shop::orderBy('after_discount', 'asc')->paginate(9);
    } elseif ($filter === 'high-low') {
      $shops = Shop::orderBy('after_discount', 'desc')->paginate(9);
    } else {

      $shops = Shop::where('produk_name', 'LIKE', "%{$query}%")
        ->orWhere('desc', 'LIKE',  "%{$query}%")
        ->orWhere('tag', 'LIKE',  "%{$query}%")
        ->orWhere('after_discount', 'LIKE',  "%{$query}%")
        ->paginate(9);
    }
    return view('frontend.shop', compact('shops', 'categoryproduk', 'template', 'mainMenu', 'categoryporto', 'categoryblog', 'general', 'subMenu'));
  }


  public function price()
  {
    $template = Template::first();

    $mainMenu = Mainmenu::all();
    $subMenu = Submenu::all();
    $categoryporto = Categoryporto::all();
    $price = Price::all();
    $categoryproduk = Categoryproduk::all();
    $categoryblog = Categoryblog::all();
    $general = General::first();


    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('/price');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/price'),
        'tanggal' => date('Y-m-d')
      ]);
    }
    return view('frontend.prici', compact('general', 'categoryblog', 'categoryproduk', 'categoryporto', 'price', 'subMenu', 'mainMenu', 'template'));
  }


  public function contact()
  {
    $mainMenu = Mainmenu::all();
    $subMenu = Submenu::all();
    $categoryporto = Categoryporto::all();
    $categoryblog = Categoryblog::all();
    $template = Template::first();
    $general = General::first();
    $opening = Opening::all();


    $ipUsers = $_SERVER['REMOTE_ADDR'];
    $url = url('contact');
    $visitor = Visitor::where('tanggal', date('Y-m-d'))->where('ip', $ipUsers)->where('url', $url)->get();
    if (count($visitor) == 0) {
      Visitor::create([
        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => url('/contact'),
        'tanggal' => date('Y-m-d')
      ]);
    }
    return view('frontend.contact', compact('mainMenu', 'opening', 'general', 'subMenu', 'categoryporto', 'categoryblog', 'template'));
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
