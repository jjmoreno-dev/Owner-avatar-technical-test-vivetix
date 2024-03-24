<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique()->index(); 

            $table->char('iso2', 2)->nullable()->unique();
            $table->char('iso3', 3)->nullable()->unique();
            $table->string('name', 100)->index();
            $table->string('name_en', 100)->index();
            $table->string('isd', 8)->nullable();
            $table->boolean('is_eu')->default(0)->index();
        });

        // data
        
            
            
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AD', 'Andorra', 'Andorra', 'AND', '376', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AE', 'Verenigde Arabische Emiraten', 'United Arab Emirates', 'ARE', '971', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AF', 'Afghanistan', 'Afghanistan', 'AFG', '93', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AG', 'Antigua en Barbuda', 'Antigua and Barbuda', 'ATG', '1-268', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AI', 'Anguilla', 'Anguilla', 'AIA', '1-264', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AL', 'Albanië', 'Albania', 'ALB', '355', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AM', 'Armenië', 'Armenia', 'ARM', '374', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AO', 'Angola', 'Angola', 'AGO', '244', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AQ', 'Antarctica', 'Antarctica', 'ATA', '672', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AR', 'Argentinië', 'Argentina', 'ARG', '54', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AS', 'Amerikaans-Samoa', 'American Samoa', 'ASM', '1-684', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AT', 'Oostenrijk', 'Austria', 'AUT', '43', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AU', 'Australië', 'Australia', 'AUS', '61', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AW', 'Aruba', 'Aruba', 'ABW', '297', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AX', 'Åland', 'Åland Islands', 'ALA', '358', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'AZ', 'Azerbeidzjan', 'Azerbaijan', 'AZE', '994', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BA', 'Bosnië en Herzegovina', 'Bosnia and Herzegovina', 'BIH', '387', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BB', 'Barbados', 'Barbados', 'BRB', '1-246', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BD', 'Bangladesh', 'Bangladesh', 'BGD', '880', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BE', 'België', 'Belgium', 'BEL', '32', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '226', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BG', 'Bulgarije', 'Bulgaria', 'BGR', '359', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BH', 'Bahrein', 'Bahrain', 'BHR', '973', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BI', 'Burundi', 'Burundi', 'BDI', '257', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BJ', 'Benin', 'Benin', 'BEN', '229', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BL', 'Saint-Barthélemy', 'Saint-Barthélemy', 'BLM', '652', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BM', 'Bermuda', 'Bermuda', 'BMU', '1-441', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '673', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BO', 'Bolivia', 'Bolivia', 'BOL', '591', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '599-7', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BR', 'Brazilië', 'Brazil', 'BRA', '55', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BS', 'Bahama\'s', 'Bahamas', 'BHS', '1-242', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BT', 'Bhutan', 'Bhutan', 'BTN', '975', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BV', 'Bouveteiland', 'Bouvet Island', 'BVT', '47', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BW', 'Botswana', 'Botswana', 'BWA', '267', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BY', 'Wit-Rusland', 'Belarus', 'BLR', '375', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'BZ', 'Belize', 'Belize', 'BLZ', '501', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CA', 'Canada', 'Canada', 'CAN', '1', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CC', 'Cocoseilanden', 'Cocos (Keeling) Islands', 'CCK', '61', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CD', 'Congo (DRC)', 'Congo (DRC)', 'COD', '242', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CF', 'Centraal-Afrikaanse Republiek', 'Central African Republic', 'CAF', '236', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CG', 'Congo-Brazzaville', 'Congo-Brazzaville', 'COG', '178', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CH', 'Zwitserland', 'Switzerland', 'CHE', '41', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CI', 'Ivoorkust', 'Ivory Coast', 'CIV', '225', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CK', 'Cookeilanden', 'Cook Islands', 'COK', '682', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CL', 'Chili', 'Chile', 'CHL', '56', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CM', 'Kameroen', 'Cameroon', 'CMR', '237', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CN', 'China', 'China', 'CHN', '86', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CO', 'Colombia', 'Colombia', 'COL', '57', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CR', 'Costa Rica', 'Costa Rica', 'CRI', '506', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CU', 'Cuba', 'Cuba', 'CUB', '53', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CV', 'Kaapverdië', 'Cape Verde', 'CPV', '238', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CW', 'Curaçao', 'Curaçao', 'CUW', '599', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CX', 'Christmaseiland', 'Christmas Island', 'CXR', '61', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CY', 'Cyprus', 'Cyprus', 'CYP', '357', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'CZ', 'Tsjechië', 'Czechia', 'CZE', '420', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DE', 'Duitsland', 'Germany', 'DEU', '49', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DJ', 'Djibouti', 'Djibouti', 'DJI', '253', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DK', 'Denemarken', 'Denmark', 'DNK', '45', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DM', 'Dominica', 'Dominica', 'DMA', '1-767', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DO', 'Dominicaanse Republiek', 'Dominican Republic', 'DOM', '1-809', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'DZ', 'Algerije', 'Algeria', 'DZA', '213', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'EC', 'Ecuador', 'Ecuador', 'ECU', '593', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'EE', 'Estland', 'Estonia', 'EST', '372', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'EG', 'Egypte', 'Egypt', 'EGY', '20', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'EH', 'Westelijke Sahara', 'Western Sahara', 'ESH', '212', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ER', 'Eritrea', 'Eritrea', 'ERI', '291', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ES', 'Spanje', 'Spain', 'ESP', '34', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ET', 'Ethiopië', 'Ethiopia', 'ETH', '251', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FI', 'Finland', 'Finland', 'FIN', '358', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FJ', 'Fiji', 'Fiji', 'FJI', '679', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FK', 'Falklandeilanden', 'Falkland Islands (Malvinas)', 'FLK', '500', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FM', 'Micronesia', 'Micronesia, Federated States of', 'FSM', '691', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FO', 'Faeröer', 'Faroe Islands', 'FRO', '298', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'FR', 'Frankrijk', 'France', 'FRA', '33', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GA', 'Gabon', 'Gabon', 'GAB', '241', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GB', 'Verenigd Koninkrijk', 'United Kingdom', 'GBR', '44', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GD', 'Grenada', 'Grenada', 'GRD', '1-473', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GE', 'Georgië', 'Georgia', 'GEO', '995', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GF', 'Frans-Guyana', 'French Guiana', 'GUF', '594', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GG', 'Guernsey', 'Guernsey', 'GGY', '44-1481', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GH', 'Ghana', 'Ghana', 'GHA', '233', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '350', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GL', 'Groenland', 'Greenland', 'GRL', '299', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GM', 'Gambia', 'Gambia', 'GMB', '220', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GN', 'Guinee', 'Guinea', 'GIN', '224', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GP', 'Guadeloupe', 'Guadeloupe', 'GLP', '590', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GQ', 'Equatoriaal-Guinea', 'Equatorial Guinea', 'GNQ', '240', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GR', 'Griekenland', 'Greece', 'GRC', '30', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GS', 'Zuid-Georgia en de Zuidelijke Sandwicheilanden', 'South Georgia and the South Sandwich Islands', 'SGS', '500', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GT', 'Guatemala', 'Guatemala', 'GTM', '502', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GU', 'Guam', 'Guam', 'GUM', '1-671', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GW', 'Guinee-Bissau', 'Guinea-bissau', 'GNB', '245', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'GY', 'Guyana', 'Guyana', 'GUY', '592', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HK', 'Hongkong', 'Hong Kong', 'HKG', '852', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HM', 'Heard en McDonaldeilanden', 'Heard Island and McDonald Islands', 'HMD', '011', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HN', 'Honduras', 'Honduras', 'HND', '504', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HR', 'Kroatië', 'Croatia', 'HRV', '385', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HT', 'Haïti', 'Haiti', 'HTI', '509', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'HU', 'Hongarije', 'Hungary', 'HUN', '36', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ID', 'Indonesië', 'Indonesia', 'IDN', '62', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IE', 'Ierland', 'Ireland', 'IRL', '353', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IL', 'Israël', 'Israel', 'ISR', '972', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IM', 'Man', 'Isle of Man', 'IMN', '44-1624', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IN', 'India', 'India', 'IND', '91', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IO', 'Brits Indische Oceaanterritorium', 'British Indian Ocean Territory', 'IOT', '246', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IQ', 'Irak', 'Iraq', 'IRQ', '964', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IR', 'Iran', 'Iran (Islamic Republic of)', 'IRN', '98', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IS', 'IJsland', 'Iceland', 'ISL', '354', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'IT', 'Italië', 'Italy', 'ITA', '39', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'JE', 'Jersey', 'Jersey', 'JEY', '44-1534', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'JM', 'Jamaica', 'Jamaica', 'JAM', '1-876', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'JO', 'Jordanië', 'Jordan', 'JOR', '962', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'JP', 'Japan', 'Japan', 'JPN', '81', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KE', 'Kenia', 'Kenya', 'KEN', '254', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KG', 'Kirgizië', 'Kyrgyzstan', 'KGZ', '996', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KH', 'Cambodja', 'Cambodia', 'KHM', '855', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KI', 'Kiribati', 'Kiribati', 'KIR', '686', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KM', 'Comoren', 'Comoros', 'COM', '269', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KN', 'Saint Kitts en Nevis', 'Saint Kitts and Nevis', 'KNA', '1-869', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KP', 'Noord-Korea', 'Democratic People\'s Republic of Korea (North Korea)', 'PRK', '850', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KR', 'Zuid-Korea', 'Republic of Korea (South Korea)', 'KOR', '82', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KW', 'Koeweit', 'Kuwait', 'KWT', '965', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KY', 'Kaaimaneilanden', 'Cayman Islands', 'CYM', '1-345', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'KZ', 'Kazachstan', 'Kazakhstan', 'KAZ', '7', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LA', 'Laos', 'Lao People\'s Democratic Republic', 'LAO', '856', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LB', 'Libanon', 'Lebanon', 'LBN', '961', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '1-758', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LI', 'Liechtenstein', 'Liechtenstein', 'LIE', '423', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LK', 'Sri Lanka', 'Sri Lanka', 'LKA', '94', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LR', 'Liberia', 'Liberia', 'LBR', '231', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LS', 'Lesotho', 'Lesotho', 'LSO', '266', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LT', 'Litouwen', 'Lithuania', 'LTU', '370', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LU', 'Luxemburg', 'Luxembourg', 'LUX', '352', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LV', 'Letland', 'Latvia', 'LVA', '371', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'LY', 'Libië', 'Libya', 'LBY', '218', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MA', 'Marokko', 'Morocco', 'MAR', '212', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MC', 'Monaco', 'Monaco', 'MCO', '377', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MD', 'Moldavië', 'Moldova', 'MDA', '373', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ME', 'Montenegro', 'Montenegro', 'MNE', '382', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MF', 'Sint-Maarten', 'Saint-Martin (French part)', 'MAF', '663', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MG', 'Madagaskar', 'Madagascar', 'MDG', '261', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MH', 'Marshalleilanden', 'Marshall Islands', 'MHL', '692', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MK', 'Noord-Macedonië', 'North Macedonia', 'MKD', '389', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ML', 'Mali', 'Mali', 'MLI', '223', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MM', 'Myanmar', 'Myanmar', 'MMR', '95', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MN', 'Mongolië', 'Mongolia', 'MNG', '976', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MO', 'Macau', 'Macao', 'MAC', '853', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MP', 'Noordelijke Marianen', 'Northern Mariana Islands', 'MNP', '1-670', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MQ', 'Martinique', 'Martinique', 'MTQ', '596', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MR', 'Mauritanië', 'Mauritania', 'MRT', '222', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MS', 'Montserrat', 'Montserrat', 'MSR', '1-664', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MT', 'Malta', 'Malta', 'MLT', '356', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MU', 'Mauritius', 'Mauritius', 'MUS', '230', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MV', 'Maldiven', 'Maldives', 'MDV', '960', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MW', 'Malawi', 'Malawi', 'MWI', '265', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MX', 'Mexico', 'Mexico', 'MEX', '52', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MY', 'Maleisië', 'Malaysia', 'MYS', '60', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'MZ', 'Mozambique', 'Mozambique', 'MOZ', '258', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NA', 'Namibië', 'Namibia', 'NAM', '264', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NC', 'Nieuw-Caledonië', 'New Caledonia', 'NCL', '687', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NE', 'Niger', 'Niger', 'NER', '227', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NF', 'Norfolk', 'Norfolk Island', 'NFK', '672', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NG', 'Nigeria', 'Nigeria', 'NGA', '234', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NI', 'Nicaragua', 'Nicaragua', 'NIC', '505', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NL', 'Nederland', 'Netherlands', 'NLD', '31', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NO', 'Noorwegen', 'Norway', 'NOR', '47', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NP', 'Nepal', 'Nepal', 'NPL', '977', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NR', 'Nauru', 'Nauru', 'NRU', '674', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NU', 'Niue', 'Niue', 'NIU', '683', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'NZ', 'Nieuw-Zeeland', 'New Zealand', 'NZL', '64', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'OM', 'Oman', 'Oman', 'OMN', '968', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PA', 'Panama', 'Panama', 'PAN', '507', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PE', 'Peru', 'Peru', 'PER', '51', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PF', 'Frans-Polynesië', 'French Polynesia', 'PYF', '689', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PG', 'Papoea-Nieuw-Guinea', 'Papua New Guinea', 'PNG', '675', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PH', 'Filipijnen', 'Philippines', 'PHL', '63', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PK', 'Pakistan', 'Pakistan', 'PAK', '92', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PL', 'Polen', 'Poland', 'POL', '48', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PM', 'Saint-Pierre en Miquelon', 'St. Pierre and Miquelon', 'SPM', '508', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PN', 'Pitcairneilanden', 'Pitcairn', 'PCN', '64', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PR', 'Puerto Rico', 'Puerto Rico', 'PRI', '1-787', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PS', 'Palestina', 'Palestine', 'PSE', '970', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PT', 'Portugal', 'Portugal', 'PRT', '351', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PW', 'Palau', 'Palau', 'PLW', '680', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'PY', 'Paraguay', 'Paraguay', 'PRY', '595', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'QA', 'Qatar', 'Qatar', 'QAT', '974', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'RE', 'Réunion', 'Réunion', 'REU', '262', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'RO', 'Roemenië', 'Romania', 'ROU', '40', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'RS', 'Servië', 'Serbia', 'SRB', '381', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'RU', 'Rusland', 'Russian Federation', 'RUS', '7', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'RW', 'Rwanda', 'Rwanda', 'RWA', '250', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SA', 'Saoedi-Arabië', 'Saudi Arabia', 'SAU', '966', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SB', 'Salomonseilanden', 'Solomon Islands', 'SLB', '677', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SC', 'Seychellen', 'Seychelles', 'SYC', '248', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SD', 'Soedan', 'Sudan', 'SDN', '249', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SE', 'Zweden', 'Sweden', 'SWE', '46', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SG', 'Singapore', 'Singapore', 'SGP', '65', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SH', 'Sint-Helena, Ascension en Tristan da Cunha', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '290', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SI', 'Slovenië', 'Slovenia', 'SVN', '386', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SJ', 'Spitsbergen en Jan Mayen', 'Svalbard and Jan Mayen Islands', 'SJM', '47', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SK', 'Slowakije', 'Slovakia', 'SVK', '421', 1);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SL', 'Sierra Leone', 'Sierra Leone', 'SLE', '232', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SM', 'San Marino', 'San Marino', 'SMR', '378', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SN', 'Senegal', 'Senegal', 'SEN', '221', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SO', 'Somalië', 'Somalia', 'SOM', '252', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SR', 'Suriname', 'Suriname', 'SUR', '597', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SS', 'Zuid-Soedan', 'South Sudan', 'SSD', '728', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ST', 'Sao Tomé en Principe', 'Sao Tome and Principe', 'STP', '239', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SV', 'El Salvador', 'El Salvador', 'SLV', '503', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SX', 'Sint Maarten (Nederlands deel)', 'Sint Maarten (Dutch part)', 'SXM', '1-721', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SY', 'Syrië', 'Syrian Arab Republic', 'SYR', '963', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'SZ', 'Eswatini', 'Eswatini', 'SWZ', '268', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TC', 'Turks- en Caicoseilanden', 'Turks and Caicos Islands', 'TCA', '1-649', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TD', 'Tsjaad', 'Chad', 'TCD', '235', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TF', 'Franse Zuidelijke en Antarctische Gebieden', 'French Southern Territories', 'ATF', '262', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TG', 'Togo', 'Togo', 'TGO', '228', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TH', 'Thailand', 'Thailand', 'THA', '66', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TJ', 'Tadzjikistan', 'Tajikistan', 'TJK', '992', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TK', 'Tokelau', 'Tokelau', 'TKL', '690', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TL', 'Oost-Timor', 'Timor-Leste', 'TLS', '670', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '993', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TN', 'Tunesië', 'Tunisia', 'TUN', '216', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TO', 'Tonga', 'Tonga', 'TON', '676', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TR', 'Turkije', 'Turkey', 'TUR', '90', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TT', 'Trinidad en Tobago', 'Trinidad and Tobago', 'TTO', '1-868', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '688', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TW', 'Taiwan', 'Taiwan', 'TWN', '886', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'TZ', 'Tanzania', 'Tanzania, United Republic of', 'TZA', '255', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'UA', 'Oekraïne', 'Ukraine', 'UKR', '380', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'UG', 'Oeganda', 'Uganda', 'UGA', '256', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'UM', 'Kleine afgelegen eilanden van de Verenigde Staten', 'United States Minor Outlying Islands', 'UMI', '246', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'US', 'Verenigde Staten', 'United States of America', 'USA', '1', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'UY', 'Uruguay', 'Uruguay', 'URY', '598', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'UZ', 'Oezbekistan', 'Uzbekistan', 'UZB', '998', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VA', 'Vaticaanstad', 'Vatican City State (Holy See)', 'VAT', '379', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VC', 'Saint Vincent en de Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '1-784', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VE', 'Venezuela', 'Venezuela', 'VEN', '58', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VG', 'Britse Maagdeneilanden', 'Virgin Islands (British)', 'VGB', '1-284', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VI', 'Amerikaanse Maagdeneilanden', 'Virgin Islands (U.S.)', 'VIR', '1-340', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VN', 'Vietnam', 'Vietnam', 'VNM', '84', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'VU', 'Vanuatu', 'Vanuatu', 'VUT', '678', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'WF', 'Wallis en Futuna', 'Wallis and Futuna', 'WLF', '681', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'WS', 'Samoa', 'Samoa', 'WSM', '685', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'YE', 'Jemen', 'Yemen', 'YEM', '967', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'YT', 'Mayotte', 'Mayotte', 'MYT', '262', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ZA', 'Zuid-Afrika', 'South Africa', 'ZAF', '27', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ZM', 'Zambia', 'Zambia', 'ZMB', '260', 0);");
            DB::Statement("INSERT INTO `countries` (id,`iso2`, `name`, `name_en`, `iso3`, `isd`, `is_eu`) VALUES (uuid(), 'ZW', 'Zimbabwe', 'Zimbabwe', 'ZWE', '263', 0);");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
