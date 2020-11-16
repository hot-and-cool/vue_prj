<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegisterApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 作成したユーザーが保存されて、201ステータスが返却されるか
     * @test
     * @return void
     */
    public function should_新しいユーザーを作成して返却する()
    {
        $data = [
            'name' => 'user',
            'email' => 'dummy@email.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ];

        $response = $this->postJson(route('register'), $data);
        $user = User::first();
        $this->assertEquals($data['name'], $user->name);

        $response->assertStatus(201)->assertJson(['name' => $user->name]);
    }
}
