<!-- File: /app/View/Archivos/index.ctp -->
<h1>Archivo</h1>
<table>
	<?php echo $this->Html->link('Agregar Archivo', array('controller' => 'archivos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Archivo</th>
    	<th>Nombre</th>
	    <th>Ruta</th>
	    <th>Tipo</th>
		<th>Proyecto</th>
		
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($archivos as $archivo): ?>
	<tr>
		<td><?php echo $archivo['Archivo']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($archivo['Archivo']['nombre'], array('controller' => 'archivos', 'action' => 'view', $archivo['Archivo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $archivo['Archivo']['id']),
                array('confirm' => 'Est� seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $archivo['Archivo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($archivo); ?>
</table>