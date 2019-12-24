<?php
require('fpdf182/fpdf.php');
//A4 width ;219mm
//default margin :10mm each side
//writable horizontal :219.(10*2) = 189 mm

$pdf = new FPDF('P','mm','A4');

$pdf ->AddPage();
//set font to arial,bold, 14pt
$pdf ->SetFont('Arial','B',14);
 //Cell (width, height, text, border, end line,[align])
 $pdf ->Cell(130  ,5,'GERS GARAGE',0,0);
 $pdf ->Cell(59  ,5,'INVOICE',0,1); //end of line 

 //Set font to arial, regular, 12pt
 $pdf ->SetFont('Arial','',12);

 $pdf ->Cell(130  ,5,'[Street Address]',0,0); 
 $pdf ->Cell(59  ,5,'',0,1); //end of line 

 $pdf ->Cell(130  ,5,'[City,Country,ZIP]',0,0); 
 $pdf ->Cell(25 ,5,'Date',0,0 ); 
 $pdf ->Cell(34  ,5,'dd/mm/yyyy',1,1); //end of line 

 $pdf ->Cell(130  ,5,'Phone[+1234567]',0,0); 
 $pdf ->Cell(25 ,5,'Invoice#',0,0); 
 $pdf ->Cell(34  ,5,'[+1234567]',0,1); //end of line 

 $pdf ->Cell(130  ,5,'Fax[+1234567]',0,0); 
 $pdf ->Cell(25 ,5,'Customer ID',0,0); 
 $pdf ->Cell(34  ,5,'[1234567]',0,1); //end of line 

 //make a dummy empty cell as a vertical spacer
 $pdf ->Cell(189  ,10,'',0,1); //end of line 

 //billing address
 $pdf ->Cell(100 ,5,'Bill to',0,1); //end of line 
 
 //add dummy cell at beginning of each line for intendation
 $pdf ->Cell(10   ,5,'',0,0); 
 $pdf ->Cell(10   ,5,'CUSTOMER: ',0,1); 

 $pdf ->Cell(10   ,5,'',0,0); 
 $pdf ->Cell(10   ,5,'Mob No: ',0,1); 

 $pdf ->Cell(10   ,5,'',0,0); 
 $pdf ->Cell(10   ,5,'Vehicle: ',0,1); 

 $pdf ->Cell(10   ,5,'',0,0); 
 $pdf ->Cell(10   ,5,'Licence',0,1); 

 //make a dummy empty cell as a vertical spacer
 $pdf ->Cell(189  ,10,'',0,1); //end of line 

 //invoice contents
 $pdf ->SetFont('Arial','B',12);

 $pdf ->Cell(130   ,5,'Description',1,0); 
 $pdf ->Cell(25   ,5,'Taxable',1,0); 
 $pdf ->Cell(34   ,5,'Amount',1,1); 

 $pdf ->SetFont('Arial','',12);

 //Numbers are right -aligned so we give 'R' after new line parameter
 
 $pdf ->Cell(130   ,5,'Annual Service',1,0); 
 $pdf ->Cell(25   ,5,'-',1,0); 
 $pdf ->Cell(34   ,5,'200',1,1,'R'); 

 $pdf ->Cell(130   ,5,'Major Service',1,0); 
 $pdf ->Cell(25   ,5,'-',1,0); 
 $pdf ->Cell(34   ,5,'300',1,1,'R'); 

 $pdf ->Cell(130   ,5,'Repair',1,0); 
 $pdf ->Cell(25   ,5,'-',1,0); 
 $pdf ->Cell(34   ,5,'250',1,1,'R'); 

 //summary
 $pdf ->Cell(130   ,5,'',0,0); 
 $pdf ->Cell(25   ,5,'Subtotal',0,0); 
 $pdf ->Cell(4   ,5,'$',1,0); 
 $pdf ->Cell(30  ,5,'750',1,1,'R'); 

 $pdf ->Cell(130   ,5,'',0,0); 
 $pdf ->Cell(25   ,5,'Taxable',0,0); 
 $pdf ->Cell(4   ,5,'$',1,0); 
 $pdf ->Cell(30  ,5,'0',1,1,'R'); 

 $pdf ->Cell(130   ,5,'',0,0); 
 $pdf ->Cell(25   ,5,'Tax Rate',0,0); 
 $pdf ->Cell(4   ,5,'$',1,0); 
 $pdf ->Cell(30  ,5,'10%',1,1,'R'); 

 $pdf ->Cell(130   ,5,'',0,0); 
 $pdf ->Cell(25   ,5,'Total Due',0,0); 
 $pdf ->Cell(4   ,5,'$',1,0); 
 $pdf ->Cell(30  ,5,'750',1,1,'R'); 

 


 




 


 $pdf ->Output();
?>