<section>
    <h1>Casas de Howarts</h1>
    <?php $houses = Houses::fetch_houses(API_URL); ?>
    <ul>
        <?php foreach ($houses as $house) :  ?>
            <?php $dataHouse = $house->get_data()  ?>
            <li>
                <p class="name"> <?= $dataHouse['house']  ?> </p>
                <?= $dataHouse['emoji'] ?>
                <p> <?= $dataHouse['animal']; ?> </p>
                <p> Fundador: <?= $dataHouse['founder']  ?> </p>
                <p> Colores: <?= implode(', ', $dataHouse['colors'])  ?> </p>
            </li>
        <?php endforeach ?>
    </ul>
</section>