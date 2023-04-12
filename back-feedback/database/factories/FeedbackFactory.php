<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback;
use Illuminate\Support\Facades\Storage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory
{
    
    public static function factory(array $attributes)
    {
        $feedback = new Feedback(
            $attributes
        );


        return $feedback;
    }

    public static function save(Feedback $feedback, $saveTo="email"){
        
        if ($saveTo == "database"){
            $feedback->save();    
        }

        elseif($saveTo == "email"){
            $name = $feedback->name;
            $message = $feedback->message;
            Storage::disk('feedback_local')->append('feedbacks', "Имя: $name \nОбиащение: $message\n");
        }
    }
}
