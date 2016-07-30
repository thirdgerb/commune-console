<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    1 => 'Illuminate\\Foundation\\Providers\\ComposerServiceProvider',
    2 => 'Illuminate\\Bus\\BusServiceProvider',
    3 => 'Illuminate\\Cache\\CacheServiceProvider',
    4 => 'Illuminate\\Database\\DatabaseServiceProvider',
    5 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    6 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    7 => 'Illuminate\\Hashing\\HashServiceProvider',
    8 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    9 => 'Illuminate\\Queue\\QueueServiceProvider',
    10 => 'Illuminate\\Redis\\RedisServiceProvider',
    11 => 'Illuminate\\View\\ViewServiceProvider',
    12 => 'App\\Providers\\AppServiceProvider',
    13 => 'App\\Providers\\AppArtisanServiceProvider',
    14 => 'App\\Providers\\EventServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    1 => 'Illuminate\\Database\\DatabaseServiceProvider',
    2 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    3 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    4 => 'Illuminate\\View\\ViewServiceProvider',
    5 => 'App\\Providers\\AppServiceProvider',
    6 => 'App\\Providers\\EventServiceProvider',
  ),
  'deferred' => 
  array (
    'composer' => 'Illuminate\\Foundation\\Providers\\ComposerServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Cache\\CacheServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.work' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.listen' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.restart' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'command.clear-compiled' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.config.cache' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.config.clear' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.environment' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.key.generate' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.tinker' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.up' => 'App\\Providers\\AppArtisanServiceProvider',
    'command.view.clear' => 'App\\Providers\\AppArtisanServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Foundation\\Providers\\ComposerServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'App\\Providers\\AppArtisanServiceProvider' => 
    array (
    ),
  ),
);