<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'f_name'=>'required|alpha',
            'l_name'=>'required|alpha',
            'birthdate'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric|digits:11|starts_with:09',
            'n_code'=>'required|numeric|digits:10',
            'website'=>'required|string',
            'fa_website'=>'required|string',
            'description'=>'required|string',
            //user only
            'shaba'=>'required|numeric|digits:24',
            'hesab'=>'required|numeric',
            'owner_name'=>'required|alpha',
        ];
    }
    public function attributes()
    {
        return
            [
                'f_name'=>'نام',
                'l_name'=>'نام خانوادگی',
                'birthdate'=>'تاریخ تولد',
                'address'=>'آدرس',
                'phone'=>'شماره همراه',
                'n_code'=>'کد ملی',
                'website'=>'وب سایت',
                'fa_website'=>'نام وب سایت به فارسی',
                'description'=>'توضیحات وب سایت',
                'shaba'=>'شماره شبا',
                'hesab'=>'شماره حساب',
                'owner_name'=>'نام صاحب حساب',
            ];
    }
    public function messages()
    {
        return
            [
                /*'image.image'=>'پسوند فایل انتخاب شده مجاز نمی باشد',*/
            ];
    }
}
