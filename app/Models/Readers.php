<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Readings;
use App\Models\ReaderLogs;

class Readers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location'];

    public function readings()
    {
        return $this->hasOne(Readings::class)->orderBy('created_at', 'DESC');
    }

    public function logs()
    {
        return $this->hasMany(ReaderLogs::class)->orderBy('created_at', 'DESC');
    }
}
