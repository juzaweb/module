<?php

namespace Theanh\Modules\Process;

use Theanh\Modules\Contracts\RepositoryInterface;
use Theanh\Modules\Contracts\RunableInterface;

class Runner implements RunableInterface
{
    /**
     * The plugin instance.
     * @var RepositoryInterface
     */
    protected $module;

    public function __construct(RepositoryInterface $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
