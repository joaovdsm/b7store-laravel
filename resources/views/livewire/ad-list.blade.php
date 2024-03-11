<main>
    <div class="hero-area">
      <div class="search-area-adsList">
        <input
          class="search-text"
          type="text"
          placeholder="Estou procurando por..."
        />
        <div class="options-area">
          <div class="categories-area">
            <p>Categoria</p>
            <select class="categories-options">
              <option selected hidden disabled value="">Todas</option>
              <option value="cars">Carros</option>
              <option value="eletronics">Eletrônicos</option>
              <option value="clothes">Roupas</option>
              <option value="sports">Esporte</option>
              <option value="babies">Bebês</option>
            </select>
          </div>
          <div class="states-area">
            <p>Estados</p>
            <select class="states">
              <option selected hidden disabled value="">Todos</option>
              <option value="PB">Paraíba</option>
              <option value="PE">Pernambuco</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="SP">São Paulo</option>
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
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('{{ $filteredAd->images->where('featured', 1)->first()->url ?? 'https://via.placeholder.com/400x300.png?text=Sem+imagem' }}')" ></div>
                <div class="ad-title">{{ $filteredAd->title }}</div>
                <div class="ad-price">R$ {{ $filteredAd->price_formatted }}</div>
            </div>
        @endforeach
      </div>
    </div>
  </main>