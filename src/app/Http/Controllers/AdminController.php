<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    public function admin() {
        $text = null;
        $gender = null;
        $content = null;
        $date = null;
        $contacts = Contact::with('category')->orderBy('created_at', 'desc')->simplePaginate(7);
        // dd($contacts);
        $categories = Category::all();
        // dd($category);
        return view('admin', compact('contacts', 'categories','text', 'gender','content', 'date'));
    }

    public function search(Request $request) {
        // dd($request);
        $text = ($request->text_search) ? $request->text_search : null;
        $gender = ($request->gender_search) ? $request->gender_search : null;
        $content = ($request->content_search) ? $request->content_search : null;
        $date = ($request->date_search) ? $request->date_search : null;

        $categories = Category::all();
        $contacts = Contact::with('category')
        ->TextSearch($request->text_search)
        ->ContentSearch($request->content_search)
        ->GenderSearch($request->gender_search)
        ->DateSearch($request->date_search)
        ->simplePaginate(7);
        // dd($contacts);

        return view('admin', compact('contacts', 'categories', 'text', 'gender','content', 'date'));
    }

    public function export(Request $request)
    {
        $query = Contact::query();

        $query->TextSearch($request->text_search)
        ->ContentSearch($request->content_search)
        ->GenderSearch($request->gender_search)
        ->DateSearch($request->date_search);

        $csvData = $query->get()->toArray();

        $csvHeader = [
            'id', 'category_id', 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'created_at', 'updated_at'
        ];

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $createCsvFile = fopen('php://output', 'w');

            mb_convert_variables('SJIS-win', 'UTF-8', $csvHeader);

            fputcsv($createCsvFile, $csvHeader);

            foreach ($csvData as $csv) {
                $csv['created_at'] = Date::make($csv['created_at'])->setTimezone('Asia/Tokyo')->format('Y/m/d H:i:s');
                $csv['updated_at'] = Date::make($csv['updated_at'])->setTimezone('Asia/Tokyo')->format('Y/m/d H:i:s');
                fputcsv($createCsvFile, $csv);
            }

            fclose($createCsvFile);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="contacts.csv"',
        ]);

        return $response;
    }

}
