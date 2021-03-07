<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
             $table->increments('id');
             $table->string('title');
             $table->string('slug')->unique();
             $table->date('selecteddate');
             $table->text('description')->nullable();
             $table->string('image')->nullable();
             $table->float('price')->unsigned()->default(0);
             $table->integer('views')->unsigned()->default(0);
             $table->integer('stock')->unsigned()->default(0);
             $table->enum('status', ['PUBLISH', 'DRAFT'])->default('PUBLISH');
             $table->timestamps(); // created_at, updated_at
             $table->softDeletes(); // deleted_at    }
             $table->integer('created_by')->nullable();
             $table->integer('updated_by')->nullable();
             $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
