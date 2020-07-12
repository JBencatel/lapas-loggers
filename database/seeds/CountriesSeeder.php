<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 0, 'code' => 'UNK', 'name' => 'Unknown'],
            ['id' => 1, 'code' => 'AF', 'name' => 'AFGHANISTAN'],
            ['id' => 2, 'code' => 'AX', 'name' => 'ÅLAND ISLANDS'],
            ['id' => 3, 'code' => 'AL', 'name' => 'ALBANIA'],
            ['id' => 4, 'code' => 'DZ', 'name' => 'ALGERIA'],
            ['id' => 5, 'code' => 'AS', 'name' => 'AMERICAN SAMOA'],
            ['id' => 6, 'code' => 'AD', 'name' => 'ANDORRA'],
            ['id' => 7, 'code' => 'AO', 'name' => 'ANGOLA'],
            ['id' => 8, 'code' => 'AI', 'name' => 'ANGUILLA'],
            ['id' => 9, 'code' => 'AQ', 'name' => 'ANTARCTICA'],
            ['id' => 10, 'code' => 'AG', 'name' => 'ANTIGUA AND BARBUDA'],
            ['id' => 11, 'code' => 'AR', 'name' => 'ARGENTINA'],
            ['id' => 12, 'code' => 'AM', 'name' => 'ARMENIA'],
            ['id' => 13, 'code' => 'AW', 'name' => 'ARUBA'],
            ['id' => 14, 'code' => 'AU', 'name' => 'AUSTRALIA'],
            ['id' => 15, 'code' => 'AT', 'name' => 'AUSTRIA'],
            ['id' => 16, 'code' => 'AZ', 'name' => 'AZERBAIJAN'],
            ['id' => 17, 'code' => 'BS', 'name' => 'BAHAMAS'],
            ['id' => 18, 'code' => 'BH', 'name' => 'BAHRAIN'],
            ['id' => 19, 'code' => 'BD', 'name' => 'BANGLADESH'],
            ['id' => 20, 'code' => 'BB', 'name' => 'BARBADOS'],
            ['id' => 21, 'code' => 'BY', 'name' => 'BELARUS'],
            ['id' => 22, 'code' => 'BE', 'name' => 'BELGIUM'],
            ['id' => 23, 'code' => 'BZ', 'name' => 'BELIZE'],
            ['id' => 24, 'code' => 'BJ', 'name' => 'BENIN'],
            ['id' => 25, 'code' => 'BM', 'name' => 'BERMUDA'],
            ['id' => 26, 'code' => 'BT', 'name' => 'BHUTAN'],
            ['id' => 27, 'code' => 'BO', 'name' => 'BOLIVIA'],
            ['id' => 28, 'code' => 'BA', 'name' => 'BOSNIA AND HERZEGOVINA'],
            ['id' => 29, 'code' => 'BW', 'name' => 'BOTSWANA'],
            ['id' => 30, 'code' => 'BV', 'name' => 'BOUVET ISLAND'],
            ['id' => 31, 'code' => 'BR', 'name' => 'BRAZIL'],
            ['id' => 32, 'code' => 'IO', 'name' => 'BRITISH INDIAN OCEAN TERRITORY'],
            ['id' => 33, 'code' => 'BN', 'name' => 'BRUNEI DARUSSALAM'],
            ['id' => 34, 'code' => 'BG', 'name' => 'BULGARIA'],
            ['id' => 35, 'code' => 'BF', 'name' => 'BURKINA FASO'],
            ['id' => 36, 'code' => 'BI', 'name' => 'BURUNDI'],
            ['id' => 37, 'code' => 'KH', 'name' => 'CAMBODIA'],
            ['id' => 38, 'code' => 'CM', 'name' => 'CAMEROON'],
            ['id' => 39, 'code' => 'CA', 'name' => 'CANADA'],
            ['id' => 40, 'code' => 'CV', 'name' => 'CAPE VERDE'],
            ['id' => 41, 'code' => 'KY', 'name' => 'CAYMAN ISLANDS'],
            ['id' => 42, 'code' => 'CF', 'name' => 'CENTRAL AFRICAN REPUBLIC'],
            ['id' => 43, 'code' => 'TD', 'name' => 'CHAD'],
            ['id' => 44, 'code' => 'CL', 'name' => 'CHILE'],
            ['id' => 45, 'code' => 'CN', 'name' => 'CHINA'],
            ['id' => 46, 'code' => 'CX', 'name' => 'CHRISTMAS ISLAND'],
            ['id' => 47, 'code' => 'CC', 'name' => 'COCOS (KEELING) ISLANDS'],
            ['id' => 48, 'code' => 'CO', 'name' => 'COLOMBIA'],
            ['id' => 49, 'code' => 'KM', 'name' => 'COMOROS'],
            ['id' => 50, 'code' => 'CG', 'name' => 'CONGO'],
            ['id' => 51, 'code' => 'CD', 'name' => 'DEMOCRATIC REPUBLIC OF THE CONGO'],
            ['id' => 52, 'code' => 'CK', 'name' => 'COOK ISLANDS'],
            ['id' => 53, 'code' => 'CR', 'name' => 'COSTA RICA'],
            ['id' => 54, 'code' => 'CI', 'name' => "COTE D'IVOIRE"],
            ['id' => 55, 'code' => 'HR', 'name' => 'CROATIA'],
            ['id' => 56, 'code' => 'CU', 'name' => 'CUBA'],
            ['id' => 57, 'code' => 'CY', 'name' => 'CYPRUS'],
            ['id' => 58, 'code' => 'CZ', 'name' => 'CZECH REPUBLIC'],
            ['id' => 59, 'code' => 'DK', 'name' => 'DENMARK'],
            ['id' => 60, 'code' => 'DJ', 'name' => 'DJIBOUTI'],
            ['id' => 61, 'code' => 'DM', 'name' => 'DOMINICA'],
            ['id' => 62, 'code' => 'DO', 'name' => 'DOMINICAN REPUBLIC'],
            ['id' => 63, 'code' => 'EC', 'name' => 'ECUADOR'],
            ['id' => 64, 'code' => 'EG', 'name' => 'EGYPT'],
            ['id' => 65, 'code' => 'SV', 'name' => 'EL SALVADOR'],
            ['id' => 66, 'code' => 'GQ', 'name' => 'EQUATORIAL GUINEA'],
            ['id' => 67, 'code' => 'ER', 'name' => 'ERITREA'],
            ['id' => 68, 'code' => 'EE', 'name' => 'ESTONIA'],
            ['id' => 69, 'code' => 'ET', 'name' => 'ETHIOPIA'],
            ['id' => 70, 'code' => 'FK', 'name' => "FALKLAND ISLANDS (MALVINAS)"],
            ['id' => 71, 'code' => 'FO', 'name' => 'FAROE ISLANDS'],
            ['id' => 72, 'code' => 'FJ', 'name' => 'FIJI'],
            ['id' => 73, 'code' => 'FI', 'name' => 'FINLAND'],
            ['id' => 74, 'code' => 'FR', 'name' => 'FRANCE'],
            ['id' => 75, 'code' => 'GF', 'name' => 'FRENCH GUIANA'],
            ['id' => 76, 'code' => 'PF', 'name' => 'FRENCH POLYNESIA'],
            ['id' => 77, 'code' => 'TF', 'name' => 'FRENCH SOUTHERN TERRITORIES'],
            ['id' => 78, 'code' => 'GA', 'name' => 'GABON'],
            ['id' => 79, 'code' => 'GM', 'name' => 'GAMBIA'],
            ['id' => 80, 'code' => 'GE', 'name' => 'GEORGIA'],
            ['id' => 81, 'code' => 'DE', 'name' => 'GERMANY'],
            ['id' => 82, 'code' => 'GH', 'name' => 'GHANA'],
            ['id' => 83, 'code' => 'GI', 'name' => 'GIBRALTAR'],
            ['id' => 84, 'code' => 'GR', 'name' => 'GREECE'],
            ['id' => 85, 'code' => 'GL', 'name' => 'GREENLAND'],
            ['id' => 86, 'code' => 'GD', 'name' => 'GRENADA'],
            ['id' => 87, 'code' => 'GP', 'name' => 'GUADELOUPE'],
            ['id' => 88, 'code' => 'GU', 'name' => 'GUAM'],
            ['id' => 89, 'code' => 'GT', 'name' => 'GUATEMALA'],
            ['id' => 90, 'code' => 'GG', 'name' => 'GUERNSEY'],
            ['id' => 91, 'code' => 'GN', 'name' => 'GUINEA'],
            ['id' => 92, 'code' => 'GW', 'name' => 'GUINEA-BISSAU'],
            ['id' => 93, 'code' => 'GY', 'name' => 'GUYANA'],
            ['id' => 94, 'code' => 'HT', 'name' => 'HAITI'],
            ['id' => 95, 'code' => 'HM', 'name' => 'HEARD ISLAND AND MCDONALD ISLANDS'],
            ['id' => 96, 'code' => 'HN', 'name' => 'HONDURAS'],
            ['id' => 97, 'code' => 'HK', 'name' => 'HONG KONG'],
            ['id' => 98, 'code' => 'HU', 'name' => 'HUNGARY'],
            ['id' => 99, 'code' => 'IS', 'name' => 'ICELAND'],
            ['id' => 100, 'code' => 'IN', 'name' => 'INDIA'],
            ['id' => 101, 'code' => 'ID', 'name' => 'INDONESIA'],
            ['id' => 102, 'code' => 'IR', 'name' => 'IRAN'],
            ['id' => 103, 'code' => 'IQ', 'name' => 'IRAQ'],
            ['id' => 104, 'code' => 'IE', 'name' => 'IRELAND'],
            ['id' => 105, 'code' => 'IM', 'name' => 'ISLE OF MAN'],
            ['id' => 106, 'code' => 'IL', 'name' => 'ISRAEL'],
            ['id' => 107, 'code' => 'IT', 'name' => 'ITALY'],
            ['id' => 108, 'code' => 'JM', 'name' => 'JAMAICA'],
            ['id' => 109, 'code' => 'JP', 'name' => 'JAPAN'],
            ['id' => 110, 'code' => 'JE', 'name' => 'JERSEY'],
            ['id' => 111, 'code' => 'JO', 'name' => 'JORDAN'],
            ['id' => 112, 'code' => 'KZ', 'name' => 'KAZAKHSTAN'],
            ['id' => 113, 'code' => 'KE', 'name' => 'KENYA'],
            ['id' => 114, 'code' => 'KI', 'name' => 'KIRIBATI'],
            ['id' => 115, 'code' => 'KP', 'name' => 'NORTH KOREA'],
            ['id' => 116, 'code' => 'KR', 'name' => 'SOUTH KOREA'],
            ['id' => 117, 'code' => 'KW', 'name' => 'KUWAIT'],
            ['id' => 118, 'code' => 'KG', 'name' => 'KYRGYZSTAN'],
            ['id' => 119, 'code' => 'LA', 'name' => 'LAOS'],
            ['id' => 120, 'code' => 'LV', 'name' => 'LATVIA'],
            ['id' => 121, 'code' => 'LB', 'name' => 'LEBANON'],
            ['id' => 122, 'code' => 'LS', 'name' => 'LESOTHO'],
            ['id' => 123, 'code' => 'LR', 'name' => 'LIBERIA'],
            ['id' => 124, 'code' => 'LY', 'name' => 'LIBYA'],
            ['id' => 125, 'code' => 'LI', 'name' => 'LIECHTENSTEIN'],
            ['id' => 126, 'code' => 'LT', 'name' => 'LITHUANIA'],
            ['id' => 127, 'code' => 'LU', 'name' => 'LUXEMBOURG'],
            ['id' => 128, 'code' => 'MO', 'name' => 'MACAO'],
            ['id' => 129, 'code' => 'MK', 'name' => 'MACEDONIA (FYROM)'],
            ['id' => 130, 'code' => 'MG', 'name' => 'MADAGASCAR'],
            ['id' => 131, 'code' => 'MW', 'name' => 'MALAWI'],
            ['id' => 132, 'code' => 'MY', 'name' => 'MALAYSIA'],
            ['id' => 133, 'code' => 'MV', 'name' => 'MALDIVES'],
            ['id' => 134, 'code' => 'ML', 'name' => 'MALI'],
            ['id' => 135, 'code' => 'MT', 'name' => 'MALTA'],
            ['id' => 136, 'code' => 'MH', 'name' => 'MARSHALL ISLANDS'],
            ['id' => 137, 'code' => 'MQ', 'name' => 'MARTINIQUE'],
            ['id' => 138, 'code' => 'MR', 'name' => 'MAURITANIA'],
            ['id' => 139, 'code' => 'MU', 'name' => 'MAURITIUS'],
            ['id' => 140, 'code' => 'YT', 'name' => 'MAYOTTE'],
            ['id' => 141, 'code' => 'MX', 'name' => 'MEXICO'],
            ['id' => 142, 'code' => 'FM', 'name' => 'FEDERATED STATES OF MICRONESIA'],
            ['id' => 143, 'code' => 'MD', 'name' => 'MOLDOVA'],
            ['id' => 144, 'code' => 'MC', 'name' => 'MONACO'],
            ['id' => 145, 'code' => 'MN', 'name' => 'MONGOLIA'],
            ['id' => 146, 'code' => 'ME', 'name' => 'MONTENEGRO'],
            ['id' => 147, 'code' => 'MS', 'name' => 'MONTSERRAT'],
            ['id' => 148, 'code' => 'MA', 'name' => 'MOROCCO'],
            ['id' => 149, 'code' => 'MZ', 'name' => 'MOZAMBIQUE'],
            ['id' => 150, 'code' => 'MM', 'name' => 'MYANMAR'],
            ['id' => 151, 'code' => 'NA', 'name' => 'NAMIBIA'],
            ['id' => 152, 'code' => 'NR', 'name' => 'NAURU'],
            ['id' => 153, 'code' => 'NP', 'name' => 'NEPAL'],
            ['id' => 154, 'code' => 'NL', 'name' => 'NETHERLANDS'],
            ['id' => 155, 'code' => 'AN', 'name' => 'NETHERLANDS ANTILLES'],
            ['id' => 156, 'code' => 'NC', 'name' => 'NEW CALEDONIA'],
            ['id' => 157, 'code' => 'NZ', 'name' => 'NEW ZEALAND'],
            ['id' => 158, 'code' => 'NI', 'name' => 'NICARAGUA'],
            ['id' => 159, 'code' => 'NE', 'name' => 'NIGER'],
            ['id' => 160, 'code' => 'NG', 'name' => 'NIGERIA'],
            ['id' => 161, 'code' => 'NU', 'name' => 'NIUE'],
            ['id' => 162, 'code' => 'NF', 'name' => 'NORFOLK ISLAND'],
            ['id' => 163, 'code' => 'MP', 'name' => 'NORTHERN MARIANA ISLANDS'],
            ['id' => 164, 'code' => 'NO', 'name' => 'NORWAY'],
            ['id' => 165, 'code' => 'OM', 'name' => 'OMAN'],
            ['id' => 166, 'code' => 'PK', 'name' => 'PAKISTAN'],
            ['id' => 167, 'code' => 'PW', 'name' => 'PALAU'],
            ['id' => 168, 'code' => 'PS', 'name' => 'PALESTINIAN TERRITORY, OCCUPIED'],
            ['id' => 169, 'code' => 'PA', 'name' => 'PANAMA'],
            ['id' => 170, 'code' => 'PG', 'name' => 'PAPUA NEW GUINEA'],
            ['id' => 171, 'code' => 'PY', 'name' => 'PARAGUAY'],
            ['id' => 172, 'code' => 'PE', 'name' => 'PERU'],
            ['id' => 173, 'code' => 'PH', 'name' => 'PHILIPPINES'],
            ['id' => 174, 'code' => 'PN', 'name' => 'PITCAIRN'],
            ['id' => 175, 'code' => 'PL', 'name' => 'POLAND'],
            ['id' => 176, 'code' => 'PT', 'name' => 'PORTUGAL'],
            ['id' => 177, 'code' => 'PR', 'name' => 'PUERTO RICO'],
            ['id' => 178, 'code' => 'QA', 'name' => 'QATAR'],
            ['id' => 179, 'code' => 'RE', 'name' => 'RÉUNION'],
            ['id' => 180, 'code' => 'RO', 'name' => 'ROMANIA'],
            ['id' => 181, 'code' => 'RU', 'name' => 'RUSSIA'],
            ['id' => 182, 'code' => 'RW', 'name' => 'RWANDA'],
            ['id' => 183, 'code' => 'BL', 'name' => 'SAINT BARTHÉLEMY'],
            ['id' => 184, 'code' => 'SH', 'name' => 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA'],
            ['id' => 185, 'code' => 'KN', 'name' => 'TTS AND NEVIS'],
            ['id' => 186, 'code' => 'LC', 'name' => 'SAINT LUCIA'],
            ['id' => 187, 'code' => 'MF', 'name' => 'SAINT MARTIN'],
            ['id' => 188, 'code' => 'PM', 'name' => 'SAINT PIERRE AND MIQUELON'],
            ['id' => 189, 'code' => 'VC', 'name' => 'SAINT VINCENT AND THE GRENADINES'],
            ['id' => 190, 'code' => 'WS', 'name' => 'SAMOA'],
            ['id' => 191, 'code' => 'SM', 'name' => 'SAN MARINO'],
            ['id' => 192, 'code' => 'ST', 'name' => 'SÃO TOMÉ AND PRINCIPE'],
            ['id' => 193, 'code' => 'SA', 'name' => 'SAUDI ARABIA'],
            ['id' => 194, 'code' => 'SN', 'name' => 'SENEGAL'],
            ['id' => 195, 'code' => 'RS', 'name' => 'SERBIA'],
            ['id' => 196, 'code' => 'SC', 'name' => 'SEYCHELLES'],
            ['id' => 197, 'code' => 'SL', 'name' => 'SIERRA LEONE'],
            ['id' => 198, 'code' => 'SG', 'name' => 'SINGAPORE'],
            ['id' => 199, 'code' => 'SK', 'name' => 'SLOVAKIA'],
            ['id' => 200, 'code' => 'SI', 'name' => 'SLOVENIA'],
            ['id' => 201, 'code' => 'SB', 'name' => 'SOLOMON ISLANDS'],
            ['id' => 202, 'code' => 'SO', 'name' => 'SOMALIA'],
            ['id' => 203, 'code' => 'ZA', 'name' => 'SOUTH AFRICA'],
            ['id' => 204, 'code' => 'GS', 'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'],
            ['id' => 205, 'code' => 'ES', 'name' => 'SPAIN'],
            ['id' => 206, 'code' => 'LK', 'name' => 'SRI LANKA'],
            ['id' => 207, 'code' => 'SD', 'name' => 'SUDAN'],
            ['id' => 208, 'code' => 'SR', 'name' => 'SURINAME'],
            ['id' => 209, 'code' => 'SJ', 'name' => 'SVALBARD AND JAN MAYEN'],
            ['id' => 210, 'code' => 'SZ', 'name' => 'SWAZILAND'],
            ['id' => 211, 'code' => 'SE', 'name' => 'SWEDEN'],
            ['id' => 212, 'code' => 'CH', 'name' => 'SWITZERLAND'],
            ['id' => 213, 'code' => 'SY', 'name' => 'SYRIA'],
            ['id' => 214, 'code' => 'TW', 'name' => 'TAIWAN'],
            ['id' => 215, 'code' => 'TJ', 'name' => 'TAJIKISTAN'],
            ['id' => 216, 'code' => 'TZ', 'name' => 'TANZANIA'],
            ['id' => 217, 'code' => 'TH', 'name' => 'THAILAND'],
            ['id' => 218, 'code' => 'TL', 'name' => 'TIMOR-LESTE'],
            ['id' => 219, 'code' => 'TG', 'name' => 'TOGO'],
            ['id' => 220, 'code' => 'TK', 'name' => 'TOKELAU'],
            ['id' => 221, 'code' => 'TO', 'name' => 'TONGA'],
            ['id' => 222, 'code' => 'TT', 'name' => 'TRINIDAD AND TOBAGO'],
            ['id' => 223, 'code' => 'TN', 'name' => 'TUNISIA'],
            ['id' => 224, 'code' => 'TR', 'name' => 'TURKEY'],
            ['id' => 225, 'code' => 'TM', 'name' => 'TURKMENISTAN'],
            ['id' => 226, 'code' => 'TC', 'name' => 'TURKS AND CAICOS ISLANDS'],
            ['id' => 227, 'code' => 'TV', 'name' => 'TUVALU'],
            ['id' => 228, 'code' => 'UG', 'name' => 'UGANDA'],
            ['id' => 229, 'code' => 'UA', 'name' => 'UKRAINE'],
            ['id' => 230, 'code' => 'AE', 'name' => 'UNITED ARAB EMIRATES'],
            ['id' => 231, 'code' => 'GB', 'name' => 'UK'],
            ['id' => 232, 'code' => 'US', 'name' => 'USA'],
            ['id' => 233, 'code' => 'UM', 'name' => 'UNITED STATES MINOR OUTLYING ISLANDS'],
            ['id' => 234, 'code' => 'UY', 'name' => 'URUGUAY'],
            ['id' => 235, 'code' => 'UZ', 'name' => 'UZBEKISTAN'],
            ['id' => 236, 'code' => 'VU', 'name' => 'VANUATU'],
            ['id' => 237, 'code' => 'VE', 'name' => 'VENEZUELA'],
            ['id' => 238, 'code' => 'VN', 'name' => 'VIETNAM'],
            ['id' => 239, 'code' => 'VG', 'name' => 'BRITISH VIRGIN ISLANDS'],
            ['id' => 240, 'code' => 'VI', 'name' => 'US VIRGIN ISLANDS'],
            ['id' => 241, 'code' => 'WF', 'name' => 'WALLIS AND FUTUNA'],
            ['id' => 242, 'code' => 'EH', 'name' => 'WESTERN SAHARA'],
            ['id' => 243, 'code' => 'YE', 'name' => 'YEMEN'],
            ['id' => 244, 'code' => 'ZM', 'name' => 'ZAMBIA'],
            ['id' => 245, 'code' => 'ZW', 'name' => 'ZIMBABWE'],
        ];

        foreach ($items as $item) {
            Country::create( $item);
        }
    }
}