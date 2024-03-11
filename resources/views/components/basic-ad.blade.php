<style>
  .my-ad-item {
    position: relative;
  }
  .pill {
    padding: 5px 10px;
    background-color: teal;
    color: white;
    border-radius: 5px;
  }
  .my-ad-pill {
    position: absolute;
    top: 5px;
    right: 5px;
    font-size: 10px
  }
</style>

<a href="{{ route('ad-show', $advertise->slug) }}" class="my-ad-item" style="text-decoration: none;">
  @if(isset($user) && $advertise->user_id === $user->id)
    <span class="pill my-ad-pill"> Meu Anúncio </span>
  @endif

  <div class="ad-image-area">
    @if(!empty($editable))
      <div class="ad-buttons">
        <a class="ad-button" href="{{ route('ad-delete', ['id' => $advertise->id]) }}">
          <img src="/assets/icons/deleteIcon.png" />
        </a>
        <div class="ad-button">
          <img src="/assets/icons/editIcon.png" />
        </div>
      </div>
    @endif
    <div
      class="ad-image"
      style="background-image: url('{{ $advertise->images->where('featured', 1)->first()->url ?? 'https://via.placeholder.com/400x300.png?text=Sem+imagem' /* 'https://placehold.it/300x300' */ }}')" 
      {{-- A utilização do ?? serve para verificar se um retorno é nulo --}}
    ></div>
  </div>
  <div class="ad-title">{{ $advertise->title }}</div>
  <div class="ad-price">R$ {{ $advertise->price_formatted }}</div>
</a>