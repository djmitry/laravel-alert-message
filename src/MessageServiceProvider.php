<?php

namespace Djmitry\Widgets;

use Illuminate\Support\ServiceProvider;
use App;
use Blade;

class MessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*
         * Регистрируется директива для шаблонизатора Blade
         * Пример обращения к виджету: @widget('menu')
         * Можно передать параметры в виджет:
         * @widget('menu', [$data1,$data2...])
        */
        /*Blade::directive('widget', function ($name) {
            return "<?php echo app('widget')->show($name); ?>";
        });*/

        /*
         * Регистрируется (добавляем) каталог для хранения шаблонов виджетов
         * app\Widgets\view
         */
        $this->loadViewsFrom(base_path('vendor/djmitry/laravel-alert-message/src'), 'Message');
    }
 
    public function register()
    {

    }
}