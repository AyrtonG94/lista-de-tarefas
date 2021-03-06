<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'status_id'];

    public function TarefaStatus() {
        return $this->belongsTo('App\Models\TarefaStatus', 'status_id'); //Devo chamar o campo que é FK da tabela
    }
}
