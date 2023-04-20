<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nume' => 'Cafea macinata Tchibo',
            'descriere' => 'Cafea macinata si prajita Tchibo Exclusive,arabica si robusta,250g.',
            'imagine' =>'https://gomagcdn.ro/domains/cafea-premium.ro/files/product/large/tchibo-exclusive-cafea-macinata-250g-144-82592777.jpg',
            'pret' => '15'
            ]);
        DB::table('products')->insert([
            'nume' => 'Biscuiti cu cereale si ciocolata Belvita',
            'descriere' => 'Biscuiti cu cereale si bucatele de ciocolata, fortifiati cu minerale.',
            'imagine' =>'https://d1lqpgkqcok0l.cloudfront.net/medias/sys_master/ha3/ha7/9082960740382.jpg',
            'pret' => '8'
            ]);
        DB::table('products')->insert([
            'nume' => 'Coca-Cola',
            'descriere' => 'Bautura carbogazoasa Coca-Cola',
            'imagine' =>'https://kurt.ro/storage/photos/000/000/900/coca-cola-1l.jpeg',
            'pret' => '11'
            ]);
        DB::table('products')->insert([
            'nume' => 'Apa plata',
            'descriere' => 'Apa plata Aquatique, 5l',
            'imagine' =>'https://lcdn.altex.ro/resize/media/catalog/product/B/A/2bd48d28d1c32adea0e55139a4e6434a/BARPF1QPP5.jpg',
            'pret' => '6'
            ]);
        DB::table('products')->insert([
            'nume' => 'Lapte de consum ZuZu, 3.5%, 1.8l',
            'descriere' => 'Se poate consuma ca atare, indulcit cu miere sau combinat cu cacao.',
            'imagine' => 'https://d1lqpgkqcok0l.cloudfront.net/medias/sys_master/h24/hed/8929347567646.jpg?buildNumber=10bf438336f8f143487ff24a8104a7f0be7768644c25eb7cc302e3a75c88f9cf',
            'pret' => '15'
            ]);
        DB::table('products')->insert([
            'nume' => 'Pui Coquelet Edenia, 550g',
            'descriere' => 'Acest tip de pui este apreciat pentru carnea fina si extrem de frageda.',
            'imagine' => 'https://www.edenia-foods.ro/wp-content/uploads/2016/11/Coquelet-de-Bretagne-Edenia-550g.png',
            'pret' => '28'
            ]);
        DB::table('products')->insert([
            'nume' => 'Ciocolata cu lapte si cacao Kinder, 4 bucati, 50g',
            'descriere' => 'Ciocolata cu lapte si cacao Kinder,4 bucati, 50g. ',
            'imagine' => 'https://d1lqpgkqcok0l.cloudfront.net/medias/sys_master/h60/hb6/9101476364318.jpg',
            'pret' => '5'
            ]);
        DB::table('products')->insert([
            'nume' => 'Iaurt natural ZuZu, 140g',
            'descriere' => 'Iaurt natural ZuZu,(7+1), 140g ',
            'imagine' => 'https://linella.md/public/products/thumbs/version_500x0x0/644cc4fa7ab1bf0e7abb44eb2af4dabe.png',
            'pret' => '10'
            ]);
        DB::table('products')->insert([
            'nume' => 'Detergent de vase Fairy Lemon, 800ml',
            'descriere' => 'Detergent de vase Fairy Lemon, 800ml ',
            'imagine' => 'https://www.importdirect.ro/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/0/0/0011455.jpg',
            'pret' => '11'
            ]);
        DB::table('products')->insert([
            'nume' => 'Cozonac cu crema de nuca si cacao Boromir, 450g',
            'descriere' => 'Cozonac cu crema de nuca si cacao Boromir, 450g ',
            'imagine' => 'https://d1lqpgkqcok0l.cloudfront.net/medias/sys_master/h41/he1/9163771052062.jpg?buildNumber=10bf438336f8f143487ff24a8104a7f0be7768644c25eb7cc302e3a75c88f9cf',
            'pret' => '15'
            ]);
    }
}
