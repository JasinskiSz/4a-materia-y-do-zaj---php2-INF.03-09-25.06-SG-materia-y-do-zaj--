<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Remonty</title>
</head>

<body>
    <header>
        <h1>Malowanie i gipsowanie</h1>
    </header>
    <main>
        <nav>
            <a href="kontakt.html">Kontakt</a>
            <a href="https://remonty.pl" target="_blank">Partnerzy</a>
        </nav>

        <!-- blok boczny -->
        <aside>
            <img src="tapeta_lewa.png" alt="usługi">
            <!-- poniższy img zmienić na tapetę prawą -->
            <img src="tapeta_lewa.png" alt="usługi">

            <img src="tapeta_lewa.png" alt="usługi">
        </aside>

        <section id="left">
            <h2>Dla klientów</h2>
            <form action="zlecenia.php" method="post">
                <label for="pracownicy">Ilu co najmniej pracowników potrzebujesz?</label>
                <input type="number" id="pracownicy">
                <input type="submit" value="Szukaj firm">
                <!-- <button type="submit">Szukaj firm</button> -->
            </form>
            <?php

            ?>
            <!-- efekt działania skryptu 1 -->
        </section>

        <section id="middle">
            <h2>Dla wykonawców</h2>
            <form action="zlecenia.php" method="post">
                <select>
                    <!-- wypełniona skryptem 2 -->
                </select>

                <input type="radio" id="malowanie" name="wybor" checked>
                <label for="malowanie">malowanie</label>

                <input type="radio" id="gipsowanie" name="wybor">
                <label for="gipsowanie">gipsowanie</label>

                <!-- przycisk wysyłający dane z formularza do skryptu 3 -->
                <input type="submit" value="Szukaj klientów">
            </form>

            <ul>
                <!-- wypełniona za pomocą skryptu 3 -->
            </ul>
        </section>
    </main>

    <footer>
        <p><strong>Stronę wykonał: 3.141592</strong></p>
    </footer>

</body>

</html>