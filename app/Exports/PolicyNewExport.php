<?php

namespace App\Exports;

use App\Models\PolicyNew;
use Maatwebsite\Excel\Concerns\FromCollection;

class PolicyNewExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PolicyNew::all();
    }
}
