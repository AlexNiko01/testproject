<?php

/**
 * @var $route array
 * @var $key int
 */
?>


<?php if ($route) :; ?>
    <li class="nav_cat <?php echo $route['active'] ? 'active' : ''; ?>">
        <a href="<?php echo $route['url'] ?? ''; ?>">
            <span><?php echo $route['title'] ?? '' ?></span>
            <?php if ($children = $route['children'] ?? null) { ?>
                <i class="open_more_menu"></i>
            <?php }; ?>
        </a>
        <?php
        if ($children = $route['children'] ?? null) { ?>
            <ul>
                <?php foreach ($children as $child) {
                    echo $this->render('first-children', [
                        'route' => $child
                    ]);
                } ?>
            </ul>
        <?php }
        ?>

    </li>
<?php endif; ?>