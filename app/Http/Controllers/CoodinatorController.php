<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use PhpOffice\PhpWord\IOFactory;

class CoodinatorController extends Controller
{
    public function home()
    {
        return view('coodinator.home');
    }

    public function showcontribution()
    {
        $user = auth()->user();
        $userFaculty = $user->faculty;
        $contributions = Contribution::whereHas('user', function ($query) use ($userFaculty) {
            $query->where('faculty', $userFaculty);
        })->get();
        // Chuyển đổi trực tiếp từ tệp Word sang HTML và lưu vào mảng
        $htmlContents = [];
        foreach ($contributions as $contribution) {
            $wordFilePath = storage_path('app/public/'.$contribution->word_file_path);
            $phpWord = IOFactory::load($wordFilePath);
            $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
            if (is_array($htmlContents)) {
                // Tạo một mảng mới để lưu các phần tử đã được xem trước
                $previewHtmlContent = [];
                foreach ($htmlContents as $content) {
                    // Xem trước 200 ký tự của mỗi phần tử trong mảng
                    $previewHtmlContent[] = mb_substr($content, 0, 200);
                    $htmlContents[$contribution->id] = $previewHtmlContent;
                }
            }
        }

        return view('coodinator.contribution', ['contributions' => $contributions, 'user' => $user, 'htmlContents' => $htmlContents]);
    }
}
