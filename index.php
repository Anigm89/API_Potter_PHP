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
            //var_dump($data);
        ?>
        <ul>
        <?php foreach($data as $character) : ?>
            <li>
                <p>Nombre: <?= $character['fullName'] ?> </p>
                <p>Alias:  <?= $character['nickname'] ?> </p>
                <p>Casa:  <?= $character['hogwartsHouse'] ?> </p>
                <p>fecha de nacimiento:  <?= $character['birthdate'] ?> </p>
                <img src=" <?= $character['image'] ?>" alt=" <?= $character['nickname'] ?>">
            </li>
        <?php endforeach ?>
        </ul>
    </section>
</body>
</html>