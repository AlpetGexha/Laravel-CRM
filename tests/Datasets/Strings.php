<?php

use Illuminate\Support\Str;

dataset('strings', function () {
    // return ['string A', 'string B'];
    yield Str::random();
    yield Str::random();
    yield Str::random();
    yield Str::random();
});
