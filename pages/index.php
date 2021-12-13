<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css"/>
    <link href="node_modules/@fortawesome/fontawesome-free/js/all.js"/>

    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body class="wh-screen" style="display: grid;">
    <header class="primary">
        <h1>
            <i class="fas fa-hamburger"></i> ABURG
        </h1>
    </header>
    <main>
        <form class="login" onsubmit='goToStore(event)'>
            <h1>Login</h1>

            <div class="input-block">
                <label for="username"><?= $texts['index'][$_SESSION['lang']]['username']?></label>
                <input type="text" id="username" name="username"/>
            </div>
            <div class="input-block">
                <label for="password"><?= $texts['index'][$_SESSION['lang']]['password']?></label>
                <input type="password" id="password" name="password"/>
            </div>

            <button class="primary w-full"  type="submit"><?= $texts['index'][$_SESSION['lang']]['loginButton']?></button>

            <div class="bottom-auth">
                <h1><?= $texts['index'][$_SESSION['lang']]['outrasOp']?></h1>
                <div class="buttons-container">
                    <button class="btn-google"><i class="fab fa-google"></i> Google</button>
                    <button class="btn-facebook"><i class="fab fa-facebook-f"></i> Facebook</button>
                </div>
            </div>
        </form>
    </main>
    <footer style="margin-top: auto;">
        <section class="top">
            <div class="social">
                <a class="clear-link" href="#"><i class="fab fa-facebook-square"></i></a>
                <a class="clear-link" href="#"><i class="fab fa-instagram-square"></i></a>
                <a class="clear-link" href="#"><i class="fab fa-whatsapp-square"></i></a>
            </div>
        </section>
        <section class="bottom">
            @ ABURG 2021
            <div>
                <img style="cursor: pointer" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" onclick="changeLanguage('portuguese')" width="50px"></img>
                <img style="cursor: pointer" src="https://static.todamateria.com.br/upload/ba/nd/bandeira_americana_bb.jpg" onclick="changeLanguage('english')" width="50px"></img>
            </div>
        </section>
    </footer>

    <script src="scripts/changeLanguage.js"></script>

    <script>
        function goToStore(event){
            const formData = new FormData(event.target);
            const formProps = Object.fromEntries(formData);
            sessionStorage.setItem('username', formProps.username)
            event.preventDefault()
            window.location.href = `http://localhost:8000/store`;
        }
    </script>
</body>
</html>