<?php

namespace App;

use App\Es\CompanyIndexConf;
use App\Es\HighlightSearchRule;
use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class Company extends Model
{
    use Searchable;

    /**
     * @var string
     */
    protected $indexConfigurator = CompanyIndexConf::class;

    /**
     * @var array
     */
    protected $searchRules = [
        HighlightSearchRule::class,
    ];

    /**
     * 追加字段
     */
    protected $appends = [
        'highlight'
    ];


    /**
     * @var array
     */
    protected $mapping = [
        'properties' => [
            'name'   => [
                'type'            => 'text',
                'analyzer'        => 'ik_smart',
                'search_analyzer' => 'ik_smart',
                'boost'           => 5,
                'fields'          => [
                    'company_name' => [
                        'type'         => 'keyword',
                        'ignore_above' => 256,
                    ],
                ],
            ],
            'city'   => [
                'type' => 'keyword',
            ],
            'vision' => [
                'type' => 'text',
                'analyzer'        => 'ik_smart',
                'search_analyzer' => 'ik_smart',
            ],
            'email'  => [
                'type' => 'keyword',
            ],
            'phone'  => [
                'type' => 'keyword',
            ],
        ],
    ];

    /**
     * 设置索引的type
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'company';
    }

}
