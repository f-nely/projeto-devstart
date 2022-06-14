<h1>Editar Produto</h1>

<?php 
    extract($data);
?>
<form action="" method="POST">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control mb-3" value="<?php echo $product['name']?>">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" class="form-control mb-3"><?php echo $product['description']?></textarea>

    <label for=value">Preço</label>
    <input type="number" name="value" id="value" class="form-control mb-3" value="<?php echo $product['value']?>">

    <label for="quantity">Quantidade</label>
    <input type="number" name="quantity" id="quantity" min="0" class="form-control mb-3" value="<?php echo $product['quantity']?>">

    <label for="photo">Foto</label>
    <input type="text" name="photo" id="photo" class="form-control mb-3" value="<?php echo $product['photo']?>">

    <button class="btn btn-primary">Atualizar</button>
</form>