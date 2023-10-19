<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'superadmin',

        ]);
        User::create([
            'name'=>'Security',
            'email'=>'secuirty@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'security',

        ]);
        User::create([
            'name'=>'HSE',
            'email'=>'hse@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'hse',

        ]);
        User::create([
            'name'=>'Admin IN',
            'email'=>'adminin@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'admin_in',

        ]);
        User::create([
            'name'=>'Admin Out',
            'email'=>'adminout@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'admin_out',

        ]);
        User::create([
            'name'=>'Timbangan IN',
            'email'=>'timbanganin@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'timbangan_in',

        ]);
        User::create([
            'name'=>'Timbangan OUT',
            'email'=>'timbanganout@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'timbanganout',

        ]);
        User::create([
            'name'=>'Loading Bay',
            'email'=>'loadinbay@gmail.com',
            'password'=>bcrypt(123),
            'role' =>'loadingbay',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
