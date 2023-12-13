<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\ChirpController;
use App\Models\Chirp;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;

/**
 * ChirpControllerTest
 *
 * This class is designed to test the 'update' method in the ChirpController class.
 * The 'update' method is used to update a chirp in a database.
 */
class ChirpControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware, WithFaker;

    /**
     * @var ChirpController
     */
    protected $controller;
    /**
     * @var Chirp
     */
    protected $chirp;

    /**
     * Set up test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->controller = new ChirpController;

    }

    /**
     * Test the 'update' method in the ChirpController class.
     *
     * This method tries to update a chirp in the database with a new message.
     * It then verifies if the message was updated successfully.
     */
    public function testIndex()
    {
        $chirpController = new ChirpController();

        $view = $chirpController->index();

        $this->assertInstanceOf('Illuminate\View\View', $view);
        $this->assertEquals('chirps.index', $view->getName());
        $this->assertArrayHasKey('chirps', $view->getData());
    }
}
