<?php

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
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_en');
            $table->string('slug')->unique();
            $table->string('user_code')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('roles')->default(2)->comment("0=> admin | 1=> manager | 2=>user");
            $table->tinyInteger('active')->default(0)->comment("0=> payment pending ( payment again , dont show , dont edit profile )| 1=>admin pending( dont show profile ) || 2=>active ( all success) || 3=>expire ( offer member ) || 4=> payment pending for upgrade ||  5=> user update ( pending admin accept ) ");
            $table->bigInteger('reagent_id')->default(0);
            $table->bigInteger('branch_id')->default(0);
            $table->bigInteger('main')->default(0)->unsigned()->comment("0=> Dependent || 1=>main");
            $table->bigInteger('expire')->default(0);
            $table->bigInteger('membership_type_id')->default(0);
            $table->text('profile_picture')->nullable();
            $table->text('resume_address')->nullable();
            $table->text('about_me')->nullable();
            $table->text('shortcomings')->nullable()->comment('Not NULL => admin rejected');
            $table->tinyInteger('diamond')->default(0);
            $table->tinyInteger('gold')->default(0);
            $table->tinyInteger('silver')->default(0);
            $table->tinyInteger('bronze')->default(0);
            $table->tinyInteger('isShowMyPhone')->default(0)->comment('0=> false | 1=> true');
            $table->text('userCard')->nullable();
            $table->tinyInteger('reminder')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
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
