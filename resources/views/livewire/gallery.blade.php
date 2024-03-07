<div class="ad-area-left">
    <div class="main-photo" style="background-image: url({{ $featuredUrl }});"></div>
    <div class="secundary-photos">
      @foreach ($images as $image)
        <div wire:click="setFeatured('{{ $image->url }}')" class="secundary-image" 
          style="background-image: url({{ $image->url }}); 
          opacity: {{ $image->url === $featuredUrl ? 1 : 0.5 }};
          transition: all .5s;"
        ></div>
      @endforeach
    </div>
</div>