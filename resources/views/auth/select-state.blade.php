<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/loginSignUpStyle.css" />

    <title>B7Store - Estado</title>
  </head>

  <body>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <div class="text-login">
          Você precisa selecionar um estado para continuar.
        </div>
        <form method="POST" action="{{ route('select-state') }}">
          @csrf
          <div class="state-area">
              <div class="state-label">Selecione um estado</div>
              <select class="state" name="state_id" id="state_id">
                  @foreach ($states as $state)                      
                    <option value="{{$state['id']}}">{{$state['name']}}</option>
                  @endforeach
              </select>
          </div>
          @error('state') <div class="error">{{ $message }}</div> @enderror
          <button class="login-button">Selecionar</button>
        </form>
      </div>
    </div>
    <x-base.footer />
  </body>
</html>
