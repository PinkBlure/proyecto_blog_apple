<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->enum('type', [
            'Reseñas de productos',
            'Noticias de Apple',
            'Consejos y trucos',
            'Comparativas',
            'Tutoriales',
            'Accesorios Apple',
            'Apple en el trabajo y productividad'
        ]);
    });
}

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('type');
    });
}

};
