<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $response = Http::post('https://hook.eu2.make.com/nlks964i6ev4dlrnexwql2vdr775hv3q', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return response()->json([
            'message' => $response->successful()
                ? 'Thank you for your feedback!'
                : 'Failed to submit feedback',
            'success' => $response->successful()
        ], $response->status());
    }
}