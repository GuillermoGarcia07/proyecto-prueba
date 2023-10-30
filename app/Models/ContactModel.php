<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contactus';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'message',
        'terminosCondiciones'
    ];
}