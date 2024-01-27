<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantAddRoutePathToModulesLevelsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('module_levels')
            ->insert([
                [
                    'module_id' => 1,
                    'value' => 'sale_note_create',
                    'description' => 'Nueva Nota de Venta',
                    'route_path' => '/sale-notes/create',
                    'route_path' => '/pos/garage',
                    'label_menu' => 'VR',                    
                ]
            ]);

        DB::table('module_levels')
            ->where('value', 'sale_note_create')
            ->update([
                'label_menu' => 'NV',
                'route_name' => 'tenant.sale_notes.create',
            ]);
        
        DB::table('module_levels')
            ->where('value', 'order-note')
            ->update([
                'route_path' => '/order-notes',
                'label_menu' => 'PD',
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules_levels_update', function (Blueprint $table) {
            //
        });
    }
}