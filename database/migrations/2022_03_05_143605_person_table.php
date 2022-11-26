<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dane');
            $table->string('code');
            $table->string('description');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('genders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dane');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('municipalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('dane');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('communes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('commune_id');
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('diversities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('vulnerabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('ethnic_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('education_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('disabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('state');
            $table->timestamps();
        });

        Schema::create('marital_status', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->integer('state');
            $table->timestamps();
        });

        Schema::create('parameter', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('code',50);
            $table->string('name',50);
            $table->string('description',50)->nullable();;
            $table->boolean('state');
            $table->timestamps();
        });

        Schema::create('parameter_detail', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('parameter_id')->index();
            $table->foreign('parameter_id')->references('id')->on('parameter');
            $table->string('code',50);
            $table->string('name',50);
            $table->string('description',50)->nullable();;
            $table->boolean('state');
            $table->timestamps();
        });


        Schema::create('persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('typedocument_id')->index();
            $table->foreign('typedocument_id')->references('id')->on('type_documents')->onDelete('cascade');
            $table->string('number');
            $table->unique(['typedocument_id', 'number']);
            $table->string('names');
            $table->string('surnames');
            $table->date('birthdate');
            $table->string('othercommuna')->nullable();
            $table->string('otherneighborhood')->nullable();
            $table->string('address');
            $table->integer('sex')->nullable(); /* 1-Hombre, 2-Mujer */
            $table->unsignedBigInteger('gender_id')->index();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->unsignedBigInteger('diversity_id')->index(); /* orientación sexual */
            $table->foreign('diversity_id')->references('id')->on('diversities');
            $table->unsignedBigInteger('vulnerability_id')->index();
            $table->foreign('vulnerability_id')->references('id')->on('vulnerabilities');
            $table->unsignedBigInteger('ethnicgroup_id')->index();
            $table->foreign('ethnicgroup_id')->references('id')->on('ethnic_groups');
            $table->unsignedBigInteger('educationlevel_id')->index();
            $table->foreign('educationlevel_id')->references('id')->on('education_levels');
            $table->string('education_level_description',50);
            $table->string('workforce',500);
            $table->string('work_experience',100);
            $table->tinyInteger('dependents');
            $table->text('family');
            $table->unsignedInteger('type_house_id')->index();
            $table->foreign('type_house_id')->references('id')->on('parameter_detail');
            $table->text('public_services');
            $table->boolean('sisben');
            $table->string('group_sisben',50);
            $table->string('type_salary',50);
            $table->string('group_people',50);
            $table->string('working_day',50);

            $table->unsignedBigInteger('disability_id')->index();
            $table->foreign('disability_id')->references('id')->on('disabilities');
            $table->string('otherdiversity')->nullable();
            $table->string('ocupation')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->boolean('state')->default(1);
            $table->unsignedBigInteger('municipality_id')->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->json('commercial_location')->nullable();
            $table->string('commercial_address',255)->nullable();
            $table->integer('commercial_commune')->nullable();
            $table->string('commercial_company',255)->nullable();;
            $table->integer('commercial_department')->nullable();
            $table->string('commercial_district',255)->nullable();
            $table->integer('commercial_municipality')->nullable();
            $table->integer('commercial_neighborhood')->nullable();
            $table->json('commercial_product')->nullable();


            $table->unsignedSmallInteger('marital_status_id')->index();
            $table->foreign('marital_status_id')->references('id')->on('marital_status');

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
        Schema::dropIfExists('persons');
        Schema::dropIfExists('disabilities');
        Schema::dropIfExists('education_levels');
        Schema::dropIfExists('ethnic_groups');
        Schema::dropIfExists('vulnerabilities');
        Schema::dropIfExists('diversities');
        Schema::dropIfExists('neighborhoods');
        Schema::dropIfExists('communes');
        Schema::dropIfExists('municipalities');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('genders');
        Schema::dropIfExists('type_documents');
        Schema::dropIfExists('marital_status');
    }
}
