<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESub extends Model
{
    use HasFactory;

    protected $table = "ESub";

    public function blibs()
    {
        return $this->belongsToMany(Book::class, 'ESubBib',  'SBSubId', 'SBBibId',  'SubId', 'BibId');
    }
}
