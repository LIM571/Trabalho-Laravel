<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use App\Models\Lutador;
use Illuminate\Support\Facades\Storage;

class incricaoLutadores extends Controller
{
  //
  public function formulario()
  {
    return view('lutador');
  }

  public function enviar(Request $request)
  {
    $dados = $request->except('_token', 'submit');

    $lutador = new Lutador();
    $this->validate($request, $lutador->rules, $lutador->messages);

    if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {
      $requestImage = $request->file('arquivo');
      $extension = $requestImage->extension();
      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
      $requestImage->move(public_path('img/lutadores'), $imageName);
      $dados['arquivo'] = $imageName;
    }

    $insert = Lutador::create($dados);

    if ($insert) {
      return redirect()->route('dashboard')->with('successo', 'Lutador inserido com sucesso!');
    } else {
      return redirect()->route('form')->with(['error' => 'Falha ao inserir Lutador']);
    }
  }
  public function exibir()
  {
    $lutadores = Lutador::paginate(6);
    return view('dashboard', compact('lutadores'));


  }

  public function welcome()
  {
    return view('welcome');
  }


  public function apaga($id)
  {
    $lutadores = Lutador::find($id);
    if ($lutadores->getAttributes()['arquivo'] != NULL)
      Storage::disk('public')->delete($lutadores->getAttributes()['arquivo']);
    $delete = $lutadores->delete();
    if ($delete)
      return redirect()->route('dashboard')->with('success', 'Lutador removido com sucesso!');
    else
      return redirect()->route('dashboard', $id)->with(['erros' => 'Falha ao remover Lutador']);
  }

  public function edita($id)
  {
    $lutador = Lutador::find($id);
    return view('formulario', compact('lutador'));
  }

  public function atualiza(Request $request, $id)
  {
    $dados = $request->except('_token', 'submit');
    $lutador = Lutador::find($id);
    $this->validate($request, $lutador->rules, $lutador->messages);

    if ($request->hasFile('arquivo')) {
      if ($lutador->getAttributes()['arquivo'] != NULL)
        Storage::disk('public')->delete($lutador->getAttributes()['arquivo']);

      $requestImage = $request->file('arquivo');
      $extension = $requestImage->extension();
      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
      $requestImage->move(public_path('img/lutadores'), $imageName);
      $dados['arquivo'] = $imageName;
    } else
      unset($dados['arquivo']);

    $update = $lutador->update($dados);

    if ($update)
      return redirect()->route('dashboard')->with('success', 'Lutador atualizado com sucesso!');
    else
      return redirect()->route('edita', $id)->with(['erros' => 'Falha ao editar']);
  }





  //imagem

  // if($request ->hasFile('arquivo') && $request->file('arquivo')->isvalid()){

  //$requestImage = $request->arquivo;

  //$extension = $requestImage->extension();   

  //  $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;

  // $requestImage ->move(public_path('img/lutadores'), $imageName);

  // $imageName = $event->arquivo

  // }

  //$event -> save();


}