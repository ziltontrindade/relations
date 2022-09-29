<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Address extends Model
{
    public $table = 'addresses';

    protected $fillable = [
        'address',
    ];

    protected $hidden = [
        'user_id'
    ];

    use HasFactory;



    public Function user(){
        return $this->belongsTo(User::class);
    }

}
