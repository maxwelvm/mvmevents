<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

//print_r( $this->eventos );

?>

<div class="componentheading"> Eventos - Lista </div>

<?php foreach ($this->eventos as $evento) { ?>

	<table width='695px'  border="0" background="#F3F7EA">
		<tr>
			<td width='280' height='195' rowspan="4" valign="top">
				<a href="index.php?option=com_eventosmvm&view=evento&id=<?php echo $evento->id;?>">
					<?php echo $evento->foto_mini_banner;?>
				</a>
			</td>
			
			<td colspan="2" height="20px" bgcolor="#E4F2CE" style="color:#487A3B;">
				<?php echo JText::_('Nome do Evento:'); ?>
			</td>
		</tr>
		
		<tr height='110px'>
			<td colspan="2" bgcolor="#F3F7EA">
				<h3>
					<a href="index.php?option=com_eventosmvm&view=evento&id=<?php echo $evento->id;?>"> 
						<?php echo $evento->nome;?>
					</a>
				<h3>
			</td>
		</tr>
		
		<tr height="20px" bgcolor="#E4F2CE">
			<td style="color:#487A3B;">
				<?php echo JText::_('Local do Evento'); ?>:
			</td>
			
			<td style="color:#487A3B;">
				<?php echo JText::_('Data do Evento'); ?>: 
			</td>
		</tr>
		<tr height='65px'>
			<td bgcolor="#F3F7EA">
				<?php echo $evento->local; ?>
			</td>
			
			<td bgcolor="#F3F7EA">
				<?php echo " De ".date("d", strtotime($evento->data_inicio))."  a  ".date("d/m/Y", strtotime($evento->data_fim)); ?> 
			</td>
		</tr>
	</table>
	
	<br />
	<hr style="border:none;height:5px; background:#E4F2CE;">
	<br />
	
<?php } ?>
	