<?php

namespace Theanh\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Theanh\Modules\Commands\CommandMakeCommand;
use Theanh\Modules\Commands\ControllerMakeCommand;
use Theanh\Modules\Commands\DisableCommand;
use Theanh\Modules\Commands\DumpCommand;
use Theanh\Modules\Commands\EnableCommand;
use Theanh\Modules\Commands\EventMakeCommand;
use Theanh\Modules\Commands\FactoryMakeCommand;
use Theanh\Modules\Commands\InstallCommand;
use Theanh\Modules\Commands\JobMakeCommand;
use Theanh\Modules\Commands\LaravelModulesV6Migrator;
use Theanh\Modules\Commands\ListCommand;
use Theanh\Modules\Commands\ListenerMakeCommand;
use Theanh\Modules\Commands\MailMakeCommand;
use Theanh\Modules\Commands\MiddlewareMakeCommand;
use Theanh\Modules\Commands\MigrateCommand;
use Theanh\Modules\Commands\MigrateRefreshCommand;
use Theanh\Modules\Commands\MigrateResetCommand;
use Theanh\Modules\Commands\MigrateRollbackCommand;
use Theanh\Modules\Commands\MigrateStatusCommand;
use Theanh\Modules\Commands\MigrationMakeCommand;
use Theanh\Modules\Commands\ModelMakeCommand;
use Theanh\Modules\Commands\ModuleDeleteCommand;
use Theanh\Modules\Commands\ModuleMakeCommand;
use Theanh\Modules\Commands\NotificationMakeCommand;
use Theanh\Modules\Commands\PolicyMakeCommand;
use Theanh\Modules\Commands\ProviderMakeCommand;
use Theanh\Modules\Commands\PublishCommand;
use Theanh\Modules\Commands\PublishConfigurationCommand;
use Theanh\Modules\Commands\PublishMigrationCommand;
use Theanh\Modules\Commands\PublishTranslationCommand;
use Theanh\Modules\Commands\RequestMakeCommand;
use Theanh\Modules\Commands\ResourceMakeCommand;
use Theanh\Modules\Commands\RouteProviderMakeCommand;
use Theanh\Modules\Commands\RuleMakeCommand;
use Theanh\Modules\Commands\SeedCommand;
use Theanh\Modules\Commands\SeedMakeCommand;
use Theanh\Modules\Commands\SetupCommand;
use Theanh\Modules\Commands\TestMakeCommand;
use Theanh\Modules\Commands\UnUseCommand;
use Theanh\Modules\Commands\UpdateCommand;
use Theanh\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleDeleteCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
        LaravelModulesV6Migrator::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
