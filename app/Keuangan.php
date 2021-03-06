<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $fillable = ['debit', 'kredit'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
           ->format('d-M-Y');
    }
    
    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])
           ->diffForHumans();
    }
}
