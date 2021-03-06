<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //mass assignment
    protected $fillable = [
    "account",
    "accountant_id",
    "income_category",
    "payment_method",
    "amount",
    "date_created",
    "payer",
    "description"
    ]; 

    public function user() {
        return $this->belongsTo('App\User', 'accountant_id');
    }
}






