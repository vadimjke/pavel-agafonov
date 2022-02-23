<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnglishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('english')->insert([

            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1402439',
                'mentions' => '1350000000',
                'name' => 'CN',
                'display_name' => 'Китай',
                'value' => '1',
                'pentil' => '0.2'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '329535',
                'mentions' => '2200000000',
                'name' => 'US',
                'display_name' => 'США',
                'value' => '6.7',
                'pentil' => '0.8'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1380136',
                'mentions' => '2280000000',
                'name' => 'IN',
                'display_name' => 'Индия',
                'value' => '1.7',
                'pentil' => '0.4'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '125848',
                'mentions' => '836000000',
                'name' => 'JP',
                'display_name' => 'Япония',
                'value' => '6.6',
                'pentil' => '0.8'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '84152',
                'mentions' => '1580000000',
                'name' => 'DE',
                'display_name' => 'Германия',
                'value' => '18.8',
                'pentil' => '1.0'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '146476',
                'mentions' => '54600000',
                'name' => 'RU',
                'display_name' => 'Россия',
                'value' => '0.4',
                'pentil' => '0.2'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '259494',
                'mentions' => '107000000',
                'name' => 'ID',
                'display_name' => 'Индонезия',
                'value' => '0.4',
                'pentil' => '0.2'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '211308',
                'mentions' => '129000000',
                'name' => 'BR',
                'display_name' => 'Бразилия',
                'value' => '0.6',
                'pentil' => '0.2'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '67029',
                'mentions' => '1900000000',
                'name' => 'France',
                'display_name' => 'Франция',
                'value' => '28.3',
                'pentil' => '1.0'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '66746',
                'mentions' => '123000000',
                'name' => 'GB',
                'display_name' => 'Великобритания',
                'value' => '1.8',
                'pentil' => '0.4'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '85935',
                'mentions' => '77200000',
                'name' => 'TR',
                'display_name' => 'Турция',
                'value' => '0.9',
                'pentil' => '0.2'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '60447',
                'mentions' => '224000000',
                'name' => 'IT',
                'display_name' => 'Италия',
                'value' => '3.7',
                'pentil' => '0.6'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '121656',
                'mentions' => '134000000',
                'name' => 'MX',
                'display_name' => 'Мексика',
                'value' => '1.1',
                'pentil' => '0.4'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '25381',
                'mentions' => '56500000',
                'name' => 'KR',
                'display_name' => 'Южная Корея',
                'value' => '2.2',
                'pentil' => '0.4'
            ],            
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '37206',
                'mentions' => '952000000',
                'name' => 'CA',
                'display_name' => 'Канада',
                'value' => '25.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '47380',
                'mentions' => '872000000',
                'name' => 'ES',
                'display_name' => 'Испания',
                'value' => '18.4',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '33344',
                'mentions' => '44200000',
                'name' => 'SA',
                'display_name' => 'Саудовская Аравия',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '24855',
                'mentions' => '126000000',
                'name' => 'AU',
                'display_name' => 'Австралия',
                'value' => '5.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '23324',
                'mentions' => '36100000',
                'name' => 'TW',
                'display_name' => 'Тайвань',
                'value' => '1.5',
                'pentil' => '0.5'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '38371',
                'mentions' => '58600000',
                'name' => 'PL',
                'display_name' => 'Польша',
                'value' => '1.5',
                'pentil' => '0.5'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '102184',
                'mentions' => '73400000',
                'name' => 'EG',
                'display_name' => 'Египет',
                'value' => '0.7',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '67515',
                'mentions' => '96000000',
                'name' => 'TH',
                'display_name' => 'Таиланд',
                'value' => '1.4',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '82239',
                'mentions' => '63300000',
                'name' => 'IR',
                'display_name' => 'Иран',
                'value' => '0.8',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '219964',
                'mentions' => '75100000',
                'name' => 'PK',
                'display_name' => 'Пакистан',
                'value' => '0.3',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '202534',
                'mentions' => '73000000',
                'name' => 'NG',
                'display_name' => 'Нигерия',
                'value' => '0.4',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '97076',
                'mentions' => '55400000',
                'name' => 'VN',
                'display_name' => 'Вьетнам',
                'value' => '0.6',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '59200000',
                'name' => 'NL',
                'display_name' => 'Нидерланды',
                'value' => '3.4',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '44695',
                'mentions' => '48800000',
                'name' => 'AR',
                'display_name' => 'Аргентина',
                'value' => '1.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '112106',
                'mentions' => '86900000',
                'name' => 'PH',
                'display_name' => 'Филиппины',
                'value' => '0.8',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '31143',
                'mentions' => '56500000',
                'name' => 'MY',
                'display_name' => 'Малайзия',
                'value' => '1.8',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '167475',
                'mentions' => '44900000',
                'name' => 'BD',
                'display_name' => 'Бангладеш',
                'value' => '0.3',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '55341',
                'mentions' => '116000000',
                'name' => 'ZA',
                'display_name' => 'Южная Африка',
                'value' => '2.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '48128',
                'mentions' => '41600000',
                'name' => 'CO',
                'display_name' => 'Колумбия',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9619',
                'mentions' => '12100000',
                'name' => 'AE',
                'display_name' => 'ОАЭ',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8668',
                'mentions' => '52800000',
                'name' => 'CH',
                'display_name' => 'Швейцария',
                'value' => '6.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '19191',
                'mentions' => '19200000',
                'name' => 'RO',
                'display_name' => 'Румыния',
                'value' => '1.0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11429',
                'mentions' => '45000000',
                'name' => 'BE',
                'display_name' => 'Бельгия',
                'value' => '3.9',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10175',
                'mentions' => '65000000',
                'name' => 'SE',
                'display_name' => 'Швеция',
                'value' => '6.4',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5996',
                'mentions' => '63300000',
                'name' => 'SE',
                'display_name' => 'Сингапур',
                'value' => '10.6',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '43952',
                'mentions' => '45500000',
                'name' => 'UA',
                'display_name' => 'Украина',
                'value' => '1.0',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '18323',
                'mentions' => '14900000',
                'name' => 'KZ',
                'display_name' => 'Казахстан',
                'value' => '0.8',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '41490',
                'mentions' => '22000000',
                'name' => 'DZ',
                'display_name' => 'Алжир',
                'value' => '0.5',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8892',
                'mentions' => '37700000',
                'name' => 'AT',
                'display_name' => 'Австрия',
                'value' => '4.2',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4859',
                'mentions' => '65100000',
                'name' => 'IE',
                'display_name' => 'Ирландия',
                'value' => '13.4',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '18676',
                'mentions' => '24000000',
                'name' => 'CL',
                'display_name' => 'Чили',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7350',
                'mentions' => '38900000',
                'name' => 'HK',
                'display_name' => 'Гонконг',
                'value' => '5.3',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10700',
                'mentions' => '41600000',
                'name' => 'CZ',
                'display_name' => 'Чехия',
                'value' => '3.9',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '40012',
                'mentions' => '58400000',
                'name' => 'IQ',
                'display_name' => 'Ирак',
                'value' => '1.5',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '31382',
                'mentions' => '19700000',
                'name' => 'PE',
                'display_name' => 'Перу',
                'value' => '0.6',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8460',
                'mentions' => '118000000',
                'name' => 'IL',
                'display_name' => 'Израиль',
                'value' => '13.9',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5313',
                'mentions' => '61100000',
                'name' => 'NO',
                'display_name' => 'Норвегия',
                'value' => '11.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10221',
                'mentions' => '75900000',
                'name' => 'PT',
                'display_name' => 'Португалия',
                'value' => '7.4',
                'pentil' => '0.1'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5794',
                'mentions' => '49300000',
                'name' => 'DK',
                'display_name' => 'Дания',
                'value' => '8.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9774',
                'mentions' => '47200000',
                'name' => 'HU',
                'display_name' => 'Венгрия',
                'value' => '4.8',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10662',
                'mentions' => '123000000',
                'name' => 'GR',
                'display_name' => 'Греция',
                'value' => '11.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '21920',
                'mentions' => '39400000',
                'name' => 'LK',
                'display_name' => 'Шри-Ланка',
                'value' => '1.8',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '106468',
                'mentions' => '32800000',
                'name' => 'ET',
                'display_name' => 'Эфиопия',
                'value' => '0.3',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '54400',
                'mentions' => '28400000',
                'name' => 'MM',
                'display_name' => 'Мьянма',
                'value' => '0.5',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '35496',
                'mentions' => '29100000',
                'name' => 'MA',
                'display_name' => 'Марокко',
                'value' => '0.8',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5516',
                'mentions' => '42500000',
                'name' => 'FI',
                'display_name' => 'Финляндия',
                'value' => '7.7',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '30023',
                'mentions' => '13300000',
                'name' => 'UZ',
                'display_name' => 'Узбекистан',
                'value' => '0.4',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2606',
                'mentions' => '28000000',
                'name' => 'QA',
                'display_name' => 'Катар',
                'value' => '10.7',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '51372',
                'mentions' => '57000000',
                'name' => 'KE',
                'display_name' => 'Кения',
                'value' => '1.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4840',
                'mentions' => '55600000',
                'name' => 'NZ',
                'display_name' => 'Новая Зеландия',
                'value' => '11.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '22638',
                'mentions' => '12800000',
                'name' => 'AO',
                'display_name' => 'Ангола',
                'value' => '0.6',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4229',
                'mentions' => '20000000',
                'name' => 'KW',
                'display_name' => 'Кувейт',
                'value' => '4.7',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10385',
                'mentions' => '15800000',
                'name' => 'DO',
                'display_name' => 'Доминиканская Республика',
                'value' => '1.5',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '16499',
                'mentions' => '28000000',
                'name' => 'EC',
                'display_name' => 'Эквадор',
                'value' => '1.7',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9528',
                'mentions' => '28100000',
                'name' => 'BY',
                'display_name' => 'Беларусь',
                'value' => '2.9',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '43850',
                'mentions' => '37700000',
                'name' => 'SD',
                'display_name' => 'Судан',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5409',
                'mentions' => '12400000',
                'name' => 'SK',
                'display_name' => 'Словакия',
                'value' => '2.3',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '27858',
                'mentions' => '43800000',
                'name' => 'GH',
                'display_name' => 'Гана',
                'value' => '1.6',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '59730',
                'mentions' => '37100000',
                'name' => 'TZ',
                'display_name' => 'Танзания',
                'value' => '0.6',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7167',
                'mentions' => '26600000',
                'name' => 'BG',
                'display_name' => 'Болгария',
                'value' => '3.7',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '17232',
                'mentions' => '15000000',
                'name' => 'GT',
                'display_name' => 'Гватемала',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9648',
                'mentions' => '12700000',
                'name' => 'AZ',
                'display_name' => 'Азербайджан',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '28890',
                'mentions' => '20000000',
                'name' => 'VE',
                'display_name' => 'Венесуэла',
                'value' => '0.7',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '27480',
                'mentions' => '4680000',
                'name' => 'CI',
                'display_name' => 'Кот-д\'Ивуар',
                'value' => '0.2',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4725',
                'mentions' => '19300000',
                'name' => 'OM',
                'display_name' => 'Оман',
                'value' => '4.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7078',
                'mentions' => '17400000',
                'name' => 'RS',
                'display_name' => 'Сербия',
                'value' => '2.5',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11478',
                'mentions' => '27100000',
                'name' => 'TN',
                'display_name' => 'Тунис',
                'value' => '2.4',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '29718',
                'mentions' => '23300000',
                'name' => 'NP',
                'display_name' => 'Непал',
                'value' => '0.8',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3801',
                'mentions' => '17400000',
                'name' => 'PA',
                'display_name' => 'Панама',
                'value' => '4.6',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3861',
                'mentions' => '22300000',
                'name' => 'HR',
                'display_name' => 'Хорватия',
                'value' => '5.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3194',
                'mentions' => '13200000',
                'name' => 'PR',
                'display_name' => 'Пуэрто-Рико',
                'value' => '4.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2799',
                'mentions' => '25700000',
                'name' => 'LT',
                'display_name' => 'Литва',
                'value' => '9.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '42331',
                'mentions' => '38000000',
                'name' => 'UG',
                'display_name' => 'Уганда',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9116',
                'mentions' => '58200000',
                'name' => 'JO',
                'display_name' => 'Иордания',
                'value' => '6.4',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5094',
                'mentions' => '12500000',
                'name' => 'CR',
                'display_name' => 'Коста-Рика',
                'value' => '2.5',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '89560',
                'mentions' => '4460000',
                'name' => 'CD',
                'display_name' => 'Демократическая Республика Конго',
                'value' => '0.0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '26374',
                'mentions' => '24800000',
                'name' => 'CM',
                'display_name' => 'Камерун',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11670',
                'mentions' => '11100000',
                'name' => 'BO',
                'display_name' => 'Боливия',
                'value' => '1.0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7099',
                'mentions' => '18300000',
                'name' => 'PY',
                'display_name' => 'Парагвай',
                'value' => '2.6',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5410',
                'mentions' => '11500000',
                'name' => 'TM',
                'display_name' => 'Туркменистан',
                'value' => '2.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2067',
                'mentions' => '20200000',
                'name' => 'SI',
                'display_name' => 'Словения',
                'value' => '9.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '34941',
                'mentions' => '48600000',
                'name' => 'AF',
                'display_name' => 'Афганистан',
                'value' => '1.4',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3396',
                'mentions' => '12800000',
                'name' => 'UY',
                'display_name' => 'Уругвай',
                'value' => '3.8',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7708',
                'mentions' => '33800000',
                'name' => 'LB',
                'display_name' => 'Ливан',
                'value' => '4.4',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1584',
                'mentions' => '19100000',
                'name' => 'BH',
                'display_name' => 'Бахрейн',
                'value' => '12.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '16409',
                'mentions' => '26900000',
                'name' => 'KH',
                'display_name' => 'Камбоджа',
                'value' => '1.6',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '610',
                'mentions' => '40000000',
                'name' => 'LU',
                'display_name' => 'Люксембург',
                'value' => '65.6',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '17255',
                'mentions' => '26400000',
                'name' => 'ZM',
                'display_name' => 'Замбия',
                'value' => '1.5',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1927',
                'mentions' => '19000000',
                'name' => 'LV',
                'display_name' => 'Латвия',
                'value' => '9.9',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '30217',
                'mentions' => '28600000',
                'name' => 'YE',
                'display_name' => 'Йемен',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7276',
                'mentions' => '26800000',
                'name' => 'LA',
                'display_name' => 'Лаос',
                'value' => '3.7',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '16356',
                'mentions' => '14400000',
                'name' => 'SN',
                'display_name' => 'Сенегал',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4922',
                'mentions' => '800000000',
                'name' => 'GE',
                'display_name' => 'Грузия',
                'value' => '162.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '6486',
                'mentions' => '16000000',
                'name' => 'SV',
                'display_name' => 'Сальвадор',
                'value' => '2.5',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '9002',
                'mentions' => '12000000',
                'name' => 'HN',
                'display_name' => 'Гондурас',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3947',
                'mentions' => '11700000',
                'name' => 'BA',
                'display_name' => 'Босния и Герцеговина',
                'value' => '3.0',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1292',
                'mentions' => '34200000',
                'name' => 'EE',
                'display_name' => 'Эстония',
                'value' => '26.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '20900',
                'mentions' => '10700000',
                'name' => 'BF',
                'display_name' => 'Буркина-Фасо',
                'value' => '0.5',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '16507',
                'mentions' => '17600000',
                'name' => 'ML',
                'display_name' => 'Мали',
                'value' => '1.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '25684',
                'mentions' => '11200000',
                'name' => 'MG',
                'display_name' => 'Мадагаскар',
                'value' => '0.4',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '12018',
                'mentions' => '10600000',
                'name' => 'BJ',
                'display_name' => 'Бенин',
                'value' => '0.9',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3063',
                'mentions' => '27600000',
                'name' => 'AL',
                'display_name' => 'Албания',
                'value' => '9.0',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '25998',
                'mentions' => '25500000',
                'name' => 'MZ',
                'display_name' => 'Мозамбик',
                'value' => '1.0',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3103',
                'mentions' => '18000000',
                'name' => 'MN',
                'display_name' => 'Монголия',
                'value' => '5.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2907',
                'mentions' => '17800000',
                'name' => 'AM',
                'display_name' => 'Армения',
                'value' => '6.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '6688',
                'mentions' => '21600000',
                'name' => 'LY',
                'display_name' => 'Ливия',
                'value' => '3.2',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '649',
                'mentions' => '6120000',
                'name' => 'MO',
                'display_name' => 'Макао',
                'value' => '9.4',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11855',
                'mentions' => '30300000',
                'name' => 'GN',
                'display_name' => 'Гвинея',
                'value' => '2.6',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '6085',
                'mentions' => '24800000',
                'name' => 'NI',
                'display_name' => 'Никарагуа',
                'value' => '4.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2263',
                'mentions' => '26300000',
                'name' => 'BW',
                'display_name' => 'Ботсвана',
                'value' => '11.6',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1022',
                'mentions' => '23000000',
                'name' => 'CY',
                'display_name' => 'Кипр',
                'value' => '22.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '10788',
                'mentions' => '12700000',
                'name' => 'HT',
                'display_name' => 'Гаити',
                'value' => '1.2',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1215',
                'mentions' => '8220000',
                'name' => 'TT',
                'display_name' => 'Тринидад и Тобаго',
                'value' => '6.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8604',
                'mentions' => '9790000',
                'name' => 'TJ',
                'display_name' => 'Таджикистан',
                'value' => '1.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '12600000',
                'name' => 'MK',
                'display_name' => 'Северная Македония',
                'value' => '6.0',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '14097',
                'mentions' => '32300000',
                'name' => 'ZW',
                'display_name' => 'Зимбабве',
                'value' => '2.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2618',
                'mentions' => '10700000',
                'name' => 'MD',
                'display_name' => 'Молдавия',
                'value' => '4.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8947',
                'mentions' => '11700000',
                'name' => 'PG',
                'display_name' => 'Папуа - Новая Гвинея',
                'value' => '1.3',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2083',
                'mentions' => '9810000',
                'name' => 'GA',
                'display_name' => 'Габон',
                'value' => '4.7',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5718',
                'mentions' => '8760000',
                'name' => 'KG',
                'display_name' => 'Кыргызстан',
                'value' => '1.5',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '21234',
                'mentions' => '24000000',
                'name' => 'NE',
                'display_name' => 'Нигер',
                'value' => '1.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '20217',
                'mentions' => '29500000',
                'name' => 'MW',
                'display_name' => 'Малави',
                'value' => '1.5',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '437',
                'mentions' => '10900000',
                'name' => 'BN',
                'display_name' => 'Бруней',
                'value' => '24.9',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11916',
                'mentions' => '26100000',
                'name' => 'RW',
                'display_name' => 'Руанда',
                'value' => '2.2',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2672',
                'mentions' => '28600000',
                'name' => 'JM',
                'display_name' => 'Ямайка',
                'value' => '10.7',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4615',
                'mentions' => '22300000',
                'name' => 'PS',
                'display_name' => 'Палестина',
                'value' => '4.8',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '15253',
                'mentions' => '30600000',
                'name' => 'TD',
                'display_name' => 'Чад',
                'value' => '2.0',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1364',
                'mentions' => '19800000',
                'name' => 'MU',
                'display_name' => 'Маврикий',
                'value' => '14.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '797',
                'mentions' => '7920000',
                'name' => 'GQ',
                'display_name' => 'Экваториальная Гвинея',
                'value' => '9.9',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3840',
                'mentions' => '9070000',
                'name' => 'MR',
                'display_name' => 'Мавритания',
                'value' => '2.4',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2554',
                'mentions' => '18400000',
                'name' => 'NA',
                'display_name' => 'Намибия',
                'value' => '7.2',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '487',
                'mentions' => '20100000',
                'name' => 'MT',
                'display_name' => 'Мальта',
                'value' => '41.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1873',
                'mentions' => '9220000',
                'name' => 'XK',
                'display_name' => 'Республика Косово',
                'value' => '4.9',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '353',
                'mentions' => '17700000',
                'name' => 'IS',
                'display_name' => 'Исландия',
                'value' => '50.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5518',
                'mentions' => '11500000',
                'name' => 'CG',
                'display_name' => 'Республика Конго',
                'value' => '2.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '8176',
                'mentions' => '222000000',
                'name' => 'Idti',
                'display_name' => 'Идти',
                'value' => '27.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '786',
                'mentions' => '13500000',
                'name' => 'GY',
                'display_name' => 'Гайана',
                'value' => '17.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '15890',
                'mentions' => '34100000',
                'name' => 'SO',
                'display_name' => 'Сомали',
                'value' => '2.1',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '7977',
                'mentions' => '29400000',
                'name' => 'SL',
                'display_name' => 'Сьерра-Леоне',
                'value' => '3.7',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '393',
                'mentions' => '12500000',
                'name' => 'BS',
                'display_name' => 'Багамы',
                'value' => '31.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '614',
                'mentions' => '10100000',
                'name' => 'ME',
                'display_name' => 'Черногория',
                'value' => '16.4',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11190',
                'mentions' => '28500000',
                'name' => 'SS',
                'display_name' => 'Южный Судан',
                'value' => '2.5',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '896',
                'mentions' => '12800000',
                'name' => 'FJ',
                'display_name' => 'Фиджи',
                'value' => '14.3',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1160',
                'mentions' => '4860000',
                'name' => 'SZ',
                'display_name' => 'Эсватини',
                'value' => '4.2',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '586',
                'mentions' => '6250000',
                'name' => 'SR',
                'display_name' => 'Суринам',
                'value' => '10.7',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11229',
                'mentions' => '11300000',
                'name' => 'BI',
                'display_name' => 'Бурунди',
                'value' => '1.0',
                'pentil' => '0.4'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '771',
                'mentions' => '8480000',
                'name' => 'BT',
                'display_name' => 'Бутан',
                'value' => '11.0',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '540',
                'mentions' => '12600000',
                'name' => 'MV',
                'display_name' => 'Мальдивы',
                'value' => '23.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '4810',
                'mentions' => '21500000',
                'name' => 'LR',
                'display_name' => 'Либерия',
                'value' => '4.5',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '3214',
                'mentions' => '10200000',
                'name' => 'ER',
                'display_name' => 'Эритрея',
                'value' => '3.2',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '884',
                'mentions' => '15700000',
                'name' => 'DJ',
                'display_name' => 'Джибути',
                'value' => '17.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '2093',
                'mentions' => '14200000',
                'name' => 'GM',
                'display_name' => 'Гамбия',
                'value' => '6.8',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1962',
                'mentions' => '18700000',
                'name' => 'LS',
                'display_name' => 'Лесото',
                'value' => '9.5',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '5745',
                'mentions' => '43600000',
                'name' => 'CF',
                'display_name' => 'Центрально-Африканская Республика',
                'value' => '7.6',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1318',
                'mentions' => '7830000',
                'name' => 'TL',
                'display_name' => 'Восточный Тимор',
                'value' => '5.9',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '1833',
                'mentions' => '9340000',
                'name' => 'GW',
                'display_name' => 'Гвинея-Бисау',
                'value' => '5.1',
                'pentil' => '0.6'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '77',
                'mentions' => '6120000',
                'name' => 'AD',
                'display_name' => 'Андорра',
                'value' => '0.1',
                'pentil' => '0.2'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '293',
                'mentions' => '17800000',
                'name' => 'BB',
                'display_name' => 'Барбадос',
                'value' => '60.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '556',
                'mentions' => '23300000',
                'name' => 'CV',
                'display_name' => 'Кабо-Верде',
                'value' => '41.9',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '821',
                'mentions' => '47900000',
                'name' => 'KM',
                'display_name' => 'Коморские острова',
                'value' => '58.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '397',
                'mentions' => '13100000',
                'name' => 'BZ',
                'display_name' => 'Белиз',
                'value' => '58.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '95',
                'mentions' => '15700000',
                'name' => 'SC',
                'display_name' => 'Сейшельские острова',
                'value' => '165.9',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '183',
                'mentions' => '15300000',
                'name' => 'LC',
                'display_name' => 'Санкт-Люсия',
                'value' => '83.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '34',
                'mentions' => '4940000',
                'name' => 'SM',
                'display_name' => 'Сан-Марино',
                'value' => '145.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '98',
                'mentions' => '17000000',
                'name' => 'AG',
                'display_name' => 'Антигуа и Барбуда',
                'value' => '173.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '113',
                'mentions' => '10900000',
                'name' => 'GD',
                'display_name' => 'Гренада',
                'value' => '96.9',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '686',
                'mentions' => '7590000',
                'name' => 'SB',
                'display_name' => 'Соломоновы острова',
                'value' => '11.1',
                'pentil' => '0.8'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '111',
                'mentions' => '5080000',
                'name' => 'VC',
                'display_name' => 'Святой Винсент и Гренадины',
                'value' => '45.8',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '53',
                'mentions' => '5260000',
                'name' => 'KN',
                'display_name' => 'Сент-Китс и Невис',
                'value' => '99.2',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '198',
                'mentions' => '11700000',
                'name' => 'WS',
                'display_name' => 'Самоа',
                'value' => '59.1',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '219',
                'mentions' => '12100000',
                'name' => 'PM',
                'display_name' => 'Сан-Томе и Принсипи',
                'value' => '55.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '74',
                'mentions' => '14100000',
                'name' => 'DM',
                'display_name' => 'Доминика',
                'value' => '190.5',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '307',
                'mentions' => '8640000',
                'name' => 'VU',
                'display_name' => 'Вануату',
                'value' => '28.1',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '106',
                'mentions' => '6840000',
                'name' => 'TO',
                'display_name' => 'Тонга',
                'value' => '64.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '115',
                'mentions' => '6170000',
                'name' => 'FM',
                'display_name' => 'Микронезия',
                'value' => '53.7',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '119',
                'mentions' => '5600000',
                'name' => 'KI',
                'display_name' => 'Кирибати',
                'value' => '46.9',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '18',
                'mentions' => '6130000',
                'name' => 'PW',
                'display_name' => 'Палау',
                'value' => '340.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '59',
                'mentions' => '18600000',
                'name' => 'MH',
                'display_name' => 'Маршалловы острова',
                'value' => '315.3',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '11',
                'mentions' => '4920000',
                'name' => 'NR',
                'display_name' => 'Науру',
                'value' => '455.6',
                'pentil' => '1.0'
            ],
            [
                'year' => '2021',
                'quarter' => '1',
                'population' => '12',
                'mentions' => '5850000',
                'name' => 'TV',
                'display_name' => 'Тувалу',
                'value' => '496.2',
                'pentil' => '1.0'
            ],
        ]);
    }
}