<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AuditTrail extends Model
{
    protected $fillable = [
        'user_id', 'username', 'date', 'activity', 'branch_id'
    ];

    public function branch() {
        return $this->belongsTo('App\Branch');
    }

    protected $table = 'audit_trails';

    protected $dates = ['date'];
}
