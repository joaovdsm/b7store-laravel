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
            @if($advertises->count() > 0)
              @foreach ($advertises as $advertise)
                <x-basic-ad
                  {{-- Pode ser passado uma variável de cada vez, ou uma prop com tudo que há dentro do objeto.
                    title="{{ $advertise->title }}" 
                    price="{{ number_format($advertise->price, 2, ',', '.') }}"
                    image="{{ $advertise->images->where('featured', 1)->first()->url }}" 
                  --}}
                  :advertise="$advertise"
                  :editable="true"
                />
              @endforeach
            @else
              <span>Você ainda não possui anúncios</span>
            @endif
          </div>
        </div>
      </div>
    </main>

    {{-- Footer --}}
    <x-base.footer />
    {{-- End Footer --}}
  </body>
</html>
