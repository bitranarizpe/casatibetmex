<?php
global $tArgs, $tPages;
if ($tArgs['atts']['title']) {
	$title = $tArgs['atts']['title'];
} else if ($tArgs['atts']['children']) {
	$title = __('Más Información');
} else {
	$title = __('Páginas Relacionadas');
} 
$href = $tArgs['atts']['href'];

?><div class="section">	
<div class="title"<?php if ($href) echo 'data-href="'.$href.'"'; ?>>
	<?php if ($href) : ?><div class="icon view"></div><?php endif; ?>
	<?php echo $title; ?></div>
	<ul class="listing pages">
<?php for($i=0; $i<count($tPages); $i++) : 
		$p = $tPages[$i];
?>
		<li data-href="<?php echo ct_get_permalink($p->ID); ?>">
			<div class="icon view"></div><?php echo $p->post_title; ?>
		</li>
<?php endfor; ?>
</ul>	
</div>