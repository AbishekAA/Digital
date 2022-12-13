<?php
require('fpdf.php');


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();



//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',11);

//Cell(width , height , text , border , end line , [align] )

   
    // $pdf->Image('elaadmin-master\images\carp.png',10,5,50,0);
    // $pdf->images('mh_logo.jpeg',80,5,50,0);
    // $pdf->Ln(); 
    // $pdf->SetFont('ARIAL','',12);
    // $pdf->Cell(100,2,'34 Rodwell Road, Suva, Fiji, GPO Box 299 Suva, Fiji','',0,'L');$pdf->Ln();
    // $pdf->Cell(100,2,'Tel (679) 3313122 ','',0,'L');$pdf->Ln();
    // $pdf->Cell(100,2,'Website: www.carpenters.com.fj  Email: info@carpenters.com.fj ','',0,'L');$pdf->Ln();

    // // $pdf->Cell(80,2,'','',0,'L');$pdf->SetFont('ARIAL','',7);$pdf->Cell(50,2,'','',0,'L');$pdf->Ln();
    // // $pdf->SetFont('ARIAL','',6);$pdf->Cell(80,2,'TELEPHONE: 2295697 FAX: 3303990','',0,'L');$pdf->SetFont('ARIAL','',7);$pdf->Cell(50,2,'of Exemption Co. 34','',0,'L');$pdf->Ln();
    // // // $pdf->Image('cards.jpeg',150,15,40,0);
    // $pdf->Ln();
    // $pdf->SetFont('Times','B',8);
    // $pdf->Cell(20,5,'ACCOUNT No.','LTRB',0,'L');
    // $pdf->Cell(120,5,'','',0,'L');
    // $pdf->Cell(40,5,'SERVICE CHARGE RATE','',0,'R');
    // $pdf->Ln();
 









$pdf->Cell(190	,5,'CARPENTERS WATERS (FIJI) PTE LIMITED',0,0);
$pdf->Cell(130	,5,'',0,1);//end of line

$pdf->Cell(189	,10,'',0,1);//end of line


$pdf->Cell(100	,5,'34 Rodwell Road, Suva, Fiji, GPO Box 299 Suva, Fiji',0,1);
$pdf->Cell(100	,5,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[dd/mm/yyyy]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(189	,10,'',0,1);//end of line



$pdf->Cell(130	,5,'Name',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Address',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Ln();//end of line

$pdf->Cell(130	,5,'Dear Name',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(189	,10,'',0,1);//end of line

$pdf->Cell(130	,5,'We have much pleasure in confirming the following terms and conditions of your employment subject to',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'the under-mentioned:',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line


// //make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

// $pdf->Cell(130,5,'Position:');$pdf->Cell(120	,5,'The position offered to you is General Worker on a flexi time basis');
// $pdf->Cell(130,5,'The position offered to you is General Worker on a flexi time basis');
// $pdf->Cell(34,5);//end of line

// // $pdf->Cell(80,5,'',0,0);
// $pdf->Cell(130	,5,'whereby you shall attend work as and when required.',0,0);
// $pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(40,5,'Position:','',0,'L');$pdf->Cell(60,5,'The position offered to you is General Worker on a flexi time basis','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'whereby you shall attend work as and when required.','',0,'L');$pdf->Ln();$pdf->Ln();

	
$pdf->Cell(40,5,'Commencement:','',0,'L');$pdf->Cell(60,5,'Your appointment will be effective from 14th February 2022 till 30th','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,' April 2022.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'Termination:','',0,'L');$pdf->Cell(60,5,'We will issue you a 24 hours termination notice should we find your','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'services unsatisfactory during this period.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'Wage:','',0,'L');$pdf->Cell(60,5,'Your wage will be $3.28 per hour.','',0,'L');$pdf->Ln();$pdf->Ln();
// $pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'services unsatisfactory during this period.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'Responsibilities:','',0,'L');$pdf->Cell(60,5,'You will be notified of your job responsibilities upon commencement of','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'your employment.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You are expected to perform your job description and duties diligently and','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'to use your best endeavours to promote the interests of the employer in','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'doing so.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'Fiji National Provident','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'You (and the Company) will be required to contribute to the Fiji National','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'Fund:','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'Provident Fund in accordance with the provisions of the FNPF Act.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'Disciplinary Procedure:','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'The employers disciplinary procedure is contained in full in the Staff','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'Handbook and is summarised as follows: -','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'a)','',0,'L');$pdf->Cell(60,5,'if an employee acts inappropriately or unacceptably;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->SetFont('Times', '');$pdf->Cell(7,5,'I','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'the employee may be summarily dismissed and will not be','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->SetFont('Times', '');$pdf->Cell(7,5,'','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'entitled to payment in lieu of notice;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->SetFont('Times', '');$pdf->Cell(7,5,'II','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'the employee may: -','',0,'L');$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();


//add island chill logo and address



$pdf->AddPage();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'A.','',0,'L');$pdf->Cell(60,5,'be given a first written warning for a first offence','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'B.','',0,'L');$pdf->Cell(60,5,'be given a final written warning for a second offence','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'C.','',0,'L');$pdf->Cell(60,5,'may then have an explanation interview with his/her','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'manager','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'D','',0,'L');$pdf->Cell(60,5,'may have a further interview in which his/her','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'employment is terminated.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'b)','',0,'L');$pdf->Cell(60,5,'No warning will be held against an employee for more than 12','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'months.','',0,'L');$pdf->Ln();$pdf->Ln();


//add bullet points
$pdf->Cell(40,5,'Summary Dismissal:','',0,'L');$pdf->Cell(60,5,'The employer may summarily dismiss the employee without notice: -','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'where the employee is guilty of gross misconduct;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for willful disobedience to lawful orders given by the employer;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for lack of skill or qualification which the employee expressly or by','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'implication warranted to possess;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for continual or habitual absence from work without the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'permission of the employer and without other reasonable excuse.','',0,'L');$pdf->Ln();$pdf->Ln();
//

$pdf->Cell(40,5,'Grievance Handling','',0,'L');$pdf->Cell(60,5,'The employers grievance handling procedure is contained in full in','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'Procedure:','',0,'L');$pdf->Cell(60,5,'the Staff Handbook, and is summarised as follows:','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'a)','',0,'L');$pdf->Cell(60,5,'if an employee has a grievance, dispute or matter to raise with the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'employer, she/he should approach his/her immediate supervisor or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'foreman who will endeavour to settle the matter;','',0,'L');$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'b)','',0,'L');$pdf->Cell(60,5,'if the matter is unsettled within 24 hours, the employee may bring','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'the matter to the attention of the Divisional General Manager or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'Departmental Manager who will endeavour to settle the matter;','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'c)','',0,'L');$pdf->Cell(60,5,'if the matter is unsettled within 24 hours, the employee may bring','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'the matter to the attention of the Managing Director or his','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'representative;','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'d)','',0,'L');$pdf->Cell(60,5,'if the matter is not settled within two weeks of the date of referral','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'to the Managing Director, the grievance may be referred to','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'mediation in the Mediation Unit established under the Employment','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'Relations Promulgation 2007. The employee must first exhaust the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'internal appeal procedures before the grievance is referred to','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'mediation.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(40,5,'Force Majeure','',0,'L');$pdf->Cell(60,5,'The employee understands and agrees that their job may end without','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'notice, or payment in lieu of notice, if a natural disaster, workplace fire,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'flood, explosion, pandemic, strikes, labour disputes, war, riot, national,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'emergency or other similar major events described as Acts of God which,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'are beyond the employer’s control occur, making it impossible for','',0,'L');$pdf->Ln();
























$pdf->Output();





















?>
