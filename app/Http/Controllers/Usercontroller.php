<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * ส่งหน้าwed.php ให้ไปทำงานที่index Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * ให้ข้อมูลผู้ใช้กรอกเข้า ฟอม Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * เอาของมูลจากฟอมนั้นเก็บลงฐานข้อมูล Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * โชว์สินค้าของหน้าอันนั้น Display the specified resource.
     */
    public function show(string $user)
    {
        return "User Page" .$user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
