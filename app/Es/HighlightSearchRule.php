<?php

namespace App\Es;

use ScoutElastic\SearchRule;

class HighlightSearchRule extends SearchRule
{
    /**
     * @inheritdoc
     */
    public function buildHighlightPayload()
    {
        return [
            'pre_tags' => [
                '<kbd>' // 搜索高亮前置标签
            ],
            'post_tags' => [
                '</kbd>' // 搜索高亮结束标签
            ],
            'fields' => [
                'name' => [
                    'type' => 'plain'
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    // public function buildQueryPayload()
    // {
    //     //
    // }
}
