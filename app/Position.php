<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function shore()
    {
        return $this->belongsTo(Shore::class);
    }

    public function microhabitat()
    {
        return $this->belongsTo(Microhabitat::class);
    }

    public function shoreLevel()
    {
        return $this->belongsTo(ShoreLevel::class);
    }

    public function shoreExposure()
    {
        return $this->belongsTo(ShoreExposure::class);
    }

    public function shoreReplicate()
    {
        return $this->belongsTo(ShoreReplicate::class);
    }

    public function shoreSubreplicate()
    {
        return $this->belongsTo(ShoreSubreplicate::class);
    }
    

    public function serials()
    {
        return $this->hasMany(Serial::class);
    }
}
