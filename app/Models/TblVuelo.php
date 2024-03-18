<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblVuelo extends Model
{
    use HasFactory;
    protected $table = 'tblvuelo';
    protected $primaryKey = 'vueCodigo';
    protected $fillable = ['vuehora, vuefecha, iddestino,idorigen'];

}
