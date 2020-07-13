<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{
    public function shore()
    {
        return $this->belongsTo(Shore::class);
    }

    public function persons()
    {
        return $this->belongsToMany(Person::class, 'people_servicings');
    }

    public function serials()
    {
        return $this->belongsToMany(Serial::class, 'serials_servicings')
            ->withPivot('off_sync_time');
    }
}
