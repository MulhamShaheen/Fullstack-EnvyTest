<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Factories\FeedbackFactory;

class FeedbackController extends Controller
{
    public function saveFeedback(Request $request)
    {
        $feedback = FeedbackFactory::factory($request->all());
        FeedbackFactory::save($feedback, 'email');

        return $feedback;
    }
}
