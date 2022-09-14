<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Formulário de Pet</title>
    <style>
        label, input { display: block; }
    </style>
</head>

<body>
    <fieldset>
        <legend> Certidão de Nascimento </legend>

        <form method="post" action="/pet/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id"/>

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="data_nascimento">Data de Nascimento:</label>
            <input id="data_nascimento" value="<?= $model->raca ?>" name="data_nascimento" type="date" />

            <label for="raca">Raca:</label>
            <input id="raca" value="<?= $model->porte ?>" name="raca" type="text" />
            
            <label for="porte">Porte:</label>
            <input id="porte" value="<?= $model->porte ?>" name="porte" type="text" />
            
            <button type="submit">Salvar</button>

        </form>
    </fieldset>
</body>
</html>