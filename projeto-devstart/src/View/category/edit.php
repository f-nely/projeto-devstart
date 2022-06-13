<h1>Editar Categoria</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="<?php echo $data['name'];?>" class="form-control">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" class="form-control"><?php echo $data['description'];?></textarea>

    <button class="btn btn-primary">Atualizar</button>
</form>