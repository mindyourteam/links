<?php
use Mindyourteam\Links\Models\Link;

return [
    'home_route' => 'link.index',
    'package' => 'link',

    'show' => true,
    'deletes' => true,
    'model' => Link::class,
    'entity_name' => 'link',
    'entity_title' => ['s Link', 'Links'],
    'order_by' => 'shortcode',

    'columns' => [
        'shortcode' => 'Short-Code',
        'url' => 'Ziel-URL',
    ],

    'fields' => [
        'shortcode' => [
            'label' => 'Short-Code',
            'type' => 'text',
        ],
        'url' => [
            'label' => 'Ziel-URL',
            'type' => 'text',
        ],
    ],
];

