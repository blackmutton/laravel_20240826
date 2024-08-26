<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 客戶通知PM修改....2024-08-26
     * 註記更改原因
     */
    public function up(): void
    {   
        // 執行migrations指令時會產生的內容
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('age', 'money');//rename
            $table->integer('money')->nullable()->comment('金錢')->default(0)->change();//更改值需要在後面加change()
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 執行rollback指令時會產生的內容
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('money', 'age');
            $table->integer('age')->nullable()->comment('年齡')->default(0)->change();
        });
    }
};
