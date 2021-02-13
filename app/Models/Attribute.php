<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'code',
        'name',
        'type',
        'validation',
        'is_required',
        'is_unique',
        'is_filterable',
        'is_configurable',
    ];

    public static function types()
    {
        return [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'price' => 'Price',
            'boolean' => 'Boolean',
            'select' => 'Select',
            'datetime' => 'Datetime',
            'date' => 'Date',
        ];
    }
}
