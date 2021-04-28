<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $hidden = ['photographer_id', 'created_at', 'updated_at'];
    protected $casts = ['featured' => 'boolean', 'date' => 'date:Y-m-d'];

    public function photographer() {
        return $this->belongsTo(Photographer::class);
    }
}
