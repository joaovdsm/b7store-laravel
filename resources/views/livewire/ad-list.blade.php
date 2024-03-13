<main>
    <div class="hero-area">
      <div class="search-area-adsList">
        <input
          wire:model.live.debounce.1000ms="searchText"
          class="search-text"
          type="text"
          placeholder="Estou procurando por..."
        />
        <div class="options-area">
          <div class="categories-area">
            <p>Categoria</p>
            {{-- Realizara uma nova requisição, SEMPRE que houver um ONCHANGE. --}}
            <select wire:model.live="selectedCategory" class="categories-options">

            {{-- THROTTLE: Realizara uma nova requisição após 1s, SEMPRE que houver um ONCHANGE, ou seja, Requisição sera 1s APÓS TODAS as mudanças. --}}
            {{-- <select wire:model.live.throttle.1000ms="selectedCategory" class="categories-options"> --}}

            {{-- DEBOUNCE: Realizara uma nova requisição após 1s, A PARTIR do último ONCHANGE, ou seja, Requisição sera 1s APÓS a ÚLTIMA mudança. --}}
            {{-- <select wire:model.live.debounce.1000ms="selectedCategory" class="categories-options"> --}}
              <option selected value="">Todas</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }} </option>
              @endforeach
            </select>
          </div>
          <div class="states-area">
            <p>Estados</p>
            <select wire:model.live="selectedState" class="states">
              <option selected value="">Todos</option>
              @foreach ($states as $state)
                <option value="{{ $state->id }}"> {{ $state->name }} </option>
              @endforeach
            </select>
          </div>
          <button class="search-mobile-button">Procurar</button>
        </div>
      </div>
    </div>
    <div class="ads">
      <div class="ads-title">Anúncios recentes</div>
      <div class="ads-area">
        @foreach ($filteredAds as $filteredAd)
            <a href="{{ route('ad-show', $filteredAd->slug) }}" class="ad-item">
                <div class="ad-image" style="background-image: url('{{ $filteredAd->images->where('featured', 1)->first()->url ?? 'https://via.placeholder.com/400x300.png?text=Sem+imagem' }}')" ></div>
                <div class="ad-title">{{ $filteredAd->title }}</div>
                <div class="ad-price">R$ {{ $filteredAd->price_formatted }}</div>
            </a>
        @endforeach
      </div>

      <div class="mt-5"> {{ $filteredAds->links() }} </div>
    </div>
  </main>