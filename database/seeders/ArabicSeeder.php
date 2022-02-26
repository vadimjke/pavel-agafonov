<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArabicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        // 1st Quarter
        DB::table('arabic')->insert([

            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1402439',
                'mentions' => '3780000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '329535',
                'mentions' => '3270000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1380136',
                'mentions' => '7240000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '125848',
                'mentions' => '2970000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '84152',
                'mentions' => '4260000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '146476',
                'mentions' => '4290000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '259494',
                'mentions' => '1600000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '211308',
                'mentions' => '1460000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '67029',
                'mentions' => '5830000',
                'name' => 'FR',
                'display_name' => 'Франция',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '66746',
                'mentions' => '4080000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '85935',
                'mentions' => '282000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '60447',
                'mentions' => '4930000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '121656',
                'mentions' => '1470000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25381',
                'mentions' => '1680000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '37206',
                'mentions' => '2610000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '47380',
                'mentions' => '3270000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '33344',
                'mentions' => '10100000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '24855',
                'mentions' => '3250000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '23324',
                'mentions' => '2480000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '38371',
                'mentions' => '849000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '102184',
                'mentions' => '20400000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '67515',
                'mentions' => '391000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '82239',
                'mentions' => '7300000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '219964',
                'mentions' => '1680000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '202534',
                'mentions' => '1100000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '97076',
                'mentions' => '478000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1740000',
                'mentions' => '2670000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '44695',
                'mentions' => '1120000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '112106',
                'mentions' => '135000',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '31143',
                'mentions' => '1450000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '167475',
                'mentions' => '285000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '55341',
                'mentions' => '3730000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '48128',
                'mentions' => '869000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9619',
                'mentions' => '2520000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '0.26',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8668',
                'mentions' => '1590000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '0.18',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '19191',
                'mentions' => '751000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11429',
                'mentions' => '1470000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10175',
                'mentions' => '2180000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5996',
                'mentions' => '942000',
                'name' => 'SG',
                'display_name' => 'Сингапур',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '43952',
                'mentions' => '1710000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18323',
                'mentions' => '347000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '41490',
                'mentions' => '5350000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8892',
                'mentions' => '1110000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '0.12',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4859',
                'mentions' => '458000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18676',
                'mentions' => '327000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7350',
                'mentions' => '142000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10700',
                'mentions' => '666000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '40012',
                'mentions' => '9540000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '31382',
                'mentions' => '855000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8460',
                'mentions' => '7720000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '0.91',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5313',
                'mentions' => '2210000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '0.42',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5313',
                'mentions' => '2210000',
                'name' => 'SJ',
                'display_name' => 'Норвегия',
                'value' => '0.42',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10221',
                'mentions' => '2100000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5794',
                'mentions' => '670000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5794',
                'mentions' => '670000',
                'name' => 'GL',
                'display_name' => 'Дания',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9774',
                'mentions' => '278000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10662',
                'mentions' => '2780000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '0.26',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '21920',
                'mentions' => '484000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '106468',
                'mentions' => '2690000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '54400',
                'mentions' => '767000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '35496',
                'mentions' => '7010000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5516',
                'mentions' => '714000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '30023',
                'mentions' => '459000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2606',
                'mentions' => '3990000',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '1.53',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '51372',
                'mentions' => '682000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4840',
                'mentions' => '474000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '22638',
                'mentions' => '344000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4229',
                'mentions' => '4290000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '1.01',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10385',
                'mentions' => '83400',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16499',
                'mentions' => '202000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9528',
                'mentions' => '633000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '43850',
                'mentions' => '4350000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5409',
                'mentions' => '250000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '27858',
                'mentions' => '913000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '59730',
                'mentions' => '575000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7167',
                'mentions' => '563000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17232',
                'mentions' => '139000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9648',
                'mentions' => '800000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '28890',
                'mentions' => '837000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '27480',
                'mentions' => '694000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4725',
                'mentions' => '1460000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '0.31',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7078',
                'mentions' => '583000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11478',
                'mentions' => '6110000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '0.53',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '29718',
                'mentions' => '413000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3801',
                'mentions' => '408000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3861',
                'mentions' => '488000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3194',
                'mentions' => '69800',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2799',
                'mentions' => '241000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '42331',
                'mentions' => '303000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9116',
                'mentions' => '6450000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.71',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5094',
                'mentions' => '217000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '89560',
                'mentions' => '291000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '26374',
                'mentions' => '690000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11670',
                'mentions' => '194000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7099',
                'mentions' => '294000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5410',
                'mentions' => '296000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2067',
                'mentions' => '162000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34941',
                'mentions' => '5760000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3396',
                'mentions' => '338000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7708',
                'mentions' => '7070000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.92',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1584',
                'mentions' => '3030000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '1.91',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16409',
                'mentions' => '176000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '610',
                'mentions' => '211000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '0.35',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17255',
                'mentions' => '620000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1927',
                'mentions' => '391000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '30217',
                'mentions' => '5600000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7276',
                'mentions' => '131000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16356',
                'mentions' => '1460000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4922',
                'mentions' => '399000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6486',
                'mentions' => '213000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9002',
                'mentions' => '236000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3947',
                'mentions' => '173000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1292',
                'mentions' => '217000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20900',
                'mentions' => '497000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16507',
                'mentions' => '10300000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.62',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25684',
                'mentions' => '398000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12018',
                'mentions' => '13000000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '1.08',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3063',
                'mentions' => '361000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25998',
                'mentions' => '227000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3103',
                'mentions' => '192000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2907',
                'mentions' => '358000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6688',
                'mentions' => '3740000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.56',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '649',
                'mentions' => '138000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11855',
                'mentions' => '714000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6085',
                'mentions' => '156000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2263',
                'mentions' => '327000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1022',
                'mentions' => '1410000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '1.38',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10788',
                'mentions' => '248000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1215',
                'mentions' => '107000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8604',
                'mentions' => '194000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '293000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '14097',
                'mentions' => '195000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2618',
                'mentions' => '108000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8947',
                'mentions' => '96900',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '584000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5718',
                'mentions' => '140000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '21234',
                'mentions' => '926000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20217',
                'mentions' => '198000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '437',
                'mentions' => '124000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11916',
                'mentions' => '432000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2672',
                'mentions' => '364000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4615',
                'mentions' => '3510000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.76',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15253',
                'mentions' => '1050000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1364',
                'mentions' => '105000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '797',
                'mentions' => '241000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3840',
                'mentions' => '2240000',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.58',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2554',
                'mentions' => '250000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '487',
                'mentions' => '373000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '0.77',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1873',
                'mentions' => '77900',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '353',
                'mentions' => '292000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '0.83',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5518',
                'mentions' => '252000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8176',
                'mentions' => '4010000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '0.49',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '786',
                'mentions' => '88600',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15890',
                'mentions' => '1290000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7977',
                'mentions' => '411000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '393',
                'mentions' => '45500',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '614',
                'mentions' => '1440000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '2.34',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11190',
                'mentions' => '2210000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '896',
                'mentions' => '184000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1160',
                'mentions' => '8330',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '586',
                'mentions' => '133000',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11229',
                'mentions' => '253000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '10700',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '540',
                'mentions' => '129000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4810',
                'mentions' => '232000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3214',
                'mentions' => '292000',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '884',
                'mentions' => '436000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.49',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2093',
                'mentions' => '146000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1962',
                'mentions' => '89800',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5745',
                'mentions' => '1180000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1318',
                'mentions' => '179000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1833',
                'mentions' => '136000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '77',
                'mentions' => '611000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '293',
                'mentions' => '80800',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '556',
                'mentions' => '1800000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '3.24',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '821',
                'mentions' => '1230000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '1.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '397',
                'mentions' => '365000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '0.92',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '95',
                'mentions' => '271000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '2.86',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '183',
                'mentions' => '69000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '0.38',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34',
                'mentions' => '125000',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '3.68',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '98',
                'mentions' => '59400',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '0.61',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '113',
                'mentions' => '78500',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '0.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '686',
                'mentions' => '1220000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '1.78',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '111',
                'mentions' => '38100',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '0.34',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '53',
                'mentions' => '52500',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '0.99',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '198',
                'mentions' => '3370000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '17.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '219',
                'mentions' => '30500',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '74',
                'mentions' => '177000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '2.39',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '307',
                'mentions' => '53400',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '106',
                'mentions' => '112000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '1.06',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '115',
                'mentions' => '62500',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '0.54',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '119',
                'mentions' => '44800',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '0.38',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18',
                'mentions' => '28200000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '1566.67',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '59',
                'mentions' => '103000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '1.75',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11',
                'mentions' => '60500',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '5.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12',
                'mentions' => '62700',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '5.32',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11330',
                'mentions' => '1400000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17500',
                'mentions' => '4460000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '616',
                'mentions' => '1210000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '1.96',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '294',
                'mentions' => '41300',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8279',
                'mentions' => '146000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25780',
                'mentions' => '1400000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '5160',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
        ]);









































        // 2nd Quarter
        DB::table('arabic')->insert([

            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1402439',
                'mentions' => '2900000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '329535',
                'mentions' => '6200000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1380136',
                'mentions' => '6050000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '125848',
                'mentions' => '1940000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '84152',
                'mentions' => '4090000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '146476',
                'mentions' => '5590000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '259494',
                'mentions' => '1570000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '211308',
                'mentions' => '1410000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67029',
                'mentions' => '3450000',
                'name' => 'FR',
                'display_name' => 'Франция',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '66746',
                'mentions' => '3420000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '85935',
                'mentions' => '207000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '60447',
                'mentions' => '3140000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2880000',
                'mentions' => '904000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25381',
                'mentions' => '1310000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '37206',
                'mentions' => '1880000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '47380',
                'mentions' => '2900000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '33344',
                'mentions' => '11000000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '0.33',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '24855',
                'mentions' => '2190000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '23324',
                'mentions' => '758000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '38371',
                'mentions' => '539000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '102184',
                'mentions' => '13500000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67515',
                'mentions' => '414000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '82239',
                'mentions' => '6770000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219964',
                'mentions' => '1680000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '202534',
                'mentions' => '1300000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '97076',
                'mentions' => '429000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '857000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '44695',
                'mentions' => '829000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '112106',
                'mentions' => '5370',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31143',
                'mentions' => '1390000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '167475',
                'mentions' => '287000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '55341',
                'mentions' => '2520000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '48128',
                'mentions' => '707000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9619',
                'mentions' => '2280000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8668',
                'mentions' => '1360000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '19191',
                'mentions' => '885000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11429',
                'mentions' => '962000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10175',
                'mentions' => '1830000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '0.18',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5996',
                'mentions' => '532000',
                'name' => 'SG',
                'display_name' => 'Сингапур',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43952',
                'mentions' => '4970000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '0.11',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18323',
                'mentions' => '628000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '41490',
                'mentions' => '5320000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8892',
                'mentions' => '859000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4859',
                'mentions' => '487000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '0.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18676',
                'mentions' => '490000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7350',
                'mentions' => '140000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '0.02',
                'pentil' => '0.04'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10700',
                'mentions' => '445000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '40012',
                'mentions' => '10900000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '0.27',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31382',
                'mentions' => '818000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8460',
                'mentions' => '5310000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '0.63',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '1010000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '1010000',
                'name' => 'SJ',
                'display_name' => 'Норвегия',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10221',
                'mentions' => '943000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '601000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '0.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '601000',
                'name' => 'GL',
                'display_name' => 'Дания',
                'value' => '0.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9774',
                'mentions' => '209000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1820000',
                'mentions' => '2900000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21920',
                'mentions' => '494000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106468',
                'mentions' => '1640000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '54400',
                'mentions' => '938000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '35496',
                'mentions' => '6490000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.18',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5516',
                'mentions' => '510000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30023',
                'mentions' => '242000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2606',
                'mentions' => '3510000',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '1.35',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '51372',
                'mentions' => '567000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4840',
                'mentions' => '632000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '22638',
                'mentions' => '174000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4229',
                'mentions' => '5530000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '1.31',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10385',
                'mentions' => '112000',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16499',
                'mentions' => '231000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9528',
                'mentions' => '375000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43850',
                'mentions' => '4270000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5409',
                'mentions' => '259000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27858',
                'mentions' => '444000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59730',
                'mentions' => '531000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7167',
                'mentions' => '496000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '125000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9648',
                'mentions' => '748000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '28890',
                'mentions' => '618000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27480',
                'mentions' => '721000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4725',
                'mentions' => '1480000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '0.31',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7078',
                'mentions' => '681000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11478',
                'mentions' => '5630000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '0.49',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '29718',
                'mentions' => '237000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3801',
                'mentions' => '254000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3861',
                'mentions' => '497000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3194',
                'mentions' => '145000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2799',
                'mentions' => '227000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '42331',
                'mentions' => '382000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9116',
                'mentions' => '4900000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.54',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5094',
                'mentions' => '134000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '89560',
                'mentions' => '255000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '26374',
                'mentions' => '1390000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11670',
                'mentions' => '199000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7099',
                'mentions' => '178000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5410',
                'mentions' => '193000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2067',
                'mentions' => '172000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34941',
                'mentions' => '7810000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3396',
                'mentions' => '274000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7708',
                'mentions' => '7490000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.97',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1584',
                'mentions' => '3280000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '2.07',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16409',
                'mentions' => '207000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '610',
                'mentions' => '176000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '0.29',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17255',
                'mentions' => '213000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1927',
                'mentions' => '163000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30217',
                'mentions' => '5750000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7276',
                'mentions' => '153000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16356',
                'mentions' => '1400000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4922',
                'mentions' => '507000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '0.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6486',
                'mentions' => '244000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9002',
                'mentions' => '249000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3947',
                'mentions' => '182000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1292',
                'mentions' => '369000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '0.29',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20900',
                'mentions' => '731000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16507',
                'mentions' => '12100000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.73',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25684',
                'mentions' => '215000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12018',
                'mentions' => '12700000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '1.06',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3063',
                'mentions' => '336000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.11',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25998',
                'mentions' => '140000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3103',
                'mentions' => '160000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2907',
                'mentions' => '349000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.12',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6688',
                'mentions' => '3760000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.56',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '649',
                'mentions' => '69500',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '0.11',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11855',
                'mentions' => '654000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6085',
                'mentions' => '164000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2263',
                'mentions' => '165000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1022',
                'mentions' => '784000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '0.77',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10788',
                'mentions' => '236000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1215',
                'mentions' => '75200',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8604',
                'mentions' => '220000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '194000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '14097',
                'mentions' => '203000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2618',
                'mentions' => '102000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8947',
                'mentions' => '88400',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '362000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5718',
                'mentions' => '140000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21234',
                'mentions' => '926000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20217',
                'mentions' => '198000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '437',
                'mentions' => '124000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11916',
                'mentions' => '432000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2672',
                'mentions' => '364000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4615',
                'mentions' => '3510000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.76',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15253',
                'mentions' => '1050000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1364',
                'mentions' => '105000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '797',
                'mentions' => '241000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3840',
                'mentions' => '2240000',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.58',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2554',
                'mentions' => '250000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '487',
                'mentions' => '373000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '0.77',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1873',
                'mentions' => '77900',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '353',
                'mentions' => '292000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '0.83',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5518',
                'mentions' => '252000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8176',
                'mentions' => '4010000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '0.49',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '786',
                'mentions' => '88600',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15890',
                'mentions' => '1290000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7977',
                'mentions' => '411000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '393',
                'mentions' => '45500',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '614',
                'mentions' => '1440000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '2.34',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11190',
                'mentions' => '2210000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '896',
                'mentions' => '184000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1160',
                'mentions' => '8330',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '586',
                'mentions' => '133000',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11229',
                'mentions' => '253000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '10700',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '540',
                'mentions' => '129000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4810',
                'mentions' => '232000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3214',
                'mentions' => '292000',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '884',
                'mentions' => '436000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.49',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2093',
                'mentions' => '146000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1962',
                'mentions' => '89800',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5745',
                'mentions' => '1180000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1318',
                'mentions' => '179000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1833',
                'mentions' => '136000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '77',
                'mentions' => '611000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '293',
                'mentions' => '80800',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '556',
                'mentions' => '1800000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '3.24',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '821',
                'mentions' => '1230000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '1.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '397',
                'mentions' => '365000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '0.92',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '95',
                'mentions' => '271000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '2.86',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '183',
                'mentions' => '69000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '0.38',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34',
                'mentions' => '125000',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '3.68',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '98',
                'mentions' => '59400',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '0.61',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '113',
                'mentions' => '78500',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '0.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '686',
                'mentions' => '1220000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '1.78',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '111',
                'mentions' => '38100',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '0.34',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '53',
                'mentions' => '52500',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '0.99',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '198',
                'mentions' => '3370000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '17.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219',
                'mentions' => '30500',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '74',
                'mentions' => '177000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '2.39',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '307',
                'mentions' => '53400',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106',
                'mentions' => '112000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '1.06',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '115',
                'mentions' => '62500',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '0.54',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '119',
                'mentions' => '44800',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '0.38',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18',
                'mentions' => '28200000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '1566.67',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59',
                'mentions' => '103000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '1.75',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11',
                'mentions' => '60500',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '5.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12',
                'mentions' => '62700',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '5.32',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11330',
                'mentions' => '1400000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17500',
                'mentions' => '4460000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '616',
                'mentions' => '1210000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '1.96',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '294',
                'mentions' => '41300',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8279',
                'mentions' => '146000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25780',
                'mentions' => '1400000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '5160',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
        ]);
    }
}
