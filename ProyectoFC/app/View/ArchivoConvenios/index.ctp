<!-- File: /app/View/ArchivoConvenios/index.ctp -->
<h1>Archivo Convenios</h1>
<table>
	<?php echo $this->Html->link('Agregar Archivo Convenios', array('controller' => 'archivoconvenios', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Ruta</th>
		<th>Tipo</th>

	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($archivoconvenios as $archivoconvenio): ?>
	<tr>
		<td><?php echo $archivoconvenio['ArchivoConvenio']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ArchivoConvenio']['nombre'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $archivoconvenio['ArchivoConvenio']['id']),
                array('confirm' => 'Est� seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $archivoconvenio['ArchivoConvenio']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($archivoconvenio); ?>
</table>
