<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .main_div{
            border: solid;
        }
        .ml-4{
            margin-left: 30px;
        }
        .inv_no{
            background: black;
            color: #fff;
            width: 100px;
            width: 155px;
            padding: 5px;
        }
        .table_head th{
            background: black;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main_div">
            <div class="row">
                <div class="col-5 mt-4 ml-4">
                    <h1>ARAFA CARGO</h1><br>
                    <h6>DIVISION OF MAZYOONA MUSCUT TRADING
                        DATE REF NO. PKG WGHT ORIGIN DESTINATION AWB NO:
                       ROOM NO I/462 , 1ST FLOOR , COCHIN , KERALA , INDIA</h6>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center" >
                    <h1 class="inv_no">INV NO </h1>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center" >
                    <h1 class="inv_no">BAR </h1>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead  class="table_head">
                        <tr>
                            <th>DATE</th>
                            <th>REF NO. </th>
                            <th>PKG</th>
                            <th>WGHT</th>
                            <th>ORIGIN</th>
                            <th>DESTINATION</th>
                            <th>AWB NO:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>19.03.2024</td>
                            <td>6777 </td>
                            <td>1</td>
                            <td>3.3</td>
                            <td>UAE</td>
                            <td>COK</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead class="table_head">
                            <tr>
                                <th>FROM ADDRESS</th>
                                <th>TO ADDRESS</th>
                                <th>SERVICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NAME</td>
                                <td>ADDRESS</td>
                                <td>ZIP/ POST CODE</td>
                                <td>STATE/ PROVINCE</td>
                                <td>COUNTRY</td>
                                <td>TEL:</td>
                                <td>MOBILE:</td>
                                <td> E-MAIL:</td>
                            </tr>
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
