<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        $page = $request->query('page');
        if ($page === null) {}
    }
    public function show($id)
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25,
        ];
        return response()->json([
            'message' => 'Success',
            'data' => $data,
        ]);
    }
}
