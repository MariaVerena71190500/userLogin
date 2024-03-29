<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class checkUserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    public function getAccount($username) {
        return DB::table('users')->select('*')->where('username', '=', $username);
    }
}
