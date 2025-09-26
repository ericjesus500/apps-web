<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos.css">
  <title>Select</title>
</head>

<body>
  <h1>Custom Select</h1>
  <div class="content">
    <div class="content-select">
      <h2>Ejemplo básico</h2>
      <select class="select s-one">
        <option>Opción 1</option>
        <option>Opción 2</option>
        <option>Opción 3</option>
      </select>
    </div>
    <div class="content-select s-two">
      <h2>Personalizando estilos básicos</h2>
      <select class="select">
        <option>Opción 4</option>
        <option>Opción 5</option>
        <option>Opción 6</option>
      </select>
    </div>
    <div class="content-select s-three">
      <h2>Contenido enriquecido en &lt;option&gt;</h2>
      <select class="select">
        <option><img class="banderas" src="./img/peru.PNG" alt="peru">Perú</option>
        <option><img class="banderas" src="./img/usa.PNG" alt="usa">USA</option>
        <option><img class="banderas" src="./img/alemania.PNG" alt="alemania">Germany</option>
        <option><img class="banderas" src="./img/japon.PNG" alt="japon">Japón</option>
      </select>
    </div>
    <div class="content-select s-four">
      <h2>Reemplazo del botón</h2>
      <select class="select">
        <button>
          selected option: <selectedcontent></selectedcontent>
        </button>
        <option>Opción 1</option>
        <option>Opción 2</option>
        <option>Opción 3</option>
      </select>
    </div>
    <div class="content-select s-five">
      <h2>Contenido personalizado en el cuadro de lista</h2>
      <select class="select">
        <div class=container-s-five>
          <div>
            <optgroup label="1-2">
              <option>one</option>
              <option>two</option>
            </optgroup>
          </div>
          <div>
            <optgroup label="3-4">
              <option>three</option>
              <option>four</option>
            </optgroup>
          </div>
          <div>
            <optgroup label="5-6">
              <option>five</option>
              <option>six</option>
            </optgroup>
          </div>
          <div>
            <optgroup label="7-8">
              <option>seven</option>
              <option>eight</option>
            </optgroup>
          </div>
        </div>
      </select>
    </div>
    <div class="content-select s-six">
      <h2>&lt;select&gt; Personalizado y con efecto de Transición</h2>
      <select class="select">
        <option hidden>Choose…</option>
        <optgroup label="Group A">
          <option>One</option>
          <option>Two</option>
        </optgroup>
        <optgroup label="Group B">
          <option>Three</option>
          <option>Four</option>
        </optgroup>
      </select>
    </div>
    <div class="content-select s-seven">
      <select class="select">
        <button>
          <span class="label">Where</span>
          <selectedcontent></selectedcontent>
        </button>
        <div class="option-container">
          <option value="" hidden>
            <span>Search destinations</span>
          </option>
          <option value="anywhere">
            <img src="https://a0.muscache.com/pictures/f9ec8a23-ed44-420b-83e5-10ff1f071a13.jpg" alt="">
            <span class="text">Everywhere</span>
          </option>
          <option value="europe">
            <img src="https://a0.muscache.com/im/pictures/7b5cf816-6c16-49f8-99e5-cbc4adfd97e2.jpg?im_w=320" alt="">
            <span class="text">Europe</span>
          </option>
          <option value="italy">
            <img src="https://a0.muscache.com/im/pictures/ea5598d7-2b07-4ed7-84da-d1eabd9f2714.jpg?im_w=320" alt="">
            <span class="text">Italy</span>
          </option>
          <option value="caribbean">
            <img src="https://a0.muscache.com/im/pictures/c61d10f5-4ab3-4d16-bed7-0449e15c8277.jpg?im_w=320" alt="">
            <span class="text">Caribbean</span>
          </option>
          <option value="canada">
            <img src="https://a0.muscache.com/im/pictures/cd9f2bf0-eefc-4980-b7cb-9c8ca3dae883.jpg?im_w=320" alt="">
            <span class="text">Canada</span>
          </option>
          <option value="south-america">
            <img src="https://a0.muscache.com/im/pictures/06a30699-aead-492e-ad08-33ec0b383399.jpg?im_w=320" alt="">
            <span class="text">South America</span>
          </option>
        </div>
      </select>
    </div>
    <div class="content-select s-eight">
      <select class="select">
        <button>
          <selectedcontent></selectedcontent>
          <span class="arrow"></span>
        </button>
        <option value="reply">
          <span class="material-symbols-outlined">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
              <path d="M760-200v-160q0-50-35-85t-85-35H273l144 144-57 56-240-240 240-240 57 56-144 144h367q83 0 141.5 58.5T840-360v160h-80Z" />
            </svg>
          </span>
          <span class="text">Reply</span>
        </option>
        <option value="reply-all">
          <span class="material-symbols-outlined">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
              <path d="M320-280 80-520l240-240 57 56-184 184 184 184-57 56Zm480 80v-160q0-50-35-85t-85-35H433l144 144-57 56-240-240 240-240 57 56-144 144h247q83 0 141.5 58.5T880-360v160h-80Z" />
            </svg>
          </span>
          <span class="text">Reply all</span>
        </option>
        <option value="forward">
          <span class="material-symbols-outlined">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
              <path d="m640-280-57-56 184-184-184-184 57-56 240 240-240 240ZM80-200v-160q0-83 58.5-141.5T280-560h247L383-704l57-56 240 240-240 240-57-56 144-144H280q-50 0-85 35t-35 85v160H80Z" />
            </svg>
          </span>
          <span class="text">Forward</span>
        </option>
      </select>
    </div>
    <div class="content-select s-nine">
      <select class="select currency-select" name="currency-select" aria-label="Currency preference:">
        <button>
          <selectedcontent></selectedcontent>
          <span class="arrow"></span>
        </button>
        <option value="eur">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Flag_of_Europe.svg/50px-Flag_of_Europe.svg.png" alt="" />
          <div class="currency">
            <div class="currency-short">EUR</div>
            <div class="currency-long">Euro</div>
          </div>
          <div class="symbol" aria-hidden="true">€</div>
        </option>
        <option value="gbp">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/50px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="" />
          <div class="currency">
            <div class="currency-short">GBP</div>
            <div class="currency-long">Great British Pound</div>
          </div>
          <div class="symbol" aria-hidden="true">£</div>
        </option>
        <option value="usd" selected>
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg/50px-Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg.png" alt="" />
          <div class="currency">
            <div class="currency-short">USD</div>
            <div class="currency-long">United States Dollar</div>
          </div>
          <div class="symbol" aria-hidden="true">$</div>
        </option>
        <option value="jpy">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/50px-Flag_of_Japan.svg.png" alt="" />
          <div class="currency">
            <div class="currency-short">JPY</div>
            <div class="currency-long">Japanese Yen</div>
          </div>
          <div class="symbol" aria-hidden="true">¥</div>
        </option>
        <option value="bitcoin">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/30px-Bitcoin.svg.png" alt="" />
          <div class="currency">
            <div class="currency-short">BTC</div>
            <div class="currency-long">Bitcoin</div>
          </div>
          <div class="symbol" aria-hidden="true">₿</div>
        </option>
      </select>
    </div>
    <div class="content-select s-ten">
      <select class="select" name="my-filter" aria-label="Sort by">
        <button>
          <span aria-hidden="true">
            <span>Sort by :</span>        
            <selectedcontent></selectedcontent>
          </span>
          <span class="arrow">
            <img src="https://www.svgrepo.com/download/80156/down-arrow.svg" alt="">
          </span>
        </button>
        <option value="recommended">Recommended</option>
        <option value="new">What's New</option>
        <option value="popular">Popularity</option>
        <option value="discount">Better Discount</option>
        <option value="price-h-to-l">Price: High to Low</option>
        <option value="price-h-to-l">Price: Low to High</option>
        <option value="rating">Customer Rating</option>
      </select>
    </div>
    <div class="content-select s-eleven">
      <select class="select">
        <button>
          <selectedcontent></selectedcontent>
        </button>
        <option value="" hidden>
          <figure></figure>
          <span>Select a country</span>
        </option>
        <option value="andorra">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Andorra.svg/120px-Flag_of_Andorra.svg.png" alt="" />
          <span>Andorra</span>
        </option>
        <option value="bolivia">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Bolivia.svg/120px-Flag_of_Bolivia.svg.png" alt=""/>
          <span>Bolivia</span>
        </option>
        <option value="cambodia">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/120px-Flag_of_Cambodia.svg.png" alt="" />
          <span>Cambodia</span>
        </option>
        <option value="denmark">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/120px-Flag_of_Denmark.svg.png" alt="" />
          <span>Denmark</span>
        </option>
        <option value="egypt">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/120px-Flag_of_Egypt.svg.png" alt="" />
          <span>Egypt</span>
        </option>
        <option value="estonia">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Flag_of_Estonia.svg/120px-Flag_of_Estonia.svg.png" alt="" />
          <span>Estonia</span>
        </option>
        <option value="ethiopia">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/120px-Flag_of_Ethiopia.svg.png" alt="" />
          <span>Ethiopia</span>
        </option>
        <option value="finland">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/120px-Flag_of_Finland.svg.png" alt="" />
          <span>Finland</span>
        </option>
        <option value="france">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/120px-Flag_of_France.svg.png" alt="" />
          <span>France</span>
        </option>
        <option value="gabon">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Flag_of_Gabon.svg/120px-Flag_of_Gabon.svg.png" alt="" />
          <span>Gabon</span>
        </option>
        <option value="germany">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/120px-Flag_of_Germany.svg.png" alt="" />
          <span>Germany</span>
        </option>
        <option value="ghana">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/120px-Flag_of_Ghana.svg.png" alt="" />
          <span>Ghana</span>
        </option>
        <option value="greece">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/120px-Flag_of_Greece.svg.png" alt="" />
          <span>Greece</span>
        </option>
        <option value="guatemala">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Flag_of_Guatemala.svg/120px-Flag_of_Guatemala.svg.png" alt="" />
          <span>Guatemala</span>
        </option>
        <option value="guinea">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Flag_of_Guinea.svg/120px-Flag_of_Guinea.svg.png" alt="" />
          <span>Guinea</span>
        </option>
        <option value="guyana">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_Guyana.svg/120px-Flag_of_Guyana.svg.png" alt="" />
          <span>Guyana</span>
        </option>
        <option value="haiti">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Flag_of_Haiti.svg/120px-Flag_of_Haiti.svg.png" alt="" />
          <span>Haiti</span>
        </option>
        <option value="honduras">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Honduras.svg/120px-Flag_of_Honduras.svg.png" alt="" />
          <span>Honduras</span>
        </option>
        <option value="hungary">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/120px-Flag_of_Hungary.svg.png" alt="" />
          <span>Hungary</span>
        </option>
        <option value="iceland">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Iceland.svg/120px-Flag_of_Iceland.svg.png" alt="" />
          <span>Iceland</span>
        </option>
        <option value="india">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/120px-Flag_of_India.svg.png" alt="" />
          <span>India</span>
        </option>
        <option value="south-africa">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/120px-Flag_of_South_Africa.svg.png" alt=""/>
          <span>South Africa</span>
        </option>
      </select>
    </div>
    <div class="content-select s-twuelve">
      <select class="select">
        <option>Opción 1</option>
        <option>Opción 2</option>
        <option>Opción 3</option>
      </select>
    </div>
  </div>
</body>

</html>