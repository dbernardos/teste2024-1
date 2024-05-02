<table>
            <tr>
                <th>Codigo</th>
                <th>Descricao</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto->getCodigo(); ?></td>
                <td><?php echo $produto->getDescricao(); ?></td>
                <td><?php echo $produto->getQuantidade(); ?></td>
                <td><?php echo $produto->getValor(); ?></td>
            </tr>
            <?php endforeach; ?>
</table>