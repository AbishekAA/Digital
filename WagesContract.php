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
    $name= $_POST['name'];
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
   
//pdf start
class PDF extends FPDF{
    
    function Header(){
      //Display Header Content, if page number eqaul 1
      if ($this->PageNo() == 1 ) {
        
        //Header Content
        $this->Image('C:\Users\abishek.prasad\Music\DIGITAL FINAL\Digital\assets\images\One Stop Trading.png',0,0);

        // $this->Line(0,30,210,30);
      
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
$pdf->SetFont('Arial','',10);
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln(); 
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



$pdf->Cell(189	,10,'',0,1);//end of line


$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Position:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The position offered to you is General Worker to be based at','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Carpenters Motors- Accounts Department.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);	
$pdf->Cell(40,5,'Commencement:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'Your appointment will be effective from 14th February 2022 till 30th','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,' April 2022.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Salary:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'Commencing salary will be $18,000 gross per annum.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Probation:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You will be employed on probation for six (6) months.  Should your ','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'services be found satisfactory, your appointment will be confirmed ','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'thereafter. Should your services be found unsatisfactory during your ','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'probationary period, your employment may be terminated without notice. ','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Management at its sole discretion may extend this period to a further three ','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'months period. Confirmation of your appointment is subject to you satisfying','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'our Companys security clearance procedures.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Reporting:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You will report directly to the Financial Controller who at present is','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Navneel Singh.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Responsibilities:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You will be notified of your job responsibilities upon commencement of your','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'employment. A Job Description will be forwarded to you in due course.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You undertake to familiarise yourself with company policies and procedures','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'care and take all measures to protect company assets entrusted to your care','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'at all times.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You may be required to carry out other duties from time to time and your','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'duties may be altered, in consultation with the employer.','',0,'L');$pdf->Ln();
$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You are expected to perform your job description and duties diligently and','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'to use your best endeavours to promote the interests of the employer in','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'doing so. In most cases you will assigned additional duties above and','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'beyond your job description and it is expected that such assignments are','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'carried out faithfully and with initiative.','',0,'L');$pdf->Ln();$pdf->Ln();



$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Hours of Work:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'Monday - Friday','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,': 8.00 am to 5.00 pm','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'Saturday:','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,': 8.00 am to 12.00 pm','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(20,5,'Lunch','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,': 1 hour','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'The nature and status of your work is such that you may be required to work','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'longer hours and on Saturdays, Sundays and Public Holidays from time-to','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'time depending on the requirements of Management. Work on such days as','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'required by management will be compulsory. You must ensure that all work','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'assigned is completed within time frame specified and given and longer hours','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'will be necessary given the nature of work assigned to you.','',0,'L');$pdf->Ln();


$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Holidays:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'You will be eligible to 15 working days plus three Saturdays (where','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,'','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(20,5,'applicable) paid annual leave upon completion of 12 months continuous','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,'','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(20,5,'service.','',0,'L');$pdf->Cell(10,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(30,5,'','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You are encouraged to utilize your annual leave entitlement after each','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'complete year of service in which such leave is due. Any unutilized leave','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'shall not be accrued or accumulated to the following year and forfeited. You','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'may be granted leave at prorate basis upon approval from management','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Sick Leave:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You will be eligible for 15 working days with full pay in each year. You will','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'qualify for this after you have been continuously employed for 3 months. All','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'sick leave must be substantiated with a certificate from a registered Medical','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Practitioner.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Sick leave must not be accumulated. Any sick leave that is not used in each','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'year automatically lapses and will not be carried over to the next year.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Sick leave, including sick leave in excess of the employees entitlement must','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'be taken in accordance with the employers policy, contained in the Staff','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Handbook.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Fiji National Provident','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'You (and the Company) will be required to contribute to the Fiji National','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(20,5,'Fund:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'Provident Fund in accordance with the provisions of the FNPF Act.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Conflict of Interest:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'During the term of the employment you shall not be engaged in any business','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'or occupation part-time or otherwise, other than as a full time employee of the','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Company and shall not engage in any other activity, business or employment','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'which may be in conflict with your responsibilities during the employment with','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'the Company. You or your spouse should not engage in any business or activity','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'that is or becomes in competition with any of Carpenters Groups activities or','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'businesses and/or make use of information, knowledge, skills or contacts','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'gained in the course of employment for your own personal benefit are also','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'considered conflict of interest.','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You are also disallowed from serving as a member in a Board of Directors','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Committee in a commercial organization, without first obtaining written','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'approval from the Company in line with Circular No. 291 and 291-A.','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'With regard to political activities, you must ensure you comply with','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'guidelines set out in circular No. 315.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Non-Disclosure &','',0,'L');$pdf->Cell(60,5,'','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);;$pdf->Cell(40,5,'Confidentiality:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'As an employee you shall undertake with the Company that you will not during','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'required by the Company reveal to any person or persons or Company any of','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'the trade secrets or confidential operations or dealings or any information','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'concerning the Business and the Organisation finances, transactions of the','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Company or its subsidiary, related or associated companies which may come','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'to your knowledge during your employment and shall keep with complete','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'secrecy all confidential information entrusted to you and shall not use or any','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'such information in any manner for your own benefit or to the intended','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'detriment or probable detriment of the Company or injure or cause loss either','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'directly or indirectly to the Company, or may likely to do so.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'As an employee your pledge your loyalty to the Company and undertake that','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'you will not do anything by action or omission that may be prejudicial to the','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'interest of the Company.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You undertake not to make public or media statements without obtaining','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'approval from the Company and to comply with Circular No. 237.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'As an employee, you are advised that any breaches to this will not be','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'condoned and ethical behaviour is expected of you at all times.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Acceptance of Gifts by','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'You may not accept any gift, commission or inducement from a','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Employees:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'customer, supplier or any person or organisation seeking to obtain a benefit','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'in dealing with the Company as specified in Circular No. 282.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'Any commission or favours of any kind received by an employee directly or','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'indirectly shall always be accountable and recoverable by the Company as','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'liquidated amount held as trust or otherwise','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Health and Safety:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'You hereby unequivocally declare to the Company that you are medically fit','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'to discharge the duties of your position and undertake to immediately notify','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'the Company of any change in your medical or physical condition that may','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'compromise your health or the performance of your duties.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You further consent and authorise any medical practitioner who has been or','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'may hereafter be consulted, during your period of employment, to divulge','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'to the Company any medical information such practitioner may have','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'acquired with regards to yourself.','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'You also undertake to fully comply with all Health and Safety regulations','',0,'L');$pdf->Ln();
$pdf->Cell(40,5,'','',0,'L');$pdf->Cell(60,5,'and procedures specified in the Company Circulars.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Termination:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'a)  Employment may be terminated at any time by either party giving not less','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     than one months notice in writing or by payment of one months salary','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     in lieu of notice. The employer reserves the right to pay out the employees','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     notice period instead of requiring the employee to work out his/her notice','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     period. If the employee gives less than the proper notice, the employer is','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     entitled to deduct the balance of unworked notice from any money owed to','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'     the employee or to otherwise recover the sum.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'b)  The employer is entitled to terminate this Contract if: -','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    (i)   the employer is unable to fulfil the Agreement;','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    (ii)  owing to any sickness or accident the employee is unable to fulfil','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'          the Agreement.','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    (iii) the employee is found to have repeated poor performance or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'          misconduct.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'c)  Upon termination of employment, the employee must immediately return and','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    must not copy all or any of the employer’s property, documents, information,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    keys and access or security cards which the employee has in his/her,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    possession or use.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'d)  Either party is responsible for any failure to perform its obligations under this','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    contract, if it is prevented or delayed in performing those obligations by an','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(15,5,'','',0,'L');$pdf->Cell(60,5,'    event of force majeure.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Force Majeure','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employee understands and agrees that their job may end without','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'notice, or payment in lieu of notice, if a natural disaster, workplace fire,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'flood, explosion, pandemic, strikes, labour disputes, war, riot, national,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'emergency or other similar major events described as Acts of God which,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'are beyond the employer’s control occur, making it impossible for','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'employment to continue. Where practicable, the employer will consult','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'with the employee before exercising this clause.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Summary Dismissal:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employer may summarily dismiss the employee without notice: -','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'where the employee is guilty of gross misconduct;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for willful disobedience to lawful orders given by the employer;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for lack of skill or qualification which the employee expressly or by','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'implication warranted to possess;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for habitual or substantial neglect of the employees duties; or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'for continual or habitual absence from work without the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'permission of the employer and without other reasonable excuse.','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Post-Employment Obligations/','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,'Restraint of Trade','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employee agrees that at any time during its employment or for the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'relevant period following the termination of the employees employment with,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'the company or any related holding company, the employee will not for any,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'reason (directly or indirectly) without prior written consent from the Company','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'carry on or be connected engaged or interested either directly or indirectly or','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'alone or with any other person or persons whether as principle, partner, agent,','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'may compete with the business of the Company in relation to any and all of','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'its activities, or provide consultancy and advisory services. This restraint','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'applies for period of 6 months following the termination of the employees','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'employment and with a 50 kilometre radius directly in relation to the','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Companys business premises in Suva.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,5,'Disciplinary Procedure:','',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'The employers disciplinary procedure is contained in full in the Staff','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(60,5,'Handbook and is summarised as follows: -','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'a)','',0,'L');$pdf->Cell(60,5,'if an employee acts inappropriately or unacceptably;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'(i)','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'the employee may be summarily dismissed and will not be','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'(ii)','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'entitled to payment in lieu of notice;','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->SetFont('Arial', '');$pdf->Cell(60,5,'the employee may: -','',0,'L');$pdf->Ln();$pdf->Ln();


$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'A.','',0,'L');$pdf->Cell(60,5,'be given a first written warning for a first offence','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'B.','',0,'L');$pdf->Cell(60,5,'be given a final written warning for a second offence','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'C.','',0,'L');$pdf->Cell(60,5,'may then have an explanation interview with his/her','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'manager','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'D','',0,'L');$pdf->Cell(60,5,'may have a further interview in which his/her','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(12,5,'','',0,'L');$pdf->Cell(19,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'employment is terminated.','',0,'L');$pdf->Ln();$pdf->Ln();

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'b)','',0,'L');$pdf->Cell(60,5,'No warning will be held against an employee for more than 12','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'months.','',0,'L');$pdf->Ln();$pdf->Ln();


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

$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'E)','',0,'L');$pdf->Cell(60,5,'Mediation Unit established under the Employment Relations Promulgation','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'2007. The employee must first exhaust the internal appeal procedures','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(5,5,'','',0,'L');$pdf->Cell(7,5,'','',0,'L');$pdf->Cell(60,5,'before the grievance is referred to mediation.','',0,'L');$pdf->Ln();$pdf->Ln();



$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,"Employee's",'',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'The employee has read and agreed with the terms and conditions of ','',0,'L');$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(40,5,"Acceptance:",'',0,'L');$pdf->SetFont('Arial','',11);$pdf->Cell(60,5,'employment agreement and the Staff Handbook.  ','',0,'L');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'The employee acknowledges that he or she has received a copy of this','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'agreement and the Staff Handbook and by signing this agreement accepts ','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'that he or she has read, understand and agreed to the terms of this Contract ','',0,'L');$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'and the Staff Handbook. ','',0,'L');$pdf->Ln();$pdf->Ln();$pdf->Ln();




$pdf->Cell(40,5,'We extend to you a very warm welcome and trust that you will find a worthwhile and rewarding career with us.',0,'L');;$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,"DATED this date day of month, year.");$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'I accept employment on the above terms.');$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',11);$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Signature of employee _____________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'In the presence of ________________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'Signature of employer ______________________');$pdf->Ln();$pdf->Ln();
$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(20,5,'','',0,'L');$pdf->Cell(60,5,'For and on behalf of CARPENTERS FINANCE');$pdf->Ln();$pdf->Ln();
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
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Digital Contracts</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-puzzle-piece"></i><a href="employee.php">Wages Contract</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="employee.php">Salaried Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="employee.php">As and When Basis Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="employee.php">Term Contract</a></li>

                        </ul>
                    </li>
                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>








<!-- Right Panel -->
  <div id="right-panel" class="right-panel">

<div class="wrapper">
    <div class="title">
      <!-- Contract Form -->
    </div>

    <div class="col-lg-10">
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
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" placeholder="Enter Employee Name">
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
                                    <select class="custom-select" name="gender" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="Carpenters Finance">Carpenters Finance</option>
                                        <option value="Carpenters Ho">Carpenters HO</option>
                                        <option value="Carpenters Motors">Carpenters Motors</option>
                                        <option value="Carpenters Shipping">Carpenters Shipping</option>
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