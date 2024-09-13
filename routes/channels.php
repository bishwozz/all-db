<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('room.{slug}', function ($user, $slug) {
    // Optional: Add logic to verify if the user can access this channel
    return true;
});
