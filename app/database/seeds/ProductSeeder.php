<?php

class ProductSeeder extends Seeder{
    public function run()
    {

        $string= "<H1>This is a Header</H1>
<H2>This is a Medium Header</H2>
    Send me mail at
<P> This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!  This is a new paragraph!
<P> <B>This is a new paragraph!</B>
<BR> <B><I>This is a new sentence without a paragraph break, in bold italics.</I></B>
<HR>";


        for($i=0;$i<200;$i++)
        {

           /* DB::table('ticket')->insert(array(array(
                'prefix' => "TI",
                'Customer_id' => rand(1, 50),
                'Staff_id' => rand(1, 10),
                'Subject' => "Subject " . rand(50, 500000),
                'Description' => $string,
                'Status' => "Pending",
                'Product_id' => rand(1000, 9999),
                'Purchase_id' => Uuid::generate(4)
            )));
           */

            $p=$i+1001;
            $product="pr".$p;
            DB::table('products')->insert(array(array(
                'product_id' => $product,
                'Name' => "Product" . rand(1000, 9999),
                'Vendor' => "Vendor".rand(1, 10),
            )));
        }
    }
}