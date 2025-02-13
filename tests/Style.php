<?php

/** @noinspection ALL */

use function Termwind\span;
use function Termwind\style;

it('allows the creation of styles', function () {
    style('btn')->apply('p-4 bg-blue text-color-white');

    $button = span('Click me', 'btn');

    expect($button->toString())->toBe('<bg=blue;fg=white;options=>    Click me    </>');
});
