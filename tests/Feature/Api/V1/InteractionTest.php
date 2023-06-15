<?php

use App\Enums\InteractionTypeEnum;
use App\Models\Contact;
use App\Models\Interaction;
use App\Models\Project;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PhpParser\Node\Stmt\Use_;

use function Pest\Laravel\actingAs;

it('can user show Interaction', function () {

    $user = User::factory()->create();

    Interaction::factory(10)->create([
        'user_id' => $user->id,
    ]);

    actingAs($user)
        ->getJson(route('api.interaction.index'))
        ->assertOk()
        ->assertJsonCount(10, 'data');
});


it('can create a new interaction', function () {
    expect(Interaction::count())->toEqual(0);

    $content = fake()->paragraph();

    $data = [
        'type' => InteractionTypeEnum::MEETING,
        'contact_id' => Contact::factory()->create()->id,
        'content' => $content,
    ];

    actingAs(User::factory()->create())
        ->postJson(route('api.interaction.store'), $data)
        ->assertCreated()
        ->assertJson(function (AssertableJson $json) use ($content) {
            $json->where('data.content', $content)->etc();
        });

    expect(Interaction::count())->toEqual(1);
});

it('can show a interaction', function () {
    $user = User::factory()->create();

    $interaction = Interaction::factory()->create([
        'user_id' => $user->id,
    ]);

    actingAs($user)
        ->getJson(route('api.interaction.show', $interaction->uuid))
        ->assertOk()
        ->assertJson(function (AssertableJson $json) use ($interaction) {
            $json->where('data.uuid', $interaction->uuid)->etc();
        });
});


it('throws a Not Found status when passing an incorrect UUID', function (string $uuid) {
    actingAs(User::factory()->create())
        ->getJson(route('api.interactions.show', $uuid))
        ->assertNotFound();
})->with('uuids');


it('can delete an interaction', function () {
    $interaction = Interaction::factory()->create();
    // expect(Interaction::query()->count())->toEqual(1);

    actingAs(User::factory()->create())
        ->deleteJson(route('api.interaction.delete', $interaction->uuid))
        ->assertNoContent();

    // expect(Interaction::query()->count())->toEqual(0);
});

