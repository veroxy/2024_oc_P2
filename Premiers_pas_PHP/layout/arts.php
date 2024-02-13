<?php require_once(__DIR__ . '/../datas/oeuvres.php'); ?>
<main>
    <div id="liste-oeuvres">
        <?php
        foreach ($arts as $key => &$art) {
            ?>
            <article class="oeuvre">
                <a href="./oeuvre.php?id=<?php echo $art['id'] ?>">
                    <img src="<?php echo $art['img'] ?>" alt="<?php echo $art['title'] ?>">
                    <h2><?php echo $art['title'] ?></h2>
                    <p class="description"><?php echo $art['artist'] ?></p>
                </a>
            </article>
            <?php
        }
        ?>

    </div>
</main>
