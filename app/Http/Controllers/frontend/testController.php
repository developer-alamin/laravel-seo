<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Smalot\PdfParser\Parser;

class testController extends Controller {
	function test() {
		$parser = new Parser();
		$pdf = $parser->parseFile(public_path("file/test.pdf"));
		//dd($pdf->getDetails());
		// $firstpage = $pdf->getPages()[0];
		// $data = $firstpage->getDataTm();
		dd($pdf->getPages()[0]->getText());

	}
}
//20001210488000396
// 0 => "1"
// 1 => "0"
// 2 => "0"
// 3 => "-1"
// 4 => "105"
// 5 => "102"