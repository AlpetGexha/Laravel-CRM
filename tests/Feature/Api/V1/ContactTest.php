<?php

use App\Enums\PronounsEnum;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

it('returns an unauthorized response if the user is not logged in', function () {
    $response = getJson(route('api.contact.index'));
    $response->assertStatus(Response::HTTP_UNAUTHORIZED);
});

it('can show a list of contacts for a user', function () {
    actingAs(User::factory()->create());

    Contact::factory(10)->create();

    $response = getJson(route('api.contact.index'));

    $response->assertOk()
        ->assertJson(fn (AssertableJson $json) => $json
            ->has('data', 10)
            ->whereAllType([
                'data' => 'array',
            ])
            ->etc());
});

it('receives a 401 on create when not logged in', function (string $string) {
    $data = [
        'title' => $string,
        'first_name' => $string,
        'middle_name' => $string,
        'last_name' => $string,
        'preferred_name' => $string,
        'email' => $string . '@gmail.com',
        'phone' => $string,
        'pronouns' => PronounsEnum::random(),
    ];

    $response = postJson(route('api.contact.store'), $data);

    $response->assertUnauthorized();
})->with('strings');

it('can create a new contact', function (string $string) {
    actingAs(User::factory()->create());

    expect(Contact::count())->toEqual(0);

    $data = [
        'title' => $string,
        'first_name' => $string,
        'middle_name' => $string,
        'last_name' => $string,
        'preferred_name' => $string,
        'email' => $string . '@gmail.com',
        'phone' => $string,
        'pronouns' => PronounsEnum::random(),
    ];

    $response = postJson(route('api.contact.store'), $data);

    $response
        ->assertCreated()
        ->assertJson(fn (AssertableJson $json) => $json
            ->where('data.name.first', $string)
            ->where('data.name.middle', $string)
            ->where('data.name.last', $string)
            ->where('data.name.preferred', $string)
            ->where('data.name.full', "{$string} {$string} {$string}")
            ->etc());

    expect(Contact::count())->toEqual(1);
})->with('strings');

it('can show a single contact', function () {
    actingAs(User::factory()->create());

    $contact = Contact::factory()->create();

    $response = getJson(route('api.contact.show', ['uuid' => $contact->uuid]));

    $response->assertOk();
});

it('user can update the contact', function () {
    $contact = Contact::factory()->create();

    $data = [
        'title' => fake()->title,
        'first_name' => fake()->name,
        'middle_name' => fake()->name,
        'last_name' => fake()->name,
        'preferred_name' => fake()->name . ' GG',
        'email' => fake()->email,
        'phone' => fake()->phoneNumber,
        'pronouns' => PronounsEnum::random(),
    ];

    actingAs(User::factory()->create())
        ->putJson(route('api.contact.update', ['uuid' => $contact->uuid]), $data)
        ->assertOk();
});
