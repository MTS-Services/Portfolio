<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio_Category;

class FrontendController extends Controller
{
  public function index()
  {
    $data['user'] = User::first();
    $data['testimonials'] = Testimonial::orderBy('id', 'desc')->get();
    $data['services'] = Service::orderBy('id', 'desc')->get();
    $data['experiences'] = Experience::orderBy('id', 'desc')->get()->take(3);
    $data['educations'] = Education::orderBy('id', 'desc')->get()->take(2);
    $data['skills'] = Skill::latest()->get();
    $data['site_settings'] = SiteSetting::first();
    $data['portfolio_categories'] = Portfolio_Category::orderBy('id', 'desc')->get();
    $data['portfolios'] = Portfolio::orderBy('id', 'desc')->with('category')->get();
    return view('frontend.home', $data);
  }
}
