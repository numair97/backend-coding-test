<?php

namespace App\Services\Attendance;

use App\Imports\AttendanceImport;
use App\Models\Attendance;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Facades\Excel;


class AttendanceService
{
    public function uploadAttendance($fileName)
    {
        $rows = Excel::toArray(new AttendanceImport, $fileName, 'local', \Maatwebsite\Excel\Excel::XLSX);

        foreach ($rows[0] as $row) {
            Attendance::create([
                'id' => $row[0],
                'check_in' => $row[1],
                'check_out' => $row[2],
                'total_hours' => $row[3],
                'employee_id' => $row[4],
                'schedule_id' => $row[5],
                'created_at' => $row[6],
                'updated_at' => $row[7],
            ]);
        }
    }
}
