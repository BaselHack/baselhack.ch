<?php

namespace Tests\Unit\Users;

use Tests\TestCase;
use App\Domain\Association\Models\Newsletter;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NewsletterTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function create_a_newsletter()
    {
        $newsletter = create(Newsletter::class);
        $this->assertInstanceOf(Newsletter::class, $newsletter);
    }
}
