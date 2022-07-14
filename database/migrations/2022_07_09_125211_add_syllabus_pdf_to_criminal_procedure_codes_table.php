<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSyllabusPdfToCriminalProcedureCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('criminal_procedure_codes', function (Blueprint $table) {
            $table->integer('type');
            $table->string('syllabus_pdf_name_en');
            $table->string('syllabus_pdf_name_am');
            $table->string('syllabus_pdf_name_ru');
            $table->text('syllabus_pdf');
            $table->dropColumn('full_date');
            $table->dropColumn('year');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criminal_procedure_codes', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('syllabus_pdf_name_en');
            $table->dropColumn('syllabus_pdf_name_am');
            $table->dropColumn('syllabus_pdf_name_ru');
            $table->dropColumn('syllabus_pdf');
        });
    }
}
