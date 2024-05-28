<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('uraian', 150);
            $table->string('penerima', 100);
            $table->decimal('jumlah', 50);
            $table->enum('perhitungan', ['pph21', 'pph22', 'pph23', 'ppn']);
            $table->enum('npwp', ['ya', 'tidak']);
            $table->decimal('total', 50);
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
        Schema::dropIfExists('item');
    }
}
