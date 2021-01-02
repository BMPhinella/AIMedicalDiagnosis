<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\medicalPractitioners;

class medicalPractitionersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function createMedicalPractitioners()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-medicalPractitioners',[
        'name'=>'Anita',
        'password'=>'**@l',
        'email'=>'anitak@gmail.com',
        'phone_No'=>'0772171256',
        'updated_by'=>1
        ]);
        $this->assertDatabaseHas('MedicalPractitioners',['id'=>'1']);
       
    }
    /** @test */
    public function getMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $response=$this->get('api/get-medicalPractitioners');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $to_edit=medicalPractitioners::first();
        $response=$this->patch('/change-medicalPractitioners/'.$to_edit->id,
        ['name'=> 'Nasser',
        'password'=> 'mk',
        'email'=> 'Naitak@gmail.com',
        'phone_No'=> '0772171251',
        ]);
        $this->assertEquals('1',medicalPractitioners::first()->id);
    }
    /** @test */
    public function deleteMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $to_edit=medicalPractitioners::first();
        $response=$this->delete('/delete-medicalPractitioners/'.$to_edit->id);
        $this->assertCount(0,medicalPractitioners::all());
    }
}