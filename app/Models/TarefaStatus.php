<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefaStatus extends Model
{

    use HasFactory;
    protected $table = 'tarefastatus';
    protected $fillable = ['status'];

    public function statusTarefa() {
        return $this->belongsTo('app\Models\Tarefa');
    }

}
