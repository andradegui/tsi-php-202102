<div>
<a href="novo.php"><button class="btn btn-primary">Nova Disciplina</button></a>
</div>
<div>
<?php
if(isset($apagado)){

    if($apagado){

        echo '  <div class="alert alert-success" role="alert">
                    Disciplina apagada com sucesso!
                </div>';
    }else{

        echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar apagar a disciplina!
                </div>';
    }
}
if(isset($criado)){

    if($criado){

        echo '  <div class="alert alert-success" role="alert">
                    Disciplina criada com sucesso!
                </div>';
    }else{

        echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar criar a disciplina!
                </div>';
    }
}
if(isset($alterado)){

    if($alterado){

        echo '  <div class="alert alert-success" role="alert">
                    Disciplina alterada com sucesso!
                </div>';
    }else{

        echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar alterada a disciplina!
                </div>';
    }
}
?>
</div>
<form method="post" action="">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th><th>Nome</th><th>Professor</th><th>Dia</th><th>Descrição</th><th></th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lista as $id => $disciplina){
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $disciplina['nome']; ?></td>
                    <td><?php echo $disciplina['professor']; ?></td>
                    <td><?php echo $disciplina['dia']; ?></td>
                    <td><?php echo $disciplina['descricao']; ?></td>
                    <td><button name="editar" class="btn btn-secondary" value="<?php echo $id; ?>">Editar</button></td>
                    <td><button name="apagar" class="btn btn-danger" value="<?php echo $id; ?>">Apagar</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</form>