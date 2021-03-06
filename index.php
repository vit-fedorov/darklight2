<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>darklight Theme ver.2</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>

<body>
    <div class="wrapper">
        <div class="theme-button" id="theme-button">Сменить тему</div>
        <header class="header">
            <div class="header__content">
                <div class="container">
                    <h1>darklight Theme ver.2</h1>
                    <nav class="nav">
                        <div class="nav__content">
                            <a href="#" class="nav__item nav__item_active">Home</a>
                            <a href="#" class="nav__item">Blog</a>
                            <a href="#" class="nav__item">About</a>
                            <a href="#" class="nav__item">Contacts</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main class="main">
            <article class="main__content">
                <p>Куда ни плюнь, везде появляются тёмные темы: в операционных системах, социальных сетях, видеохостингах и даже на обычных сайтах. Если вы разрабатываете что-то из этого, то вам будет полезно знать, как создаётся тёмная тема, потому что рано или поздно вас попросят её сделать.</p>
                <h1>Цвета, от которых не будет больно</h1>
                <p>Правильно подобранные цвета делают сайт красивым: он приятно смотрится и не вызывает боль. Я не дизайнер, поэтому расскажу только об одном аспекте — контрасте.</p>
                <p>Выбранные цвета не должны сильно контрастировать друг с другом. Яркий пример — чёрный текст на белом фоне. Между этими цветами целая пропасть, поэтому после долгого чтения у пользователя начнут болеть глаза.</p>
                <p>Использовать настолько контрастные цвета рекомендуется только тогда, когда вы добавляете отдельную тему для людей с плохим зрением. В остальных случаях лучше сделать фон сероватым, например, #f4f4f4, а шрифт — угольным (#373737) или почти чёрным (#111111).</p>
                <p>В светлых темах более яркие цвета используют для фона, а тёмные — для текста и различных элементов страницы. Например, основной фон может быть светлым, а текст, хедер, футер, кнопки и другие объекты — тёмными. Всё наоборот в тёмных темах: в них фон делают как можно менее ярким, а всё остальное чуть менее тёмное.</p>
                <p><b>Также, можно использовать такие цвета: </b></p>
                <ul>
                    <li>#161b22</li>
                    <li>#21262d</li>
                    <li>rgba(1,4,9,0.8)</li>
                </ul>
            </article>
        </main>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>