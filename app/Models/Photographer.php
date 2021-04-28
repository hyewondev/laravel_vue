<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;
    protected $appends = ['albums'];
    protected $hidden = ['id', 'photos', 'created_at', 'updated_at'];

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function getAlbumsAttribute() {
        return $this->photos;
    }
}
