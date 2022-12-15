<?php

namespace App\Traits;

use App\PlatformEvent;

/**
 * Platform implementation
 */
trait MyEvents
{
    public function getAllEvents()
    {
        $data = PlatformEvent::orderBy('created_at', 'DESC')->get();

        return $data;
    }

    public function thisEvent($id)
    {
        $data = PlatformEvent::where('id', $id)->first();

        return $data;
    }

    public function removeEvent($id)
    {
        $data = PlatformEvent::where('id', $id)->delete();

        return $data;
    }
}
