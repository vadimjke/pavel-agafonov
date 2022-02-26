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
                'mentions' => '1020000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3801',
                'mentions' => '382000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3861',
                'mentions' => '616000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3194',
                'mentions' => '179000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2799',
                'mentions' => '2020000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '0.72',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '42331',
                'mentions' => '357000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9116',
                'mentions' => '256000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.03',
                'pentil' => '0.3'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5094',
                'mentions' => '200000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '89560',
                'mentions' => '143000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '26374',
                'mentions' => '270000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11670',
                'mentions' => '302000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7099',
                'mentions' => '230000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5410',
                'mentions' => '143000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2067',
                'mentions' => '171000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34941',
                'mentions' => '2110000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3396',
                'mentions' => '371000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7708',
                'mentions' => '427000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1584',
                'mentions' => '558000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '0.35',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16409',
                'mentions' => '1170000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '610',
                'mentions' => '481000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '0.79',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17255',
                'mentions' => '200000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1927',
                'mentions' => '216000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '30217',
                'mentions' => '647000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7276',
                'mentions' => '524000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16356',
                'mentions' => '188000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4922',
                'mentions' => '174000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6486',
                'mentions' => '471000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '9002',
                'mentions' => '347000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3947',
                'mentions' => '138000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1292',
                'mentions' => '172000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20900',
                'mentions' => '1150000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '16507',
                'mentions' => '1050000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25684',
                'mentions' => '299000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12018',
                'mentions' => '1870000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3063',
                'mentions' => '143000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25998',
                'mentions' => '150000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3103',
                'mentions' => '1900000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '0.61',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2907',
                'mentions' => '433000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.15',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6688',
                'mentions' => '763000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '649',
                'mentions' => '4470000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '6.89',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11855',
                'mentions' => '487000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '6085',
                'mentions' => '143000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '0.02',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2263',
                'mentions' => '187000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1022',
                'mentions' => '266000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '0.26',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '10788',
                'mentions' => '910000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1215',
                'mentions' => '799000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '0.66',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8604',
                'mentions' => '289000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '210000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '14097',
                'mentions' => '592000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2618',
                'mentions' => '301000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8947',
                'mentions' => '115000',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2083',
                'mentions' => '83800',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5718',
                'mentions' => '319000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '21234',
                'mentions' => '119000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '20217',
                'mentions' => '4030000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '437',
                'mentions' => '3510000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '8.03',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11916',
                'mentions' => '205000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2672',
                'mentions' => '244000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4615',
                'mentions' => '738000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15253',
                'mentions' => '167000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1364',
                'mentions' => '143000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '797',
                'mentions' => '203000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3840',
                'mentions' => '66100',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2554',
                'mentions' => '484000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '487',
                'mentions' => '302000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '0.62',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1873',
                'mentions' => '94000',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '353',
                'mentions' => '491000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '1.39',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5518',
                'mentions' => '1020000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.18',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8176',
                'mentions' => '7140000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '0.87',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '786',
                'mentions' => '106000',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '15890',
                'mentions' => '632000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '7977',
                'mentions' => '299000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '393',
                'mentions' => '138000',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '0.35',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '614',
                'mentions' => '363000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '0.59',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11190',
                'mentions' => '453000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '896',
                'mentions' => '201000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1160',
                'mentions' => '1460000',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '1.26',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '586',
                'mentions' => '72400',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11229',
                'mentions' => '93700',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '109000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '540',
                'mentions' => '603000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '1.12',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '4810',
                'mentions' => '146000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '3214',
                'mentions' => '60800',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '884',
                'mentions' => '121000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.14',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '2093',
                'mentions' => '104000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '0.05',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1962',
                'mentions' => '76200',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '5745',
                'mentions' => '3140000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.55',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1318',
                'mentions' => '129000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '1833',
                'mentions' => '153000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '77',
                'mentions' => '97400',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '293',
                'mentions' => '215000',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '0.73',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '556',
                'mentions' => '841000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '1.51',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '821',
                'mentions' => '1040000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '1.27',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '397',
                'mentions' => '218000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '0.55',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '95',
                'mentions' => '677000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '7.15',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '183',
                'mentions' => '547000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '2.99',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '34',
                'mentions' => '52700',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '1.55',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '98',
                'mentions' => '602000',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '6.14',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '113',
                'mentions' => '77200',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '0.69',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '686',
                'mentions' => '207000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '111',
                'mentions' => '92100',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '0.83',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '53',
                'mentions' => '3200',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '0.06',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '198',
                'mentions' => '272000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '1.37',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '219',
                'mentions' => '10',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '74',
                'mentions' => '428000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '5.78',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '307',
                'mentions' => '61900',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '106',
                'mentions' => '15600000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '147.59',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '115',
                'mentions' => '331000',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '2.88',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '119',
                'mentions' => '50200',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '0.42',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '18',
                'mentions' => '1520000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '84.44',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '59',
                'mentions' => '63900',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '1.08',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11',
                'mentions' => '146000',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '13.52',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '12',
                'mentions' => '1200000',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '101.78',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '11330',
                'mentions' => '1770000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '17500',
                'mentions' => '2200000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.13',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '616',
                'mentions' => '236000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '0.38',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '294',
                'mentions' => '73700',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '8279',
                'mentions' => '9210000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '1.11',
                'pentil' => '1'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '25780',
                'mentions' => '3330000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.13',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'population' => '771',
                'mentions' => '148000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
        ]);









































        // 2nd Quarter
        DB::table('chinese')->insert([

            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1402439',
                'mentions' => '25200000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '329535',
                'mentions' => '13200000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1380136',
                'mentions' => '5570000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '125848',
                'mentions' => '24100000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '84152',
                'mentions' => '8050000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '146476',
                'mentions' => '7500000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '259494',
                'mentions' => '547000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '211308',
                'mentions' => '3080000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67029',
                'mentions' => '7340000',
                'name' => 'FR',
                'display_name' => 'Франция',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '66746',
                'mentions' => '7370000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '85935',
                'mentions' => '2820000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '60447',
                'mentions' => '3590000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2880000',
                'mentions' => '38200000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25381',
                'mentions' => '7440000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '0.29',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '37206',
                'mentions' => '5950000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '47380',
                'mentions' => '4750000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '33344',
                'mentions' => '399000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '24855',
                'mentions' => '3660000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '0.15',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '23324',
                'mentions' => '11500000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '0.49',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '38371',
                'mentions' => '2350000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '102184',
                'mentions' => '1920000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '67515',
                'mentions' => '4390000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '82239',
                'mentions' => '2670000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219964',
                'mentions' => '2100000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '202534',
                'mentions' => '588000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '97076',
                'mentions' => '3500000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '3820000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '0.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '44695',
                'mentions' => '2130000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '112106',
                'mentions' => '3830000',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31143',
                'mentions' => '6110000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '167475',
                'mentions' => '581000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '55341',
                'mentions' => '2260000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '48128',
                'mentions' => '1700000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9619',
                'mentions' => '1320000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '0.14',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8668',
                'mentions' => '3260000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '0.38',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '19191',
                'mentions' => '472000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11429',
                'mentions' => '2310000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '0.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10175',
                'mentions' => '2400000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5996',
                'mentions' => '5990000',
                'name' => 'SG',
                'display_name' => 'Сингапур',
                'value' => '1.0',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43952',
                'mentions' => '6070000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '0.14',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18323',
                'mentions' => '1280000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '41490',
                'mentions' => '499000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8892',
                'mentions' => '1140000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '0.13',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4859',
                'mentions' => '1160000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18676',
                'mentions' => '1060000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7350',
                'mentions' => '9480000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '1.29',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10700',
                'mentions' => '419000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '40012',
                'mentions' => '1430000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '31382',
                'mentions' => '989000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8460',
                'mentions' => '2390000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '1600000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '1600000',
                'name' => 'SJ',
                'display_name' => 'Норвегия',
                'value' => '0.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10221',
                'mentions' => '1760000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '1610000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '1610000',
                'name' => 'GL',
                'display_name' => 'Дания',
                'value' => '0.28',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9774',
                'mentions' => '688000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10662',
                'mentions' => '2900000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '0.27',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21920',
                'mentions' => '1070000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106468',
                'mentions' => '483000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '54400',
                'mentions' => '1430000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '35496',
                'mentions' => '499000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5516',
                'mentions' => '1150000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30023',
                'mentions' => '792000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2606',
                'mentions' => '686000',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '0.26',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '51372',
                'mentions' => '653000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4840',
                'mentions' => '1620000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '0.33',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '22638',
                'mentions' => '357000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4229',
                'mentions' => '465000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10385',
                'mentions' => '1190000',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16499',
                'mentions' => '308000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9528',
                'mentions' => '889000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '43850',
                'mentions' => '814000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5409',
                'mentions' => '554000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27858',
                'mentions' => '912000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59730',
                'mentions' => '728000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7167',
                'mentions' => '644000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '156000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9648',
                'mentions' => '378000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '28890',
                'mentions' => '759000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '27480',
                'mentions' => '246000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4725',
                'mentions' => '3010000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '0.64',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7078',
                'mentions' => '814000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '0.12',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11478',
                'mentions' => '342000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '29718',
                'mentions' => '813000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3801',
                'mentions' => '653000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3861',
                'mentions' => '821000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3194',
                'mentions' => '289000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2799',
                'mentions' => '2230000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '0.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '42331',
                'mentions' => '412000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9116',
                'mentions' => '781000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '0.09',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5094',
                'mentions' => '257000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '89560',
                'mentions' => '132000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '26374',
                'mentions' => '417000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11670',
                'mentions' => '418000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7099',
                'mentions' => '286000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5410',
                'mentions' => '144000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2067',
                'mentions' => '443000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34941',
                'mentions' => '2480000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3396',
                'mentions' => '431000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '0.13',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7708',
                'mentions' => '633000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1584',
                'mentions' => '748000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '0.47',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16409',
                'mentions' => '937000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '610',
                'mentions' => '619000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '1.02',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17255',
                'mentions' => '259000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1927',
                'mentions' => '416000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '0.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '30217',
                'mentions' => '836000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7276',
                'mentions' => '778000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16356',
                'mentions' => '238000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4922',
                'mentions' => '235000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6486',
                'mentions' => '465000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '9002',
                'mentions' => '444000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3947',
                'mentions' => '98600',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1292',
                'mentions' => '216000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20900',
                'mentions' => '1380000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '16507',
                'mentions' => '1230000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25684',
                'mentions' => '455000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12018',
                'mentions' => '1830000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '0.15',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3063',
                'mentions' => '202000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '0.07',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25998',
                'mentions' => '189000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3103',
                'mentions' => '2030000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '0.65',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2907',
                'mentions' => '412000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '0.14',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6688',
                'mentions' => '708000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '649',
                'mentions' => '3990000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '6.15',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11855',
                'mentions' => '872000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '6085',
                'mentions' => '482000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2263',
                'mentions' => '217000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1022',
                'mentions' => '323000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '0.32',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '10788',
                'mentions' => '1120000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1215',
                'mentions' => '991000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '0.82',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8604',
                'mentions' => '323000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '296000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '0.14',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '14097',
                'mentions' => '610000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2618',
                'mentions' => '301000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '0.11',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8947',
                'mentions' => '105000',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '489000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '0.23',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5718',
                'mentions' => '298000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '21234',
                'mentions' => '150000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '20217',
                'mentions' => '4910000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '437',
                'mentions' => '4920000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '11.26',
                'pentil' => '1'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11916',
                'mentions' => '248000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2672',
                'mentions' => '392000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '0.15',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4615',
                'mentions' => '1020000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '0.22',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15253',
                'mentions' => '226000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1364',
                'mentions' => '237000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '797',
                'mentions' => '266000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '0.33',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3840',
                'mentions' => '83800',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '0.02',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2554',
                'mentions' => '126000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '0.05',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '487',
                'mentions' => '399000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '0.82',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1873',
                'mentions' => '125000',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '0.07',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '353',
                'mentions' => '636000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '1.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5518',
                'mentions' => '946000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8176',
                'mentions' => '7940000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '0.97',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '786',
                'mentions' => '185000',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '15890',
                'mentions' => '429000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '7977',
                'mentions' => '300000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '393',
                'mentions' => '229000',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '0.58',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '614',
                'mentions' => '636000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '1.04',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11190',
                'mentions' => '494000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '0.4',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '896',
                'mentions' => '482000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '0.54',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1160',
                'mentions' => '1020000',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '0.88',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '586',
                'mentions' => '99400',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11229',
                'mentions' => '118000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '0.01',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '186000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.24',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '540',
                'mentions' => '827000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '1.53',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '4810',
                'mentions' => '180000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '0.04',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '3214',
                'mentions' => '80500',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '0.03',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '884',
                'mentions' => '147000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '0.17',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '2093',
                'mentions' => '212000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '0.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1962',
                'mentions' => '56300',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '0.03',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '5745',
                'mentions' => '3130000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '0.54',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1318',
                'mentions' => '103000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '1833',
                'mentions' => '144000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '0.08',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '77',
                'mentions' => '116000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '293',
                'mentions' => '280000',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '0.96',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '556',
                'mentions' => '1270000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '2.28',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '821',
                'mentions' => '1040000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '1.27',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '397',
                'mentions' => '399000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '1.01',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '95',
                'mentions' => '786000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '8.31',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '183',
                'mentions' => '322000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '1.76',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '34',
                'mentions' => '67100',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '1.97',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '98',
                'mentions' => '797000',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '8.13',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '113',
                'mentions' => '63000',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '0.56',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '686',
                'mentions' => '289000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '0.42',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '111',
                'mentions' => '23500',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '0.21',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '53',
                'mentions' => '3230',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '0.06',
                'pentil' => '0.4'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '198',
                'mentions' => '255000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '1.29',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '219',
                'mentions' => '116000',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '0.53',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '74',
                'mentions' => '637000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '8.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '307',
                'mentions' => '144000',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '0.47',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '106',
                'mentions' => '10300000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '97.45',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '115',
                'mentions' => '253000',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '2.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '119',
                'mentions' => '62600',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '0.52',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '18',
                'mentions' => '1110000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '61.67',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '59',
                'mentions' => '52000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '0.88',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11',
                'mentions' => '96500',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '8.94',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '12',
                'mentions' => '1080000',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '91.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '11330',
                'mentions' => '1770000',
                'name' => 'CU',
                'display_name' => 'Куба',
                'value' => '0.16',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '17500',
                'mentions' => '2200000',
                'name' => 'SY',
                'display_name' => 'Сирия',
                'value' => '0.13',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '616',
                'mentions' => '236000',
                'name' => 'EH',
                'display_name' => 'Западная Сахара',
                'value' => '0.38',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '294',
                'mentions' => '73700',
                'name' => 'GF',
                'display_name' => 'Французская Гвиана',
                'value' => '0.25',
                'pentil' => '0.8'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '8279',
                'mentions' => '9210000',
                'name' => 'TG',
                'display_name' => 'Того',
                'value' => '1.11',
                'pentil' => '1.0'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '25780',
                'mentions' => '3330000',
                'name' => 'KP',
                'display_name' => 'Северная Корея',
                'value' => '0.13',
                'pentil' => '0.6'
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '148000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '0.19',
                'pentil' => '0.8'
            ],
        ]);
    }
}
