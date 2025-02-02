<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = [
        'maker_id',
        'name'
    ];
    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }
}
