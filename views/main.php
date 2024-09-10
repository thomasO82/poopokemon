<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>pokemon</h1>
    </header>

    <main>
        <section>
            <h2>Poke list</h2>
            <div>
                <?php foreach ($pokemons as $pokemon): ?>

                    <article>
                        <h3><?= $pokemon->getName() ?></h3>
                        <form action="/" method="POST">
                            <button type="submit" name="free" value="<?= $pokemon->getId() ?>">Liberer</button>
                        </form>
                    </article>

                <?php endforeach ?>
            </div>
        </section>
        <section>
            <h3>Pokerandom</h3>
            <article>
                <h4><?= $randomPoke->getName()?></h4>
                <form action="/" method="POST">
                    <?php if($randomPoke->getIsCaptured() == 0): ?>
                    <button type="submit" name="capture" value="<?= $randomPokey->getId()?>">Capturer</button>
                    <?php endif ?>
                    <button type="submit" name="chill" value="chill">Laisser tranquile</button>
                </form>
            </article>
        </section>
    </main>

    <footer>
        <p>copyrigth by thomas oliver</p>
    </footer>
</body>

</html>