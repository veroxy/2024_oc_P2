<!doctype html>
<?php require_once(__DIR__ . '/datas/oeuvres.php'); ?>
<html lang="fr">
<?php include(__DIR__ . '/layout/head.php'); ?>

<body>

<?php
include(__DIR__ . '/layout/header.php');
$art_id = $params['id'];
?>
<main>
    <!--ART DETAILS-->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $arts[$art_id]['img'] ?>" alt="<?php echo $arts[$art_id]['title'] ?> ">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $arts[$art_id]['title'] ?></h1>
            <p class="description"><?php echo $arts[$art_id]['artist'] ?></p>
            <p class="description-complete">
                <?php echo $arts[$art_id]['description'] ?>
            </p>
        </div>
    </article>
    <!--END ARTS DETALS-->
</main>

<?php include(__DIR__ . '/layout/footer.php'); ?>
</body>
</html>