<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <form action="<?= url("admin/usuario/salvar"). "/". $data[0][cod_usu]?> "method ="post">
        <div style="border-radius: 5px;
                    border-style: solid;
                    border-color: cyan;
                    border-width: 1px;
                    padding: 10px;
                    margin-top: 10px;
                    margin-button:10px";>
                    <?php if($data[0]['cod_status_usu'] == A ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="ativo" value="A" checked >
                        <label class="form-check-label" for="ativo">Ativo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inativo" value="I">
                        <label class="form-check-label" for="inativo">Inativo</label>
                    </div>
                    <?php else: ?>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="ativo" value="A">
                        <label class="form-check-label" for="ativo">Ativo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inativo" value="I" checked >
                        <label class="form-check-label" for="inativo">Inativo</label>
                    </div>
                    <?php endif ?>
        
            <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="text" class="form-control" id="email_usu" name="email" value="<?=$data[0]['email_usu']?>" placeholder="" disable>
            </div>

            <div class="form-group">
            <label for="inputAddress">Nome de Usuário</label>
            <input type="text" class="form-control" id="nome_usu" name="nome_usu" value="<?=$data[0]['nome_usu']?>" placeholder="" disable>
            </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputZip">Cep</label>
            <input type="text" class="form-control" id="cep_usu" name="cep_usu" value="<?=$data[0]['cep_usu']?>" placeholder="">
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?=$data[0]['cidade']?>" placeholder="" readonly>
            </div>

            <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputAddress">Estado</label>
            <input type="text" class="form-control" id="uf" name="uf" value="<?=$data[0]['uf']?>" placeholder="" readonly>
            </div>

            <div class="form-row">
            <div class="form-group col-md-8">
            <label for="inputAddress2">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" value="<?=$data[0]['rua']?>" placeholder="" readonly>
            </div>

            <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputAddress2">Numero</label>
            <input type="text" class="form-control" id="num_end_usu" name="num_end_usu" value="<?=$data[0]['num_end_usu']?>" placeholder="">
            </div>

            <div class="form-group">
            <label for="inputAddress2">Complemento</label>
            <input type="text" class="form-control" id="compl_end_usu" name="compl_end_usu" value="<?=$data[0]['compl_end_usu']?>" placeholder="">
            </div>

            <div class="form-group">
            <label for="inputAddress2">Bairro</label>
            <input type="text" class="form-control" id="bairro_end_usu" name="bairro_end_usu" value="<?=$data[0]['bairro_end_usu']?>" placeholder="" readonly>
            </div>

            <div class="form-group">
                <div id="mensagem">

        </div> 
        <button type="submit" class="bnt bnt-primary">Salvar</button>
    </form>
</div>
</body>
</html>