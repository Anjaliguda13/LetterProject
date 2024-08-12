<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salary Slip</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        /*border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .address {
        margin-bottom: 20px;
    }
    .employee-info {
        margin-bottom: 20px;
    }
    .salary-details {
        border-collapse: collapse;
        width: 100%;
    }
    .salary-details th,
    .salary-details td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .salary-details th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<div class="container">
    <div class="header">
      <img src="{{asset('img/vertex.png')}}" style="height:100px; width:600px"><br>
        <h5>Address: 9/4, Shri Markendaya Yantramag Dharak Society<br>
        Near New WIT College, Next to Upahar Bakery lane,Solapur – 413006<br>
        Email: <a href="info@vertextechnosys.com">info@vertextechnosys.com</a> | <a href="naren1405@gmail.com">naren1405@gmail.com</a><br>
        Mobile Number: +91 9422781840 / +91 9404919907</h5>
    </div>
    <hr style="height:2px;color:black;background-color: black;"><br><br>
    <table class="salary-details">
      <tr>
        <td colspan="3">
          <b>Vertex Technosys <span style="float:right;">Pay Advice for November 2023</b></span></td>
      </tr>
      <tr>
        <td colspan="3">
          <div style="display:flex;">
            <div style="flex: 1;">
                <p>Employ:<br>VER_0137 </p>
            </div>
            <div style="flex: 1; text-align: center;">
                <p>Name:<br>{{$sal->name}}</p>
            </div>
            <div style="flex: 1; text-align: right;">
                <p>Designation:<br>{{$sal->design}}</p>
            </div>
          </div>
       </td>
      </tr>
        <tr>
            <th>Pay & Allowances</th>
            <th>Deductions</th>
            <th></th>
        </tr>
        <tr>
            <td><br><br><br><br>Basic-{{$sal->basic_sal}} INR<br><br>
              HRA – nil<br><br>
              Conveyance – nil <br> <br>
              Medical – nil    </td>
            <td>TDS + Professional Tax  – {{$sal->tax}}</td>
            <td></td>
        </tr>
        <tr>
          <td>
            <?php
                $b=$sal->basic_sal;
                $t=$sal->tax;
                $g=$b-$t;
            ?>
            Gross: {{$sal->basic_sal}} INR   
          </td>
          <td></td>
          <td>Net:<br>{{$g}}<br> INR  </td>
        </tr>
        <tr>
            <td colspan="2"><strong>Salary mode:</strong> {{$sal->salmode}}<br><br><br></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="3"></td>
        </tr>
    </table><br><br><br>
    <div class="signature" style="line-height: 1.6;">
        <p>Narendra N. Mergu<br>
        Director<br>
        (Vertex Technosys)</p>
    </div>
</div>

</body>
</html>
