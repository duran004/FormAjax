<?php

namespace Dcyilmaz\Formajax;

use Illuminate\Support\ServiceProvider;

class FormajaxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Paketinizin kaynaklarını yüklemek için burada işlemler yapabilirsiniz.
        $this->publishes([
            __DIR__ . '/resources/js' => public_path('vendor/formajax'),
        ], 'public');
    }

    public function register()
    {
        // Paketinizin servislerini burada kaydedebilirsiniz.
    }
}
