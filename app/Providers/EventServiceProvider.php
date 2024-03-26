<?php

namespace App\Providers;

use App\Events\Payment\ProductPayment;
use App\Events\Service\MyServiceEvent;
use App\Events\VisitingSite;
use App\Listeners\AddCountryCache;
use App\Listeners\GetBannerData;
use App\Listeners\GetCountryData;
use App\Listeners\GetMapData;
use App\Listeners\GetThreeProductsData;
use App\Listeners\GetWebInfoData;
use App\Listeners\Payment\CreateOrder;
use App\Listeners\Payment\StripePaySystem;
use App\Listeners\Service\GetOrderData;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        VisitingSite::class => [
            AddCountryCache::class,
            GetBannerData::class,
            GetMapData::class,
            GetCountryData::class,
            GetThreeProductsData::class,
            GetWebInfoData::class
        ],

        ProductPayment::class => [
            CreateOrder::class
        ],

        MyServiceEvent::class => [
            GetOrderData::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
