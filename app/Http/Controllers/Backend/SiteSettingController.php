<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $site_setting = SiteSetting::first();
        return view('backend.siteSettings.site', compact('site_setting'));
    }
    public function update(Request $request)
    {
        $site_setting = SiteSetting::first();
        if ($request->hasFile('site_logo')) {
            $image = $request->file('site_logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/site_settings'), $imageName);
            $site_setting->site_logo = $imageName;
        }
        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/site_settings'), $imageName);
            $site_setting->favicon = $imageName;
        }
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/site_settings'), $imageName);
            $site_setting->banner = $imageName;
        }
        $site_setting->copyright_text = $request->copyright_text;
        $site_setting->update();

        return redirect()->route('admin.site.settings')->with('success', 'Site settings updated successfully');
    }
}
