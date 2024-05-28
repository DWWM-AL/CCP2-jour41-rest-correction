<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Cache::remember('counts', now()->addHour(), fn () => [
            'moviesCount' => Movie::count(),
            'actorsCount' => Actor::count(),
            'directorsCount' => Director::count(),
        ]);
    }
}
