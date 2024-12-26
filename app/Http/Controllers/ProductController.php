<?php
//สินค้าที่มีในร้าน
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class ProductController extends Controller
{
    // products เเสดงข้อมูลสินค้าทั้งหมด
    private $products = [
        ['id' => 1, 'name' => 'Carhartt Mens Jackets',
        'description' => ' Carhartt Detroit Jacket J97 PTL',
        'price' => 55990,
        'imageUrl' => 'https://cdn.shopify.com/s/files/1/2193/5809/files/I030437_2M2_XX-ST-01_800x.jpg?v=1733774193'],

        ['id' => 2, 'name' => 'Carhartt Men',
        'description' => '• Intel Core i9-14900HX• 16GB DDR5 5600MHz• 512GB PCIe 4/NVMe M.2 SSD• 16" FHD+ (1920 x 1200) IPS-level 165Hz Anti-glare G-Sync• Nvidia GeForce RTX 4060 8GB GDDR6• Windows 11 Home',
        'price' => 59990,
        'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2G4OwjJ9az5bdy6LR8NJW8b0pIjrsO-3cjg&s'],

        ['id' => 3, 'name' => 'Carhartt Men',
        'description' => ' • Intel Core i9-14900HX• 64GB (32GB x 2) DDR5 5600MHz (OC)• 2TB (1TB x 2) PCIe 4/NVMe M.2 SSD• 16" 3.2K (3200 x 2000) Mini LED 165Hz G-SYNC 1200nits• Nvidia GeForce RTX 4090 16GB GDDR6• Windows 11 Home',
        'price' => 154990,
        'imageUrl' => 'https://img.gem.app/890087556/1t/1701371314/carhartt-wip-very-rare-vintage-rare-color-1980s.jpg'],

        ['id' => 4, 'name' => 'Carhartt Men ',
        'description' => '• Intel Core i9-14900HX• 32GB (16GBx2) DDR5• 1TB PCIe/NVMe M.2 SSD• 16" WQXGA IPS 240Hz• Nvidia GeForce RTX 4070 8 GB GDDR6• Windows 11 Home',
        'price' => 75990,
        'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRduGbeyn_tHeTnFrp0_5zrusIoPCdw6HtuxA&s'],

        ['id' => 5, 'name' => 'Carhartt Men',
        'description' => ' • Intel Core i9-14900HX• 32GB (16GBx2) DDR5 5600MHz• 1TB PCIe/NVMe M.2 SSD• 16.1" QHD 240Hz• Nvidia GeForce RTX 4070 8GB GDDR6• Windows 11 Home',
        'price' => 76990,
        'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh3hPusndX-fbTbFuLEt69yPNACnKsgW1U_A&s'],

        ['id' => 6, 'name' => 'Carhartt Men',
        'description' => 'iPhone 16 Pro Max มาพร้อมดีไซน์แบบไทเทเนียมที่โดดเด่นสวยงาม, ตัวควบคุมกล้อง, Dolby Vision ระดับ 4K ที่ 120 fps และ ชิป A18 Pro',
        'price' => 63900,
        'imageUrl' => 'https://www.thaimtb.com/forum/download/file.php?id=9461693'],

        ['id' => 7, 'name' => ' Carhartt Men',
        'description' => '● Display/Screen Size : FHD+ 6.78 165Hz● Chipset : Snapdragon 8 Gen 3● GPU : Adreno 750● RAM / ROM : 12GB/256GB● OS : ROG UI, Android 14',
        'price' => 26990,
        'imageUrl' => 'https://image.goxip.com/ymOoZEQZrF-rzWIgvKDr8iWN1vg=/fit-in/500x500/filters:format(jpg):quality(80):fill(white)/https:%2F%2Fcdn-images.farfetch-contents.com%2F21%2F48%2F45%2F26%2F21484526_51644018_1000.jpg'],

        ['id' => 8, 'name' => 'Carhartt Men ',
        'description' => '● Display/Screen Size :FHD+ 6.7"● Chipset : Exynos2400e● GPU : Xclipse 940● OS : Android 14● RAM / ROM : 8/256',
        'price' => 25900,
        'imageUrl' => 'https://www.prontodenim.com/wp-content/uploads/2020/05/3273518495.jpg'],

        ['id' => 9, 'name' => 'Carhartt Men',
        'description' => '● Display/Screen Size: 6.67"● Chipset: Snapdragon 4 Gen 2● Ram/Rom: 8GB/256GB● OS: Android 14',
        'price' => 9999,
        'imageUrl' => 'https://www.pavementsk8.com/wp-content/uploads/2023/06/2-7.jpg'],

        ['id' => 10, 'name' => 'Carhartt Men ',
        'description' => '● Display/Screen Size : FHD+ 6.67144Hz● Chipset : MediaTek Dimensity 9200+● GPU : Arm Immortalis-G715● RAM / ROM : 12GB/512GB● OS : MIUI 14',
        'price' => 19990,
        'imageUrl' => 'https://d2cva83hdk3bwc.cloudfront.net/palace-x-carhartt-wip-s-s-pocket-t-shirt-black-2.jpg'],





    ];

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //ฟังก์ชันนี้แสดงหน้ารายการสินค้าทั้งหมด โดยส่งข้อมูลสินค้าจาก $this->products ไปยังหน้า 'Products/Index'.
        return Inertia::render('Products/Index', ['products' => $this->products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     //โค้ดนี้ใช้ดึงข้อมูลสินค้าจาก $this->products ด้วย ID ($id) โดยใช้ firstWhere() หากไม่พบสินค้า จะส่ง HTTP 404 (Not Found)
     //และถ้าพบสินค้า จะส่งข้อมูลไปยังหน้าที่เรนเดอร์ด้วย Inertia.js สำหรับแสดงรายละเอียดสินค้า.
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product)
        {abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
