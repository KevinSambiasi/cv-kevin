<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>CV Kévin</title>
</head>

<body>


    <header class="header position-relative">
        <?php session_start();
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success" role="alert" id="alert">';
            echo $_SESSION['message'];
            echo '</div>';
            unset($_SESSION['message']);
        }
        ?>

        <div class="container text-center d-flex justify-content-evenly">
            <a href="#competence">portfolio</a>
            <a href="#contact">contact</a>
        </div>
        <div class="title text-center text-white">
            <h1>Kévin Sambiasi</h1>
        </div>
    </header>
    <button class="arrowtop" onclick="topFunction()" id="myBtn"><i class="fa-solid fa-arrow-up"></i></button>
    <section>
        <div class="container">
            <div class="mb-5 mx-5 bio text-justify position-relative">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nulla placeat possimus blanditiis.
                    Incidunt aliquid dicta assumenda sed, vitae numquam veniam id provident, nulla ullam esse architecto
                    atque natus corporis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus
                    perspiciatis minima dolores ex reiciendis alias facere provident repudiandae rem veniam beatae
                    voluptate
                    perferendis laborum possimus in quo, cupiditate ipsum quaerat.
                </p>
            </div>
        </div>
    </section>
    <section class="competences" id="competence">
        <div class="container ">
            <div class="row text-center px-5">
                <div class="col-lg-6 col-12 ">
                    <h2>Developpeur Web</h2>
                    <p class="pt-4">Je suis actuellement en formation j'apprend les bases de HTML CSS, voici quelques
                        exemples de projet
                        sur lesquels j'ai déjà travaillé.</p>
                    <div class="d-grid gap-2 col-6 mx-auto pt-4">
                        <a href="https://github.com/KevinSambiasi?tab=overview&from=2022-01-01&to=2022-01-31" target="_blank" class="btn btn-primary">
                            <h3>Projets <i class="fa-brands fa-github"></i></h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <h2>Compétences visées</h2>
                    <p class="pt-4">HTML
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-main" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                    </div>
                    CSS
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped  bg-main" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    BOOTSRAP
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped  bg-main" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row text-center px-5">
                <div class="col-xxl-5 col-12 email">
                    <a class="w-auto text-decoration-none" href="mailto:kevin03071991@hotmail.com">
                        <div class="mail-text">
                            <p class="my-0 p-3 w-100 ">kevin03071991@hotmail.com</p>
                            <div class="position-relative col-2">
                                <i class="fa-solid fa-envelope p-3 "></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-7 col-12">
                    <form method="post" action="script.php">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" required placeholder="Nom Prénom">
                        </div>
                        <div class="mb-3">
                            <input type="email" required class="form-control" id="exampleInputPassword1" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="exampleInputPassword1" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn fw-bold">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <a href="#">Mentions Légales</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>