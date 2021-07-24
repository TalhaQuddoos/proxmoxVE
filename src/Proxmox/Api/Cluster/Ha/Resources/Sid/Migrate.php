<?php
/*
 * @copyright 2021 Daniel Engelschalk <hello@mrkampf.com>
 */

namespace Proxmox\Api\Cluster\Ha\Resources\Sid;

use Proxmox\Helper\PVEPathClassBase;
use Proxmox\PVE;

/**
 * Class Migrate
 * @package Proxmox\Api\Cluster\Ha\Resources\Sid
 */
class Migrate extends PVEPathClassBase
{
    /**
     * Migrate constructor.
     * @param PVE $pve
     * @param string $parentAdditional
     */
    public function __construct(PVE $pve, string $parentAdditional)
    {
        parent::__construct($pve, $parentAdditional . 'migrate/');
    }

    /**
     * Request resource migration (online) to another node.
     *
     * @link https://pve.proxmox.com/pve-docs/api-viewer/#/cluster/ha/resources/{sid}/migrate
     * @param $params array
     * @return array|null
     */
    public function post(array $params = []): ?array
    {
        return $this->getPve()->getApi()->post($this->getPathAdditional(), $params);
    }

}