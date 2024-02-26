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
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />

    <title>B7Store - Meus anúncios</title>
  </head>

  <body>
    {{-- Header --}}
    <x-base.header />
    {{-- End-Header --}}

    <main>
      <div class="my-ads-page">
        <x-base.sidebar />
        <div class="myAds-area">
          <h3 class="myAds-title">Meus Anúncios</h3>
          <div class="myAds-ads-area">
            @foreach ($advertises as $advertise)
              <x-my-ad-item image="/assets/myAds/game1.png" title="{{ $advertise->title }}" price="{{ number_format($advertise->price, 2, ',', '.') }}"/>
            @endforeach
          </div>
        </div>
      </div>
    </main>

    {{-- Footer --}}
    <x-base.footer />
    {{-- End Footer --}}
  </body>
</html>
