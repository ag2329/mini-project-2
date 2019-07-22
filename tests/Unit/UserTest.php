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
    public function testupdate(){
        DB::table('users')->where('name',"anitika")->update(array(
            'name'=>"Steve Smith"
        ));
        $name = DB::table('users')->where('name', "Steve Smith")->value('name');
        echo $name;
        if($name == "Steve Smith"){
            $this->assertTrue(true);

        }
    }
    public function testDelete(){
        DB::table('users')->where('name', '=', "Steve Smith")->delete();
        $name = DB::table('users')->where('name', 'Steve Smith')->value('name');
        if(!$name){
            $this->assertTrue(true);

        }

    }
}
