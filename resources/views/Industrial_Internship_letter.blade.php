
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="certificate.css">
    <title>Document</title>
    <style>
        
.h2
{
    text-align:center;

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
</head>
<body>
    

<div style="margin-top:190px;">
    <h2  class="h2">Certificate</h2>
    <h2 class="h2">Industrial Internship</h2>
    <br><br>
    <p class="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        This is to certify that <i>@if($indus->gender == 'female' && $indus->status == 'unmarried')
    Ms.{{$indus->name}},
@elseif($indus->gender == 'female' && $indus->status == 'married')
    Mrs.{{$indus->name}},
@else
    Mr.{{$indus->name}},
@endif</i> has undergone the
        industrial implant training program for {{$indus->course_name}} for {{$indus->duration}}<br>at Vertex Technosys, Solapur from {{$indus->start_date}} to {{$indus->end_date}}.</p>
        
        <p class="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @if($indus->gender=='female') She @else He @endif was very much interested to learn the function of our core division and
            also willing to put @if($indus->gender=='female') her @else his @endif best efforts and get into the depth of the <br>subject to
            understand it better </p> 
            
        <p class="p">We wish @if($indus->gender=='female') her @else his @endif good luck for @if($indus->gender=='female') her @else his @endif upcoming future.</p>
        <p class="p">Vertex Technosys</p>
        <br>

        <p class="p">Authorized Signature<br> 
            (Narendra Mergu, Director)</p>

</div>
</body>
</html>