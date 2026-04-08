<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
=======
    /**
     * Run the migrations.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nama');
            $table->string('no_telp')->unique();
            $table->text('alamat')->nullable();
=======
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
            $table->timestamps();
        });
    }

<<<<<<< HEAD
=======
    /**
     * Reverse the migrations.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
