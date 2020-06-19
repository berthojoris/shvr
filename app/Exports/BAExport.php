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
            'Nama Lengkap',
            'Instagram',
            'Email',
            'Telp',
            'Jenis Kelamin',
            'Alamat',
            'Provinsi',
            'Kota',
            'Kode Pos',
            'Pekerjaan',
            'Pertanyaan 1',
            'Pertanyaan 2',
            'Pertanyaan 3',
            'Pertanyaan 4',
            'Pertanyaan 5',
            'Pertanyaan 6',
            'Pertanyaan 7',
            'Pertanyaan 8',
            'Pertanyaan 9',
            'Pertanyaan 10',
            'Pertanyaan 11',
            'Pertanyaan 12',
            'Pertanyaan 13',
            'Tanggal Submit',
        ];
    }
}
