<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CustomerSeeder');
        $this->call('ProductSeeder');
        $this->call('PurchaseSeeder');
    }
}

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::delete('delete from customer');

        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Antonio Rod', '812 Grand St', '48596784756']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Boy Xu', '400 Jay Street', '8476372654']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Brown Snow', '95 1st Ave', '34857694038']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Guru Singh', '41 49th Street', '3847596878']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Ivy Yu', '120 Willoughby Street', '2039485768']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Jack Smith', '100 Willough Street', '9178594837']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Jane Jing', '300 Bridge Street', '39485068594']);
        DB::insert('INSERT INTO customer VALUES (?, ?, ?)', ['Tom White', '309 Gold Street', '45783940587']);
    }
}

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::delete('delete from product');

        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['DeLonghi BC0330T Combination ', 'Patented Flavor Savor Brewing System.24 hour digital programmable timer.Pause and serve function allows you to enjoy a c', '160.33', 'backordered']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['DeLonghi ESAM3300 Magnifica', 'Patented \"Cappuccino System\" frother that mixes steam and milk to create a rich, creamy froth', '507.98', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Echo Dot (2nd Generation) - Black', 'Echo Dot (2nd Generation) is a hands-free, voice-controlled device that uses Alexa to play music, control smart home dev', '49.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Fire Kids Edition Tablet', 'Not a toy, a full-featured Fire tablet with a 7\" IPS display and front and rear cameras.', '99.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['La Roche-Posay Effaclar Medicated Gel', 'From the #1 acne skin care brand in Europe - medicated acne wash formulated with Salicylic Acid Acne Medication. Targets', '14.99', 'discontinued']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['LEGO Creator Sea Plane', 'Features a large propeller, engine detailing, navigation lights, tinted windshield and big pontoons', '7.57', 'discontinued']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Logitech G602 Gaming Wireless Mouse', 'For Windows 10, Windows 8, Windows 7, Windows Vista, and Mac OS X 10.6.8 or higher. For more details go through the \"Sys', '44.45', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Mario Sports Superstars', 'ive full-on sports-Soccer, Tennis, Golf, Baseball, and Horse Racing-bring the challenge and depth you demand to Nintendo', '39.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Monster Hunter Double Cross ', 'Newest version of monster hunter', '60.00', 'backordered']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['New Nintendo 3DS XL Black', 'Faster processing power than Nintendo 3DS and Face tracking 3D.', '259.74', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Nintendo Selects: The Legend of Zelda', 'The Legend of Zelda: Ocarina of Time 3D brings a completely re-mastered version of an epic entry in the beloved The Lege', '19.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Obagi Nu-Derm Foaming Gel', 'A gel-based cleanser that removes impurities, oil, and makeup to leave even the oiliest skin clean and fresh.', '39.90', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Stainless Steel Frothing Pitcher', 'Material:Stainless Steel; Weight: 199g;Size: 6.6x9.2x8cm/2.6x3.6x3.1inches; Capacity:350ml\r\nHelp you turn your milk or c', '4.46', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Super Mario 3D Land', 'Mario can perform a rolling somersault attack or run fast with a dash move. Or, as Tanooki Mario, he can use his tail to', '24.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Tria Beauty Finishing Serum', 'Follow each Age-Defying Laser treatment with Finishing Serum, specifically formulated by dermatologists to soothe and hy', '65.00', 'backordered']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Two by Two Kindle Edition', 'New York Times bestselling author Nicholas Sparks returns with an emotionally powerful story of unconditional love, its ', '13.99', 'available']);
        DB::insert('INSERT INTO product VALUES (?, ?, ?, ?)', ['Zippo Armor Deep Carve Lighters', 'Genuine Zippo windproof lighter with distinctive Zippo \"click\"', '28.35', 'available']);
    }
}

class PurchaseSeeder extends Seeder
{
    public function run()
    {
        DB::delete('delete from purchase');

        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Antonio Rod', 'Fire Kids Edition Tablet', '2017-01-03 12:04:23', '1', '99.99', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Boy Xu', 'Logitech G602 Gaming Wireless Mouse', '2017-03-21 12:08:04', '2', '100.00', 'delayed']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Boy Xu', 'Nintendo Selects: The Legend of Zelda', '2017-03-07 12:00:52', '1', '20.00', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Boy Xu', 'Super Mario 3D Land', '2017-03-01 14:01:37', '1', '25.00', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Boy Xu', 'Zippo Armor Deep Carve Lighters', '2017-03-11 12:10:29', '2', '55.00', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Brown Snow', 'DeLonghi BC0330T Combination ', '2016-12-01 12:02:05', '1', '160.00', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Guru Singh', 'Echo Dot (2nd Generation) - Black', '2016-12-06 12:05:22', '1', '49.99', 'complete']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Ivy Yu', 'La Roche-Posay Effaclar Medicated Gel', '2017-03-20 14:05:59', '1', '14.99', 'pending']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Ivy Yu', 'Obagi Nu-Derm Foaming Gel', '2017-03-21 12:07:11', '1', '39.90', 'delayed']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Ivy Yu', 'Two by Two Kindle Edition', '2017-03-21 15:06:28', '1', '12.99', 'delivering']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Jack Smith', 'LEGO Creator Sea Plane', '2016-09-07 08:03:41', '1', '8.00', 'cancelled']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Jane Jing', 'DeLonghi ESAM3300 Magnifica', '2017-03-20 12:09:08', '1', '500.00', 'cancelled']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Jane Jing', 'Echo Dot (2nd Generation) - Black', '2017-03-14 12:02:58', '2', '100.00', 'cancelled']);
        DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  ['Jane Jing', 'Mario Sports Superstars', '2017-03-20 07:09:49', '1', '39.99', 'complete']);
    }
}
