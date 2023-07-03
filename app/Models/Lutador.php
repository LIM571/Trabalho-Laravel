<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lutador extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = ['nome', 'idade', 'apelido', 'peso', 'descricao', 'arquivo' ];

    /**
     * Summary of rules
     * @var array
     */
    public $rules = [
        'nome' => 'required|min:2|max:100',
        'idade' => 'required',
        'apelido' => 'required|min:3|max:100',
        'peso' => 'required|min:1|max:10',
        'descricao' => 'required',
        
        

    ];

    public $messages = [
        'nome.required' => 'O campo nome precisa ao menos de 2 letras',
        'idade.required' => 'O campo idade é obrigatório',
        'apelido.min' => 'O campo apelido precisa ao menos de 3 letras',
        'peso.min' =>  'O campo apelido precisa ao menos de 4 numeros',
        'descricao.required' => 'O campo descricao é obrigatório',

    ];
}
