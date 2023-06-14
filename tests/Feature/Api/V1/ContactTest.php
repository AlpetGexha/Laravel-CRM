<?php

use App\Models\Contact;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;

use function Pest\Laravel\getJson;

it('can show a list of contacts for a user', function () {
    auth()->loginUsingId(User::factory()->create()->id);

    Contact::factory(10)->create();

    $response = getJson(route('api.contact.index'));

    $response->assertStatus(200)
        ->assertJson(function (AssertableJson $json) {
            $json->has('data', 10) // Assuming there are 10 contacts
                ->whereAllType([
                    'data' => 'array',
                ])
                ->etc(); // Add more assertions as needed for the specific structure of your data
        });
});
