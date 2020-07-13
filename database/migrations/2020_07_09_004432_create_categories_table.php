<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('categories')->insert([
            ['name' => 'html'],
            ['name' => 'css'],
            ['name' => 'javascript'],
            ['name' => 'database'],
            ['name' => 'php'],
            ['name' => 'ruby'],
            ['name' => 'design'],
            ['name' => 'java'],
            ['name' => 'tool'],
            ['name' => 'bebas'],
            ['name' => 'android'],
            ['name' => 'hosting'],
            ['name' => 'wordpress'],
            ['name' => 'codeigniter'],
            ['name' => 'laravel'],
            ['name' => 'jquery'],
            ['name' => 'nodejs'],
            ['name' => 'vue'],
            ['name' => 'angular'],
            ['name' => 'mobile'],
            ['name' => 'api'],
            ['name' => 'ajax'],
            ['name' => 'python'],
            ['name' => 'game'],
            ['name' => 'c'],
            ['name' => 'c++'],
            ['name' => 'swift'],
            ['name' => 'ios'],
            ['name' => 'objective-c'],
            ['name' => 'seo'],
            ['name' => 'website'],
            ['name' => 'tips and trick'],
            ['name' => 'slim'],
            ['name' => 'sharing'],
            ['name' => 'linux'],
            ['name' => 'UX'],
            ['name' => 'testing'],
            ['name' => 'firebase'],
            ['name' => 'responsive'],
            ['name' => 'progressive-web-app'],
            ['name' => 'flask'],
            ['name' => 'django'],
            ['name' => 'data-science'],
            ['name' => 'reactjs'],
            ['name' => 'nuxtjs'],
            ['name' => 'vuex'],
            ['name' => 'react-native'],
            ['name' => 'redux'],
            ['name' => 'nextjs'],
            ['name' => 'mysql'],
            ['name' => 'mongodb'],
            ['name' => 'graphql'],
            ['name' => 'go'],
            ['name' => 'flutter'],
            ['name' => 'nativescript'],
            ['name' => 'kotlin'],
            ['name' => 'sqlite'],
            ['name' => 'mysql'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
