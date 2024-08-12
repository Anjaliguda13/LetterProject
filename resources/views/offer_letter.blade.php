<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employment Offer Letter</title>
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
    <div>
        
        <p style="font-size:18px; font-weight:bold">
        <p>
        @if($offer->gender == 'female' && $offer->status == 'unmarried')
    Ms. {{$offer->name}},
@elseif($offer->gender == 'female' && $offer->status == 'married')
    Mrs. {{$offer->name}},
@else
    Mr. {{$offer->name}},
@endif</p>
            <p style="font-size:18px;font-weight:bold">{{$offer->address}},<br>
            , Maharashtra - 425305</p>

        <center><p style="font-weight:bold; font-size:17px;">Subject: Offer For Employment</p></center>

        <p>It gives us immense pleasure to welcome you to the team at Vertex Technosys.</p>

        <p>We are pleased to offer you a Designation Servicedesk {{$offer->offer_role}} position at Vertex Technosys
            with a start date of {{$offer->start_date}}. You will report directly to Narendra Mergu, the CEO.</p>

        <p>The annual starting salary for this position is {{$offer->start_salary}}, amounting to a monthly gross salary of {{$offer->gross_salary}}
            /- to
            be paid on a bank basis. In addition to this starting salary, we’re not offering you bonuses, commission
            structures, etc.</p>

        <p>We request you to bring the following documents/credentials at the time of joining and submit these
            documents to the HR Department on the day you join our organization:</p>

        <ul>
            <li>Aadhar Card</li>
            <li>Photo ID Size</li>
            <li>Bank Details</li>
        </ul>

        <p>Each duplicate</p>

        <p>Please confirm your acceptance of this offer by signing and returning this letter by {{$offer->last_date}}.</p>

        <p>We are excited to have you join our team! If you have any questions, please feel free to reach out to me
            at any time.</p>

        <p>Sincerely,<br></p>
        <div class="sign" style="display:inline-flex; grid-gap: 240px;">
           <p> Narendra N. Mergu<br>
            (CEO, Vertex Technosys)<br><br><br>
        Signature:_______________</p>

		        <p> Aruna Patil</br><br><br><br>
		        Signature: ______________</p>
    	</div>
    </div>
    
</body>
</html>
