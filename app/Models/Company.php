<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Providers;
use App\Models\Customers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);        
    }

    public function providers()
    {
        return $this->hasMany(Provider::class);        
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);        
    }
}
