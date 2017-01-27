<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class AdminPetitionTest extends TestCase
{
    public function testRequireAuth()
    {
        $response = $this->get('/admin/petition/1');

        $response->assertStatus(302);
    }

    public function testViewAdminPetition()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->get('/admin/petition/1');

        $response->assertStatus(200);
    }

    public function testViewAdminPetitionIndex()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->get('/admin/petition');

        $response->assertStatus(200);
    }

    public function testEditAdminPetition()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->get('/admin/petition/1/edit');

        $response->assertStatus(200);
    }

    // public function testInvalidUpdateAdminPetition()
    // {
    //     $user = User::find(1);
    //     $response = $this
    //         ->actingAs($user)
    //         ->post('/admin/petition/1', array(
    //             '_method' => 'PATCH',
    //             '_token' => csrf_token(),
    //             'title' => 'test',
    //             'subject' => 'subject',
    //             //'body' => 'test',
    //             'thankyou' => 'test',
    //             'emailsubject' => 'test',
    //             'emailbody' => 'test',
    //     ));

        
    //     $response->assertStatus(302);
    //     dd($response);
        
    // }

    public function testUpdateAdminPetition()
    {
        $user = User::find(1);
        $response = $this
            ->actingAs($user)
            ->patch('admin/petition/1', array(
                '_token' => csrf_token(),
                'title' => 'test',
                'subject' => 'subject',
                'body' => 'test',
                'thankyou' => 'test',
                'emailsubject' => 'test',
                'emailbody' => 'test',
        ));

        //dd($response);
        $response->assertStatus(302);
    }
}
