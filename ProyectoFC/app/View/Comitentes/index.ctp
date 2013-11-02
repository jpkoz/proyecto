<!-- File: /app/View/Comitentes/index.ctp -->
<h1>Comitente</h1>
<table>
	<?php echo $this->Html->link('Agregar Comitente', array('controller' => 'comitentes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Responsable</th>
		<th>CUIT</th>
		<th>Email</th>
		<th>Pagina Web</th>
		<th>Telefono</th>
		<th>Ciudad</th>
		<th>categoria_iva_id</th>
		<th>tipo_comitente_id</>
		<th>Acciones</>
		 
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($comitentes as $comitente): ?>
	<tr>
		<td><?php echo $comitente['Comitente']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($comitente['Comitente']['nombre'], array('controller' => 'comitentes', 'action' => 'view', $comitente['Comitente']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($comitente['Comitente']['responsable'], array('controller' => 'comitentes', 'action' => 'view', $comitente['Comitente']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($comitente['Comitente']['cuit'], array('controller' => 'comitentes', 'action' => 'view', $comitente['Comitente']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $comitente['Comitente']['id']),
                array('confirm' => 'Est� seguro de que desea borrar?'));?>
                
               
                
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $comitente['Comitente']['id'])); ?>
	</tr>
	
			
	<?php endforeach; ?>
	<?php unset($comitente); ?>
</table>