<?php

namespace App\Es;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

/**
 * company Controller
 */
class CompanyIndexConf extends IndexConfigurator
{
    use Migratable;

    /**
     * 设置索引的名称, 如果不设置是: company_index_conf
     * @var string
     */
    protected $name = 'company';

    /**
     *  如果不设置则按照es默认的设置
     * @var array
     */
    protected $settings = [
        'number_of_shards'   => 1, // 主分片的数量
        'number_of_replicas' => 1, // 备份分片的数量
    ];
}
