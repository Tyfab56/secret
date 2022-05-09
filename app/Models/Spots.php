<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spots extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pays',
        'lat',
        'lng',
        'fichier',
        'userid',
        'stockage',
        'imgpanosmall',
        'imgpanomedium',
        'imgpanolarge',
        'actif'

    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class,'pays_id','pays_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }

}
