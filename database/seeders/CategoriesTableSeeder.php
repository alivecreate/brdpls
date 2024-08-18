<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            // Other categories

            // ['name' => 'Electronics', 'description' => 'All electronic items', 'parent_id' => null],
            // ['name' => 'Mobiles', 'description' => 'All kinds of mobile phones', 'parent_id' => 1],
            // ['name' => 'Laptops', 'description' => 'Different brands of laptops', 'parent_id' => 1],
            // ['name' => 'Furniture', 'description' => 'Various kinds of furniture', 'parent_id' => null],
            // ['name' => 'Office Furniture', 'description' => 'Furniture for offices', 'parent_id' => 4],
            // ['name' => 'Home Furniture', 'description' => 'Furniture for homes', 'parent_id' => 4],

            // ['name' => 'Hospitals', 'description' => 'All Hospitals', 'parent_id' => null],

            
            // // Repair Service category
            // ['name' => 'Repair Service', 'description' => 'All types of repair services', 'parent_id' => null],

            // // Subcategories under Repair Service

            // ['name' =>  'Air Cooler', 'description'=> null, 'parent_id' => 8],
            //  ['name' => 'CCTV Camera', 'description'=> null, 'parent_id' => 8],
            //  ['name' => 'Camera', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Car', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Car AC', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Computer', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Computer Hardware', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Computer Printer', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'DVD Player', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Dishwasher', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Electric Chimney', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Elevator', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Furniture', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Gas Stove', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Generator', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Geyser', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Home Theatre', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Inverter', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Laptop', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Microwave Oven', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Mobile Phone', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Motorcycle', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Projector', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Recliner Chair', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Refrigerator', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Ro Water', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Scooter', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Sewing Machine', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Sofa Set', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'TV', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Tablet', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Treadmill', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'UPS', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Washing Machine', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Water Purifier', 'description'=> null, 'parent_id' => 8],
            //   ['name' => 'Wrist Watch', 'description'=> null, 'parent_id' => 8],

              
            // Subcategories under Repair Service

            // ['name' =>  'Children Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' =>  'ENT Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' =>  'Eye Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' =>  'Maternity Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' =>  'Mental Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' =>  'Multispeciality Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' => 'Veterinary Hospitals', 'description' => null, 'parent_id' => 7],
            // ['name' => 'Dentist', 'description' => null, 'parent_id' => 7],

            // ['name' => 'Dentist', 'description' => null, 'parent_id' => 7],

            // ['name' => 'Beauty & Spa', 'description' => null, 'parent_id' => null],

            // ['name' => 'Beauty Parlours', 'description' => null, 'parent_id' => 54],
            // ['name' => 'Bridal Makeup', 'description' => null, 'parent_id' => 54],
            // ['name' => 'Groom Makeup', 'description' => null, 'parent_id' => 54],
            // ['name' => 'Salons', 'description' => null, 'parent_id' => 54],
            // ['name' => 'Spas', 'description' => null, 'parent_id' => 54],

            // ['name' => 'Gym', 'description' => null, 'parent_id' => null],
            // ['name' => 'Hotels', 'description' => null, 'parent_id' => null],
            // ['name' => 'PG/Hotels', 'description' => 'Paying Guest and Hostel Service', 'parent_id' => null],
            // ['name' => 'Consultants', 'description' => null, 'parent_id' => null],

 
            // ['name' => 'Chartered Accountants', 'description' => null, 'parent_id' => 63],
            // ['name' => 'Auditors', 'description' => null, 'parent_id' => 63],
            // ['name' => 'Income Tax Consultants', 'description' => null, 'parent_id' => 63],
            // ['name' => 'Valuers', 'description' => null, 'parent_id' => 63],
            // ['name' => 'GST Compliance Consultants', 'description' => null, 'parent_id' => 63], 
            

            // ['name' => 'Motor Training Schools', 'description' => null, 'parent_id' => null],
            // ['name' => 'Packers & Movers', 'description' => null, 'parent_id' => null],
            // ['name' => 'Courier Service', 'description' => null, 'parent_id' => null],
            // ['name' => 'Pet Shops', 'description' => null, 'parent_id' => null],
            // ['name' => 'Fabricators', 'description' => null, 'parent_id' => null],
            // ['name' => 'Security Services', 'description' => null, 'parent_id' => null],
            // ['name' => 'Scrap Dealers', 'description' => null, 'parent_id' => null],
            // ['name' => 'Transporters', 'description' => null, 'parent_id' => null],
            // ['name' => 'Placement Services', 'description' => null, 'parent_id' => null],
            // ['name' => 'Coaching', 'description' => null, 'parent_id' => null],
            // ['name' => 'Pest Control Services', 'description' => null, 'parent_id' => null],
            // ['name' => 'Computer Training Institutes', 'description' => null, 'parent_id' => null],
            // ['name' => 'House Keeping', 'description' => null, 'parent_id' => null],

            // ['name' => 'Cooks', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Maids', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Drivers', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Gardeners', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Laundry Services', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Cleaning Services', 'description' => null, 'parent_id' => 81],
            // ['name' => 'Pest Control', 'description' => null, 'parent_id' => 81],


            // ['name' => 'Jwellery Shop', 'description' => null, 'parent_id' => null],
            // ['name' => 'Artists', 'description' => null, 'parent_id' => null],

            // ['name' => 'Makeup Artists', 'description' => null, 'parent_id' => null],
            // ['name' => 'Mahendi Artists', 'description' => null, 'parent_id' => null],
            // ['name' => 'Murtikar', 'description' => null, 'parent_id' => null],


            
            // ['name' => 'Web Designing', 'description' => null, 'parent_id' => null],
            // ['name' => 'Web Development', 'description' => null, 'parent_id' => null],
            // ['name' => 'Mobile App Development', 'description' => null, 'parent_id' => null],
            // ['name' => 'Graphics Design', 'description' => null, 'parent_id' => null],
            // ['name' => 'Software Development', 'description' => null, 'parent_id' => null],
            // ['name' => 'Software Retailer', 'description' => null, 'parent_id' => null],






            
           
        ]);
    }
}
