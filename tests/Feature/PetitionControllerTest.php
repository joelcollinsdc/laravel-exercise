<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Petition;

class PetitionControllerTest extends TestCase
{

    public function testShowPublishedPetition()
    {
        //TODO use factory
        $p = Petition::find(1);
        $p->published = true;
        $p->save();

        $response = $this->get('/petition/1');

        $response->assertStatus(200);
    }

    public function testShowUnpublishedPetition()
    {
        //TODO use factory
        $p = Petition::find(1);
        $p->published = false;
        $p->save();

        $response = $this->get('/petition/1');

        $response->assertStatus(404);
    }

    public function testBadStoreSignature()
    {
        $response = $this->call('POST', route('petition.sign', 1), array(
            '_token' => csrf_token(),
            'email' => 'test@example.com',
            'name' => 'test',
        ));

        //TODO not sure this is valid, its redirecting to home page??
        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testStoreSignature()
    {
        $response = $this->call('POST', route('petition.sign', 1), array(
            '_token' => csrf_token(),
            'email' => 'test@example.com',
            'name' => 'test',
            'phone' => '123-123-1234',
        ));

        
        $this->assertEquals(200, $response->getStatusCode());
    }
}
