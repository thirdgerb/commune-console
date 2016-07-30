<?php

namespace App\Providers;

use Illuminate\Foundation\Providers\ArtisanServiceProvider as ServiceProvider;

class AppArtisanServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'ConfigCache' => 'command.config.cache',
        'ConfigClear' => 'command.config.clear',
        'Environment' => 'command.environment',
        'KeyGenerate' => 'command.key.generate',
        'Tinker' => 'command.tinker',
        'Up' => 'command.up',
        'ViewClear' => 'command.view.clear',
    ];

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $devCommands = [
        'CacheTable' => 'command.cache.table',
        'ConsoleMake' => 'command.console.make',
        'EventGenerate' => 'command.event.generate',
        'EventMake' => 'command.event.make',
        'JobMake' => 'command.job.make',
        'ListenerMake' => 'command.listener.make',
        'ModelMake' => 'command.model.make',
        'ProviderMake' => 'command.provider.make',
        'QueueFailedTable' => 'command.queue.failed-table',
        'QueueTable' => 'command.queue.table',
        'SeederMake' => 'command.seeder.make',
        'TestMake' => 'command.test.make',
        'VendorPublish' => 'command.vendor.publish',
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands($this->commands);

        if($this->app->isLocal()){
            $this->registerCommands($this->devCommands);
        }
    }
}
