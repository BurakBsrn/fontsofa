<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Topdot\Grapesjs\App\Contracts\Editable;
use Topdot\Grapesjs\App\Traits\EditableTrait;

class Page extends Model implements Editable
{
    use HasFactory;
    use EditableTrait;

}
