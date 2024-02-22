<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Cadastre-se</title>
  </head>

  <body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <div class="text-login">
          Preencha os campos abaixo para realizar seu cadastro.
        </div>
        <form method="POST" action="{{ route('register-action') }}">
          @csrf {{-- Cross-Site Request Forgery - Sem adicionar o mesmo o retorno será 419 | Page Expired --}}

          {{-- Outra forma de retornar os erros (Embora não seja tão utilizada) --}}
            {{-- @if ($errors->any())
              <ul>
                @foreach ($errors->all() as $error) Pode-se alterar o all() por first() sendo assim, será retornado apenas o 1° erro.
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            @endif --}}

          <div class="name-area">
            <div class="name-label">Nome</div>
            <input type="text" class="@error('name') is-invalid @enderror" id="name" name="name" placeholder="Digite o seu nome" value="{{ @old('name') }}" />
            @error('name') <div class="error">{{ $message }}</div> @enderror
          </div>
          <div class="email-area">
            <div class="email-label">E-mail</div>
            <input type="email" class="@error('email') is-invalid @enderror" id="email" name="email" placeholder="Digite o seu e-mail" value="{{ @old('email') }}" />
            @error('email') <div class="error">{{ $message }}</div> @enderror
          </div>
          <div class="password-area">
            <div class="password-label">Senha</div>
            <x-form.password-input name="password" id="password" placeholder="Digite a sua senha" />
            @error('password') <div class="error">{{ $message }}</div> @enderror
          </div>
          <div class="password-area">
            <div class="password-label">Confirmar Senha</div>
            <x-form.password-input name="password_confirmation" id="password_confirmation" placeholder="Confirme a sua senha" />
          </div>
          <button class="login-button">Cadastrar</button>
        </form>
        <div class="register-area">
          Já tem cadastro? <a href="{{ route('login') }}">Fazer Login</a>
        </div>
      </div>
      <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
      </div>
    </div>
    <x-base.footer />
  </body>
</html>
