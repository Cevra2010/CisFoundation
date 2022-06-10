<?php

namespace Modules\Roles\Entities;

use CisFoundation\CisUuidTrait\CisUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use HasFactory, CisUuid, SoftDeletes;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Roles\Database\factories\RolesFactory::new();
    }
}
