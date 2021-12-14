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

    <link rel="stylesheet" href="../styles/store.css" />
    <title>Document</title>
  </head>
  <body>
    <main>
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
        <section class="hero">
          <figure class="img-wrapper">
            <img src="../images/header.jfif" />
          </figure>
        </section>
      </header>
      <section class="search">
        <div class="input-block">
          <i class="fas fa-search icon"></i>
          <input type="text" placeholder="<?= $texts['store'][$_SESSION['lang']]['busca'] ?>" />
        </div>
      </section>
      <section class="products-section">
        <h1><?= $texts['store'][$_SESSION['lang']]['ofertas'] ?></h1>
        <div class="row">
          <?php for ($i = 0; $i < 10; $i++) { 
              $product = generateProduct();
              $lang = $_SESSION['lang'];
            
              echo "
              <div class='product-card'>
                <div class='wrapper'>
                  <img src='../images/amburg.jpg' class='image' />
                </div>
                <div class='info'>
                  <div>
                    <h1>".$product[$lang]['name']."</h1>
                    <h2>".$product[$lang]['priceSim']."<span>".$product[$lang]['price']."</span></h2>
                  </div>
                  <p>". $product[$lang]['description']."</p>
                  <button class='primary w-full' onclick='addItem(this)'>
                    <i class='fas fa-shopping-cart'></i>". $texts['store'][$_SESSION['lang']]['carrinhoButton']."
                  </button>
                </div>
              </div>
              ";
          }
          ?>
        </div>
      </section>
      <section class="primary">
        <div class="products-section">
          <h1><?= $texts['store'][$_SESSION['lang']]['maisPedidos'] ?></h1>
          <div class="row">
          <?php for ($i = 0; $i < 5; $i++) { 
              $product = generateProduct();
              $lang = $_SESSION['lang'];
            
              echo "
              <div class='product-card'>
                <div class='wrapper'>
                  <img src='../images/amburg.jpg' class='image' />
                </div>
                <div class='info'>
                  <div>
                    <h1>".$product[$lang]['name']."</h1>
                    <h2>".$product[$lang]['priceSim']."<span>".$product[$lang]['price']."</span></h2>
                  </div>
                  <p>". $product[$lang]['description']."</p>
                  <button class='primary w-full' onclick='addItem(this)'>
                    <i class='fas fa-shopping-cart'></i>". $texts['store'][$_SESSION['lang']]['carrinhoButton']."
                  </button>
                </div>
              </div>
              ";
          }
          ?>
          </div>
        </div>
      </section>
      <section class="products-section">
        <h1><?= $texts['store'][$_SESSION['lang']]['todos'] ?></h1>
        <div class="row-all">
        <?php for ($i = 0; $i < 30; $i++) { 
              $product = generateProduct();
              $lang = $_SESSION['lang'];
            
              echo "
              <div class='product-card small'>
                <div class='wrapper'>
                  <img src='../images/amburg.jpg' class='image' />
                </div>
                <div class='info'>
                  <div>
                    <h1>".$product[$lang]['name']."</h1>
                    <h2>".$product[$lang]['priceSim']."<span>".$product[$lang]['price']."</span></h2>
                  </div>
                  <p>". $product[$lang]['description']."</p>
                  <button class='primary w-full' onclick='addItem(this)'>
                    <i class='fas fa-shopping-cart'></i>". $texts['store'][$_SESSION['lang']]['carrinhoButton']."
                  </button>
                </div>
              </div>
              ";
          }
          ?>
        </div>
      </section>
    </main>

    <footer>
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
      <section class="bottom">
        @ AMBURG 2021
        <div>
            <img style="cursor: pointer" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" onclick="changeLanguage('portuguese')" width="50px"></img>
            <img style="cursor: pointer" src="https://static.todamateria.com.br/upload/ba/nd/bandeira_americana_bb.jpg" onclick="changeLanguage('english')" width="50px"></img>
        </div>
      </section>
    </footer>

    <div class="buy-footer">
      <div>
        <h1>
          Total: <strong><?= $_SESSION['lang'] == 'english' ? '$' : "R$"?> <span class="val">0</span></strong>
        </h1>
        <div class="icon" onclick="goToCheckout()">
          <i class="fas fa-shopping-cart"></i>
        </div>
      </div>
    </div>

    <footer></footer>

    <script src="scripts/nav.js"></script>
    <script src="scripts/changeLanguage.js"></script>

    <script>
      function goToCheckout() {
        event.preventDefault();
        window.location.href = "http://<?=$_SERVER['HTTP_HOST']?>/checkout";
      }
    </script>
    <script>
      let qtd_itens = 0;
      let value_itens = 0;
      const allProducts = document.querySelectorAll(".product-card");

      allProducts.forEach((product) => {
        const valueRaw = product.querySelector("span").textContent.replace(',', '.')
        const value = Number(valueRaw);
        const button = product.querySelector("button");
        button.onclick = () => addItem(button, value);
      });

      const buyFooter = document.querySelector(".buy-footer");
      const buyFooterValue = buyFooter.querySelector(".val");
      function toggleFooter() {
        buyFooterValue.textContent = value_itens.toFixed(2);
        if (qtd_itens <= 0) buyFooter.classList.remove("active");
        else buyFooter.classList.add("active");
      }

      function addItem(element, val) {
        element.classList.add("secundary");
        element.classList.remove("primary");
        element.innerHTML = `<i class="fas fa-trash"></i> REMOVER DO CARRINHO`;
        value_itens += val;

        element.onclick = () => removeItem(element, val);
        qtd_itens += 1;
        toggleFooter();
      }

      function removeItem(element, val) {
        element.classList.add("primary");
        element.classList.remove("secundary");
        element.innerHTML = `<i class="fas fa-shopping-cart"></i> ADICIONAR AO CARRINHO`;
        value_itens -= val;

        element.onclick = () => addItem(element, val);
        qtd_itens -= 1;
        toggleFooter();
      }
    </script>
  </body>
</html>
