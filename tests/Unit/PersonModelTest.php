<?php

namespace Tests\Unit;

use App\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PersonModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     * @runInSeparateProcess
     * @return void
     */
    public function testCreatePerson()
    {
        $person = factory(Person::class)->create();

        $this->assertDatabaseHas('people', [
            'name' => $person->name,
            'email' => $person->email,
        ]);
    }
}
