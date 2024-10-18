<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_winxes', function (Blueprint $table) {
            $table->id('idWinx');
            $table->string("nomeWinx");
            $table->string("elementoWinx");
            $table->string("namoradoWinx");
            $table->string("planetaWinx");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_winxes');
    }
};
