<?php
  
namespace App\Http\Controllers;

use App\Models\Ticket;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $ticket = Ticket::findOrFail($request->ticket_id);
        $data = [
            'title' => 'SUNQAR AVIALINES',
            'date' => date('m/d/Y'),
            'ticket' => $ticket
        ];


        $pdf = PDF::loadView('pdf', $data);
    
        return $pdf->download('sunqar_avialines_checklist.pdf');
    }
}