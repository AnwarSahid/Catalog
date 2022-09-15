<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CItem extends Model
{
    use HasFactory;

    protected $table = 'CItem';


    public function itemclass()
    {
        return $this->belongsTo(CItemClass::class, 'ItemClss', 'Class');
    }

    public function itemlocation()
    {
        return $this->belongsTo(CLocation::class, 'LocaCode', 'LocaCode');
    }
}
