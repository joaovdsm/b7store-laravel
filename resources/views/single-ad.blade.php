<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/adPageStyle.css" />
    <title>B7Store</title>
  </head>

  <body>
    <x-base.header />
    <main>
      <div class="ad-area">
        <div class="ad-area-left">
          <div
            class="main-photo"
            style="background-image: url('/assets/adFusca/fusca.png')"
          ></div>
          <div class="secundary-photos">
            <div
              class="secundary-image"
              style="background-image: url('/assets/adFusca/fusca2.png')"
            ></div>
            <div
              class="secundary-image"
              style="background-image: url('/assets/adFusca/fusca3.png')"
            ></div>
            <div
              class="secundary-image"
              style="background-image: url('/assets/adFusca/fusca4.png')"
            ></div>
            <div
              class="secundary-image"
              style="background-image: url('/assets/adFusca/fusca5.png')"
            ></div>
          </div>
        </div>
        <div class="ad-area-right">
          <div class="categories-state">Rio de Janeiro / Carros</div>
          <div class="ad-page-title">Volkswagen Fusca 68</div>
          <div class="ad-page-date">Publicado em 04/07 às 12:48</div>
          <div class="ad-page-price">R$ 34.990,00</div>
          <div class="contact">
            <img src="/assets/icons/wppIcon.png" />
            <div class="contact-text">Negociável</div>
          </div>
          <div class="negociable">*Esse valor poderá ser negociado.</div>
          <div class="ad-page-text">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout.
          </div>
          <button class="get-touch">Entrar em contato</button>
          <div class="views">
            <img src="/assets/icons/eyeGrayIcon.png" />
            <div class="views-text">235 pessoas visualizaram este anúncio</div>
          </div>
        </div>
      </div>
      <div class="ads">
        <div class="ads-title">Anúncios relacionados</div>
        <div class="ads-area">
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca6.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 67 - Equipado</div>
            <div class="ad-price">R$ 33.990,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca7.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 67 - Extra</div>
            <div class="ad-price">R$ 36.900,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca8.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 68</div>
            <div class="ad-price">R$ 34.450,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca9.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 66</div>
            <div class="ad-price">R$ 35.450,00</div>
          </div>
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>
