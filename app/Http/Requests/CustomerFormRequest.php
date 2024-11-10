<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CustomerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $errors = [
            'cus_or_lead' => 'required',
            'account_name' => 'required',
            'email' => 'required',
            'eft' => 'required',
            'cus_type' => 'required',
            'status' => 'required',
            'refferal_src' => 'required',
            'pay_type' => 'required',
            'carrier_name' => 'required',
            'policy_no' => 'required',
            'due_amount' => 'required',
            'due_date' => 'required',
            'paid_date' => 'required',
            'mode_of_pay' => 'required',
            'received_by' => 'required',
            'new_due_amount' => 'required',
            'new_due_date' => 'required',
            'driver_name' => 'required',
            'relationship' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'ss_no' => 'required',
            'id_no' => 'required',
            'id_type' => 'required',
            'emp_or_bsn_name' => 'required',
            'type_of_bsn_or_work' => 'required',
            'ein_no' => 'required',
            'bsn_work_phone' => 'required',
            'pa_street_address' => 'required',
            'pa_city' => 'required',
            'pa_country' => 'required',
            'pa_state' => 'required',
            'pa_zip_code' => 'required',
            'pa_rent_or_own' => 'required',

            // 'ma_street_address' => 'required',
            // 'ma_city' => 'required',
            // 'ma_country' => 'required',
            // 'ma_state' => 'required',
            // 'ma_zip_code' => 'required',
            // 'ma_rent_or_own' => 'required',

            // 'wb_street_address' => 'required',
            // 'wb_city' => 'required',
            // 'wb_country' => 'required',
            // 'wb_state' => 'required',
            // 'wb_zip_code' => 'required',
            // 'wb_rent_or_own' => 'required',

            'ins_com.*' => 'required',
            'ins_policy_no' => 'required',
            'ins_type' => 'required',
            'ins_year' => 'required',
            'ins_make' => 'required',
            'ins_model' => 'required',
            'ins_vin_no' => 'required',
            'liability_limit' => 'required',
            'comp_deductible' => 'required',
            'collison_deductible' => 'required',
            'um_uim_bi_limit' => 'required',
            'um_uim_pd' => 'required',
            'rent_amount' => 'required',
            'towing_amount' => 'required',
            'gap' => 'required',
            'pip_amount' => 'required',
            'med_amount' => 'required',
            'lh_item_no' => 'required',
            'lh_account' => 'required',
            'lh_address' => 'required',
            'lh_city' => 'required',
            'lh_state' => 'required',
            'lh_zip' => 'required',
            'lh_con_name' => 'required',
            'lh_phone_no' => 'required',
            'lh_email' => 'required',
            'lh_item_no' => 'required',
            'base_premium' => 'required',
            'crime_prevention_fee' => 'required',
            'policy_fee' => 'required',
            'agency_fee' => 'required',
            'other_fees' => 'required',
            'total_premium' => 'required',
            'effective_date' => 'required',
            'expiry_date' => 'required',
            'reminder_date' => 'required',
            'canc_notice_date' => 'required',
            'da_due_date' => 'required',
            'da_date_paid' => 'required',
            'new_amount_due' => 'required',
        ];
        

        return $errors;
    }

    public function messages(){

        $messages = [
            'cus_or_lead.required' => 'customer or lead field is required...!'
        ];

        return $messages;
    }
}
