<?php

use App\Enums\PronounsEnum;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

it('get Unauthorize respond if user its not login', function () {

    $response = getJson(route('api.contact.index'));

    $response->assertStatus(Response::HTTP_UNAUTHORIZED);
});

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

it('can create an new contact', function (string $string) {

    auth()->loginUsingId(User::factory()->create()->id);

    expect(Contact::query()->count())->toEqual(0);
    $data = [
        'title' => $string,
        // 'name' => [
        //     'first' => $string,
        //     'middle' => $string,
        //     'last' => $string,
        //     'preferred' => $string,
        //     'full' => "{$string} {$string} {$string}",
        // ],
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
        ->assertJson(function (AssertableJson $json) use ($string) {
            $json
                ->where('data.name.first', $string)
                ->where('data.name.middle', $string)
                ->where('data.name.last', $string)
                ->where('data.name.preferred', $string)
                ->where('data.name.full', "{$string} {$string} {$string}")
                ->etc();
        });

    expect(Contact::query()->count())->toEqual(1);
})->with('strings');


it('can show a sigle contact', function () {

    auth()->loginUsingId(User::factory()->create()->id);

    $contact = Contact::factory()->create();

    $response = getJson(route('api.contact.show', ['uuid' => $contact->uuid]));

    $response->assertOk();
});

// it('can update the contact', function () {

//     auth()->loginUsingId(User::factory()->create()->id);

//     $contact = Contact::factory()->create();

//     $string = 'Alpet-2';

//     $data = [
//         'title' => $string,
//         'first_name' => $string,
//         'middle_name' => $string,
//         'last_name' => $string,
//         'preferred_name' => $string,
//         'email' => $string . '@gmail.com',
//         'phone' => $string,
//         'pronouns' => PronounsEnum::random(),
//     ];
    $contact = Contact::factory()->create();

    $data = [
        'title' => fake()->title,
        'first_name' => fake()->name,
        'middle_name' => fake()->name,
        'last_name' => fake()->name,
        'preferred_name' => fake()->name . " GG",
        'email' => fake()->email,
        'phone' => fake()->phoneNumber,
        'pronouns' => PronounsEnum::random(),
    ];

    actingAs(User::factory()->create())
        ->putJson(route('api.contact.update', ['uuid' => $contact->uuid]), $data)
        ->assertOk();
});
