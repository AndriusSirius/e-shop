<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id');
            $table->string('specs_key');
            $table->string('value');

            $table->foreign('products_id')->references('id')->on('products');
//            $table->integer('width')->nullable();
//            $table->integer('height')->nullable();
//            $table->integer('weight')->nullable();
//            $table->integer('number_of_shelf')->nullable();
//            $table->integer('depth')->nullable();
//            $table->text('product_sign')->nullable();
//            $table->text('type')->nullable();
//            $table->text('freezer_defrosting_type')->nullable();
//            $table->text('fridge_defrosting_type')->nullable();
//            $table->text('energy_class')->nullable();
//            $table->text('energy_costs')->nullable();
//            $table->text('capacity')->nullable();
//            $table->text('total_capacity')->nullable();
//            $table->text('fridge_capacity')->nullable();
//            $table->text('freezer_capacity')->nullable();
//            $table->text('fridge_temperature')->nullable();
//            $table->text('freezer_temperature')->nullable();
//            $table->text('defrosting')->nullable();
//            $table->text('freezer_time_with_no_electricity')->nullable();
//            $table->text('freezing_power')->nullable();
//            $table->text('climate_class')->nullable();
//            $table->text('max_noise_level')->nullable();
//            $table->text('mounting_type')->nullable();
//            $table->text('color')->nullable();
//            $table->text('management')->nullable();
//            $table->text('shelf_for_bottles')->nullable();
//            $table->text('shelf_for_vegetables')->nullable();
//            $table->text('eggs_tray')->nullable();
//            $table->text('cold_water_supply_system')->nullable();
//            $table->text('open_door_signal')->nullable();
//            $table->text('fast_freeze')->nullable();
//            $table->text('ice_cubes_system')->nullable();
//            $table->text('ice_tray')->nullable();
//            $table->text('change_doors_direction')->nullable();
//            $table->text('smart_device')->nullable();
//            $table->text('antibacterial_cover')->nullable();
//            $table->text('supporting_technology')->nullable();
//
//            $table->text('max_laundry_weight')->nullable();
//            $table->text('energy_usage_loop')->nullable();
//            $table->text('year_water_usage')->nullable();
//            $table->text('laundry_drilling_class')->nullable();
//            $table->text('laundry_drilling_speed')->nullable();
//            $table->text('water_usage_loop')->nullable();
//            $table->text('screen')->nullable();
//            $table->text('timer')->nullable();
//            $table->text('number_programs')->nullable();
//            $table->text('fast_washing')->nullable();
//            $table->text('washing_without_drilling')->nullable();
//            $table->text('economy_washing')->nullable();
//            $table->text('other_programs')->nullable();
//            $table->text('start_delay')->nullable();
//            $table->text('washing_program_pause')->nullable();
//            $table->text('washing_progress_indicator')->nullable();
//            $table->text('manual_temperature_control')->nullable();
//            $table->text('manual_drilling_speed_control')->nullable();
//            $table->text('other_info')->nullable();
//            $table->integer('auto_weight')->nullable();
//
//            $table->text('oven_cavities_energy_consumption_loop')->nullable();
//            $table->text('each_oven_cavities_energy_consumption_efficiency_index')->nullable();
//            $table->text('number_cavities')->nullable();
//            $table->text('oven_lock')->nullable();
//            $table->integer('oven_door_glasses')->nullable();
//            $table->text('oven_lamp')->nullable();
//            $table->text('oven_grill')->nullable();
//            $table->text('oven_cover')->nullable();
//            $table->text('telescopic_rails')->nullable();
//            $table->text('cooking_tin')->nullable();
//            $table->text('cooking_grill')->nullable();
//            $table->text('meat_thermometer')->nullable();
//            $table->text('bottom_heat')->nullable();
//            $table->text('top_bottom_heat')->nullable();
//            $table->text('top_heat')->nullable();
//            $table->text('fan')->nullable();
//            $table->text('pyrolysis')->nullable();
//            $table->text('convection')->nullable();
//            $table->text('colling_fan')->nullable();
//            $table->text('max_heat_temperature')->nullable();
//            $table->text('steam_cooking_function')->nullable();
//            $table->text('accessories')->nullable();
//
//            $table->integer('number_hotplate')->nullable();
//            $table->text('hob_type')->nullable();
//            $table->text('surface_cover')->nullable();
//            $table->text('drying_efficiency_class')->nullable();
//            $table->text('control_panel')->nullable();
//            $table->integer('rinse_temperature_models')->nullable();
//            $table->text('watch')->nullable();
//            $table->text('drying_type')->nullable();
//            $table->text('water_leakage_control')->nullable();
//            $table->text('filter')->nullable();
//            $table->text('salt_expired_indicator')->nullable();
//            $table->text('gloss_expired_indicator')->nullable();
//            $table->text('connect_hot_water')->nullable();
//            $table->text('third_drawer')->nullable();
//            $table->text('special_programs')->nullable();
//            $table->integer('power_level')->nullable();
//            $table->text('heating_stop_signal')->nullable();
//            $table->text('screen_size')->nullable();
//            $table->text('max_resolution')->nullable();
//            $table->text('smart_tv')->nullable();
//            $table->text('curved')->nullable();
//            $table->text('weight_with_stand')->nullable();
//            $table->text('speakers_power')->nullable();
//            $table->text('connection_type')->nullable();
//            $table->text('smart_tv_functions')->nullable();
//            $table->text('wifi')->nullable();
//            $table->text('bluetooth')->nullable();
//            $table->text('operating_system')->nullable();
//            $table->text('width_with_stand')->nullable();
//            $table->text('width_without_stand')->nullable();
//            $table->text('height_without_stand')->nullable();
//            $table->text('height_with_stand')->nullable();
//            $table->text('depth_with_stand')->nullable();
//            $table->text('depth_without_stand')->nullable();

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
        Schema::dropIfExists('specs');
    }
}
