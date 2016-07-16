<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegisterTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A basic test example.
     * 
     * @test
     * @return void
     */
    public function UserRegister()
    {
        $this->visit('/register')
        	->type('jose', 'first_name')
        	->type('Alvarado', 'last_name')
        	->type('jalvarado@gmail.com', 'email')
        	->select('m', 'gender')
        	->type('image1', 'avatar')
        	->type('something about me', 'biography')
        	->type('1234567', 'password')
        	->type('1234567', 'password_confirmation')
        	->press('Registrar');
        	

    }
}
