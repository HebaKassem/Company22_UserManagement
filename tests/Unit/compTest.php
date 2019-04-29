<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class compTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAddCompany()//duplicate email
    {
        $data=[
            'name' => 'HappyComp',
            'email' => 'niceee@gmail.com',
            'password' => 'sg547!SDF',
            'numOfEmp' => '300',
            'interest1' => '2',
            'interest2' => '6',
            'interest3' => '3',
            'interest4' => '2',
            'interest5' => '1',
        ];
        $this->json('post','api/companies/addnewcompany',$data)
        ->assertStatus(200);   
    }
    
    public function testDeleteCompany() // try an id that does not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('post','api/companies/deletecompany',$data)
        ->assertStatus(200);   
    }
    
    public function testGetCompanyByID()// try an id that does not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('get','companies/getcompanybyid',$data)
        ->assertStatus(200);   
    }
    public function testGetCompanies()// try an id that does not exist
    {
        $data=[
        ];
        $this->json('get','api/getallcompanies',$data)
        ->assertStatus(200);   
    }
    public function testUpdateCompany()//duplicate email
    {
        $data=[
            'id'=>'90',
            'name' => 'HappyComp',
            'email' => 'happiest@gmail.com',
            'password' => 'sg547!SDF',
            'numOfEmp' => '300',
            'interest1' => 'art',
            'interest2' => 'engineering',
            'interest3' => 'devop',
            'interest4' => 'testing',
            'interest5' => 'teaching',
        ];
        $this->json('post','api/companies/addnewcompany',$data)
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

    public function testAddUser()//duplicate email
    {
        $data=[
            'name' => 'Nada',
            'email' => 'nnna@gmail.com',
            'password' => 'sg5999!SDF',
            'gender' => 'female',
            'dob' => '2009-04-03',
            'interest1' => 'art',
            'interest2' => 'art',
            'interest3' => 'art',
            'interest4' => 'art',
            'interest5' => 'art',
        ];
        $this->json('post','api/users/addnewuser',$data)
        ->assertStatus(200);   
    }
    public function testUpdateUser()//duplicate email
    {
        $data=[
            'id' => '8',
            'name' => 'Nadosh',
            'email' => 'nadosh@hotmail.com',
            'password' => 'sg5999!SDF',
            'gender' => 'female',
            'dob' => '2009-04-03',
            'interest1' => 'art',
            'interest2' => 'art',
            'interest3' => 'art',
            'interest4' => 'art',
            'interest5' => 'art',
        ];
        $this->json('post','api/users/updatebyid',$data)
        ->assertStatus(200);   
    }
    public function testDeleteUser() // try an id that does not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('post','api/users/deleteuser',$data)
        ->assertStatus(200);   
    }
}
