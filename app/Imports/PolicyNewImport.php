<?php

namespace App\Imports;

use App\Models\PolicyNew;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PolicyNewImport implements ToModel
{


    public function model(array $row)
    {
        return new PolicyNew([
            'activeBox' => $row[0],
            'type_of_customer' => $row[1],
            'autopay' => $row[2],
            'new_customer' => $row[3],
            'rewrite' => $row[4],
            'renew' => $row[5],
            'first_name' => !empty($row[6]) ? $row[6] : null,
            'middle_name' => $row[7],
            'last_name' => $row[8],
            'preferred_name' => $row[9],
            'email' => $row[10],
            'phone' => $row[11],
            'dob' => $this->convertExcelDate($row[12]),
            'ssn' => $row[13],
            'zip' => $row[14],
            'type_of_id' => $row[15],
            'dl_id' => $row[16],
            'carrier' => $row[17],
            'policy_number' => $row[18],
            'type_of_policy' => $row[19],
            'insured_items' => $row[20],
            'insured_drivers' => $row[21],
            'excluded_drivers' => $row[22],
            'lien' => $row[23],
            'effective_date' => $this->convertExcelDate($row[24]),
            'expiration_date' => $this->convertExcelDate($row[25]),
            'term_months' => is_numeric($row[26]) ? (int)$row[26] : null,
            'due_date' => $this->convertExcelDate($row[27]),
            'amount_due' => $row[28],
            'base_premium' => $row[29],
            'state_fee_mvca' => $row[30],
            'policy_fee' => $row[31],
            'roadside_assistance_fee' => $row[32],
            'sr22' => $row[33],
            'other_fee' => $row[34],
            'total_premium' => $row[35],
            'annual_premium' => $row[36],
            'paid_today' => $row[37],
            'amount_paid_cc' => $row[38],
            'amount_paid_cash' => $row[39],
            'direct_pay' => $row[40],
            'name_on_card' => $row[41],
            'debit_card' => $row[42],
            'credit_card_name' => $row[43],
            'number_1st_4' => $row[44],
            'number_2nd_4' => $row[45],
            'number_3rd_4' => $row[46],
            'number_4th_4' => $row[47],
            'expiration_1' => $row[48],
            'expiration_2' => $row[49],
            'billing_zip' => $row[50],
            'cvc' => $row[51],
            'notes' => $row[52],
            'user_id' => null,        
        ]);
    }

    private function convertExcelDate($value)
    {
        return is_numeric($value) ? Date::excelToDateTimeObject($value) : null;
    }

    public function startRow(): int
    {
        return 2; // Skip the header row
    }
}
