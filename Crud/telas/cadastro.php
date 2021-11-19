<form action="index.php" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" 
            value="<?php echo $disciplina['nome'] ?? ''; ?>">
    </div>
    <div class="form-group">
        <label for="prof">Professor</label>
        <input type="text" class="form-control" id="prof" name="prof" 
            value="<?php echo $disciplina['professor'] ?? ''; ?>">
    </div>
    <div class="form-group">
        <label for="dia">Dia</label>
        <input type="date" class="form-control" id="dia" name="dia" 
            value="<?php echo $disciplina['dia'] ?? ''; ?>">
    </div>
    <div class="form-group">
        <label for="desc">Descrição</label>
        <textarea name="desc" id="desc" class="form-control"><?php echo $disciplina['descricao'] ?? ''; ?>
        </textarea>
    </div>
    <input type="hidden" name="id" value="<?php echo $disciplina['id'] ?? ''; ?>">
    <button type="submit" class="btn btn-primary" name="criar">
    <?php if ( isset($disciplina) ) echo 'Salvar'; else echo 'Criar'; ?>
    </button>
</form>