<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public $timestamps= false;

    #tutti i campi da modificare o inserire nella table, non posso mettere 'id' perché NON è un campo
    #modificabile
    protected $fillable = [ #array 
        'telefono', 'avatar', 'user_id'
    ];

    #relazione con user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
