<?php

dataset('string', function () {
    // return ['string A', 'string B'];
    yield Str::random();
    yield Str::random();
    yield Str::random();
    yield Str::random();
});
