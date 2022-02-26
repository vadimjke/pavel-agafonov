<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SpanishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {











        // 1st Quarter
        DB::table('chinese')->insert([

            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1402439',
                'mentions' => '24400000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '0.4',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '329535',
                'mentions' => '15300000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1380136',
                'mentions' => '6950000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '125848',
                'mentions' => '24100000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '84152',
                'mentions' => '8240000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '146476',
                'mentions' => '5710000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '259494',
                'mentions' => '634000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '211308',
                'mentions' => '2510000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '67029',
                'mentions' => '7970000',
                'name' => 'FR',
                'display_name' => 'Франция',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '66746',
                'mentions' => '8710000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '85935',
                'mentions' => '2190000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '60447',
                'mentions' => '2570000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '121656',
                'mentions' => '1920000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25381',
                'mentions' => '6390000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '37206',
                'mentions' => '5390000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '47380',
                'mentions' => '3050000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '33344',
                'mentions' => '317000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '24855',
                'mentions' => '2700000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '23324',
                'mentions' => '12200000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '0.52',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '38371',
                'mentions' => '1980000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '102184',
                'mentions' => '2160000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '67515',
                'mentions' => '5160000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '82239',
                'mentions' => '2600000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '219964',
                'mentions' => '2210000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '202534',
                'mentions' => '558000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '97076',
                'mentions' => '2590000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17232',
                'mentions' => '2670000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '0.15',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '44695',
                'mentions' => '1830000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '112106',
                'mentions' => '4050000',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '31143',
                'mentions' => '4850000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '167475',
                'mentions' => '360000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '55341',
                'mentions' => '1800000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '48128',
                'mentions' => '1800000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9619',
                'mentions' => '765000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8668',
                'mentions' => '2640000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '0.3',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '19191',
                'mentions' => '389000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11429',
                'mentions' => '1810000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10175',
                'mentions' => '2110000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5996',
                'mentions' => '5440000',
                'name' => 'SG',
                'display_name' => 'Сингапур',
                'value' => '0.91',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '43952',
                'mentions' => '1690000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18323',
                'mentions' => '533000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '41490',
                'mentions' => '310000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8892',
                'mentions' => '1300000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '0.15',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4859',
                'mentions' => '1380000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18676',
                'mentions' => '749000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7350',
                'mentions' => '12100000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '1.65',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10700',
                'mentions' => '347000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '40012',
                'mentions' => '1440000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '31382',
                'mentions' => '659000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8460',
                'mentions' => '1970000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5313',
                'mentions' => '1230000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5313',
                'mentions' => '1230000',
                'name' => 'SJ',
                'display_name' => 'Норвегия',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10221',
                'mentions' => '1360000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5794',
                'mentions' => '1620000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5794',
                'mentions' => '1620000',
                'name' => 'GL',
                'display_name' => 'Дания',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9774',
                'mentions' => '788000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10662',
                'mentions' => '2300000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '0.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '21920',
                'mentions' => '753000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '106468',
                'mentions' => '489000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '54400',
                'mentions' => '1800000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '35496',
                'mentions' => '479000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5516',
                'mentions' => '1160000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '30023',
                'mentions' => '382000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2606',
                'mentions' => '739000',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '51372',
                'mentions' => '605000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4840',
                'mentions' => '1280000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '0.26',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '22638',
                'mentions' => '260000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4229',
                'mentions' => '642000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '0.15',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10385',
                'mentions' => '914000',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16499',
                'mentions' => '368000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9528',
                'mentions' => '594000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '43850',
                'mentions' => '622000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5409',
                'mentions' => '408000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '27858',
                'mentions' => '557000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '59730',
                'mentions' => '294000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7167',
                'mentions' => '516000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17232',
                'mentions' => '159000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9648',
                'mentions' => '397000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '28890',
                'mentions' => '1210000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '27480',
                'mentions' => '117000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4725',
                'mentions' => '1830000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '0.39',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7078',
                'mentions' => '882000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            // HERE
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11478',
                'mentions' => '318000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '29718',
                'mentions' => '7470000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.25',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3801',
                'mentions' => '7770000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '2.04',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3861',
                'mentions' => '1790000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.46',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3194',
                'mentions' => '6950000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '2.18',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2799',
                'mentions' => '2440000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '0.87',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '42331',
                'mentions' => '514000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9116',
                'mentions' => '2580000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.28',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5094',
                'mentions' => '10100000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '1.98',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '89560',
                'mentions' => '8430000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0.09',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '26374',
                'mentions' => '1200000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.05',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11670',
                'mentions' => '10700000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.92',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7099',
                'mentions' => '6860000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.97',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5410',
                'mentions' => '6990000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '1.29',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2067',
                'mentions' => '1170000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.57',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34941',
                'mentions' => '2910000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3396',
                'mentions' => '7220000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '2.13',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7708',
                'mentions' => '2090000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.27',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1584',
                'mentions' => '2370000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '1.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16409',
                'mentions' => '1010000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.06',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '610',
                'mentions' => '1300000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '2.13',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17255',
                'mentions' => '397000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1927',
                'mentions' => '526000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '0.27',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '30217',
                'mentions' => '725000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7276',
                'mentions' => '377000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.05',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16356',
                'mentions' => '1640000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4922',
                'mentions' => '6530000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '1.33',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6486',
                'mentions' => '13100000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '2.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9002',
                'mentions' => '7370000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.82',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3947',
                'mentions' => '416000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1292',
                'mentions' => '1450000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '1.12',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20900',
                'mentions' => '465000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16507',
                'mentions' => '1470000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.09',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25684',
                'mentions' => '505000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12018',
                'mentions' => '482000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3063',
                'mentions' => '792000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.26',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25998',
                'mentions' => '511000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3103',
                'mentions' => '7390000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '2.38',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2907',
                'mentions' => '2350000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.81',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6688',
                'mentions' => '2080000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.31',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '649',
                'mentions' => '225000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '0.35',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11855',
                'mentions' => '2390000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.2',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6085',
                'mentions' => '6540000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '1.07',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2263',
                'mentions' => '298000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1022',
                'mentions' => '8430000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '8.25',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10788',
                'mentions' => '5170000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.48',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1215',
                'mentions' => '1430000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '1.18',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8604',
                'mentions' => '6920000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '669000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.32',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '14097',
                'mentions' => '1510000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2618',
                'mentions' => '263000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8947',
                'mentions' => '339000',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '311000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.15',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5718',
                'mentions' => '284000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.05',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '21234',
                'mentions' => '2170000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.01',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20217',
                'mentions' => '163000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '437',
                'mentions' => '492000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '1.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11916',
                'mentions' => '481000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2672',
                'mentions' => '1200000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.45',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4615',
                'mentions' => '2420000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.52',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15253',
                'mentions' => '497000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1364',
                'mentions' => '8460000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '6.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '797',
                'mentions' => '860000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '1.08',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3840',
                'mentions' => '923000',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.24',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2554',
                'mentions' => '434000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.17',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '487',
                'mentions' => '994000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '2.04',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1873',
                'mentions' => '317000',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.17',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '353',
                'mentions' => '8390000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '23.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5518',
                'mentions' => '1680000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.3',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8176',
                'mentions' => '39600000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '4.84',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '786',
                'mentions' => '373000',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.47',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15890',
                'mentions' => '583000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7977',
                'mentions' => '1270000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.16',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '393',
                'mentions' => '610000',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '1.55',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '614',
                'mentions' => '3210000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '5.23',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11190',
                'mentions' => '1370000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.12',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '896',
                'mentions' => '5740000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '6.47',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1160',
                'mentions' => '66300',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '0.06',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '586',
                'mentions' => '576000',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.98',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11229',
                'mentions' => '7130000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '0.63',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '119000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.15',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '540',
                'mentions' => '6880000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '12.74',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4810',
                'mentions' => '606000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3214',
                'mentions' => '7060000',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '2.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '884',
                'mentions' => '235000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.27',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2093',
                'mentions' => '6920000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '3.31',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1962',
                'mentions' => '6390000',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '3.26',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5745',
                'mentions' => '275000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.05',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1318',
                'mentions' => '352000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.27',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1833',
                'mentions' => '152000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '77',
                'mentions' => '1580000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '293',
                'mentions' => '732000',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '2.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '556',
                'mentions' => '18100000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '32.55',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '821',
                'mentions' => '28600000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '34.83',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '397',
                'mentions' => '780000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '1.96',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '95',
                'mentions' => '6840000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '72.28',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '183',
                'mentions' => '5400000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '29.51',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34',
                'mentions' => '3140000',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '92.35',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '98',
                'mentions' => '7220000',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '73.67',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '113',
                'mentions' => '4490000',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '39.91',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '686',
                'mentions' => '1390000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '2.03',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '111',
                'mentions' => '310000',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '2.79',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '53',
                'mentions' => '383000',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '7.23',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '198',
                'mentions' => '443000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '2.24',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '219',
                'mentions' => '881000',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '4.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '74',
                'mentions' => '5860000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '79.16',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '307',
                'mentions' => '279000',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '0.91',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '106',
                'mentions' => '305000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '2.89',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '115',
                'mentions' => '6810000',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '59.22',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '119',
                'mentions' => '6870000',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '57.54',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18',
                'mentions' => '487000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '27.06',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '59',
                'mentions' => '663000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '11.24',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11',
                'mentions' => '6810000',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '630.56',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12',
                'mentions' => '6850000',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '581.0',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11330',
                'mentions' => '8120000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.72',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17500',
                'mentions' => '2980000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.17',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '616',
                'mentions' => '405000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '0.66',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '294',
                'mentions' => '246000',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.84',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8279',
                'mentions' => '889000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25780',
                'mentions' => '3390000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '361000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.47',
                'pentil' => '0.6'
            ],
        ]);









































        // 2nd Quarter
        DB::table('spanish')->insert([

            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1402439',
                'mentions' => '14500000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '329535',
                'mentions' => '26900000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1380136',
                'mentions' => '7390000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '125848',
                'mentions' => '8300000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '0.07',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '84152',
                'mentions' => '9670000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '146476',
                'mentions' => '13600000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.09',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '259494',
                'mentions' => '5480000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '211308',
                'mentions' => '16000000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67029',
                'mentions' => '12000000',
                'name' => 'FR',
                'display_name' => 'Франция',
                'value' => '0.18',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '66746',
                'mentions' => '8630000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '85935',
                'mentions' => '5630000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '60447',
                'mentions' => '15300000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '0.25',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '121656',
                'mentions' => '38200000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '0.31',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25381',
                'mentions' => '3300000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '37206',
                'mentions' => '11500000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '0.31',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '47380',
                'mentions' => '32200000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '0.68',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '33344',
                'mentions' => '2100000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '24855',
                'mentions' => '11300000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '0.45',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '23324',
                'mentions' => '1570000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '38371',
                'mentions' => '27100000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '0.71',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '102184',
                'mentions' => '3120000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67515',
                'mentions' => '1530000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '82239',
                'mentions' => '4950000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219964',
                'mentions' => '2070000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '202534',
                'mentions' => '1320000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '97076',
                'mentions' => '2920000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '17300000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '1.0',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '44695',
                'mentions' => '19900000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '0.45',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '112106',
                'mentions' => '2000000',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31143',
                'mentions' => '1250000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '167475',
                'mentions' => '1400000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '55341',
                'mentions' => '2420000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '48128',
                'mentions' => '25500000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.53',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9619',
                'mentions' => '1430000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '0.15',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8668',
                'mentions' => '4440000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '0.51',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '19191',
                'mentions' => '1110000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11429',
                'mentions' => '4610000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '0.4',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10175',
                'mentions' => '3760000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '0.37',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5996',
                'mentions' => '1970000',
                'name' => 'SG',
                'display_name' => 'Сингапур',
                'value' => '0.33',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43952',
                'mentions' => '9070000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '0.21',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18323',
                'mentions' => '484000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '41490',
                'mentions' => '1560000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8892',
                'mentions' => '3230000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '0.36',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4859',
                'mentions' => '3050000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '0.63',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18676',
                'mentions' => '17300000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '0.93',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7350',
                'mentions' => '1620000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '0.22',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10700',
                'mentions' => '2810000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '0.26',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '40012',
                'mentions' => '1880000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31382',
                'mentions' => '24000000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.76',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8460',
                'mentions' => '6090000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '0.72',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '3550000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '0.67',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '3550000',
                'name' => 'SJ',
                'display_name' => 'Норвегия',
                'value' => '0.67',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10221',
                'mentions' => '6890000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '0.67',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '2480000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '0.43',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '2480000',
                'name' => 'GL',
                'display_name' => 'Дания',
                'value' => '0.43',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9774',
                'mentions' => '2400000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '0.25',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10662',
                'mentions' => '8100000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '0.76',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21920',
                'mentions' => '1240000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106468',
                'mentions' => '1420000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '54400',
                'mentions' => '704000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '35496',
                'mentions' => '2100000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5516',
                'mentions' => '2090000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '0.38',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30023',
                'mentions' => '698000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2606',
                'mentions' => '24500',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '51372',
                'mentions' => '852000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4840',
                'mentions' => '1830000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '0.38',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '22638',
                'mentions' => '806000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4229',
                'mentions' => '640000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '0.15',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10385',
                'mentions' => '4390000',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '0.42',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16499',
                'mentions' => '11300000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '0.68',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9528',
                'mentions' => '1070000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43850',
                'mentions' => '1500000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5409',
                'mentions' => '730000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27858',
                'mentions' => '747000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59730',
                'mentions' => '654000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7167',
                'mentions' => '1290000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '0.18',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '7810000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.45',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9648',
                'mentions' => '18000000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '1.87',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '28890',
                'mentions' => '15800000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.55',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27480',
                'mentions' => '939000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4725',
                'mentions' => '892000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '0.19',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7078',
                'mentions' => '1270000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '0.18',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11478',
                'mentions' => '781000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '29718',
                'mentions' => '1020000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3801',
                'mentions' => '7520000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '1.98',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3861',
                'mentions' => '1410000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.37',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3194',
                'mentions' => '4740000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '1.48',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2799',
                'mentions' => '22800000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '8.14',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '42331',
                'mentions' => '605000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9116',
                'mentions' => '2320000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.25',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5094',
                'mentions' => '8950000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '1.76',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '89560',
                'mentions' => '1220000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '26374',
                'mentions' => '935000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11670',
                'mentions' => '9420000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.81',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7099',
                'mentions' => '5310000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.75',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5410',
                'mentions' => '499000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '0.09',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2067',
                'mentions' => '1110000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.54',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34941',
                'mentions' => '2110000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3396',
                'mentions' => '6830000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '2.01',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7708',
                'mentions' => '1830000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.24',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1584',
                'mentions' => '1940000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '1.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16409',
                'mentions' => '820000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '610',
                'mentions' => '1280000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '2.1',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17255',
                'mentions' => '481000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1927',
                'mentions' => '20400000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '10.58',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30217',
                'mentions' => '726000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7276',
                'mentions' => '571000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16356',
                'mentions' => '1270000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4922',
                'mentions' => '5120000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '1.04',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6486',
                'mentions' => '13700000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '2.11',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9002',
                'mentions' => '8230000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.91',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3947',
                'mentions' => '512000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1292',
                'mentions' => '1120000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '0.87',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20900',
                'mentions' => '410000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16507',
                'mentions' => '1330000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25684',
                'mentions' => '642000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12018',
                'mentions' => '561000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3063',
                'mentions' => '968000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.32',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25998',
                'mentions' => '740000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3103',
                'mentions' => '698000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '0.22',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2907',
                'mentions' => '1820000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.63',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6688',
                'mentions' => '1710000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.26',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '649',
                'mentions' => '226000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '0.35',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11855',
                'mentions' => '1760000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.15',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6085',
                'mentions' => '5450000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '0.9',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2263',
                'mentions' => '163000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1022',
                'mentions' => '21500000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '21.03',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10788',
                'mentions' => '4180000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.39',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1215',
                'mentions' => '1890000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '1.56',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8604',
                'mentions' => '323000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '617000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.3',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '14097',
                'mentions' => '991000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2618',
                'mentions' => '340000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8947',
                'mentions' => '395000',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '445000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.21',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5718',
                'mentions' => '302000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21234',
                'mentions' => '2430000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20217',
                'mentions' => '162000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '437',
                'mentions' => '355000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '0.81',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11916',
                'mentions' => '435000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2672',
                'mentions' => '1830000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.68',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4615',
                'mentions' => '1920000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.42',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15253',
                'mentions' => '612000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.04',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1364',
                'mentions' => '5480000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '4.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '797',
                'mentions' => '761000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '0.95',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3840',
                'mentions' => '813000',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.21',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2554',
                'mentions' => '419000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.16',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '487',
                'mentions' => '1400000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '2.87',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1873',
                'mentions' => '357000',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.19',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '353',
                'mentions' => '1100000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '3.12',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5518',
                'mentions' => '1190000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.22',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8176',
                'mentions' => '29700000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '3.63',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '786',
                'mentions' => '404000',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.51',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15890',
                'mentions' => '744000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7977',
                'mentions' => '843000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '393',
                'mentions' => '688000',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '1.75',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '614',
                'mentions' => '2170000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '3.53',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11190',
                'mentions' => '0',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '896',
                'mentions' => '5670000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '6.33',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1160',
                'mentions' => '36500',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '0.33',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '586',
                'mentions' => '582000',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.99',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11229',
                'mentions' => '19600000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '1.75',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '420000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.54',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '540',
                'mentions' => '310000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '0.57',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4810',
                'mentions' => '566000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.12',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3214',
                'mentions' => '19400000',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '6.04',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '884',
                'mentions' => '274000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.31',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2093',
                'mentions' => '431000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '0.21',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1962',
                'mentions' => '18500000',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '9.43',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5745',
                'mentions' => '341000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1318',
                'mentions' => '339000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.26',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1833',
                'mentions' => '139000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.08',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '77',
                'mentions' => '1040000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '293',
                'mentions' => '771000',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '2.63',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '556',
                'mentions' => '28000000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '50.36',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '821',
                'mentions' => '21000000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '25.57',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '397',
                'mentions' => '821000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '2.07',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '95',
                'mentions' => '345000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '2.65',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '183',
                'mentions' => '5230000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '28.58',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34',
                'mentions' => '2670000',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '78.53',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '98',
                'mentions' => '19800000',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '202.04',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '113',
                'mentions' => '4290000',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '38.13',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '686',
                'mentions' => '1190000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '1.73',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '111',
                'mentions' => '341000',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '3.07',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '53',
                'mentions' => '434000',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '8.19',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '198',
                'mentions' => '583000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '2.94',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219',
                'mentions' => '913000',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '4.17',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '74',
                'mentions' => '6270000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '84.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '307',
                'mentions' => '18800000',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '61.24',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106',
                'mentions' => '19000000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '179.75',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '115',
                'mentions' => '18700000',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '162.61',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '119',
                'mentions' => '18600000',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '155.78',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18',
                'mentions' => '568000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '31.56',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59',
                'mentions' => '640000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '10.85',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11',
                'mentions' => '244000',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '22.59',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12',
                'mentions' => '18500000',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '1569.13',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11330',
                'mentions' => '8120000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.72',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17500',
                'mentions' => '2980000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.17',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '616',
                'mentions' => '405000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '0.66',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '294',
                'mentions' => '246000',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.84',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8279',
                'mentions' => '889000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '0.11',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25780',
                'mentions' => '3390000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.13',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '361000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.47',
                'pentil' => '0.8'
            ],
        ]);
    }
}
