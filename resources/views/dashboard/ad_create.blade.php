<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />
    <link rel="stylesheet" href="/assets/newAdStyle.css" />

    <title>B7Store - Novo Anúncio</title>
  </head>

  <body>
    {{-- Header --}}
    <x-base.header />
    {{-- End-Header --}}

    <livewire:ad-create />

    {{-- Footer --}}
    <x-base.footer />
    {{-- End Footer --}}
  </body>
</html>
