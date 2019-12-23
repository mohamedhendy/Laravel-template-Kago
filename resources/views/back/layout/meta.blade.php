@php
$appTitle = $site('title');
$description = $site('description');
@endphp
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="{{ $locale }}">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no">
<meta name="referrer" content="origin-when-cross-origin">
<meta name="author" content="https://gulfdatas.com">
<meta name="robot" content="index, follow, noarchive, nosnippet, notranslate">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ trim(implode(' | ', [$appTitle, $title ?? '']), ' |') }}</title>
<meta name="description" itemprop="description" content="{{ $description }}">

<link rel="canonical" href="{{ canonicalUrl() }}">
@foreach (urlsForOtherLocales() as $locale => $url)
<link rel="alternate" href="{{ $url }}" hreflang="{{ $locale }}">
@endforeach
