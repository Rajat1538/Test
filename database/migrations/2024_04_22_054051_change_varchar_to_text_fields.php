<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeVarcharToTextFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Define an array of tables and fields to change
        $fieldsToChange = [
            'home_sliders' => ['title', 'button_title', 'button_link'],
            'directors' => ['name', 'designation'],
            'company_profiles' => [
                 'banner_title', 'about_pchpl_title', 'video_url', 'mission_title',
                'mission_button_title', 'mission_button_url', 'vision_title', 'vision_button_title',
                'vision_button_url', 'we_believe_title', 'achievements_title',
                'achievements_button_title', 'achievements_button_url', 'directors_title', 'trusted_partners_title',
                'division_sister_concerns_title', 'products_title', 'pchpl_team_title'
            ],
            'manufacturing_plants' => ['banner_title', 'objective_title'],
            'we_believe_points' => ['point'],
            'manufacturing_plant_lists' => ['title'],
            'company_background_products' => ['company_background_button_title', 'company_background_button_link', 'products_button_title', 'products_button_link'],
            'division_and_sister_concerns' => ['title'],
            'p_c_h_p_l_teams' => ['name', 'designation'],
            'manage_awards_banners' => ['banner_title'],
            'manage_awards' => ['title'],
            'our_divisions' => ['title'],
            'client_reviews' => ['name'],
            'career_banners' => ['banner_title'],
            'franchise_opportunities' => ['title', 'button_title', 'button_link'],
            'current_opportunites' => ['name', 'location'],
            'corporate_office_tours' => ['welcome_video_url', 'office_phone', 'office_email', 'office_website'],
            'corporate_office_tour_images' => ['category'],
            'manufacturingplant_tour' => ['title', 'address', 'phone_no', 'website', 'email'],
            'manufacturingpant_tour_images' => ['category'],
            'contact_us_pages' => ['address', 'mobile', 'email'],
            'terms_pages' => ['terms_file_name'],
            'social_media' => ['name', 'url'],
            'new_launch_sliders' => ['button_title', 'file_name'],
        ];

        foreach ($fieldsToChange as $table => $fields) {
            Schema::table($table, function (Blueprint $table) use ($fields) {
                foreach ($fields as $field) {
                    $table->text($field)->change();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Define an array of tables and fields to revert the changes
        $fieldsToRevert = [
            'home_sliders' => ['title', 'button_title', 'button_link'],
            'directors' => ['name', 'designation'],
            'company_profiles' => [
                 'banner_title', 'about_pchpl_title', 'video_url', 'mission_title',
                'mission_button_title', 'mission_button_url', 'vision_title', 'vision_button_title',
                'vision_button_url', 'we_believe_title', 'achievements_title',
                'achievements_button_title', 'achievements_button_url', 'directors_title', 'trusted_partners_title',
                'division_sister_concerns_title', 'products_title', 'pchpl_team_title'
            ],
            'manufacturing_plants' => ['banner_title', 'objective_title'],
            'we_believe_points' => ['point'],
            'manufacturing_plant_lists' => ['title'],
            'company_background_products' => ['company_background_button_title', 'company_background_button_link', 'products_button_title', 'products_button_link'],
            'division_and_sister_concerns' => ['title'],
            'p_c_h_p_l_teams' => ['name', 'designation'],
            'manage_awards_banners' => ['banner_title'],
            'manage_awards' => ['title'],
            // 'manage_cerificates' => ['name'],
            'our_divisions' => ['title'],
            'client_reviews' => ['name'],
            'career_banners' => ['banner_title'],
            'franchise_opportunities' => ['title', 'button_title', 'button_link'],
            'current_opportunites' => ['name', 'location'],
            'corporate_office_tours' => ['welcome_video_url', 'office_phone', 'office_email', 'office_website'],
            'corporate_office_tour_images' => ['category'],
            'manufacturingplant_tour' => ['title', 'address', 'phone_no', 'website', 'email'],
            'manufacturingpant_tour_images' => ['category'],
            'contact_us_pages' => ['address', 'mobile', 'email'],
            'terms_pages' => ['terms_file_name'],
            'social_media' => ['name', 'url'],
            'new_launch_sliders' => ['button_title', 'file_name'],
        ];

        foreach ($fieldsToRevert as $table => $fields) {
            Schema::table($table, function (Blueprint $table) use ($fields) {
                foreach ($fields as $field) {
                    // In the down method, we will use DB::statement to alter the column datatype back to varchar
                    DB::statement("ALTER TABLE $table MODIFY COLUMN $field VARCHAR(255)");
                }
            });
        }
    }
}
