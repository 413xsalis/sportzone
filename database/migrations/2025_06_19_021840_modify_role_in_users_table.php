<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('colaboradores')->change();
        });
    
}


    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};


// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
// public function up()
// {
//     if (!Schema::hasColumn('users', 'role')) {
//         Schema::table('users', function (Blueprint $table) {
//             $table->string('role')->default('colaboradores');
//         });
//     }
// }

// public function down()
// {
//     Schema::table('users', function (Blueprint $table) {
//         $table->dropColumn('role');
//     });
// }

// };
