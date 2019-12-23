<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UrlLocaleProvider extends ServiceProvider
{
    public function boot(Request $request)
    {
        $locale = $this->getLocaleFromUrl($request);
        View::share('locale', $locale);
        View::share('direction', in_array($locale, ['ar']) ? 'rtl' : 'ltr');
    }

    private function getLocaleFromUrl(Request $request): ?string
    {
        $locale = $request->segment(1);
        $locale = in_array($locale, config('app.locales')) ? $locale : null;
        if ($locale) {
            $this->updateRoutesLocale($locale);
            $this->app->setLocale($locale);
            $request->setLocale($locale);
        }
        return $this->app->getLocale();
    }

    private function updateRoutesLocale(string $locale): void
    {
        $this->app->booted(function () use ($locale) {
            foreach ($this->getRoutesArray() as $route)
                $route->prefix($locale);
        });
    }

    /** @return \Illuminate\Routing\Route[] */
    private function getRoutesArray(): array
    {
        return $this->app['router']->getRoutes()->getRoutes();
    }
}
