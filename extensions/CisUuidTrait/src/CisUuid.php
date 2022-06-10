<?php
namespace CisFoundation\CisUuidTrait;

use Illuminate\Support\Str;

trait CisUuid {

    protected static function bootUseUuid()
    {
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function getKeyName() {
        return 'row_id';
    }
}
