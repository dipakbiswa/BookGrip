<?php

namespace App\Http\Controllers;

use App\Models\Interior;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

class PdfController extends Controller
{
    public function index($id){
        return view('pages.create-pdf', compact('id'));
    }

    public function create(Request $request){
        $name = $request->name;
        $number = $request->number;
        $id = $request->id;
        $size = $request->size;

        //Blank
        if($id == 1){
            $orientation = $request->orientation;
            
            $fpdf = new Fpdf();
            for($i = 0; $i < $number; $i++){
                $fpdf->AddPage($orientation, $size);
            }
            $fpdf->Output("I", $name.'.pdf');
            exit;
        }

        //Numbered
        if($id == 2){
            $orientation = $request->orientation;
            // $size = $request->size;
            $fpdf = new Fpdf();
            for($i = 1; $i <= $number; $i++){
                $fpdf->AddPage('p', 'A4');
                $fpdf->SetFont('Courier','', 15);
                $fpdf->SetY(275);
                $fpdf->SetX(100);
                $fpdf->Cell(0, 0, $i, 0, 2, 'c');
            }
            $fpdf->Output("I", $name.'.pdf');
            exit;
        }

        //2 Row Check and other interor
        if(($id == 3) or ($id == 4) or ($id == 5) or ($id == 6) or ($id == 34) or ($id == 35) or ($id == 36) or ($id == 37) or ($id == 38) or ($id == 39)){
            $interior = Interior::find($id);
            $orientation = $request->orientation;
            // $size = $request->size;
            $fpdf = new Fpdf();
            for ($i=0; $i < $number; $i++) { 
                //Page size A4 and Orientation Portrait
                if ($size==='A4') {
                    $fpdf->AddPage('P', $size);
                    $fpdf->SetFont('Arial', 'B', 14);
                    
                    $fpdf->SetFontSize(20);
                    $fpdf->Image($interior->png_image, 0, 0, 210, 300);
                }
    
                //Page size Letter and Orientation Portrait
                if ($size ==='Letter') {
                    $fpdf->AddPage('P', $size);
                    $fpdf->SetFont('Arial', 'B', 14);
                    
                    $fpdf->SetFontSize(20);
                    $fpdf->Image($interior->png_image, 0, 0, 215, 265);
                }
    
                //Page size Legal and Orientation Portrait
                if ($size ==='Legal') {
                    $fpdf->AddPage('P', $size);
                    $fpdf->SetFont('Arial', 'B', 14);
                    
                    $fpdf->SetFontSize(20);
                    $fpdf->Image($interior->png_image, 0, 0, 215, 335);
                }
            }
            $fpdf->Output('I',$name.'.pdf');
            exit;
        }

        //Comic
        if(($id == 7) or ($id == 8) or ($id == 9) or ($id == 10) or ($id == 11) or ($id == 12)){
            $fpdf = new Fpdf();
            $interior = Interior::find($id);
            if($size == "A4"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A4');
                    $fpdf->Image($interior->png_image, 0, 0, 210, 300);
                }
            }
            if($size == "A3"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A3');
                    $fpdf->Image($interior->png_image, 0, 0, 300, 420);
                }
            }
            if($size == "A5"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A5');
                    $fpdf->Image($interior->png_image, 0, 0, 150, 210);
                }
            }
            if($size == "Letter"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Letter');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 280);
                }
            }
            if($size == "Legal"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Legal');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 360);
                }
            }
            
            $fpdf->Output('I',$name.'.pdf');
            exit;
        }

        //Maze
        //alphabate maze
        if($id == 13){
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            

        }

        //square maze
        if($id == 14){
            $type = $request->difficulty;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'));
            // return $pdf->stream();
        }

        //circle maze
        if($id == 15){
            $type = $request->difficulty;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'));
            // return $pdf->stream();

        }

        //Hexa Bridge Maze
        if($id == 16){
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'));
            // return $pdf->stream();

        }

        //Cross Maze
        if($id == 17){
            $type = $request->difficulty;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'));
            // return $pdf->stream();

        }

        //extream wave Maze
        if($id == 18){
            $type = $request->type;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'));
            // return $pdf->stream();

        }

        //square bridge Maze
        if($id == 19){
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'));
            // return $pdf->stream();

        }


        //heart Maze
        if($id == 20){
            $algorithm = $request->algorithm;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'algorithm', 'size'));
            // return $pdf->stream();
            
        }


        //Triangular Maze
        if($id == 21){
            $type = $request->difficulty;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('type', 'number', 'id', 'size'));
            // return $pdf->stream();

        }

        //Bunny Maze
        if($id == 22){
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'size'));
            // return $pdf->stream();

        }

        //Hexa Maze
        if($id == 23){
            $type = $request->difficulty;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.maze', compact('number', 'id', 'type', 'size'));
            // return $pdf->stream();

        }


        //To Do
        if(($id == 24) or ($id == 30) or ($id == 31) or ($id == 32) or ($id == 33)){
            $fpdf = new Fpdf();
            $interior = Interior::find($id);
            if($size == "A4"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A4');
                    $fpdf->Image($interior->png_image, 0, 0, 210, 280);
                }
            }
            if($size == "A3"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A3');
                    $fpdf->Image($interior->png_image, 0, 0, 300, 400);
                }
            }
            if($size == "A5"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A5');
                    $fpdf->Image($interior->png_image, 0, 0, 150, 200);
                }
            }
            if($size == "Letter"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Letter');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 265);
                }
            }
            if($size == "Legal"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Legal');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 335);
                }
            }

            $fpdf->Output('I',$name.'.pdf');
            exit;
        }

        //Games
        if(($id == 25) or ($id == 26) or ($id == 27) or ($id == 28)){
            $fpdf = new Fpdf();
            $interior = Interior::find($id);
            if($size == "A4"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A4');
                    $fpdf->Image($interior->png_image, 0, 0, 210, 280);
                }
            }
            if($size == "A3"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A3');
                    $fpdf->Image($interior->png_image, 0, 0, 300, 400);
                }
            }
            if($size == "A5"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A5');
                    $fpdf->Image($interior->png_image, 0, 0, 150, 200);
                }
            }
            if($size == "Letter"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Letter');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 265);
                }
            }
            if($size == "Legal"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Legal');
                    $fpdf->Image($interior->png_image, 0, 0, 216, 335);
                }
            }
            
            $fpdf->Output('I',$name.'.pdf');
            exit;
        }

        //Math
        if(($id == 40) or ($id == 41) or ($id == 42)){
            $type = $request->difficulty;
            $title = $request->title;
            $problem = $request->problem;
            if($size == 'A3'){
                $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A4'){
                $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == 'A5'){
                $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Letter'){
                $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == 'Legal'){
                $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.math', compact('number', 'id', 'type', 'title', 'problem'));
            // return $pdf->stream();

        }

        //Animal Coloring Books
        if(($id == 43)){
            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.coloring-book', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.coloring-book', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.coloring-book', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.coloring-book', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.coloring-book', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
        }


        //Animal big or small
        if(($id == 44)){
            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.big-or-small', compact('number', 'id'));
            // return $pdf->stream();
        }

        //More or less cat and duck
        if(($id == 45)){
            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
            // $pdf = Pdf::loadView('pdf.more-or-less', compact('number', 'id', 'size'));
            // return $pdf->stream();
        }

        //Time worksheet
        if(($id == 46)){
            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.time-worksheet', compact('number', 'id', 'size'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.time-worksheet', compact('number', 'id', 'size'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.time-worksheet', compact('number', 'id', 'size'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.time-worksheet', compact('number', 'id', 'size'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.time-worksheet', compact('number', 'id', 'size'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }

        }


        //Paid Purchesed Interiors
        if(($id == 47) or ($id == 48) or ($id >= 50 and $id <=201)){
            $fpdf = new Fpdf();
            $interior = Interior::find($id);
            if($size == "A4"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A4');
                    $fpdf->Image($interior->png_image, 0, 0, 210, 280);
                }
            }
            if($size == "A3"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A3');
                    $fpdf->Image($interior->png_image, 0, 0, 295, 400);
                }
            }
            if($size == "A5"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'A5');
                    $fpdf->Image($interior->png_image, 0, 0, 146, 200);
                }
            }
            if($size == "Letter"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Letter');
                    $fpdf->Image($interior->png_image, 0, 0, 214, 265);
                }
            }
            if($size == "Legal"){
                for ($i=0; $i < $number; $i++) { 
                    $fpdf->AddPage('P', 'Legal');
                    $fpdf->Image($interior->png_image, 0, 0, 214, 335);
                }
            }
            $fpdf->Output('I',$name.'.pdf');
            exit;
        }

        //Sudoku
        if(($id == 49)){
            $type = $request->difficulty;
            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.sudoku', compact('number', 'id', 'size', 'type'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.sudoku', compact('number', 'id', 'size', 'type'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.sudoku', compact('number', 'id', 'size', 'type'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.sudoku', compact('number', 'id', 'size', 'type'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.sudoku', compact('number', 'id', 'size', 'type'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }
        }

        //Riddle
        if(($id == 203)){
            $withAnswer = $request->answer;
            $font = $request->font;

            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.riddle', compact('number', 'id', 'size', 'withAnswer', 'font'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
        }

        //Moral Story
        if(($id == 204)){
            $titleFont = $request->titleFont;
            $titleColor = $request->titleColor;

            $storyFont = $request->storyFont;
            $storyColor = $request->storyColor;

            $moralFont = $request->moralFont;
            $moralColor = $request->moralColor;

            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.moral-story', compact('number', 'id', 'size', 'titleFont', 'titleColor', 'storyFont', 'storyColor', 'moralFont', 'moralColor'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
            if($size == "A3"){
                $pdf = Pdf::loadView('pdf.moral-story', compact('number', 'id', 'size', 'titleFont', 'titleColor', 'storyFont', 'storyColor', 'moralFont', 'moralColor'))->setPaper('a3', 'portrait');
                return $pdf->stream();
            }
            if($size == "A5"){
                $pdf = Pdf::loadView('pdf.moral-story', compact('number', 'id', 'size', 'titleFont', 'titleColor', 'storyFont', 'storyColor', 'moralFont', 'moralColor'))->setPaper('a5', 'portrait');
                return $pdf->stream();
            }
            if($size == "Letter"){
                $pdf = Pdf::loadView('pdf.moral-story', compact('number', 'id', 'size', 'titleFont', 'titleColor', 'storyFont', 'storyColor', 'moralFont', 'moralColor'))->setPaper('letter', 'portrait');
                return $pdf->stream();
            }
            if($size == "Legal"){
                $pdf = Pdf::loadView('pdf.moral-story', compact('number', 'id', 'size', 'titleFont', 'titleColor', 'storyFont', 'storyColor', 'moralFont', 'moralColor'))->setPaper('legal', 'portrait');
                return $pdf->stream();
            }

        }

        //General Knowledge Quiz
        if(($id == 205)){
            // $titleFont = $request->titleFont;
            // $titleColor = $request->titleColor;

            // $storyFont = $request->storyFont;
            // $storyColor = $request->storyColor;

            // $moralFont = $request->moralFont;
            // $moralColor = $request->moralColor;
            $difficulty = $request->difficulty;
            $type = $request->type;

            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.quizs.general-knowledge', compact('number', 'id', 'size', 'difficulty', 'type'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
        }

        //Jokes
        if(($id == 206)){
            $font = $request->font;
            $color = $request->color;
            $jokeType = $request->jokeType;

            if($size == "A4"){
                $pdf = Pdf::loadView('pdf.jokes', compact('number', 'id', 'size', 'font', 'color', 'jokeType'))->setPaper('a4', 'portrait');
                return $pdf->stream();
            }
        }


        
    }
}
