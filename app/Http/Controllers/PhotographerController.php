<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{

    public function get($id = 0) {
        $photographer = Photographer::findOrFail($id);

        if(!$photographer)
            throw new RecordsNotFoundException();

        return $photographer;
    }

}
