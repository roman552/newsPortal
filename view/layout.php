<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSPORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif" rel="stylesheet">
</head>
<body>
    <nav class="one">
        <ul class="topmenu">
            <li>
                <a href="#">Kategooriad<i class="bi bi-caret-down"></i></a>
                <ul class="submenu">
                    <?php Controller::AllCategory();?>
                </ul>        
            </li>
            <li><a href="testError">Info</a></li>
            <li><a href="./">Stardileht</a></li>
        </ul>
    </nav>
    <section>
        <div class="divBox">
            <?php
                if (isset($content)) {
                    echo $content;
                }
                else {
                    echo '<h1>Content is gone!</h1>';
                }
            ?>
        </div>
    </section>
    <hr>
    <p style="display: block; text-align: center;">SPTVR19 2022 a. &copy</p>
</body>
</html>