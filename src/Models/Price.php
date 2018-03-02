<?php

namespace Roshangara\Priceable\Models;

use Illuminate\Database\Eloquent\Model;
use Roshangara\EloquentHelper\Helper;

class Price extends Model
{
    use Helper;
    protected $table = 'prices';

    protected $fillable = ['base', 'toll', 'tax', 'discount', 'profit', 'total', 'reason', 'agent_type', 'agent_id'];
}