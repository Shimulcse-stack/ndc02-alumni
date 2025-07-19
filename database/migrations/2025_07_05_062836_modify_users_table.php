<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('phone')->nullable();
            $table->string('roll')->nullable();
            $table->string('group')->nullable();
            $table->string('section')->nullable();
            $table->string('blood_group')->nullable();
            $table->boolean('blood_donor')->default(false);
            $table->string('tshirt_size')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('photo_old')->nullable();
            $table->string('photo_new')->nullable();
            $table->string('status')->default('active');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone', 'roll', 'group', 'section', 'blood_group', 'blood_donor',
                'tshirt_size', 'address', 'city', 'postcode', 'designation',
                'organization', 'photo_old', 'photo_new', 'status'
            ]);
        });
    }
}