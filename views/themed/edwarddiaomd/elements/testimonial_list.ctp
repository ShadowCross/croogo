<div id="node-list-<?php echo $alias; ?>" class="node-list">
<ul>
<?php
foreach ($nodesList AS $n) {
	echo '<li>' . $n['Node']['body'] . '</li>';
}
?>
    </ul>
</div>