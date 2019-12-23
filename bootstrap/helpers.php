<?php

if (!function_exists('page')) {
    function page($domain, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return function ($key, $section = null) use ($domain, $locale) {
            return __("pages/$domain." . ($section ? "$section-" : '') . $key, [], $locale);
        };
    }
}

if (!function_exists('canonicalUrl')) {
    function canonicalUrl(): string
    {
        $request = request();
        $urlPath = $request->path();
        $currentLocale = $request->getLocale();
        $urlHasLocale = strpos($urlPath, $currentLocale) === 0;
        return url(trim($urlHasLocale ? $urlPath : "$currentLocale/$urlPath", '/'));
    }
}

if (!function_exists('urlsForOtherLocales')) {
    function urlsForOtherLocales($currentLocale = null): \Generator
    {
        $request = request();
        $locales = config('app.locales', []);
        $currentLocale = $currentLocale ?? $request->getLocale();
        $urlPath = $request->path();
        $urlPath = strpos($urlPath, $currentLocale) === 0 ?
            substr($urlPath, strlen($currentLocale)) : $urlPath;
        $urlPath = trim($urlPath, '/');
        foreach ($locales as $locale) {
            if ($currentLocale !== $locale) {
                yield $locale =>  url(rtrim("/$locale/$urlPath", '/'));
            }
        }
    }
}
