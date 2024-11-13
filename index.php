<?php
require_once 'functions.php';
require_once 'const.php';
require_once 'classes/categories.php';

?>
<!DOCTYPE html>
<html lang="es">
<?php render_template('head'); ?>

<body>
    <?php render_template('select');  ?>
    <?php
    if (!isset($category)) {
        $category = 'characters';
    }
    if ($category === 'characters') {
        render_template('characters');
    } else if ($category === 'books') {
        render_template('books');
    } else if ($category === 'houses') {
        render_template('houses');
    }
    ?>
</body>

</html>