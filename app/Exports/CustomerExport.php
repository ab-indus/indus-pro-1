<?php

namespace App\Exports;

use App\Models\Customer;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CustomerExport implements FromView
{
    public function view(): View
    {
        return view('exports.customer', [
            'customers' => Customer::all()
        ]);
    }
}
