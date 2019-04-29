<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAddUser()//duplicate email
    {
        $data=[
            'name' => 'Nada',
            'email' => 'nnn@gmail.com',
            'password' => 'sg5999!SDF',
            'gender' => 'female',
            'dob' => '2009-04-03',
            'interest1' => 'art',
            'interest2' => 'null',
            'interest3' => 'null',
            'interest4' => 'null',
            'interest5' => 'null',
        ];
        $this->json('post','api/users/addnewuser',$data)
        ->assertStatus(200);   
    }
    public function testGetUserByID() // try an id that does not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('get','users/getuserbyid',$data)
        ->assertStatus(200);   
    }
    /*
    public function testGetCompany()// try id not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('get','companies/getcompanybyid',$data)
        ->assertStatus(200);   
    }
    */
}
