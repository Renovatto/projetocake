
<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Novo Post', array('controller' => 'posts', 'action' => 'add')) ?>
<table>
    <tr>
        <th>Id</th>
        <th>titulo</th>
        <th>Data de Criacao</th>
    </tr>

 
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
