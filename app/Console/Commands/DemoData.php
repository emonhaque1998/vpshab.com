<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class DemoData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command using for just developer and create demo data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::create([
            'name' => "Monir H",
            'email' => "monirhaque.net@gmail.com",
            'password' => Hash::make('Emon@1998'),
            "addressFirst" => "Kushtia",
            "addressSecond" => "Kumarkhali",
            "companyName" => "Brothers Computer",
            "mobile" => "01864176956",
            "country" => "Bangladesh",
            "stateList" => "Khulna",
            "checkoutValidation" => true
        ]);

        Admin::create([
            'name' => "Eman H",
            'email' => "emonhaque.net@gmail.com",
            'password' => Hash::make('Emon@1998'),
            "address" => "Shouta",
            "country" => "Bangladesh",
            "stateName" => "Khulna",
            "zipcode" => "7010",
            "designation" => "Web Developer",
        ]);

        Country::create([
            "name" => "Bangladesh",
            "vertical" => "50",
            "horizontal" => "50"
        ]);

        Category::create([
            "category_name" => "Residential VPs",
            "category_slug" => "residential-vps",
        ]);

        Product::create([
            "title" => "Residential Vps",
            "slug" => "residential-vps",
            "monthly_price" => "20",
            "annual_price" => "120",
            "discount" => "20% off for first order",
            "ram" => "2",
            "disk" => "2",
            "operating_system" => "Windows 11",
            "bandwidth" => "2",
            "virtualization" => "none",
            "currency" => "BDT",
            "category_id" => "1",
            "country_id" => "1",
            "status" => "published"
        ]);

        $this->info('Demo created successfully!');
    }
}
