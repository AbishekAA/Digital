<?php

error_reporting(0);

session_start();
include 'connect.php';
require('fpdf.php');

// $sql = "SELECT * FROM employees WHERE id='{$_SESSION['id']}'";
// $result = mysqli_query($con3,$sql);
// $row = mysqli_fetch_assoc($result);
if(isset($_POST['registerBtn'])){
    $date=date("d");
    $month=date("M");
    $current=date("d/m/Y");
    $year=date("Y");
    $id  = $_POST['id']; 
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $address = $_POST['address'];
    $fnpf = $_POST['fnpf'];
    $tin = $_POST['tin'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $wages=$_POST['wages'];
    $reporting=$_POST['reporting'];
    // $location = $_POST['location'];
    $start_date = $_POST['start_date'];
    $end_date=$_POST['end_date'];
    $status = ' ';
    $gender = $_POST['gender']; 
    $marital_status	= $_POST['marital_status']; 
    $how=$_POST['hoursofwork'];
    $lunch=$_POST['lunch'];
    global $head;
    if($department == 'Carpenters Finance'){
        $head ="assets\images\Finance.png";
    }else if($department == 'Carpenters HO'){
        $head="assets\images\Finance.png";
    }else if($department == 'Carpenters Motors'){
        $head="assets\images\Motors.png";
    }else if($department == 'Carpenters Shipping'){
        $head='assets\images\Shipping.png';
    }else if($department == 'IMEL'){
        $head="assets\images\IMEL.png";
    }else if($department == 'MH'){
        $head="assets\images\MH.png";   
    }else if($department == 'Carpenters Waters'){
        $head="assets\images\Waters.png";
    }else if($department == 'Carpenters Properties'){
        $head="assets\images\Properties.png";
    }else if($department == 'Carptrac'){
        $head="assets\images\Carptrac.png";
    }else if($department == 'One Stop Trading'){
        $head="assets\images\One Stop Trading.png";
    }
   
//pdf start
class PDF extends FPDF{
    
    function Header(){
        global $head;
      //Display Header Content, if page number eqaul 1
      if ($this->PageNo() == 1 ) {
        
        //Header Content
        $this->Image($head,0,0);

        // $this->Line(0,30,210,30);
      
      }
      else{

      }
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        //Page number
        $pagenumber = '{nb}';
        if($this->PageNo() == $pagenumber){
            $this->Cell(173,10, ' FOOTER TEST  -  '.$pagenumber, 0, 0);
        }
    }

    

}
$pdf = new PDF();

$pdf->SetMargins(10,60,10);
$pdf->AliasNbPages();
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
 









// $pdf->Cell(190	,5,'CARPENTERS WATERS (FIJI) PTE LIMITED',0,0);
// $pdf->Cell(130	,5,'',0,1);//end of line

// $pdf->Cell(189	,10,'',0,1);//end of line


// $pdf->Cell(100	,5,'34 Rodwell Road, Suva, Fiji, GPO Box 299 Suva, Fiji',0,1);
$pdf->Cell(100	,5,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,"$current",0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(189	,10,'',0,1);//end of line



$pdf->Cell(130	,5,"$name",0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(130	,5,"$address",0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Ln();//end of line

$pdf->Cell(130	,5,"Dear $fname $lname",0,0);
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
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Position:','',0,'L',);$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,"The position offered to you is $position on a flexi time basis",'',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'whereby you shall attend work as and when required.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);	
$pdf->Cell(40,5,'Commencement:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,"Your appointment will be effective from $start_date till ",'',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5," $end_date",'',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Termination:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'We will issue you a 24 hours termination notice should we find your','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'services unsatisfactory during this period.','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Wage:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,"Your wage will be $ $wages per hour.",'',0,'L');$pdf->Ln();$pdf->Ln();
// $pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'services unsatisfactory during this period.','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Reporting:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,"You will Report to $reporting ",'',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Responsibilities:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You will be notified of your job responsibilities upon commencement of','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'your employment.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You are expected to perform your job description and duties diligently and','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'to use your best endeavours to promote the interests of the employer in','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'doing so.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Fiji National Provident','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'You (and the Company) will be required to contribute to the Fiji National','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(20,5,'Fund:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'Provident Fund in accordance with the provisions of the FNPF Act.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Disciplinary Procedure:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'The employers disciplinary procedure is contained in full in the Staff','',0,'L');$pdf->Ln();
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
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Summary Dismissal:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employer may summarily dismiss the employee without notice: -','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'where the employee is guilty of gross misconduct;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for willful disobedience to lawful orders given by the employer;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for lack of skill or qualification which the employee expressly or by','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'implication warranted to possess;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for continual or habitual absence from work without the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'permission of the employer and without other reasonable excuse.','',0,'L');$pdf->Ln();$pdf->Ln();
//

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Grievance Handling','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employers grievance handling procedure is contained in full in','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Procedure:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'the Staff Handbook, and is summarised as follows:','',0,'L');$pdf->Ln();$pdf->Ln();
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


$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Force Majeure','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employee understands and agrees that their job may end without','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'notice, or payment in lieu of notice, if a natural disaster, workplace fire,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'flood, explosion, pandemic, strikes, labour disputes, war, riot, national,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'emergency or other similar major events described as Acts of God which,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,"are beyond the employer's control occur, making it impossible for",'',0,'L');$pdf->Ln();;$pdf->Ln();;$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,"Employee's",'',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employee has read and agreed with the terms and conditions of ','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,"Acceptance:",'',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'employment agreement and the Staff Handbook.  ','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'The employee acknowledges that he or she has received a copy of this','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'agreement and the Staff Handbook and by signing this agreement accepts ','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'that he or she has read, understand and agreed to the terms of this Contract ','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'and the Staff Handbook. ','',0,'L');$pdf->Ln();$pdf->Ln();$pdf->Ln();




$pdf->Cell(40,5,'We extend to you a very warm welcome and trust that you will find a worthwhile and rewarding career with us.',0,'L');;$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,"DATED this $date day of $month, $year.");$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'I accept employment on the above terms.');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Signature of employee _____________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'In the presence of ________________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Signature of employer ______________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'For and on behalf of CARPENTERS FIJI PTE LIMITED');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Pawan Sharma - Head of Group Human Resources');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'In the presence of ________________________');$pdf->Ln();$pdf->Ln();


$pdf->Output();

//pdf end








    // $sql2 = "SELECT username FROM users WHERE username = '$username'";
    // $sql3 = "SELECT usr_email FROM users WHERE usr_email = '$email'";
    // $result3 = mysqli_query($conn,$sql2);
    // $result4 = mysqli_query($conn,$sql3);
    // if(mysqli_num_rows( $result3 )==0){
    //     if(mysqli_num_rows( $result4 )==0){
    //         if($password == $cpassword){
    //             $query = "INSERT INTO users (username,usr_password,usr_email,usr_location,usr_role,usr_status) VALUES ('$username','$password','$email','$location','$role','1')";
    //             $result2=mysqli_query($conn,$query);
        
    //             if($result2){
    //                 echo "<script>alert('User Created')</script>";
    //                 header('Location:users.php');
    //             }
    //             else{
    //                 echo "<script>alert('Unable to Create User')</script>";
    //                 header('Location:users.php');
    //             }
    //         }
    //         else{
    //             $_SESSION['status'] ='Passwords Dont Match.';
    //             header('Location:users.php');
    //         }
    //     }else{
    //     echo "<script>alert('email already Used By another User')</script>";
    //     header('Location:users.php');
    //     }       
    // }
    // else{
    //     echo "<script>alert('Username already Exists')</script>";
    //     header('Location:users.php');
    // }

    //API
    $final_position=str_replace("_",' ',$position);
    $final_dob=str_replace(".",'/',$dob);
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://10.30.1.4:20012/api/CREATEEMP/0002/$lname/$fname/$final_dob/$tin/$fnpf/$final_position/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$masterid=$response;
echo $response;
curl_close($curl);
    

}
// if(isset($_POST['submitbtn'])) {
  
  
//     $name= $_POST['name'];
//     $address = $_POST['address'];
//     $fnpf = $_POST['fnpf'];
//     $tin = $_POST['tin'];
//     $department = $_POST['department'];
//     $dob = $_POST['dob'];
//     $email = $_POST['email'];
//     $position = $_POST['position'];
//     $location = $_POST['location'];
//     $start_date = $_POST['start_date'];
//     $status = ' ';
//     $gender = $_POST['gender']; 
//     $marital_status	= $_POST['marital_status']; 
//     $id  = $_POST['id']; 
    
   
//     echo"<script>$name</script>";
    
   
  
  
// //   $sql = "INSERT INTO employees ('masterid', 'name', 'address', 'dob', 'fnpf', 'tin', 'email', 'location', 'department', 'position', 'start_date', 'status', 'gender', 'marital_status')
    
// //           VALUES('$masterid','$name','$address','$dob','$fnpf','$tin','$email','$location','$department','$position','$start_date','$status','$gender','$marital_status')";
    
  
  
  
// //         $result = mysqli_query($conn, $sql);
// //         if (!$result) {
// //           // echo"<script>alert('Wow! User Registration Completed.')</script>";
// //            echo"<script>alert('Woops! Something went wrong.')</script>";
// //        } else { 
// //           // echo"<script>alert('Woops! Something went wrong.')</script>";
// //            echo"<script>alert('Wow! Submitted Successfully.')</script>";
// //        }
// }
  
  
?>






<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<style>

</style>
<body>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="display.php"><i class="menu-icon fa fa-laptop"></i>Employees </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Digital Contracts</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-puzzle-piece"></i><a href="WagesContract.php">Wages Contract</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="salariedcontract.php">Salaried Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="whenbasiscontract.php">As and When Basis Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="TermContract.php">Term Contract</a></li>

                        </ul>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>








<!-- Right Panel -->
  <div id="right-panel" class="right-panel">
  <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/carp.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
<div class="wrapper">
    <div class="title">
      <!-- Contract Form -->
    </div>

    <div class="row-md-3">
                    <div class="card">
                        <div class="card-header">As and When Basis Contract</div>
                        <div class="card-body card-block">
                        <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Master ID</label>
                                <input type="text" name='id' class="form-control" placeholder="Enter Master ID">
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" name='lname' class="form-control" placeholder="Enter Employee Surname">
                            </div>
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" name='fname' class="form-control" placeholder="Enter Employee First Name">
                            </div>
                            <div class="form-group">
                                <label>FNPF NO</label>
                                <input type="text" name='fnpf' class="form-control" placeholder="Enter FNPF NO">
                            </div>

                            <div class="form-group">
                                <label>Tin No</label>
                                <input type="text" name='tin' class="form-control" placeholder="Enter TIN no">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="gender" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
 
                                </div>
                            </div>

                            <div class="row form-group">
            <label for="date" class="col-md-3 col-form-label">Date of Birth </label>
            <div class="col-md-4">
                <div class="input-group date" id="datepicker" >
                    <input type="text" class="form-control" name="dob">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name='email' class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name='address' class="form-control" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label>Wages</label>
                                <input type="text" name='wages' class="form-control" placeholder="Enter Wages per Hour ">
                            </div>

                            <div class="form-group">
                                <label>Reporting:</label>
                                <input type="text" name='reporting' class="form-control" placeholder="Enter Reporting Officer">
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="department" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="Carpenters Finance">Carpenters Finance</option>
                                        <option value="Carpenters Ho">Carpenters HO</option>
                                        <option value="Carpenters Motors">Carpenters Motors</option>
                                        <option value="Carpenters Shipping">Carpenters Shipping</option>
                                        <option value="IMEL">IMEL</option>  
                                        <option value="MH">MH</option>
                                        <option value="Carpenters Waters">Carpenters Waters</option>
                                        <option value="Carpenters Properties">Carpenters Properties</option>
                                        <option value="Carptrac">Carptrac</option>
                                        <option value="One Stop Trading">One Stop Trading</option>
                                    </select>
 
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Hours Of Work</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="hoursofwork" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="40">40</option>
                                        <option value="42.5">42.5</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46.5">46.5</option>
                                        <option value="48">48</option>
                                       
                                    </select>
 
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Lunch duration:</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="lunch" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1/2 hour">1/2 hour</option>
                                        <option value="1 hour">1 hour</option>
                                        
                                    </select>
 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Marital Status</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="gender" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name='position' class="form-control" placeholder="Enter Position">
                            </div>

                            <div class="row form-group">
            <label for="date" class="col-md-3 col-form-label">Commencement Date:</label>
            <div class="col-md-4">
                <div class="input-group date" id="datepicker2" >
                    <input type="text" class="form-control" name="start_date">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>  
            </div>
        </div>

        <div class="row form-group">
            <label for="date" class="col-md-3 col-form-label">End Date:</label>
            <div class="col-md-4">
                <div class="input-group date" id="datepicker3" >
                    <input type="text" class="form-control" name="end_date">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>  
            </div>
        </div>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name='registerBtn' class="btn btn-primary">Save</button>
                        </div>
                        </form>

   
      
</div> 
                        </div>
                    </div>
                </div>

</div>	
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
        $('#datepicker2').datepicker();
        $('#datepicker3').datepicker();
    });
</script>
</script>	
</body>
</html>