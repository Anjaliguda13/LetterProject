<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relieving Order</title>
</head>
<style>
@media print{
    button{
        display:none;
    }
}
    </style>
<body>
    
   
    <div style="font-weight: bold; margin-top:190px;">
        <p>
        @if($reli->gender == 'female' && $reli->status == 'unmarried')
    Ms. {{$reli->name}}
@elseif($reli->gender == 'female' && $reli->status == 'married')
    Mrs. {{$reli->name}}
@else
    Mr. {{$reli->name}}
@endif
           </p>
            <p>{{$reli->address}}</p>
            <!-- <p>Jalgaon, Maharashtra - 425305</p> -->
            <p>Phone: {{$reli->mobile}}</p>
           <u><p style="color:blue" > E-Mail: {{$reli->email}}
        </p></u>
    </div>
    <br><br>
    <hr style="border: 1px solid blue;">
    <div style="font-weight: bold;">
        <h2>Sub: Relieving Order</h2>
        <p>
            Dear {{$reli->name}},
        </p>
        <p>
            This is in reference to your resignation dated {{$reli->resign_date}}, where in you requested to be relieved from your services on {{$reli->relieve_date}}. We wish to inform you that your resignation has been accepted, and you shall be relieved from your duties as Associate Engineer, post-serving the notice period, with effect from {{$reli->relieve_date}}
        </p><br>
        <p>
            We thank you for your efforts and contributions during your tenure with us and wish you all the best in your future endeavors.
        </p><br>
        <p>
            Sincerely,
        </p>
        <p>
            Vertex Technosys<br>
            CEO Narendra N. Mergu
        </p><br>
    </div>
    <div style="font-weight: bold;">
        <p>
            I accept and confirm the issues mentioned in the letter.
        </p><br>
        <p>
            Signature
        </p>
    </div>
    </body>
</html>
