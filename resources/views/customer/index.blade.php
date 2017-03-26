<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        body {
          font-family: "Helvetica Neue", Helvetica, Arial;
          font-size: 14px;
          line-height: 20px;
          font-weight: 400;
          color: #3b3b3b;
          -webkit-font-smoothing: antialiased;
          font-smoothing: antialiased;
          background: #2b2b2b;
          }

          .wrapper {
          margin: 0 auto;
          padding: 40px;
          max-width: 800px;
          }

          .table {
          margin: 0 0 40px 0;
          width: 100%;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
          display: table;
          }
          @media screen and (max-width: 580px) {
          .table {
            display: block;
          }
          }

          .row {
          display: table-row;
          background: #f6f6f6;
          }
          .row:nth-of-type(odd) {
          background: #e9e9e9;
          }
          .row.header {
          font-weight: 900;
          color: #ffffff;
          background: #ea6153;
          }
          .row.green {
          background: #27ae60;
          }
          .row.blue {
          background: #2980b9;
          }
          @media screen and (max-width: 580px) {
          .row {
            padding: 8px 0;
            display: block;
          }
          }

          .cell {
          padding: 6px 12px;
          display: table-cell;
          }
          @media screen and (max-width: 580px) {
          .cell {
            padding: 2px 12px;
            display: block;
          }
          }

        </style>
    </head>
    <body>
      <div class="wrapper">

        <div class="table">

          <div class="row header">
            <div class="cell">
              Name
            </div>
            <div class="cell">
              Address
            </div>
            <div class="cell">
              Phone
            </div>
          </div>

          @foreach ($customers as $customer)
            <div class="row">
              <div class="cell">
                {{ $customer->cname }}
              </div>
              <div class="cell">
                {{ $customer->address }}
              </div>
              <div class="cell">
                {{ $customer-> phone }}
              </div>
            </div>
          @endforeach

        </div>

        </div>
    </body>
</html>
