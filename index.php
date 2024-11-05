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
                <p class="name"> <?= $character['fullName'] ?> </p>
                <img src=" <?= $character['image'] ?>" alt=" <?= $character['nickname'] ?>">
                <p>Alias: <span>  <?= $character['nickname'] ?> </span> </p>
                <p><span> <?= $character['hogwartsHouse'] ?> </span> </p>
                <p> <span> <?= $character['birthdate'] ?> </span> </p>
            </li>
        <?php endforeach ?>
        </ul>
    </section>
</body>
</html>