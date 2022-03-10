<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Multipic;
use App\Models\Posts;
use App\Models\SiteSettings;
use App\Models\Staff;
use App\Models\Donors;
use Menu;

class SiteController extends Controller
{
    protected $banner;
    protected $category;
    protected $gallery;
    protected $multipic;
    protected $posts;
    protected $staff;
    protected $donors;
    protected $sitesetting;

    public function __construct() {
        $this->banner = new Banner();
        $this->category = new Category();
        $this->gallery = new Gallery();
        $this->multipic = new Multipic();
        $this->posts = new Posts();
        $this->staff = new Staff();
        $this->donors = new Donors();
        $this->sitesetting = new SiteSettings();
    }

    public function index() {
        $setting = $this->sitesetting->first();
        $banners = $this->banner::where('status', 1)->get();
        $post = $this->posts::where('category_id', 3)->where('feature', 1)->latest()->get();
        $postss = $this->posts::where('category_id', 5)->where('feature', 1)->latest()->get();
        $projects = $this->posts::where('category_id', 4)->where('feature', 1)->latest()->get();
        $notices = $this->posts::where('category_id', 7)->where('feature', 1)->latest()->get();
        $galery = $this->gallery::all()->take(3);
        $staffs = $this->staff::where('feature', 1)->get();
        $donor = $this->donors::where('status', 1)->get();
        $public_menu = Menu::getByName('default-menu');

        return view('frontend.home', compact('setting', 'post', 'banners', 'postss', 'projects', 'notices', 'staffs', 'galery', 'donor', 'public_menu'));
    }

    public function about() {
        $setting = $this->sitesetting->first();
        $public_menu = Menu::getByName('default-menu');
        $postss = $this->posts::where('category_id', 5)->where('feature', 1)->latest()->get();
        $projects = $this->posts::where('category_id', 4)->where('feature', 1)->latest()->get();

        return view('frontend.about', compact('setting', 'postss', 'public_menu', 'projects'));
    }

    public function objectives() {
        $setting = $this->sitesetting->first();
        $public_menu = Menu::getByName('default-menu');
        $postss = $this->posts::where('category_id', 5)->where('feature', 1)->latest()->get();
        $projects = $this->posts::where('category_id', 4)->where('feature', 1)->latest()->get();

        return view('frontend.introduction', compact('setting', 'postss', 'public_menu', 'projects'));
    }

    public function working() {
        $setting = $this->sitesetting->first();
        $public_menu = Menu::getByName('default-menu');
        $postss = $this->posts::where('category_id', 5)->where('feature', 1)->latest()->get();
        $projects = $this->posts::where('category_id', 4)->where('feature', 1)->latest()->get();

        return view('frontend.working', compact('setting', 'postss', 'public_menu', 'projects'));
    }

    public function teams() {
        $setting = $this->sitesetting->first();
        $staffs = $this->staff::where('status', 1)->get();
        $public_menu = Menu::getByName('default-menu');
        $postss = $this->posts::where('category_id', 5)->where('feature', 1)->latest()->get();
        $projects = $this->posts::where('category_id', 4)->where('feature', 1)->latest()->get();

        return view('frontend.teams', compact('setting', 'staffs', 'postss', 'public_menu', 'projects'));
    }

    public function gallery() {
        $setting = $this->sitesetting->first();
        $galery = $this->gallery::all();
        $public_menu = Menu::getByName('default-menu');

        
        return view('frontend.gallery', compact('setting', 'galery', 'public_menu'));
    }

    public function category() {
        $setting = $this->sitesetting->first();
        $categories = $this->category::where('status', 1)->get();
        $public_menu = Menu::getByName('default-menu');

        return view('frontend.category', compact('setting', 'categories', 'public_menu'));
    }

    public function viewCategory($id) {
        $setting =  $this->sitesetting->first();
        $cate = $this->category::all();
        $post = $this->posts::where('status', 1)->get();
        $public_menu = Menu::getByName('default-menu');

        if ($this->category::where('id', $id)->exists()) {
            $cate = $this->category::where('id', $id)->first();
            $post = $this->posts::where('category_id', $cate->id)->where('status', 1)->where('feature', 1)->get();
            return view('frontend.viewPosts', compact('setting', 'cate', 'post', 'public_menu'));
        } else {
            return view('frontend.category', compact('setting', 'cate', 'post', 'public_menu'));
        }
    }

    public function viewPosts($slug) {
        $setting =  $this->sitesetting->first();
        $cate = $this->category::all();
        $post = $this->posts::where('slug', $slug)->first();
        $public_menu = Menu::getByName('default-menu');

        return view('frontend.posts', compact('cate', 'setting', 'post', 'public_menu'));
    }

    public function contact() {
        $setting =  $this->sitesetting->first();
        $cate = $this->category::where('status', 1)->get();
        $public_menu = Menu::getByName('default-menu');
        return view('frontend.contact', compact('setting', 'cate', 'public_menu'));
    }

}
