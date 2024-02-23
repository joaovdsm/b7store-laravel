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
    <title>B7Store</title>
  </head>

  <body>
    <x-base.header />
    <main>
      <div class="my-account-page">
        <div class="sidebar">
          <div class="sidebar-top">
            <a href="/myAccount.html" class="config"
              ><img src="/assets/icons/configIcon.png" /> Configurações</a
            >
            <a href="/myAds.html"
              ><img src="/assets/icons/layersIonGray.png" /> Meus Anúncios</a
            >
          </div>
          <div class="sidebar-bottom">
            <a href="{{ route('logout') }}"
              ><img src="/assets/icons/logoutIcon.png" /> Sair</a
            >
          </div>
        </div>
        <div class="profile-area">
          <h3 class="profile-title">Meu perfil</h3>
          <form method="POST" action="{{ route('my-account') }}">
            @csrf
            <div class="name-area">
              <div class="name-label">Nome</div>
              <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="{{ $user->name }}" />
            </div>
            <div class="email-area">
              <div class="email-label">E-mail</div>
              <input type="email" name="email" id="email" placeholder="Digite o seu e-mail" value="{{ $user->email }}" />
            </div>
            <div class="state-area">
              <div class="state-label">Selecione um estado</div>
              <select class="state" name="state_id" id="state_id">
                  @foreach ($states as $state)                      
                    <option value="{{$state['id']}}" {{ $state['id'] == $user->state_id ? 'selected' : '' }} >{{$state['name']}}</option>
                  @endforeach
              </select>
            </div>
            <input type="submit" class="save-button" value="Salvar" />
          </form>
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>
