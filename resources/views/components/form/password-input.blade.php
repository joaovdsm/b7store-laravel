<div class="password-input-area">
    <input type="password" class="@error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" />
    <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha" onclick="togglePasswordVisibility('{{ $id }}')" />
</div>

<script>
  // O typeof define a função apenas uma vez e não toda vez que o componente é carregado!
  if(typeof togglePasswordVisibility !== 'function') {
    function togglePasswordVisibility(inputId) {
      const input = document.getElementById(inputId)
      input.type = input.type === 'password' ? 'text' : 'password'
    }
  }
</script>