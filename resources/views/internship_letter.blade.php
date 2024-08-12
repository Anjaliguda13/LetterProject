<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="internship.css">
    <title>Document</title>
</head>
<style>
    
.h2
{
    text-align:center;

}
.h
{
    text-align:left;
    font-size:18px;
}
.p
{
    font-weight:bold;
    font-size:18px;
    text-align:left;
}
        @media print{
    button{
        display:none;
    }
}
</style>
<body>

<div style="margin-top:190px;">
    <h2  class="h2">Internship Letter</h2>
    <p class="h"><b>@if($intern->gender == 'female' && $intern->status == 'unmarried')
    Ms.{{$intern->name}},
@elseif($intern->gender == 'female' && $intern->status == 'married')
    Mrs.{{$intern->name}},
@else
    Mr.{{$intern->name}},
@endif</b></p>
    <p class="h">We are pleased to offer you the position of intern with <b>Vertex Technosys.</b></p>
    <p class="h">Please find the following confirmation of the specifics of your internship.</p>
    <ul>
        <li>Position Titlle:{{$intern->position}}</li>
        <li>Start Date: {{$intern->st_date}}</li>
        <li>End Date: {{$intern->end_date}}</li>
        <li>Reporting Supervisor: You will be reporting to <b>Mr. Narendra Mergu</b> internship 
            coordinator & Technical Head of Vertex Technosys.<b>Mr. Balkrishna Yemul</b> may 
            be contact by phone 9422781840, 9404919907 or by Email Id: 
            info@vertextechnosys.com</li>
        <li>Internship Responsibilities:</li>
           <ul style="list-style-type: square;">
         <li>There will be 15 days training of required technology used in the organization.</li>
         <li>After training you will be assigned a project.</li>
         <li>You have to develop the assigned project within deadline & in a proper way.</li>
         <li>Report your daily work developed to your respective organization coordinator.</li>
        </ul>
    </ul>
    <p class="h">Should you have any question regarding specifics of your internship, please contact by phone 
        9404919907 or by Email: info@vertextechnosys.com</p>
    <p class="h">Sincerely,</p>
    <p class="h">Mr. Narendra Mergu</p><br>
    <p class="h">Vertex Technosys.</p>

  

</div>
   
</body>
</html>