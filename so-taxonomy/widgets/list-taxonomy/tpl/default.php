<?php

if ($title) echo "<h3 class=\"widget-title\">$title</h3>";

$terms = get_terms( $taxonomy_slug, array('hide_empty' => false) );

if (count($terms)>0):
?>
<ul>
<?php
	foreach ($terms as $term) {
		$link = get_term_link($term, $taxonomy_slug);
		echo "<li><a href=\"$link\">{$term->name}</a></li>\n";
	}
?>
</ul>
<?php
endif;
?>