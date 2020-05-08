<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Pattern;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     *
     */
    public function computers()
    {
        $categories = Category::whereIn('id', [1, 2, 3])->orderBy('name')->get();

        return array_map(function ($category) {
            return [$category->name => $category->countDevices()];
        }, $categories->all());
    }

    /**
     *
     */
    public function patterns()
    {
        $patterns = Pattern::whereIn('brand_id', [1, 2])->whereHas('devices')->orderBy('name')->get();

        return $patterns->map(function ($pattern) {
            return [$pattern->name => $pattern->countDevices()];
        });
    }
}
