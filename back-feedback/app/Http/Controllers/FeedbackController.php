<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Factories\FeedbackFactory;

class FeedbackController extends Controller
{
    public function saveFeedback(Request $request)
    {
        

        $factory = new FeedbackFactory("email");
        return $factory->save($request->all());
    }
}
