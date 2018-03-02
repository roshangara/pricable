<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->morphs('priceable');

            $table->decimal('base', 13, 2);
            $table->decimal('toll', 12, 2)->default(0);
            $table->decimal('tax', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0);
            $table->decimal('profit', 13, 2)->default(0);
            $table->decimal('total', 13, 2);

            $table->string('reason')->nullable();
            $table->nullableMorphs('agent');
            $table->index(['discount', 'profit', 'total']);

            $table->timestamps();
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
        Schema::dropIfExists('prices');
    }
}
