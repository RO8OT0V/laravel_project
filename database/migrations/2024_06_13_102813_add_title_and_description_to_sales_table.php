<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleAndDescriptionToSalesTable extends Migration
{
    public function up()
    {
        $table = 'sales';

        if (!Schema::hasColumn($table, 'title')) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('title', 255)->after('id');
            });
        }

        if (!Schema::hasColumn($table, 'description')) {
            Schema::table($table, function (Blueprint $table) {
                $table->text('description')->after('title');
            });
        }

        if (!Schema::hasColumn($table, 'amount')) {
            Schema::table($table, function (Blueprint $table) {
                $table->integer('amount')->after('description');
            });
        }

        if (!Schema::hasColumn($table, 'date')) {
            Schema::table($table, function (Blueprint $table) {
                $table->date('date')->after('amount');
            });
        }
    }

    public function down()
    {
        $table = 'sales';

        if (Schema::hasColumn($table, 'title')) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('title');
            });
        }

        if (Schema::hasColumn($table, 'description')) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }

        if (Schema::hasColumn($table, 'amount')) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('amount');
            });
        }

        if (Schema::hasColumn($table, 'date')) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('date');
            });
        }
    }
}