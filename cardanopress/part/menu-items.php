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
}

?>

<?php foreach ($list as $label => $link) : ?>
    <li>
        <a href="<?php echo $link; ?>" class="dropdown-item"><?php echo $label; ?></a>
    </li>
<?php endforeach; ?>
