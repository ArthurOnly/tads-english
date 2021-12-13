<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../node_modules/@fortawesome/fontawesome-free/css/all.css"
    />
    <link href="../node_modules/@fortawesome/fontawesome-free/js/all.js" />

    <link rel="stylesheet" href="../styles/itens.css" />
    <title>Document</title>
  </head>
  <body style="min-height: 100vh; display: grid;">
    <header>
    <nav>
          <a href="/store" class="clear-link">
            <h2><i class="fas fa-hamburger"></i> ABURG</h2>
          </a>
          <h2 class="mobile-only" id="nav-toggler">
            <i class="fas fa-bars"></i>
          </h2>
          <ul class="desktop-only">
            <li class="selector">
              <a href="#"><i class="fas fa-user"></i> <?= $texts['navbar'][$_SESSION['lang']]['perfil']?></a>
            </li>
            <li>
              <a href="#"
                ><i class="fas fa-shopping-cart"></i> <?= $texts['navbar'][$_SESSION['lang']]['minhasCompras']?></a
              >
            </li>
            <li>
              <a href="/"><i class="fas fa-sign-out-alt"></i> <?= $texts['navbar'][$_SESSION['lang']]['sair']?></a>
            </li>
          </ul>
          <ul class="mobile-menu mobile-only">
            <div>
              <li>
                <a href="#"><i class="fas fa-user"></i> <?= $texts['navbar'][$_SESSION['lang']]['perfil']?></a>
              </li>
              <li>
                <a href="#"
                  ><i class="fas fa-shopping-cart"></i> <?= $texts['navbar'][$_SESSION['lang']]['minhasCompras']?></a
                >
              </li>
              <li>
                <a href="/"><i class="fas fa-sign-out-alt"></i> <?= $texts['navbar'][$_SESSION['lang']]['sair'] ?></a>
              </li>
            </div>
          </ul>
        </nav>
    </header>
    <main>
      <section class="itens">
        <div class="all">
          <?php for ($i = 0; $i < 3; $i++) { 
              $product = generateProduct();
              $lang = $_SESSION['lang'];

              echo "
                <div class='card-checkout'>
                  <figure>
                    <img src='../images/amburg.jpg' />
                  </figure>
                  <div class='content'>
                    <h1>".$product[$lang]['name']."</h1>
                    <h2>".$product[$lang]['priceSim']."<span>".$product[$lang]['price']."</span></h2>
                    <p>". $product[$lang]['description']."</p>
                    <div class='selector'>
                      <button class='primary down'>-</button>
                      <input value='1' />
                      <button class='primary up'>+</button>
                    </div>
                  </div>
                </div>
              ";
          }
          ?>
        </div>
        <div class="bottom-info">
          <p><strong><?= $texts['checkout'][$_SESSION['lang']]['subtotal']?>:</strong> R$ 15.00</p>
          <p><strong><?= $texts['checkout'][$_SESSION['lang']]['frete']?>:</strong> R$ 0.00</p>
          <p><strong><?= $texts['checkout'][$_SESSION['lang']]['total']?>:</strong> R$ 15.00</p>
          <button class="primary w-full"><?= $texts['checkout'][$_SESSION['lang']]['finalizarCompra']?></button>
        </div>
      </section>
    </main>
    <footer style="margin-top: auto;">
      <section class="top">
        <div class="social">
          <a class="clear-link" href="#"
            ><i class="fab fa-facebook-square"></i
          ></a>
          <a class="clear-link" href="#"
            ><i class="fab fa-instagram-square"></i
          ></a>
          <a class="clear-link" href="#"
            ><i class="fab fa-whatsapp-square"></i
          ></a>
        </div>
      </section>
      <section class="bottom">@ AMBURG 2021
        <div>
          <img style="cursor: pointer" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" onclick="changeLanguage('portuguese')" width="50px"></img>
          <img style="cursor: pointer" src="https://static.todamateria.com.br/upload/ba/nd/bandeira_americana_bb.jpg" onclick="changeLanguage('english')" width="50px"></img>
        </div>
      </section>
    </footer>

    <script src="scripts/nav.js"></script>
    <script src="scripts/changeLanguage.js"></script>
    <script>
      const cards = document.querySelectorAll(".card-checkout");

      cards.forEach((card) => {
        const up = card.querySelector(".up");
        const down = card.querySelector(".down");
        const text = card.querySelector("input");

        up.onclick = () => {
          text.value = Number(text.value) + 1;
        };
        down.onclick = () => {
          const actual = Number(text.value);

          if (actual > 1) {
            text.value = Number(text.value) - 1;
            return;
          }

          const remove = confirm("Deseja remover do carrinho?");
          if (remove) card.remove();
        };
      });
    </script>
  </body>
</html>