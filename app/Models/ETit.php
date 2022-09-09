<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ETit extends Model
{
    use HasFactory;
    protected $table = "ETit";
    public function blibs()
    {
        return $this->belongsToMany(Book::class, 'ETitBib',  'TBTitId', 'TBBibId', 'TitId', 'BibId');
    }
}
