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
          max-width: 1000px;
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

          .button {
              background-color: #4CAF50;
              border: none;
              color: white;
              height: 50px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 14px;
              cursor: pointer;
          }

          .app-header {
            height: 65px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
          }

          .nav-font {
            font-weight: bolder;
            font-size: x-large;
          }

        </style>
    </head>
    <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <div class="app-header">
        <div class="cell">
          <button id="home-button" class="button" > <span class="nav-font"> HOME </span> </button>
        </div>
        <div id="cell" style="margin-right: 5px;">
          <button id="logged-in-user" class="button" > <span class="nav-font"> {{ $logged_in_user }} </span> </button>
        </div>
      </div>
      <div class="wrapper">

        <div class="table">

          <div class="row header">
            <div class="cell" style="width:15%">
              Name
            </div>
            <div class="cell" style="width:15%">
              Address
            </div>
            <div class="cell" style="width:10%">
              Unit Price
            </div>
            <div class="cell" style="width:10%">
              Product Status
            </div>
            <div class="cell" style="width:10%">
              Purchase Price
            </div>
            <div class="cell" style="width:20%">
              Updated at
            </div>
            <div class="cell" style="width:15%">
              Purchase Status
            </div>
          </div>

          @foreach ($products as $product)
            <div class="row">
              <div class="cell">
                {{ $product->pname }}
              </div>
              <div class="cell">
                {{ $product->pdescription }}
              </div>
              <div class="cell">
                {{ $product->pprice }}
              </div>
              <div class="cell">
                {{ $product->pstatus }}
              </div>
              <div class="cell">
                {{ $product->puprice }}
              </div>
              <div class="cell">
                {{ $product->puttime }}
              </div>
              <div class="cell">
                @if($product->quantity != 0) PENDING @endif
              </div>
              <div >
                @if($product->pstatus != "discontinued")
                  <button style="width:70px" class="button buy-button" pname="{{$product->pname}}" cname="{{$product->cname}}" puttime="{{$product->puttime}}" quantity={{$product->quantity}} >BUY @if($product->quantity != 0) ({{$product->quantity}}) @endif</button>
                @endif
              </div>
            </div>
          @endforeach

        </div>

        </div>
        <meta name="_token" content="{!! csrf_token() !!}" />
        <script src="{{asset('js/buy-update.js')}}"></script>
    </body>
</html>
