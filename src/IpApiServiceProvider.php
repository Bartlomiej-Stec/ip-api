<?php
namespace Barstec\IpApi;

use Illuminate\Support\ServiceProvider;

final class IpApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'ipapi');
    }

    private function getConfigPath(): string
    {
        return realpath(__DIR__ . '/../config/ipapi.php');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            $this->getConfigPath() => config_path('ipapi.php'),
        ], 'ipapi-config');
    }
}
