<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='shortcut icon' href="{{asset('icon/favicon.ico')}}" type='image/x-icon'>
  <title>Magat</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 600;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 800;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZg.ttf) format('truetype');
    }
  </style>
</head>

<body>
  <script>
    window.locales = Object.keys(@json(LaravelLocalization::getSupportedLocales())); 
    window.storePhones = ["717197", "662251"];
    window.socials = [
        {
            localeKey: "Instagram",
            mediaText: "@magat.restaurant",
            url: "https://www.instagram.com/magat.restaurant/",
        },
        {
            localeKey: "Tiktok",
            mediaText: "@magat_restaurant",
            url: "https://www.tiktok.com/@magat_restaurant",
        },
    ];
    window.storeAddress = {
      en: "Ashgabat city 'Berkarar' Mall 4th Floor",
      tm: "Aşgabat ş 'Berkarar' sowda merkezi 4-nji etaž",
      ru: "г. Ашхабад ТЦ 'Беркарар' 4 этаж",
      tr: "Aşkabat şehri 'Berkarar' Alışveriş Merkezi 4.Kat",

    }

  </script>

  <div id="com.ayegenmyradow"></div>

</body>

</html>