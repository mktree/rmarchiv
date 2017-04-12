<?php

/*
 * rmarchiv.de
 * (c) 2016-2017 by Marcel 'ryg' Hering
 */

return  [
  'providers' => [
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    2 => 'Illuminate\\Bus\\BusServiceProvider',
    3 => 'Illuminate\\Cache\\CacheServiceProvider',
    4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    5 => 'Illuminate\\Cookie\\CookieServiceProvider',
    6 => 'Illuminate\\Database\\DatabaseServiceProvider',
    7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    10 => 'Illuminate\\Hashing\\HashServiceProvider',
    11 => 'Illuminate\\Mail\\MailServiceProvider',
    12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    15 => 'Illuminate\\Queue\\QueueServiceProvider',
    16 => 'Illuminate\\Redis\\RedisServiceProvider',
    17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    18 => 'Illuminate\\Session\\SessionServiceProvider',
    19 => 'Hpolthof\\Translation\\ServiceProvider',
    20 => 'Illuminate\\Validation\\ValidationServiceProvider',
    21 => 'Illuminate\\View\\ViewServiceProvider',
    22 => 'Barryvdh\\Debugbar\\ServiceProvider',
    23 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    24 => 'Collective\\Html\\HtmlServiceProvider',
    25 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    26 => 'Optimus\\FineuploaderServer\\Provider\\LaravelServiceProvider',
    27 => 'Intervention\\Image\\ImageServiceProviderLaravel5',
    28 => 'Zizaco\\Entrust\\EntrustServiceProvider',
    29 => 'Cmgmyr\\Messenger\\MessengerServiceProvider',
    30 => 'Watson\\Sitemap\\SitemapServiceProvider',
    31 => 'Dingo\\Api\\Provider\\LaravelServiceProvider',
    32 => 'Khill\\Lavacharts\\Laravel\\LavachartsServiceProvider',
    33 => 'Kyslik\\ColumnSortable\\ColumnSortableServiceProvider',
    34 => 'LithiumDev\\TagCloud\\ServiceProvider',
    35 => 'Mews\\Captcha\\CaptchaServiceProvider',
    36 => 'Telegram\\Bot\\Laravel\\TelegramServiceProvider',
    37 => 'Spatie\\Backup\\BackupServiceProvider',
    38 => 'Backpack\\BackupManager\\BackupManagerServiceProvider',
    39 => 'Backpack\\Base\\BaseServiceProvider',
    40 => 'RobBrazier\\Piwik\\PiwikServiceProvider',
    41 => 'Way\\Generators\\GeneratorsServiceProvider',
    42 => 'Xethron\\MigrationsGenerator\\MigrationsGeneratorServiceProvider',
    43 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
    44 => 'NotificationChannels\\Discord\\DiscordServiceProvider',
    45 => 'Laravel\\Scout\\ScoutServiceProvider',
    46 => 'TeamTNT\\Scout\\TNTSearchScoutServiceProvider',
    47 => 'Eusonlito\\LaravelMeta\\MetaServiceProvider',
    48 => 'Msurguy\\Honeypot\\HoneypotServiceProvider',
    49 => 'App\\Providers\\AppServiceProvider',
    50 => 'App\\Providers\\AuthServiceProvider',
    51 => 'App\\Providers\\EventServiceProvider',
    52 => 'App\\Providers\\RouteServiceProvider',
    53 => 'App\\Providers\\ComposerServiceProvider',
    54 => 'App\\Providers\\HelperServiceProvider',
  ],
  'eager' => [
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Cookie\\CookieServiceProvider',
    2 => 'Illuminate\\Database\\DatabaseServiceProvider',
    3 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    4 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Hpolthof\\Translation\\ServiceProvider',
    10 => 'Illuminate\\View\\ViewServiceProvider',
    11 => 'Barryvdh\\Debugbar\\ServiceProvider',
    12 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    13 => 'Optimus\\FineuploaderServer\\Provider\\LaravelServiceProvider',
    14 => 'Intervention\\Image\\ImageServiceProviderLaravel5',
    15 => 'Zizaco\\Entrust\\EntrustServiceProvider',
    16 => 'Cmgmyr\\Messenger\\MessengerServiceProvider',
    17 => 'Watson\\Sitemap\\SitemapServiceProvider',
    18 => 'Dingo\\Api\\Provider\\LaravelServiceProvider',
    19 => 'Kyslik\\ColumnSortable\\ColumnSortableServiceProvider',
    20 => 'LithiumDev\\TagCloud\\ServiceProvider',
    21 => 'Mews\\Captcha\\CaptchaServiceProvider',
    22 => 'Spatie\\Backup\\BackupServiceProvider',
    23 => 'Backpack\\BackupManager\\BackupManagerServiceProvider',
    24 => 'Backpack\\Base\\BaseServiceProvider',
    25 => 'RobBrazier\\Piwik\\PiwikServiceProvider',
    26 => 'Way\\Generators\\GeneratorsServiceProvider',
    27 => 'Xethron\\MigrationsGenerator\\MigrationsGeneratorServiceProvider',
    28 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
    29 => 'NotificationChannels\\Discord\\DiscordServiceProvider',
    30 => 'Laravel\\Scout\\ScoutServiceProvider',
    31 => 'TeamTNT\\Scout\\TNTSearchScoutServiceProvider',
    32 => 'Msurguy\\Honeypot\\HoneypotServiceProvider',
    33 => 'App\\Providers\\AppServiceProvider',
    34 => 'App\\Providers\\AuthServiceProvider',
    35 => 'App\\Providers\\EventServiceProvider',
    36 => 'App\\Providers\\RouteServiceProvider',
    37 => 'App\\Providers\\ComposerServiceProvider',
    38 => 'App\\Providers\\HelperServiceProvider',
  ],
  'deferred' => [
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.clear-compiled' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.resets.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.down' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.install' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.status' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.listen' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.restart' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.work' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.storage.link' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.up' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.app.name' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.console.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.controller.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.job.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.listener.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.mail.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.middleware.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.model.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.notification.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.notification.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.policy.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.provider.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed-table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.request.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seeder.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.session.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.serve' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.test.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.vendor.publish' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.transport' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Mail\\Markdown' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'command.ide-helper.generate' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'command.ide-helper.models' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'html' => 'Collective\\Html\\HtmlServiceProvider',
    'form' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'lavacharts' => 'Khill\\Lavacharts\\Laravel\\LavachartsServiceProvider',
    'telegram' => 'Telegram\\Bot\\Laravel\\TelegramServiceProvider',
    'Telegram\\Bot\\Api' => 'Telegram\\Bot\\Laravel\\TelegramServiceProvider',
    'meta' => 'Eusonlito\\LaravelMeta\\MetaServiceProvider',
  ],
  'when' => [
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => [
    ],
    'Illuminate\\Bus\\BusServiceProvider' => [
    ],
    'Illuminate\\Cache\\CacheServiceProvider' => [
    ],
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => [
    ],
    'Illuminate\\Hashing\\HashServiceProvider' => [
    ],
    'Illuminate\\Mail\\MailServiceProvider' => [
    ],
    'Illuminate\\Pipeline\\PipelineServiceProvider' => [
    ],
    'Illuminate\\Queue\\QueueServiceProvider' => [
    ],
    'Illuminate\\Redis\\RedisServiceProvider' => [
    ],
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => [
    ],
    'Illuminate\\Validation\\ValidationServiceProvider' => [
    ],
    'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider' => [
    ],
    'Collective\\Html\\HtmlServiceProvider' => [
    ],
    'Khill\\Lavacharts\\Laravel\\LavachartsServiceProvider' => [
    ],
    'Telegram\\Bot\\Laravel\\TelegramServiceProvider' => [
    ],
    'Eusonlito\\LaravelMeta\\MetaServiceProvider' => [
    ],
  ],
];
