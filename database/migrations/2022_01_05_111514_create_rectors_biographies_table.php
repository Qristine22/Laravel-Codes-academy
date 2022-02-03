<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRectorsBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rectors_biographies', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_am');
            $table->string('name_ru');
            $table->string('position_en');
            $table->string('position_am');
            $table->string('position_ru');
            $table->text('biography_en');
            $table->text('biography_am');
            $table->text('biography_ru');
            $table->string('img');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rectors_biographies');
    }
}
