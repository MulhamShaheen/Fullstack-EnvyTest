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
    protected string $saveTo; 

    public function __construct($saveTo = "database"){
        $this->saveTo = $saveTo;
    }
    
    public function save($attributes = [])
    {
        $feedback = Feedback::create(
            $attributes
        );

        if ($this->saveTo == "database"){
            $feedback->save();    
        }

        elseif($this->saveTo == "email"){
            $name = $feedback->name;
            $message = $feedback->message;
            Storage::disk('feedback_local')->append('feedbacks', "Имя: $name \nОбиащение: $message\n");
        }

        return $feedback;

    }
}
