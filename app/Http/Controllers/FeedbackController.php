<?php

namespace App\Http\Controllers;

use App\Events\CreateFeedback;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $feedback = Feedback::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
            'rating' => $data['rating']
        ]);
        event(new CreateFeedback($feedback));
        return redirect('/');
    }
}
