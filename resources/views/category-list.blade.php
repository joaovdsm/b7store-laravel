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
    <link rel="stylesheet" href="/assets/adsListStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />

    <script src="https://cdn.tailwindcss.com"> </script>
    <title>B7Store - Anúncios</title>
  </head>

  <body>
    <x-base.header />
    
    <div class="ads">
      <div class="ads-title">Anúncios recentes</div>
      <div class="ads-area">
        @if(count($filteredAds) > 0)
          @foreach ($filteredAds as $filteredAd)
              {{-- Com a utilização de componentes --}}
              <x-basic-ad :advertise="$filteredAd" />

              {{-- Sem a utilização de componentes --}}
              {{-- <a href="{{ route('ad-show', $filteredAd->slug) }}" class="ad-item">
                  <div class="ad-image" style="background-image: url('{{ $filteredAd->images->where('featured', 1)->first()->url ?? 'https://via.placeholder.com/400x300.png?text=Sem+imagem' }}')" ></div>
                  <div class="ad-title">{{ $filteredAd->title }}</div>
                  <div class="ad-price">R$ {{ $filteredAd->price_formatted }}</div>
              </a> --}}
          @endforeach
        @else
          <span> Não há anúncios para exibir </span>
        @endif
      </div>

      <div class="mt-5"> {{ $filteredAds->links() }} </div>
    </div>

    <x-base.footer />
  </body>
</html>
