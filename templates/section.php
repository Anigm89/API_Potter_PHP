<section>
    <h1>Personajes de Harry Potter</h1> 
    <?php
            $characters = Characters::fetch_and_get(API_URL);
            //var_dump($characters);
        ?>
    <ul>
    <?php foreach($characters as $character) : ?>
        <?php $character_data = $character->get_data(); ?>
        <li>
            <p class="name"> <?= $character_data['fullName'] ?> </p>
            <img src=" <?= $character_data['image'] ?>" alt=" <?= $character_data['nickname'] ?>">
            <p>Alias: <span>  <?= $character_data['nickname'] ?> </span> </p>
            <p><span> <?= $character_data['hogwartsHouse'] ?> </span> </p>
            <p> <span> <?= $character_data['birthdate'] ?> </span> </p>
        </li>
    <?php endforeach ?>
    </ul>
</section>