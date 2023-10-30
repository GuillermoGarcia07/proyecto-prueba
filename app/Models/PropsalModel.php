<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropsalModel extends Model
{
    protected $table = 'propsal';

    public $timestamps = false;

    protected $fillable = [
        'contactPerson',
        'company',
        'email',
        'phone',
        'companysNeeds',
        'terminosCondiciones'
    ];
}