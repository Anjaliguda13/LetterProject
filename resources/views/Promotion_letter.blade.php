<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion For Employment</title>
    <style>
@media print{
    button{
        display:none;
    }
}
    </style>
</head>
<body>
   
    <div style="font-weight: bold;margin-top:185px;">
        <p>
        @if($promo->gender == 'female' && $promo->status == 'unmarried')
    Ms. {{$promo->name}}
@elseif($promo->gender == 'female' && $promo->status == 'married')
    Mrs. {{$promo->name}}
@else
    Mr. {{$promo->name}}
@endif
        </p>
            <p>{{$promo->address}}</p>
           <p> Maharashtra - 425305
        </p>
       <center><h3>Subject: Promotion For Employment</h3></center> 
        <p>
            Dear {{$promo->name}},
        </p>
    </div>
        <p>
            Congratulations! Due to your continued efforts and recent successes, effective {{$promo->promotion_date}}, you have been promoted to {{$promo->prole}}.
        </p>
        <p>
            The annual salary for the {{$promo->prole}} will be {{$promo->salary}}.
        </p>
        <p>
            As you settle into your new role as {{$promo->prole}} , please refer any questions to CEO, Mr. Narendra Mergu.
        </p>
        <p>
            Enjoy this time of transition, and once again, congratulations on your new role here at Vertex Technosys.
        </p>
        <p><br><br>
            Sincerely,
            <br>
            <div class="three" style="display: inline-flex; grid-gap: 200px;">
            <div class="one">
            <h4> Narendra N. Mergu <br>
            CEO, Vertex Technosys</h4>
            <p>Signature ____________________</p>
        </div>
            
            <div class="two">
                <br>
            <h4>Aruna Patil</h4>
            <p>Signature ____________________</p>
        </div>
        
        </div>
</p>
</body>
</html>
