<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'EBib';

    public function auts()
    {
        return $this->belongsToMany(EAut::class, 'EAutBib', 'ABBibId', 'ABAutId', 'BibId', 'AutId');
    }

    public function citems()
    {
        return $this->hasMany(CItem::class,  'ItemBib', 'BibId');
    }
    public function eidn()
    {
        return $this->hasOne(EIdn::class,  'IdnBibId', 'BibId');
    }
}
