<?php
namespace Tests\Feature;

use Tests\TestCase;

class APIDetailsTest extends TestCase
{
    public function test_index_page_with_api_details_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_index_page_with_api_details_has_correct_structure()
    {
        $response = $this->get('/');
        
        $response->assertJsonStructure([
            'db_connection',
            'last_data_import',
            'db_uptime',
            'server_uptime',
            'server_memory_usage',
        ]);
    }
}
