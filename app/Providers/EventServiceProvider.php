<?php

namespace App\Providers;

use App\Events\EventoOrden;
use App\Listeners\ListenerOrden;
use App\Events\EventoReporte;
use App\Listeners\ListenerReporte;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        EventoOrden::class =>[
            ListenerOrden::class,
        ],
        EventoReporte::class=>[
            ListenerReporte::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
