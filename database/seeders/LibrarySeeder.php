<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libraries')->insert([
            // academy publications
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/qVVRucIUoNpx1ECEZCqfQ5T6oefdCPPNiEK8re1i.pdf',
                'img' => 'library/academy-publications/HJFD414bCsd85Zv6TYo96fFYWkS97MdGtOWWNtdt.jpg',
            ],
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/dYda5YyKcf9PlXxpfAvijeyd3geX7OS5FaaaQpTM.pdf',
                'img' => 'library/academy-publications/Y2RR2bh3JMud2kXCgWtA34RIlvYiWLDnis4k6lDl.jpg',
            ],
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/0OJRIDsGjwn3N9ibNfLZkSZ4PDkkqSpjp1X6Unom.pdf',
                'img' => 'library/academy-publications/T3PE12ukzFIOPoPvqWPbLiUWDVk8I5awr5VXAs0Z.jpg',
            ],
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/SrTNBZeM9vypqOpwcsVUX5CVxuGY01UGBpmHTLHu.pdf',
                'img' => 'library/academy-publications/KcnMuG203uNnGjSHytZr9r2Bbl2x5e82ki163w8v.jpg',
            ],
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/HKfqNOXXwqLHEhIuRSi8DHW48vVglKpjm6Z7xVbv.pdf',
                'img' => 'library/academy-publications/VtGh51Wa0DqXQNVePJNN5DdEjA7sUvByiNC8fsxz.jpg',
            ],
            [
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'category' => 'academy-publication',
                'pdf' => 'library/academy-publications/M8hXgfnv6A6uXeHperIhmLpdz24ics1LkBmnRpJl.pdf',
                'img' => 'library/academy-publications/LHM3JSqhmYJjO92KtTxrTd2BeVqHYPzAsxFGwVTV.jpg',
            ],




            // manuals
            [
                'name_en' => 'Ապացույցների թույլատրելիությունը ՀՀ քրեական դատավարությունում՝ Մարդու իրավունքների եվրոպական դատարանի նախադեպային իրավունքի համատեքստում',
                'name_am' => 'Ապացույցների թույլատրելիությունը ՀՀ քրեական դատավարությունում՝ Մարդու իրավունքների եվրոպական դատարանի նախադեպային իրավունքի համատեքստում',
                'name_ru' => 'Ապացույցների թույլատրելիությունը ՀՀ քրեական դատավարությունում՝ Մարդու իրավունքների եվրոպական դատարանի նախադեպային իրավունքի համատեքստում',
                'category' => 'manual',
                'pdf' => 'library/manuals/hoSw2YlHdc9Zh326W8Pvh4eguPATtAMEyufryDnf.pdf',
                'img' => 'library/manuals/DG3Vrw7RXDLKyyZE1tvcaZbW7rNyp3i7aAUN2cdp.png',
            ],
            [
                'name_en' => 'Կյանքի իրավունքին, խոշտանգումների և վատ վերաբերմունքի այլ ձևերի արգելքին առնչվող գործերի քննությունը',
                'name_am' => 'Կյանքի իրավունքին, խոշտանգումների և վատ վերաբերմունքի այլ ձևերի արգելքին առնչվող գործերի քննությունը',
                'name_ru' => 'Կյանքի իրավունքին, խոշտանգումների և վատ վերաբերմունքի այլ ձևերի արգելքին առնչվող գործերի քննությունը',
                'category' => 'manual',
                'pdf' => 'library/manuals/RlWXxkv39ZbpAeWCYIWMAZqcWvturDpSVgcO0mtZ.pdf',
                'img' => 'library/manuals/SZpYrsIc0AP4eJyweFe2ZLQIx0RFt1GMwljcWK7u.png',
            ],
            [
                'name_en' => 'Խոցելի տուժողների/վկաների և կասկածյալների մասնակցությամբ իրականացվող քննությունը',
                'name_am' => 'Խոցելի տուժողների/վկաների և կասկածյալների մասնակցությամբ իրականացվող քննությունը',
                'name_ru' => 'Խոցելի տուժողների/վկաների և կասկածյալների մասնակցությամբ իրականացվող քննությունը',
                'category' => 'manual',
                'pdf' => 'library/manuals/qbqrPZCfhWW9ebpBcxJtYoua7pPueVXz7lEPDcZO.pdf',
                'img' => 'library/manuals/zSSXbmjrkRtq1StvXpfNnKlE5WWM7WlLVfSuF4ek.png',
            ],
            [
                'name_en' => 'Մինչդատական կալանքը և քննության հարակից հիմնախնդիրները',
                'name_am' => 'Մինչդատական կալանքը և քննության հարակից հիմնախնդիրները',
                'name_ru' => 'Մինչդատական կալանքը և քննության հարակից հիմնախնդիրները',
                'category' => 'manual',
                'pdf' => 'library/manuals/9JYYJwrynBzgph9qPvniA4Y0kSXb8iIi7TgpVRSj.pdf',
                'img' => 'library/manuals/XGBG1uj2A3abP2CN3kaulOk8bedANoMbL5M4w5Ra.png',
            ],
            [
                'name_en' => 'Քրեական գործով քննության ընդհանուր մեթոդաբանությունը',
                'name_am' => 'Քրեական գործով քննության ընդհանուր մեթոդաբանությունը',
                'name_ru' => 'Քրեական գործով քննության ընդհանուր մեթոդաբանությունը',
                'category' => 'manual',
                'pdf' => 'library/manuals/ik9vITn7RMq8B2HRfCSioVeuLjJsAIDPs9IUlcFV.pdf',
                'img' => 'library/manuals/lTQfiNWh9a6eWLp11rk06jB6CLP0MvMP0b5C00iB.png',
            ],
            [
                'name_en' => 'Խոշտանգման քրեաիրավական բնութագիրը և քննության առանձնահատկությունները',
                'name_am' => 'Խոշտանգման քրեաիրավական բնութագիրը և քննության առանձնահատկությունները',
                'name_ru' => 'Խոշտանգման քրեաիրավական բնութագիրը և քննության առանձնահատկությունները',
                'category' => 'manual',
                'pdf' => 'library/manuals/UiY0m1m5GiTFDIUfLxP5lifAjdKCBKgHikKVKzBC.pdf',
                'img' => 'library/manuals/2h6oYfIMqGRxKMCFHcPeAU6MjvKagij4krHBOwvw.png',
            ],
            [
                'name_en' => 'Երեխաների նկատմամբ բռնության բնութագիրը և քննության առանձնահատկությունները',
                'name_am' => 'Երեխաների նկատմամբ բռնության բնութագիրը և քննության առանձնահատկությունները',
                'name_ru' => 'Երեխաների նկատմամբ բռնության բնութագիրը և քննության առանձնահատկությունները',
                'category' => 'manual',
                'pdf' => 'library/manuals/7M1rMmoiPMDZzTdkS7w3RavDfYjEDKSEd04J5JNK.pdf',
                'img' => 'library/manuals/zvblb3rw2eiHjxlcL7mY4wjj73o3IcBShZJbsMg8.png',
            ],
            [
                'name_en' => 'Այլընտրանքային խափանման միջոցների կիրառման գործնական հմտություններ',
                'name_am' => 'Այլընտրանքային խափանման միջոցների կիրառման գործնական հմտություններ',
                'name_ru' => 'Այլընտրանքային խափանման միջոցների կիրառման գործնական հմտություններ',
                'category' => 'manual',
                'pdf' => 'library/manuals/2i28pjvFEJKjfpb6daol87E2LL57XRIJ0d5NSw2A.pdf',
                'img' => 'library/manuals/dsqZG7tfUScZuQUXx5IQDHU2nRlpM6WjEaX1Xpb0.jpg',
            ],
            [
                'name_en' => 'Դատական ակտերի մշակման հմտություններ',
                'name_am' => 'Դատական ակտերի մշակման հմտություններ',
                'name_ru' => 'Դատական ակտերի մշակման հմտություններ',
                'category' => 'manual',
                'pdf' => 'library/manuals/86jQ1lYFSoFHjwa55aN6E55wMhxLyJChdHKM4G1q.pdf',
                'img' => 'library/manuals/zu81gQtu4ICEETzracm81zb97dIROzyMAu8HY3FP.png',
            ],
            [
                'name_en' => 'Տուժողի կարգավիճակի առանձնահատկությունները քրեական դատավարությունում',
                'name_am' => 'Տուժողի կարգավիճակի առանձնահատկությունները քրեական դատավարությունում',
                'name_ru' => 'Տուժողի կարգավիճակի առանձնահատկությունները քրեական դատավարությունում',
                'category' => 'manual',
                'pdf' => 'library/manuals/xNkibckZX2TzvYOsx6vS6GkD1MlrJFXr8PqHPMtk.pdf',
                'img' => 'library/manuals/uvDBRmc0ElDwiNlKO1lVHDgRGq6lXlln8rOP3fN5.png',
            ],
            [
                'name_en' => 'Հարցաքննության տեխնիկա և հաղորդակցման կառավարում',
                'name_am' => 'Հարցաքննության տեխնիկա և հաղորդակցման կառավարում',
                'name_ru' => 'Հարցաքննության տեխնիկա և հաղորդակցման կառավարում',
                'category' => 'manual',
                'pdf' => 'library/manuals/jB1U5s0hM2Fp0vWr1MBoUXEa8KHBWe4G4IpGKQsy.pdf',
                'img' => 'library/manuals/UdQcgvr7LB93F7Oqru6eNJTaJgN123f0teDIY2hV.png',
            ],
            [
                'name_en' => 'Հակընդդեմ հարցման հիմնախնդիրները քրեական դատավարությունում',
                'name_am' => 'Հակընդդեմ հարցման հիմնախնդիրները քրեական դատավարությունում',
                'name_ru' => 'Հակընդդեմ հարցման հիմնախնդիրները քրեական դատավարությունում',
                'category' => 'manual',
                'pdf' => 'library/manuals/nNZmWNiPfkLDxZavz44xFrVPXfKXYsjrKIL9b3P0.pdf',
                'img' => 'library/manuals/nNYtg9nHfi6NtypIcmhuwcCYH9Z8Eht3bycQ3hPC.png',
            ],
            [
                'name_en' => 'Կալանավորումը որպես խափանման միջոց․ կիրառման և երկարացման հիմնավորվածությունը',
                'name_am' => 'Կալանավորումը որպես խափանման միջոց․ կիրառման և երկարացման հիմնավորվածությունը',
                'name_ru' => 'Կալանավորումը որպես խափանման միջոց․ կիրառման և երկարացման հիմնավորվածությունը',
                'category' => 'manual',
                'pdf' => 'library/manuals/MufWIGyNtj1IW6jWcTWaWQifPmrjpaQmMDILnNnB.pdf',
                'img' => 'library/manuals/ZulaQXtColC0iEjeVxUsHHdRqgMT2rQVx5q6qmJt.png',
            ],
            [
                'name_en' => 'Հայաստանում դատական ներուժի զարգացում-քաղաքացիական դատավարության նոր օրենսգիրքը',
                'name_am' => 'Հայաստանում դատական ներուժի զարգացում-քաղաքացիական դատավարության նոր օրենսգիրքը',
                'name_ru' => 'Հայաստանում դատական ներուժի զարգացում-քաղաքացիական դատավարության նոր օրենսգիրքը',
                'category' => 'manual',
                'pdf' => 'library/manuals/p18IG7VfLf5U85KkaMgnUM6iExIcAw3ssioYRcoS.pdf',
                'img' => 'library/manuals/ghSUkYD51wH1Ef9IGU1zxgaZFnYWvg552WCtUr1y.png',
            ],
        ]);
    }
}
