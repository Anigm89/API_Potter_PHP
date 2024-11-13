<section>
    <h1>Hechizos</h1>
    <?php $spells = Spells::fetch_spells(API_URL) ?>
    <ul>
        <?php foreach ($spells as $spellData) : ?>
            <?php $spell = $spellData->get_data() ?>
            <li>
                <p class="name"><?= $spell['spell']; ?> </p>
                <p> <?= $spell['use']; ?> </p>
            </li>
        <?php endforeach ?>
    </ul>
</section>