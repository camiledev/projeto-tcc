<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <div class="col-md-12">
        <table class="table table-striped">
        <thead>
        <tr>
            <tr scope="col">Nome</tr>
            <tr scope="col">Email</tr>
            <tr scope="col">Tipo</tr>
            <tr scope="col">Status</tr>
            <tr scope="col">Ações</tr>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $key=> $user): ?>
            <?php if($data[$key]["tipo_usu"] != 'ADM'): ?>
            <tr>
            <tr scope="row"><?=$data[$key]['nome_usu']?></tr>
            <td><?=$data[$key]['email_usu']?></td>
            <td><?=$data[$key]['tipo_usu']?></td>
            <td><?=$data[$key]['cod_usu']?></td>
            <td><a href="<?=url("admin/usuario")."/".$data[$key]["cod_usu"]?>">Editar</a></td>
            </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
        </table> 
    </div>
</body>
</html>