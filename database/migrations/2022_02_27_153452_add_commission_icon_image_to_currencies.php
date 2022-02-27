<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommissionIconImageToCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->string('icon')->nullable()->after('rate');
            $table->string('image')->nullable()->after('icon');
            $table->longText('description')->nullable()->after('image');
            $table->decimal('commission', 10, 2)->nullable()->after('description');
            $table->tinyInteger('status')->default(1)->nullable()->after('commission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            //
        });
    }
}
