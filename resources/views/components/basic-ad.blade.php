<div class="my-ad-item">
    <div class="ad-image-area">
      @if(!empty($editable))
        <div class="ad-buttons">
          <div class="ad-button">
            <img src="/assets/icons/deleteIcon.png" />
          </div>
          <div class="ad-button">
            <img src="/assets/icons/editIcon.png" />
          </div>
        </div>
      @endif
      <div
        class="ad-image"
        style="background-image: url('{{ $advertise->images->where('featured', 1)->first()->url }}')"
      ></div>
    </div>
    <div class="ad-title">{{ $advertise->title }}</div>
    <div class="ad-price">R$ {{ $advertise->price }}</div>
  </div>