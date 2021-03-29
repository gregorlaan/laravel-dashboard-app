<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reader;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = ['value'];

    public function Reader()
    {
        return $this->belongsTo(Reader::class);
    }
}
