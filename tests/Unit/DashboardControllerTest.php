<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DashboardControllerTest extends TestCase
{

    public function test_index()
    {
         
        $response = $this->get('/dashboard', [
            'user' => 'patient',
            'role_id' => 1,
        ]); 

        $response->assertAuthenticated();
        
        $response->assertRedirect('userDashboard');
         
    }

}
