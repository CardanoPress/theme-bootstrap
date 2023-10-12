<?php

/**
 * The template for displaying the list of navigation items for the menu dropdown.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/menu-items.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

if (empty($list)) {
    $list = cardanoPress()->getPages();

	$menuLocations = get_nav_menu_locations();

	if (! empty($menuLocations['cardanopress'])) {
		$navItems = wp_get_nav_menu_items($menuLocations['cardanopress']);

		if ($navItems) {
			 // removed as the last element
			$disconnectItem = array_pop($list);

			foreach ($navItems as $navItem) {
				$list[$navItem->title] = $navItem->url;
			}

	 		// add back as the last element
			$list['Disconnect'] = $disconnectItem;
		}
	}
}

?>

<?php foreach ($list as $label => $link) : ?>
    <li>
        <a href="<?php echo esc_url($link); ?>" class="dropdown-item"><?php echo esc_html($label); ?></a>
    </li>
<?php endforeach; ?>
