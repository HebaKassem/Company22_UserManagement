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
   /* public function testAddCompany()//duplicate email
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
    */
    public function testGetCompany()// try id not exist
    {
        $data=[
            'id'=>70,
        ];
        $this->json('get','companies/getcompanybyid',$data)
        ->assertStatus(200);   
    }
    
}
