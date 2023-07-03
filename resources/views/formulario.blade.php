@extends('navbars/navbarum')
@section('navbarwelcome')
<!doctype html>
<html lang="en">

<head>
  <title>Formulario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./css/navbar.css')}}">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  



  <form class="form-floating"  action="../atualiza/{{$lutador->id}}" method="post" enctype="multipart/form-data" >
  @csrf  
    <div>
      <label for="floatingInputValue">Digite seu Nome:</label>
      <input type="text" class="form-control" id="floatingInputValue" placeholder="nome" value="{{$lutador->nome}}" name="nome">
    </div>

    <div>

      <label for="floatingInputValue">Digite sua idade:</label>
      <input type="number" class="form-control" id="floatingInputValue" placeholder="idade" value="{{$lutador->idade}}" name="idade">

    </div>


    <div>
      <label for="floatingInputValue">Digite seu Nome de Luta</label>
      <input type="text" class="form-control" id="floatingInputValue" placeholder="nome de lutador" value="{{$lutador->apelido}}" name="apelido">
    </div>


    <div>
      <label for="floatingInputValue">Digite seu peso</label>
      <input type="floating" class="form-control" id="floatingInputValue" placeholder="digite seu peso" value="{{$lutador->peso}}" name="peso">
    </div>


    <div>
      <label for="floatingInputValue">Digite Uma Descrição</label>
      <textarea class="form-control" name="descricao" placeholder="Digite Uma Descrição" id="floatingTextarea" value='{{$lutador->descricao}}'></textarea>
    </div>

   

    <div>
      <label for="arquivo">Jogue seu arquivo</label>
      <input type="file" class="form-control"    name="arquivo">
    </div>



    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>

</main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>

@endsection



