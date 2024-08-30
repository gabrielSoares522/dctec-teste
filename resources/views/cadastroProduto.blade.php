<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1>Cadastro Produto</h1>
    <form action="{{ route('produto.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input id="descricao" name="descricao" type="text"/>
        <input id="valor" name="valor" type="text"/>
        <button class="btn orange btn-large"> add produto</button>
    </form>
</body>
</html>