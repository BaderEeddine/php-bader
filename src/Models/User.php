<?php
namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    // Optional: Specify the table name (default: pluralized class name)
    protected $table = 'users';

    // Fields that can be mass-assigned
    protected $fillable = ['name', 'email','password'];

    // Optional: Disable timestamps (created_at, updated_at)
    public $timestamps = false;
}