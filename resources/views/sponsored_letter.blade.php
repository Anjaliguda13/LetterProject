<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship Letter</title>
    <style>
        .logo {
            float: left;
        }

        .list {
            float: right;
        }

        .list p {
            color: black;
            margin: 0;
            font-weight: bold;
        }

        .list p::before {
            content: "\0279C";
            color:  rgb(243, 108, 35);;
            margin-right: 5px;
            font-weight: 600; /* Bold arrow */
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: 100px;
            border: 2px solid rgb(243, 108, 35);
        }

        p, h1 {
            text-align: justify;
            margin-left: 10px;
            margin-right: 10px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
                align-items: stretch;
            }

            .list {
                float: none;
                text-align: center;
                margin-top: 10px;
            }

            .logo {
                float: none;
                margin-bottom: 10px;
            }
        }

        table {
            margin-left: 10px;
            margin-right: 10px;
            width: auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        hr.black {
    margin-top: 20px;
    margin-bottom: 20px;
    font-weight: 100px;
    border: 2px solid black; /* Changed border color to black */
}
@media print{
    button{
        display:none;
    }
}

    </style>
</head>
<body>
<!-- <div class="container">
    <img src="vertex-logo.png" height="120px;" width="120px;" class="logo">
    <div class="list">
        <p>Web Development</p>
        <p>Mobile Development</p>
        <p>Desktop Development</p>
        <p>IT Enabled Services</p>
        <p> Consulting Services</p>
    </div>
</div> -->   
<div style="margin-top:190px;">   
<hr>

<div>
    <p>Ref No: VT/2023/16/10/02</p>
    <p>Date: 16/10/2023</p>
</div>
<div>
    <h1>LETTER OF SPONSORSHIP</h1>
    <p>To<br>
        Head of Department<br>
       {{$spons->dept}}.<br>
        {{$spons->clg_name}}.</p>
    <p>I Vertex Technosys herewith sponsor the project entitled <strong>"{{$spons->project_name}}"</strong>
        being done by the following students of B.Tech.{{$spons->dept}} from {{$spons->clg_name}},
        Solapur, Under the guidance of {{$spons->guide_name}}, {{$spons->guide_design}}, Department of {{$spons->dept}}.
    </p>
    <center>
    <table >
        <thead>
        <tr>
            <th>Sr.no</th>
            <th>Name</th>
            <th>Roll No</th>
        </tr>
        </thead>    
        <tbody>
            <?php
            $no=1;
            ?>
        <tr>
            <?php
                $names=explode(',',$spons->stud_name);
                $roll=explode(',',$spons->roll_no);
                $len=count($names);
                for($i=0;$i<$len;$i++)
                {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";   
                    echo "<td>".$names[$i]."</td>";
                    echo "<td>".$roll[$i]."</td>";
                    echo "</tr>";
                }
            ?>  
        </tbody>
    </table>
    </center>
    <p>As this project is sponsored by us, we will finance the components and<br> development charges of the same along with
        other required expenses on<br> approval basis.
    </p>
    <p>Sincerely,</p>
    <p>Narendra N. Mergu<br>
        CEO, Vertex Technosys</p>
</div>
<br>
<hr class="black">
<p><b>Address:9/4, Shri Markandeya Yantramag Dharak Society, Near WIT College, Solapur<br>
    Email:info@vertextechnosys.com / naren1405@gmail.com Mobile No.: +91 9422781840 / +91 9403046045</b></p>  
    
            </div>
</body>

</html>
