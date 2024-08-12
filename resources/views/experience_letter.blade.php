<!DOCTYPE html>
<html>
<head>
    <title>Experience Letter</title>
    <style>
@media print{
    button{
        display:none;
    }
}
    </style>
</head>
<body>

<div style="margin-top:190px;"> 
    <center><h2>Experience Letter</h2></center><br>
    <p><b>@if($exper->gender == 'female' && $exper->status == 'unmarried')
    Ms.{{$exper->name}}
@elseif($exper->gender == 'female' && $exper->status == 'married')
    Mrs.{{$exper->name}}
@else
    Mr.{{$exper->name}}
@endif

        </b></p>

    <p>This is to certify that @if($exper->gender == 'female' && $exper->status == 'unmarried')
    Ms.{{$exper->name}}
@elseif($exper->gender == 'female' && $exper->status == 'married')
    Mrs.{{$exper->name}}
@else
    Mr.{{$exper->name}}
@endif
</b>  has been working as a <b> {{$exper->Job_role}}</b> in <br> our organization, from the period of {{$exper->start_date}} to {{$exper->end_date}}.
        <br><br> During this tenure, @if($exper->gender=='female') She @else he @endif has undertaken various tasks as a <b>{{$exper->Job_role}}</b> and has successfully <br>completed them to the best of @if($exper->gender=='female') her @else his @endif abilities. @if($exper->gender=='female') her @else his @endif conduct has been excellent during this tenure.<br><br> We wish @if($exper->gender=='female') her @else him @endif good luck in @if($exper->gender=='female') her @else his @endif future assignments.</p>
    <p>Should you have any questions regarding specifics, please contact us by phone<br> at 9422781840 or by email at: <a href="mailto:info@vertextechnosys.com">info@vertextechnosys.com</a>.</p>
    <div class="signature">
        <p>Sincerely,</p><br>
        <p>Vertex Technosys</p>
    </div>
</div>

<!-- <button type="submit" value="Print Document" onclick="window.print()">Print Document</button> -->

</body>
</html>
