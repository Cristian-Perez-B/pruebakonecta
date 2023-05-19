<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primarykey='id';
    protected $fillable=['nombre','referencia','precio','peso','id_categoria','stock'];
    public $timestamps=false;

    public function categoria(){
        return $this->hasOne(Categoria::class,'id','id_categoria');
    }
}
