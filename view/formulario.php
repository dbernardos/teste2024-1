<form method="POST">
    <input type="hidden" name="id" value="<?php echo $produto->getCodigo(); ?>" />
    <fieldset>
        <legend>Novo produto</legend>
        <label>
            Descrição:
            <textarea name="descricao"><?php echo htmlentities($produto->getDescricao()); ?></textarea>
        </label>
        <label>
            Quantidade (Opcional):
            <textarea name="quantidade"><?php echo htmlentities($produto->getQuantidade()); ?></textarea>
        </label>
        <label>
            Valor (Opcional):
            <textarea name="valor"><?php echo htmlentities($produto->getValor()); ?></textarea>
        </label>
        <input type="submit" value="<?php echo ($produto->getCodigo() > 0) ? 'Atualizar' : 'Cadastrar'; ?>" class="botao" />
    </fieldset>
</form>
