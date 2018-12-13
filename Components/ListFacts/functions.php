<?php

namespace Flynt\Components\ListFacts;

use Flynt\Features\Components\Component;

add_filter('Flynt/addComponentData?name=ListFacts', function ($data) {
    Component::enqueueAssets('ListFacts', [
        [
            'name' => 'countup',
            'path' => 'vendor/countup.js',
            'type' => 'script'
        ],
        [
            'name' => 'intersection-observer',
            'type' => 'script',
            'path' => 'vendor/intersection-observer.js'
        ],
    ]);

    return $data;
});
