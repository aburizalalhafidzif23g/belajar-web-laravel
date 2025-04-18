<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    //protected $table = 'bank_accounts';
    protected $fillable = ['user_id','bank_name','account_number','status'];

    //relasikan tabel bank account dengan tabel user
    public function user() {
        return $this->belongsTo(related: User::class);
    } 
}
