<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Create a customer record
        $customer = Customer::create([
            'account_name' => $row[0],
            'email' => $row[1],
            'cus_or_lead' => $row[2], // Include all customer fields
            'eft' => $row[3],
            'cus_type' => $row[4],
            'referral_src' => $row[5],
            'status' => $row[6],
        ]);

        // Create a physical address record and associate it with the customer
        $customer->physical_address()->create([
            'type_of_address' => $row[7],
            'pa_street_address' => $row[8],
            'pa_city' => $row[9],
            'pa_country' => $row[10],
            'pa_state' => $row[11],
            'pa_zip_code' => $row[12],
            'pa_rent_or_own' => $row[13],
        ]);

            $customer->payment_detail()->create([
            'typ_of_pay' => $row[14],
            'carrier_name' => $row[15],
            'policy_num' => $row[16],
            'due_amount' => $row[17],
            'due_date' => $row[18],
            'paid_date' => $row[19],
            'mode_of_pay' => $row[20],
            'received_by' => $row[21],
            'new_due_amount' => $row[22],
            'total_premium' => $row[23],
            'base_premium' => $row[24],
            'type' => $row[25],
            'Amount_Paid' => 77,
            // 'new_due_date' => $row[27],
        ]);

        $customer->driver_detail()->create([
          
        ]);

        $customer->insured_items()->create([
          
        ]);

        $customer->lien_info()->create([
          
        ]);

        $customer->premium_calculation()->create([
          
        ]);

        $customer->date_and_amount()->create([
          
        ]);

        return $customer; // Return the customer model
    }
}
