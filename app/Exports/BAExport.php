<?php

namespace App\Exports;

use Carbon\Carbon;
use App\BrandAmbassador;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BAExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return BrandAmbassador::all();
    }

    public function map($ba) : array {
        return [
            $ba->id,
            $ba->full_name,
            $ba->instagram,
            $ba->email,
            $ba->phone,
            $ba->gender,
            $ba->address,
            $ba->provinceName->name,
            $ba->cityName->name,
            $ba->postal_code,
            $ba->job,
            $ba->question_1,
            $ba->question_2,
            $ba->question_3,
            $ba->question_4,
            $ba->question_5,
            $ba->question_6,
            $ba->question_7,
            $ba->question_8,
            $ba->question_9,
            $ba->question_10,
            $ba->question_11,
            $ba->question_12,
            $ba->question_13,
            Carbon::parse($ba->created_at)->toFormattedDateString()
        ] ;
    }

    public function headings(): array
    {
        return [
            '#',
            'Full Name',
            'Instagram',
            'Email',
            'Phone',
            'Gender',
            'Address',
            'Province',
            'City',
            'Postal',
            'Job',
            'Question 1',
            'Question 2',
            'Question 3',
            'Question 4',
            'Question 5',
            'Question 6',
            'Question 7',
            'Question 8',
            'Question 9',
            'Question 10',
            'Question 11',
            'Question 12',
            'Question 13',
            'Created',
        ];
    }
}
