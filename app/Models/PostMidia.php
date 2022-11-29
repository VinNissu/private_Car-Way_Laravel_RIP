<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_movimento extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','mensagem','localizacao','midia'];
    //definir relacionamento com a tabela de usuário - função c/ o nome do Model
    public function user(){
        return $this->belongsTo('App/Models/User');
    } 

}