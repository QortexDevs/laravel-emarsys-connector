<?php

namespace Qortex\Laravel\Emarsys\Services;

use Qortex\Emarsys\Services\Connector as EmarsysConnector;

class ConnectorService
{
    private EmarsysConnector $connector;

    public function __construct()
    {
        $this->connector = new EmarsysConnector(
            config('emarsys.username'),
            config('emarsys.secret')
        );
    }

    public function getConnector(): EmarsysConnector
    {
        return $this->connector;
    }
}
