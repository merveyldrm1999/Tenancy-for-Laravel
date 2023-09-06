<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $fillable=[
        'name','password','domain','email'
    ];

    //tenant after create
    public static function booted(){
      static::created(function($user){
          $userTenant = Tenant::create(['id' => $user->domain]);
          $userTenant->domains()->create(['domain' => $user->domain . '.' . env('APP_TENANT_DOMAIN')]);
      });
    }

    public function routeNotificationForSlack($notification)
    {
        return env('SLACK_WEBHOOK_URL');
    }

}
