<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\Artikl;
use Tests\TestCase;
class ArtikliTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_artikl(){
        $artikl=Artikl::find(1);
        if($artikl->Naziv=='Pivo Nektar 0.5'){
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
    }

    public function test_mojtest(){
       
        $response=$this->get('/artikli');
        $response->assertStatus(200);
    }
}
