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
    if (!isset($category) || empty($category)) {
        $category = 'characters';
    }

    match ($category) {
        'characters' => render_template('characters'),
        'books' => render_template('books'),
        'houses' =>  render_template('houses'),
        'spells' => render_template('spells'),
    };
    ?>
</body>

</html>