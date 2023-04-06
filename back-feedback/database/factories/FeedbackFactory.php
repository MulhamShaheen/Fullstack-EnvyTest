<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function create($attributes = [], $saveTo = "database")
    {
        $feedback = Feedback::create(
            $attributes
        );

        if ($saveTo == "database"){
            $feedback->save();    
        }

        elseif($saveTo == "email"){
            
        }


        return $feedback;

        return [
            
        ];
    }
}
