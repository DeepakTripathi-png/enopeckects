<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $general->siteName('Lock And Unlock Details') }}</title>
    <style>
         @page {
            size: 9.07in 11.7in!important;
            margin: .0in!important;
            }

        body {
            font-family: "Poppins", sans-serif;
            text-align: left;
            font-size: 11px; 
        }

        .transactions table {
            width: 50%; 
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: auto; 
            margin-left: 2%; 
        }

        .transactions tr, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .transactions th {
            background-color: #f2f2f2;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-container div {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: auto; 
            margin:2%; 
            width:96%;

        }

        tr, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }
        th {
            border: 1px solid #ddd;
            background-color: #c6efce;
            text-align: center;
            padding: 5px;
          
        }
    </style>
</head>
<body>
    <div class="row" style="text-align: center;">
            <h3>Lock And Unlock Reports</h3>
    </div>
    <div style="overflow-x:auto;" class="transactions">
        <table>
            <tr>
                <td>Trip ID</td>
                <td>{{$trip_id ?? ''}}</td>
            </tr>
        </table>
    </div>

    <div class="center-container">
        <div>
            <table>
                <tr>
                    <th style="font-size: 10px;">Sr No</th>
                    <th style="font-size: 10px;">Trip ID</th>
                    <th style="font-size: 10px;">Rf Id Card Number</th>
                    <th style="font-size: 10px;">Event Type</th>
                    <th style="font-size: 10px;">Event Date</th>
                    <th style="font-size: 10px;">Device ID</th>
                    <th style="font-size: 10px;">Current Address</th>
                    <th style="font-size: 10px;">Latitude</th>
                    <th style="font-size: 10px;">Longitude</th>
                    <th style="font-size: 10px;">Speed</th>
                </tr>
                @forelse($lock_unlock_trips as $i => $log)

                <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{$log->trip_id ?? ''}}</td>
                        <td>{{$log->rfid_card_number ?? ''}}</td>
                        <td>{{ $log->alert_title ?? ''}}/{{$log->alert_naration ?? ''}}</td>
                        <td>{{ $log->created_at ?? ''}}</td>
                        <td>{{ $log->device_id ?? ''}}</td>
                        <td>{{ $log->address?? ''}}</td>
                        <td>{{ $log->latitude ?? ''}}</td>
                        <td>{{ $log->longitude ?? ''}}</td>
                        <td>{{ $log->speed ?? ''}}</td>


                    </tr>
                    @empty
                        <tr>
                            <td></td>
                            <td></td>  
                            <td></td>
                            <td></td>
                            <td class="text-muted" >{{ __($emptyMessage) }}</td> 
                            <td></td> 
                            <td></td>
                            <td></td>  
                            <td></td>
                            <td></td>
                        </tr>
                
                    @endforelse

                
            </table>
        </div>
    </div>
</body>
</html>