<?php

// Stock.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredUsers extends Model
{
    public $timestamps = false;
    protected $table="registerd_users";
    protected $fillable = [
        'name','email', 'mobile_number', 'visa_states', 'address', 'transport',
        'mon_t_from', 'mon_t_to',
        'tue_t_from', 'tue_t_to',
        'wed_t_from', 'wed_t_to',
        'thu_t_from', 'thu_t_to',
        'fri_t_from', 'fri_t_to',
        'sat_t_from', 'sat_t_to',
        'username', 'password',
    ];
}
