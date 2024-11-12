<section>
    <h1>Libros de Harry Potter</h1>
    <?php
    $books = Books::fetch_books(API_URL);
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <?php $bookData = $book->get_data(); ?>
            <li>
                <p class="name"> <?= $bookData['number'] . '. ' . $bookData['title'] ?> </p>
                <img src="<?= $bookData['cover'] ?>" alt="<?= $bookData['title'] ?>">
                <p><?= $bookData['pages'] ?> Páginas </p>
                <p><?= $bookData['description'] ?> </p>
            </li>
        <?php endforeach ?>
    </ul>
</section>