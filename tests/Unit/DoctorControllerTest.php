<?php

namespace Tests\Unit;

use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
use PHPUnit\Framework\TestCase;

class DoctorControllerTest extends TestCase
{
    public function test_list(){
     
        $doctors = (new DoctorController())->list();

        $doctors->assertRedirect('allDoctors');
        
}
}
