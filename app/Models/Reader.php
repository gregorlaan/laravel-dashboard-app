<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reading;
use App\Models\ReaderLog;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location'];

    public function readings()
    {
        return $this->hasOne(Reading::class)->orderBy('created_at', 'DESC');
    }

    public function logs()
    {
        return $this->hasMany(ReaderLog::class)->orderBy('created_at', 'DESC');
    }
}
