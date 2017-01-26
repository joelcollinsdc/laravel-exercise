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
}
