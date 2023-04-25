<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'enable',
    ];

    public function setting() {
        return $this->belongsTo(Setting::class);
    }
}
