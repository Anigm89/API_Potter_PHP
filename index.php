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
    if ($category === 'characters') {
        render_template('characters');
    } else if ($category === 'books') {
        render_template('books');
    }
    ?>
</body>

</html>