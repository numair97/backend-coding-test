<?php

namespace App\Http\Controllers;

use App\Services\Attendance\AttendanceService;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Imports\AttendanceImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function __construct(public AttendanceService $attendanceService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if (!$request->has('file')) {
            return response()->json('No file provided', 400);
        }

        $fileName = $request->query('file');
        
        if (!Storage::exists($fileName)) {
            return response()->json('File not found', 404);
        }
        $this->attendanceService->uploadAttendance($fileName);
       
        return response()->json('Attendance data stored successfully', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
