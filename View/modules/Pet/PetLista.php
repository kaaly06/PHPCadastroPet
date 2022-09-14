<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pet</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th></th>
            <th>Nome</th>
            <th></th>
            <th>Data Nascimento</th>
            <th></th>
            <th>Raca</th>
            <th></th>
            <th>Porte</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pet/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>
            <th></th>
            <td>
                <a href="/pet/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>
            <th></th>
            <td><?= $item->data_nascimento ?></td>
            <th></th>
            <td><?= $item->raca ?></td>
            <th></th>
            <td><?= $item->porte ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>