<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php render_template('head'); ?>
<body>
    <?php /* render_template('section'); */ ?>
    <section>
        <h1>Personajes de Harry Potter</h1> 
        <?php
            $data = get_data($url);
            var_dump($data);
            ?>
    </section>
</body>
</html>