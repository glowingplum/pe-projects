<articles-content>

    <header>
        <h2 class="attention-voice">
            This is an "article grid" module. This is its heading.
        </h2>
        <p class="introduction-voice">Again, we totally just made that up. It's a box with boxes in it.</p>
    </header>

    <section class="grid">

    <?php include('articles-data.php');

    foreach ($article_data as $article) { ?>
        <a href="#" class="article-card">
            <h3 class="focus-voice"><?=$article['heading']?></h3>
            <p class="regular-voice"><?=$article['introduction']?></p>
            <picture>
                <img src="<?=$article['image']?>" alt="">
            </picture>
        </a>

    <?php } ?>

    </section>

</articles-content>