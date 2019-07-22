<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\User;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testInsertion(){
        $name="anitika";
        $email="anitika@yahoo.com";
        $password="abc";
        DB::table('users')->insert(
            ['name' => $name, 'email' => $email,'password'=> $password]
        );
        $name = DB::table('users')->where('name', 'anitika')->value('name');
        if($name == "anitika"){
            $this->assertTrue(true);

        }

    }
}
