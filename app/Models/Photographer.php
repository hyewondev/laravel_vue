<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;
    protected $appends = ['albums'];
    protected $hidden = ['photos'];

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function getAlbumsAttribute() {
        return $this->photos;
    }
}
