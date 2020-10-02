<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseasesTreatment;

class diseasesTreatmentTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createDiseasesTreatment()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseasesTreatment',[
            'disease_id'=>1,
            'treatment_id'=>1,
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('diseasesTreatment',['id'=>'1']);
     
    }
    /** @test */
    public function getDiseasesTreatment(){
        $this->withoutExceptionHandling();
        $this->createDiseasesTreatment();
        $response = $this->get('api/get-diseasesTreatment');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeDiseasesTreatment(){
        $this->withoutExceptionHandling();
        $this->createDiseasesTreatment();
        $to_edit = diseasesTreatment::first();
        $response = $this->patch('/change-diseasesTreatment/'.$to_edit->id);
        $this->assertEquals('1', diseasesTreatment::first()->id);
    }
    /** @test */
    public function removeDiseasesTreatment(){
        $this->withoutExceptionHandling();
        $this->createDiseasesTreatment();
        $to_delete = diseasesTreatment::first();
        $response=$this->delete('/delete-diseasesTreatment/'.$to_delete->id);
        $this->assertCount(0,diseasesTreatment::all());
    } 
}
