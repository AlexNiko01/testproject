<?php

/**
 * @var $route array
 */
?>


<li class="<?php echo $route['active'] ? 'active' : ''; ?>">
    <a href="<?php echo $route['url'] ?? ''; ?>">
        <?php echo $route['title'] ?? ''; ?>
    </a>

    <?php
    if ($children = $route['children'] ?? null) : ?>
        <ul>
            <?php foreach ($children as $child) {
                echo $this->render('second-children', [
                    'route' => $child
                ]);
            } ?>
        </ul>
    <?php endif; ?>
</li>

