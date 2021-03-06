<?php

namespace App\Providers;
use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;

class HtmlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        FormBuilder::component('bsText', 'components.form.text', ['label'=>'', 'name', 'value' => '', 'attributes'=>[]]);
        FormBuilder::component('bsTextarea', 'components.form.textarea', ['label'=>'', 'name', 'value'=>'', 'attributes'=>[]]);
        FormBuilder::component('bsDate', 'components.form.date', ['name', 'value'=>'', 'attributes'=>[]]);
        HtmlBuilder::component('breadcrumb', 'components.html.breadcrumb', ['parent', 'current']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
