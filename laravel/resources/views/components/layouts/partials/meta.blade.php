<meta charset="utf-8" />
<title>{{ $title }} - NIPKaart</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ __('Makes data insightful for everyone') }}" />
<meta name='keywords' content="{{$keywords}} {{__('disabled parking')}} {{__('card')}} {{__('platform')}} nipkaart" />
<meta content="{{ config('app.name') }}" name="author" />

<!-- Open Graph data -->
{{-- <meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ config('app.name') }}">
<meta property="og:description"content="{{__('You have a disabled parking card and would like to know which parking options are available at your final destination? Then take a look at NIPKaart and know in advance where you can park your car.')}}" />
<meta property="og:type" content="website">
<meta property="og:locale" content="nl">
<meta property="og:url" content="{{ config('app.url') }}">
<meta property="og:image" content="{{ URL::asset('nipkaart/images/bg/background-social_2x.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@klaasnicolaas">
<meta name="twitter:creator" content="@klaasnicolaas">
<meta name="twitter:title" content="{{ config('app.name') }}">
<meta name="twitter:image" content="{{ URL::asset('nipkaart/images/bg/background-social_2x.png') }}?123"> --}}

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}">