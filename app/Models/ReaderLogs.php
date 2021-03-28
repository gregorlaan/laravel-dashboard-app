<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reader;

class ReaderLogs extends Model
{
    use HasFactory;

    protected $fillable = ['old_value', 'new_value'];

    public function Reader()
    {
        return $this->belongsTo(Reader::class);
    }
}
