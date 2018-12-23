<?php

use Phinx\Seed\AbstractSeed;

class FormFieldsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $json_string = '[{"created_at":"2017-12-15 14:03:37","updated_at":"2017-12-15 14:03:37","name":"gender_category_2","label":"Gender","label_for_search_form":"Gender","options":"Male,Female","class":"Category","input_type_id":"5","foreign_id":"2","form_field_group_id":"1","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-15 14:03:37","updated_at":"2017-12-15 14:03:37","name":"age_category_2","label":"Age","label_for_search_form":"Age","class":"Category","input_type_id":"1","foreign_id":"2","form_field_group_id":"1","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-15 14:03:37","updated_at":"2017-12-15 14:03:37","name":"language_Known_category_2","label":"Language you can speak?","label_for_search_form":"Language Known?","options":"Danish,Dutch,English,German,French,Italian,Portuguese,Spanish","class":"Category","input_type_id":"4","foreign_id":"2","form_field_group_id":"1","is_required":"0","is_active":"1","display_order":"3","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:16:18","updated_at":"2017-12-15 14:16:18","name":"gender_category_1","label":"Gender","label_for_search_form":"Gender","options":"Male,Female","class":"Category","input_type_id":"5","foreign_id":"1","form_field_group_id":"2","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-15 14:16:18","updated_at":"2017-12-15 14:16:18","name":"age_category_1","label":"Age","label_for_search_form":"Age","class":"Category","input_type_id":"1","foreign_id":"1","form_field_group_id":"2","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-15 14:16:18","updated_at":"2017-12-15 14:16:18","name":"language_Known_category_1","label":"Language you can speak?","label_for_search_form":"Language Known?","options":"Danish,Dutch,English,German,French,Italian,Portuguese,Spanish","class":"Category","input_type_id":"4","foreign_id":"1","form_field_group_id":"2","is_required":"0","is_active":"1","display_order":"3","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:16:18","updated_at":"2017-12-15 14:16:18","name":"having_car_category_1","label":"Do you have a car?","label_for_search_form":"Having Car?","options":"Yes,No","class":"Category","input_type_id":"5","foreign_id":"1","form_field_group_id":"3","is_required":"1","is_active":"1","display_order":"4","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:16:18","updated_at":"2017-12-29 12:32:05","name":"ready_to_drive_children_category_1","label":"Are you willing to drive children?","label_for_search_form":"Ready to Drive Children?","options":"Yes,No","class":"Category","input_type_id":"5","foreign_id":"1","form_field_group_id":"3","is_required":"1","is_active":"1","display_order":"5","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:31:14","updated_at":"2017-12-15 14:31:14","name":"experience_with_Infants_service_3","label":"Experience with Infants (under 1 year old)","label_for_search_form":"Experience with Infants (under 1 year old)","options":"No Experience,Less Than 1 Year of experience,1-2 years of experience,2-3 years of experience,3-5 years of experience,5-10 years of experience,10+ years of experience,Not willing to work with infants","class":"Service","input_type_id":"3","foreign_id":"7","form_field_group_id":"4","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:31:14","updated_at":"2017-12-15 14:31:14","name":"experience_with_toddlers","label":"Experience with Toddlers (1-3 years old)","label_for_search_form":"Experience with Toddlers (1-3 years old)","options":"No Experience,Less Than 1 Year of experience,1-2 years of experience,2-3 years of experience,3-5 years of experience,5-10 years of experience,10+ years of experience,Not willing to work with toddlers","class":"Service","input_type_id":"3","foreign_id":"7","form_field_group_id":"4","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-15 14:31:14","updated_at":"2017-12-15 14:31:14","name":"school_age_service_3","label":"School age (4+ years old)","label_for_search_form":"School age (4+ years old)","options":"No Experience,Less Than 1 Year of experience,1-2 years of experience,2-3 years of experience,3-5 years of experience,5-10 years of experience,10+ years of experience,Not willing to work with School age children","class":"Service","input_type_id":"3","foreign_id":"7","form_field_group_id":"4","is_required":"1","is_active":"1","display_order":"3","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-18 11:28:29","updated_at":"2017-12-18 11:28:29","name":"children_name_service_7","label":"Name of the Children?","label_for_search_form":"Name of the Children?","class":"Service","input_type_id":"1","foreign_id":"7","form_field_group_id":"5","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-18 11:28:29","updated_at":"2017-12-18 11:28:29","name":"age_of_the_child_service_7","label":"Age of the Child","label_for_search_form":"Age","class":"Service","input_type_id":"1","foreign_id":"7","form_field_group_id":"5","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-18 11:28:29","updated_at":"2017-12-18 11:28:29","name":"gender_of_the_child_service_7","label":"Gender of the child","label_for_search_form":"Gender","options":"Male,Female","class":"Service","input_type_id":"3","foreign_id":"7","form_field_group_id":"5","is_required":"1","is_active":"1","display_order":"3","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-26 10:55:24","updated_at":"2017-12-26 11:02:31","name":"experience_category_3","label":"Your Experience","label_for_search_form":"Your Experience","options":"0 - 6 months, 6 months - 1 year, 1 - 2 years, 2 - 5 years, 5 - 10 years, 10+ years","class":"Category","input_type_id":"3","foreign_id":"3","form_field_group_id":"6","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-26 10:55:24","updated_at":"2017-12-26 11:02:31","name":"language_Known_category_3","label":"Language you can speak?","label_for_search_form":"Language Known?","options":"Danish,Dutch,English,German,French,Italian,Portuguese,Spanish","class":"Category","input_type_id":"4","foreign_id":"3","form_field_group_id":"6","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 15:22:13","updated_at":"2017-12-27 15:22:13","name":"subject_offered_category_2","label":"Subjects offered","label_for_search_form":"Subjects offered","options":"English,History,Mathematics","class":"Service","input_type_id":"4","foreign_id":"10","form_field_group_id":"7","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 15:22:13","updated_at":"2017-12-27 15:22:13","name":"age_group_category_2","label":"Age Groups","label_for_search_form":"Age Groups","options":"Secondary school,A-levels,Adults,Primary School","class":"Service","input_type_id":"4","foreign_id":"10","form_field_group_id":"7","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 15:26:28","updated_at":"2017-12-27 15:26:28","name":"language_Known_category_4","label":"Language you can speak?","label_for_search_form":"Language Known?","options":"English,Arabic,Malay,Spanish","class":"Category","input_type_id":"4","foreign_id":"4","form_field_group_id":"8","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 15:43:31","updated_at":"2017-12-27 15:43:31","name":"checkup_category_5","label":"Do you existing of this practice?","label_for_search_form":"Do you existing of this practice?","class":"Category","input_type_id":"2","foreign_id":"5","form_field_group_id":"9","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"0"},{"created_at":"2017-12-27 15:43:31","updated_at":"2017-12-28 06:57:48","name":"experience_category_5","label":"Your Experience","label_for_search_form":"Your Experience","options":"0 - 6 months,6 months - 1 year,1 - 2 years,2 - 5 years,5 - 10 years,10+ years","class":"Category","input_type_id":"3","foreign_id":"5","form_field_group_id":"9","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:14","updated_at":"2017-12-27 16:18:14","name":"property_category_1","label":"Property type","label_for_search_form":"Property type","options":"Apartment,House","class":"Category","input_type_id":"3","foreign_id":"1","form_field_group_id":"10","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:14","updated_at":"2017-12-27 16:18:14","name":"outdoor_category_1","label":"Outdoor areas","label_for_search_form":"Outdoor areas","options":"Balcony,Garden,Terrace\/Patio","class":"Category","input_type_id":"4","foreign_id":"1","form_field_group_id":"10","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:14","updated_at":"2017-12-27 16:18:14","name":"resident_category_1","label":"Resident dogs","label_for_search_form":"Resident dogs","options":"One,Two,Three,Four,Five,Six,Seven,Eight,Nine,Ten","class":"Category","input_type_id":"3","foreign_id":"1","form_field_group_id":"10","is_required":"1","is_active":"1","display_order":"3","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:14","updated_at":"2017-12-27 16:18:14","name":"other_resident_category_1","label":"Other resident pets","label_for_search_form":"Other resident pets","class":"Category","input_type_id":"2","foreign_id":"1","form_field_group_id":"10","is_required":"1","is_active":"1","display_order":"4","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:14","updated_at":"2017-12-27 16:18:14","name":"experience_caring_category_1","label":"Years of experience caring for dogs","label_for_search_form":"Years of experience caring for dogs","options":"Less than 2 years,2 to 5 years,More than 5Years","class":"Category","input_type_id":"3","foreign_id":"1","form_field_group_id":"11","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-27 16:18:15","updated_at":"2017-12-27 16:18:15","name":"dog_care_category_1","label":"Others","label_for_search_form":"Others","options":"Dog care is my primary occupation,I have a car for emergencies,I can administer oral medication,I can administer injections,I am dog CPR\/first aid certified,I have children under 18 in the household","class":"Category","input_type_id":"4","foreign_id":"1","form_field_group_id":"11","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-29 08:04:04","updated_at":"2017-12-29 08:28:06","name":"experience_service_15","label":"Professional Experience","label_for_search_form":"Your Experience","options":"0 - 6 months,6 months - 1 year,1 - 2 years,2 - 5 years,5 - 10 years,10+ years","class":"Service","input_type_id":"3","foreign_id":"15","form_field_group_id":"12","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-29 08:04:04","updated_at":"2017-12-29 08:12:49","name":"qualification_service_15","label":"Qualifications","label_for_search_form":"Qualifications","class":"Service","input_type_id":"2","foreign_id":"15","form_field_group_id":"12","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-29 08:12:16","updated_at":"2017-12-29 08:12:16","name":"qualification_service_16","label":"Qualification","label_for_search_form":"Qualification","class":"Service","input_type_id":"2","foreign_id":"16","form_field_group_id":"13","is_required":"1","is_active":"1","display_order":"1","is_enable_this_field_in_search_form":"1"},{"created_at":"2017-12-29 08:12:17","updated_at":"2017-12-29 08:31:22","name":"experience_service_16","label":"Professional Experience","label_for_search_form":"Your experience","options":"0 - 6 months,6 months - 1 year,1 - 2 years,2 - 5 years,5 - 10 years,10+ years","class":"Service","input_type_id":"3","foreign_id":"16","form_field_group_id":"13","is_required":"1","is_active":"1","display_order":"2","is_enable_this_field_in_search_form":"1"}]';

        $data = json_decode($json_string, true);
        for($i=0; $i < count($data); $i++){
            $data[$i]['created_at'] = date('Y-m-d H:i:s');
            $data[$i]['updated_at'] = date('Y-m-d H:i:s');
        }
        $posts = $this->table('form_fields');
        $posts->insert($data)
              ->save();
    }
}
