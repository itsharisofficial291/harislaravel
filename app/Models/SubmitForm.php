<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitForm extends Model
{
    use HasFactory;

    protected $table = 'submitform'; // Update table name for consistency
    protected $primaryKey = 'id'; // Primary key property name remains the same
}

