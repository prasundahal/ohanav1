<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone_number', 'message', 'project_id', 'status'];

    public function project()
    {
        return $this->belongsTo('App\Models\project', 'project_id', 'id');
    }

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone_number;
    }
}
