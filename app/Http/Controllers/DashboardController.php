<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {


        $ideas = Idea::orderBy('created_at', 'DESC');

        if (request()->has('search-control')) {

            request()->validate([
                'search-control' => 'required|min:1|max:240'
            ]);
            
            $ideas = $ideas->where('idea_content', 'like', '%' . request()->get('search-control') . '%');
        }

        return view('dashboard', [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
