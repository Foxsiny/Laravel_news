<?php




declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;



class OrderController extends Controller


{
/**
 * Display a listing of the resource.
 */
public function index(): View
{
    return view('order.index');
}

/**
 * Show the form for creating a new resource.
 */
public function create(): View
{
    return \view('order.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string'],
    ]);

    return response()->json($request->only(['name', 'tel', 'email', 'description']));
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    return $id;
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
