<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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
        $json_string = '[{"created_at":"2016-05-01 23:09:39","updated_at":"2018-01-11 11:29:16","role_id":"1","username":"admin","email":"productdemo.admin@gmail.com","password":"$2y$10$Dd\/EpAiDO.6Mj\/OxxSae8euY6xT6iX00SMCag8fjvEgBj6Ll.ip5C","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"74","is_agree_terms_conditions":"1","is_active":"1","is_email_confirmed":"1","activate_hash":"0","address":"Manchester, UK","city_id":"14","state_id":"4","country_id":"239","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"53.4807593","longitude":"-2.2426305","postal_code":"3111","phone_number":"1612371017","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"0","is_sms_notification":"0","mobile_number_verification_otp":"9584","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","request_count":"0"},{"created_at":"2017-12-08 12:30:12","updated_at":"2018-01-02 12:01:28","role_id":"2","username":"productdemo.user+customer","email":"productdemo.user+customer@gmail.com","password":"$2y$12$Kb\/rXng8wtoD\/3GNMHr5KO.F0llrWRGvhVREft93PTr9B\/C2wAWjS","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"32","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Hohe Str. 23, 09112 Chemnitz, Germany","city_id":"1","state_id":"1","country_id":"83","reference_code":"538787d53d","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"50.83201","longitude":"12.91336","postal_code":"9112","phone_number":"23456787","secondary_phone_number":"23456789","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"6015","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"49","secondary_mobile_code":"49","is_push_notification_enabled":"1","appointment_count":"5","request_count":"0"},{"created_at":"2017-12-08 12:40:04","updated_at":"2018-01-02 09:18:19","role_id":"3","username":"productdemo.user+assistant","email":"productdemo.user+assistant@gmail.com","password":"$2y$12$.0aI2PE\/UCZ8zKYClUqKr.M0Z0VvSRD7.o7PkqQAq2QLrfP9elvbe","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"60","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Ringstra\u00dfe 1, 09387 Jahnsdorf\/Erzgeb, Germany","city_id":"1","state_id":"1","country_id":"83","reference_code":"c8166af77a","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"49.3801834","longitude":"10.1867388","postal_code":"9387","phone_number":"85258525","secondary_phone_number":"76543215","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"7162","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"49","secondary_mobile_code":"49","is_push_notification_enabled":"1","appointment_count":"0","category_id":"3","request_count":"0"},{"created_at":"2017-12-08 13:12:12","updated_at":"2018-01-02 11:08:51","role_id":"2","username":"productdemo.user+customer1","email":"productdemo.user+customer1@gmail.com","password":"$2y$12$WXulusXtwXGwZh.z5btn3.1VL18n8KIwXfyZT5i0l6tcwFfHFhi0i","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"8","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Viale Giulio Cesare, 129, 00192 Rome, RM, Italy","city_id":"3","state_id":"3","country_id":"109","reference_code":"702a3dae2f","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"41.9093118","longitude":"12.4588314","postal_code":"192","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1918","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"39","secondary_mobile_code":"39","is_push_notification_enabled":"1","appointment_count":"1","request_count":"0"},{"created_at":"2017-12-08 13:15:20","updated_at":"2017-12-08 13:17:47","role_id":"2","username":"productdemo.user+customer2","email":"productdemo.user+customer2@gmail.com","password":"$2y$12$ySHSaVW\/STwdn\/aTx8z48OYwQ4aUVXa9dp9Qos6rZCpXTLaqnTkOK","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"4","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Array","city_id":"4","state_id":"4","country_id":"239","reference_code":"c93016d074","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.5162082","longitude":"-0.1306338","postal_code":"W1T 1JY","phone_number":"9999999999","secondary_phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1970","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","request_count":"0"},{"created_at":"2017-12-08 13:18:12","updated_at":"2017-12-08 13:30:37","role_id":"2","username":"productdemo.user+customer3","email":"productdemo.user+customer3@gmail.com","password":"$2y$12$4Zxi80l05zJ8xkTAbCvsZ.Zw0DmL1MbyeiqqLyxgZblBmxMNeJuIS","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"4","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Aranjuez, Madrid, Spain","city_id":"5","state_id":"5","country_id":"213","reference_code":"1232de1bfe","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"40.0305557","longitude":"-3.6037536","postal_code":"28300","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"0","mobile_number_verification_otp":"3150","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"34","secondary_mobile_code":"34","is_push_notification_enabled":"1","appointment_count":"0","request_count":"0"},{"created_at":"2017-12-11 06:21:49","updated_at":"2017-12-29 14:41:12","role_id":"3","username":"productdemo.user+assistant1","email":"productdemo.user+assistant1@gmail.com","password":"$2y$12$LHHnN9iYxYPm9gK\/BYwZl.6PwAZpKIN8Mjz9eGMei2.d\/pbXakiZO","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"12","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"Calle Aduana Vieja, 42002 Soria, Spain","city_id":"6","state_id":"6","country_id":"213","reference_code":"d6b218d1dd","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"40.0305018","longitude":"-3.6040527","postal_code":"42002","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"6877","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"34","secondary_mobile_code":"34","is_push_notification_enabled":"1","appointment_count":"0","category_id":"3","request_count":"0"},{"created_at":"2017-12-16 11:23:54","updated_at":"2018-01-02 11:20:36","role_id":"3","username":"productdemo.user+care","email":"productdemo.user+care@gmail.com","password":"$2y$12$kwIGzZ5vH\/YmdqVThwzs7OzSbQs93zmzen6xU4DILuTHlKv0w40pC","available_wallet_amount":"73","blocked_amount":"0","user_login_count":"70","is_agree_terms_conditions":"1","is_active":"1","is_email_confirmed":"1","address":"Alesund, Norway","city_id":"7","state_id":"7","country_id":"167","reference_code":"4f6caf86a3","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"62.4722284","longitude":"6.1494821","postal_code":"52318","phone_number":"9999999999","secondary_phone_number":"55445258","review_count_as_service_provider":"1","total_rating_as_service_provider":"5","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"5","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1111","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"47","secondary_mobile_code":"47","is_push_notification_enabled":"1","appointment_count":"0","category_id":"2","request_count":"0"},{"created_at":"2017-12-16 11:49:28","updated_at":"2017-12-29 14:26:53","role_id":"3","username":"productdemo.user+care1","email":"productdemo.user+care1@gmail.com","password":"$2y$12$tL4A6WDm1NzIhKXeE9dFOuZtQow53pIqW8e3jkyroqgQCdrvNSfaK","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"16","is_agree_terms_conditions":"1","is_active":"1","is_email_confirmed":"0","address":"Fl\u00e5m, Norway","city_id":"8","state_id":"8","country_id":"167","reference_code":"d81eed2f21","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"60.8607716","longitude":"7.1117849","postal_code":"53218","phone_number":"9999999999","secondary_phone_number":"55952514","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1111","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"47","secondary_mobile_code":"47","is_push_notification_enabled":"1","appointment_count":"0","category_id":"2","request_count":"0"},{"created_at":"2017-12-26 11:05:19","updated_at":"2017-12-29 15:10:31","role_id":"3","username":"productdemo.user+assistant2","email":"productdemo.user+assistant2@gmail.com","password":"$2y$12$GAeNJreixbrTN\/7PfDQwiekzCPVZcks5v4\/LjkLCKkbjuzz86pckm","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"12","is_agree_terms_conditions":"1","is_active":"1","is_email_confirmed":"1","address":"Oslo, Norway","city_id":"12","state_id":"12","country_id":"167","reference_code":"411ae5085b","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"59.9138688","longitude":"10.7522454","postal_code":"1205","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1111","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"47","secondary_mobile_code":"47","is_push_notification_enabled":"1","appointment_count":"0","category_id":"3","request_count":"0"},{"created_at":"2017-12-28 06:18:23","updated_at":"2017-12-29 14:27:33","role_id":"3","username":"productdemo.user+care2","email":"productdemo.user+care2@gmail.com","password":"$2y$12$hEUMVL.dBI4TT5snu\/jQD.Sn1M1B8VGy6XEj2Piq3OyZJLga7oJnO","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"12","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"Towcester NN12, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"29ebbce075","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"52.1233778","longitude":"-0.993005","postal_code":"NN12 6LD","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1111","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"2","request_count":"0"},{"created_at":"2017-12-28 06:43:02","updated_at":"2018-01-02 11:29:01","role_id":"3","username":"productdemo.user+doctor","email":"productdemo.user+doctor@gmail.com","password":"$2y$12$KL7eNwDWtxsTnfwbvo68jucq7J\/\/kEiib9RLcuASH30x.ejELMTYu","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"16","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"Zufahrt zum Flughafen Tegel, 13405 Berlin, Germany","city_id":"13","state_id":"13","country_id":"83","reference_code":"9b9f6e3962","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"52.5588327","longitude":"13.2884374","postal_code":"13405","phone_number":"9999999999","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1111","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"49","secondary_mobile_code":"49","is_push_notification_enabled":"1","appointment_count":"0","category_id":"4","request_count":"0"},{"created_at":"2017-12-29 07:19:07","updated_at":"2017-12-29 14:18:28","role_id":"3","username":"productdemo.user+doctor1","email":"productdemo.user+doctor1@gmail.com","password":"$2y$12$eFemp6KI\/ZC8E2\/XgkRJ6u0uDFxH5KEHRoxIwGcOdu9Dpy.rrsXZy","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"8","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"29-32 The Oval, London E2 9DT, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"5b55ad28df","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.5331692","longitude":"-0.0592409","postal_code":"NW1 7EB","phone_number":"85478569","secondary_phone_number":"98547858","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"8134","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"4","request_count":"0"},{"created_at":"2017-12-29 08:56:59","updated_at":"2017-12-29 14:36:01","role_id":"3","username":"productdemo.user+care3","email":"productdemo.user+care3@gmail.com","password":"$2y$12$oeaVh52xXa3\/9Cjnj9vxrucRQlXvR1r6AAfxJrqerZcIJc6C0FO9e","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"6","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"St John\'s Wood Rd, London NW8 8QN, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"e92e7ac13d","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.529831","longitude":"-0.1721564","postal_code":"NW8 9JB","phone_number":"77584585","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"1874","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"2","request_count":"0"},{"created_at":"2017-12-29 10:14:04","updated_at":"2017-12-29 14:19:39","role_id":"3","username":"productdemo.user+doctor2","email":"productdemo.user+doctor2@gmail.com","password":"$2y$12$zH63\/nxG6BtwZQF4eXJWWuhPj0gSjTDSaKA9lSXaIuOue4WZLqDVa","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"6","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"318 Kennington Park Rd, London SE11 4PP, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"46ffeacc34","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.4820214","longitude":"-0.1127919","postal_code":"SW13 0NB","phone_number":"85475874","secondary_phone_number":"85475875","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"5397","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"4","request_count":"0"},{"created_at":"2017-12-29 10:23:57","updated_at":"2017-12-29 14:21:19","role_id":"3","username":"productdemo.user+doctor3","email":"productdemo.user+doctor3@gmail.com","password":"$2y$12$luubIoGF9b3l8c0HzeZQB.M31.lCR86ImZnAAO7AZIXcfU6sg5FaK","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"6","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"29-32 The Oval, London E2 9DT, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"7e1fccd507","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.5331692","longitude":"-0.0592409","postal_code":"E2 9DT","phone_number":"57485895","secondary_phone_number":"68547895","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"9079","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"4","request_count":"0"},{"created_at":"2017-12-29 10:51:03","updated_at":"2017-12-29 15:14:30","role_id":"3","username":"productdemo.user+assistant3","email":"productdemo.user+assistant3@gmail.com","password":"$2y$12$jNCxUJQv.uigMYhE01BDsOD9X0bBe7DAd4gM\/YMIaNIMefZU76QSq","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"8","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"London, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"484a198caf","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.5073509","longitude":"-0.1277583","postal_code":"WC2N 5DU","phone_number":"8569854785","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"8568","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"3","request_count":"0"},{"created_at":"2017-12-29 11:08:03","updated_at":"2018-01-02 11:47:21","role_id":"3","username":"productdemo.user+dogcare","email":"productdemo.user+dogcare@gmail.com","password":"$2y$12$RcfltJxwEBuqaU\/eW7uyUONPVRwUiDlGaccIHxyV\/r7F0CQHrlktC","available_wallet_amount":"91.84","blocked_amount":"0","user_login_count":"12","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"Sydney NSW 2000, Australia","city_id":"17","state_id":"14","country_id":"14","reference_code":"22c88e6734","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"-33.8688197","longitude":"151.2092955","postal_code":"2000","phone_number":"85479658","review_count_as_service_provider":"1","total_rating_as_service_provider":"5","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"5","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"7939","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"1","request_count":"0"},{"created_at":"2017-12-29 11:33:33","updated_at":"2017-12-29 14:09:49","role_id":"3","username":"productdemo.user+dogcare1","email":"productdemo.user+dogcare1@gmail.com","password":"$2y$12$DwXzHRkmupsHFoXC1II4A.IWUFzpESsKPXh7hD2C9BQo3fPw3gTsu","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"6","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"London, UK","city_id":"4","state_id":"4","country_id":"239","reference_code":"5ed1b6ab94","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"51.5073509","longitude":"-0.1277583","postal_code":"WC2N 5DU","phone_number":"85478569","secondary_phone_number":"96587458","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"6210","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"1","request_count":"0"},{"created_at":"2017-12-29 11:42:41","updated_at":"2017-12-30 15:04:24","role_id":"3","username":"productdemo.user+dogcare2","email":"productdemo.user+dogcare2@gmail.com","password":"$2y$12$3pZfrkE69Uy0hk7wpEGIkeY5gOW7y1My8QIg8b.4bh8idph8PCfUy","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"10","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"1","address":"Tokyo, Japan","city_id":"19","state_id":"16","country_id":"112","reference_code":"8ce047bc83","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"35.6894875","longitude":"139.6917064","postal_code":"112-0004","phone_number":"85697458","secondary_phone_number":"95874585","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"4826","is_mobile_number_verified":"1","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"1","request_count":"0"},{"created_at":"2017-12-29 11:48:15","updated_at":"2017-12-30 15:05:58","role_id":"3","username":"productdemo.user+dogcare3","email":"productdemo.user+dogcare3@gmail.com","password":"$2y$12$ZGr\/PcjXWmWL\/Pnc.uhxWuOUnpw\/1iHHeDtwXz8iYT8qxBepsjtDK","available_wallet_amount":"0","blocked_amount":"0","user_login_count":"8","is_agree_terms_conditions":"0","is_active":"1","is_email_confirmed":"0","address":"Yokohama, Kanagawa Prefecture, Japan","city_id":"20","state_id":"17","country_id":"112","reference_code":"9e6b46bded","affiliate_pending_amount":"0","affiliate_paid_amount":"0","is_profile_updated":"1","latitude":"35.4437078","longitude":"139.6380256","postal_code":"231-0051","phone_number":"85698547","secondary_phone_number":"96587458","review_count_as_service_provider":"0","total_rating_as_service_provider":"0","review_count_as_employer":"0","total_rating_as_employer":"0","average_rating_as_service_provider":"0","average_rating_as_employer":"0","is_deleted":"0","is_email_subscribed":"1","is_sms_notification":"1","mobile_number_verification_otp":"6488","is_mobile_number_verified":"0","is_app_device_available":"0","mobile_code":"44","secondary_mobile_code":"44","is_push_notification_enabled":"1","appointment_count":"0","category_id":"1","request_count":"0"}]';

        $data = json_decode($json_string, true);
        for($i=0; $i < count($data); $i++){
            $data[$i]['created_at'] = date('Y-m-d H:i:s');
            $data[$i]['updated_at'] = date('Y-m-d H:i:s');
        }
        $posts = $this->table('users');
        $posts->insert($data)
              ->save();
    }
}
