<?php

use App\Enums\PronounsEnum;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;

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

it('can create an new contact', function () {

    auth()->loginUsingId(User::factory()->create()->id);

    expect(Contact::query()->count())->toEqual(0);
    $string = 'Alpet';
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

//     $response = postJson(
//         route('api.contact.store', ['uuid' => $contact->uuid]),
//         $data
//     );

//     $response->assertOk();
// });
