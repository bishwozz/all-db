<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContentUpdated
{
    use Dispatchable, SerializesModels;

    public $slug;
    public $content;

    public function __construct($slug, $content)
    {
        $this->slug = $slug;
        $this->content = $content;
    }

    public function broadcastOn()
    {
        return ['room.' . $this->slug];
    }
}
