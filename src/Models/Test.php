<?php

namespace Sahak\Validator\Models;

use App\Models\BaseModel;

class Test extends BaseModel
{
    protected $table = 'testing';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $relations = ['proval'];

}