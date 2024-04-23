  <div class="ads">
    <div class="ads-title">Anúncios recentes</div>
    <div class="ads-area">
      @if ($advertises->count() > 0)
        @foreach ($advertises as $advertise)
          <x-basic-ad :advertise="$advertise" :user="auth()->user()" />
        @endforeach
      @else
        <span>Não há anúncios recentes para exibir</span>
      @endif
    </div>
  </div>