<?php

use App\Enums\PronounsEnum;
use App\Models\Contact;
use App\Models\User;
use Database\Seeders\PermissionsTableSeeder;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\seed;

it('returns an unauthorized response if the user is not logged in', function () {
    $response = getJson(route('api.contact.index'));

    $response->assertStatus(Response::HTTP_UNAUTHORIZED);
});

it('can show a list of contacts for a user', function () {
    Contact::factory(10)->create();

    actingAs(User::factory()->create())
        ->getJson(route('api.contact.index'))
        ->assertOk()
        ->assertJson(fn (AssertableJson $json) => $json
            ->has('data', 10)
            ->whereAllType([
                'data' => 'array',
            ])
            ->etc());
});

it('receives a 401 on create when not logged in', function (string $string) {
    $response = postJson(route('api.contact.store'), data($string));

    $response->assertUnauthorized();
})->with('strings');

it('can create a new contact', function (string $string) {
    expect(Contact::count())->toEqual(0);

    actingAs(User::factory()->create())
        ->postJson(route('api.contact.store'), data($string))
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
    $contact = Contact::factory()->create();

    actingAs(User::factory()->create())
        ->getJson(route('api.contact.show', ['uuid' => $contact->uuid]))
        ->assertOk();
});

it('can update the contact', function () {
    $contact = Contact::factory()->create();

    actingAs(User::factory()->create())
        ->putJson(route('api.contact.update', ['uuid' => $contact->uuid]), data())
        ->assertOk();
});

it('throws an exception when trying to update a contact that does not exist', function () {
    actingAs(User::factory()->create())
        ->putJson(route('api.contact.update', ['uuid' => fake()->uuid()]), data())
        ->assertNotFound();
});

it('can delete a contact', function () {
    $contact = Contact::factory()->create();
    // $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    seed(PermissionsTableSeeder::class);

    actingAs(User::factory()->create()->assignRole('super_admin'))
        ->deleteJson(route('api.contact.delete', ['uuid' => $contact->uuid]))
        ->assertNoContent();
});

it('throws an exception when trying to delete a contact that does not exist', function () {
    // seed the database
    seed(PermissionsTableSeeder::class);

    actingAs(User::factory()->create()->assignRole('super_admin'))
        ->deleteJson(route('api.contact.delete', ['uuid' => fake()->uuid]))
        ->assertNotFound();
});

function data(string $string = null): array
{
    return [
        'title' => $string ?? fake()->title,
        'first_name' => $string ?? fake()->name,
        'middle_name' => $string ?? fake()->name,
        'last_name' => $string ?? fake()->name,
        'preferred_name' => $string ?? fake()->name.' GG',
        'email' => $string ? $string.'@gmail.com' : fake()->email,
        'phone' => $string ?? fake()->phoneNumber,
        'pronouns' => PronounsEnum::random(),
    ];
}
