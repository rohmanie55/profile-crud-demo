<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ProfileTest extends TestCase
{

    public function test_profile_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile');

        $response->assertOk()
                 ->assertSee('Profiles');
    }

    public function test_profile_ajax_is_retrived(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile?ajax=1');
        
        $response->assertOk()
                 ->assertJson(['recordsTotal'=>User::count()]);
    }

    public function test_profile_can_be_showed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile/'.$user->id);

        $response->assertOk()
                 ->assertSee($user->first_name);
    }

    public function test_profile_create_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile/create');

        $response->assertOk();
    }

    public function test_profile_can_be_created(): void
    {
        $user = User::factory()->create();
    
        $response = $this
            ->actingAs($user)
            ->post('/profile/create',array_merge(User::factory()->make()->toArray(),['password'=>'Password!']));

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertDatabaseHas($user->getTable(),[
            'username'=>$user->username
        ]);
    }

    public function test_profile_update_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile/'.$user->id.'/edit');

        $response->assertOk()
                ->assertSee($user->first_name);
    }

    public function test_profile_can_be_updated(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post("/profile/$user->id/edit", array_merge($user->toArray(),[
                'username' => 'test101',
            ]));

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertDatabaseHas($user->getTable(),[
            'username'=>'test101'
        ]);
    }

    public function test_user_can_be_deleted(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete('/profile/'.$user->id);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertDatabaseMissing($user->getTable(),[
            'username'=>$user->username
        ]);
    }
}
