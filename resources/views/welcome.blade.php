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
        .flexsearch--wrapper {
          height: auto;
          width: auto;
          max-width: 100%;
          overflow: hidden;
          background: transparent;
          margin: 0;
          position: static;
          }

          .flexsearch--form {
          overflow: hidden;
          position: relative;
          }

          .flexsearch--input-wrapper {
          padding: 0 30px 0 0;
          /* Right padding for submit button width */
          overflow: hidden;
          }

          .flexsearch--input {
          width: 100%;
          }

          /***********************
          * Configurable Styles *
          ***********************/
          .flexsearch {
            width: 50%;
            /* Padding for other horizontal elements */
          }

          .flexsearch--input {
          -webkit-box-sizing: content-box;
          -moz-box-sizing: content-box;
          box-sizing: content-box;
          height: 60px;
          padding: 0 10px 0 10px;
          border-color: #888;
          border-radius: 35px;
          /* (height/2) + border-width */
          border-style: solid;
          border-width: 5px;
          margin-top: 15px;
          color: #333;
          font-family: 'Helvetica', sans-serif;
          font-size: 26px;
          -webkit-appearance: none;
          -moz-appearance: none;
          }

          .flexsearch--submit {
          position: absolute;
          right: 0;
          top: 0;
          display: block;
          width: 60px;
          height: 60px;
          padding: 0;
          border: none;
          margin-top: 20px;
          /* margin-top + border-width */
          margin-right: 5px;
          /* border-width */
          background: transparent;
          color: #888;
          font-family: 'Helvetica', sans-serif;
          font-size: 40px;
          line-height: 60px;
          }

          .flexsearch--input:focus {
          outline: none;
          border-color: #333;
          }

          .flexsearch--input:focus.flexsearch--submit {
          color: #333;
          }

          .flexsearch--submit:hover {
          color: #333;
          cursor: pointer;
          }

          ::-webkit-input-placeholder {
          color: #888;
          }

          input:-moz-placeholder {
          color: #888;
          }

          .h1 {
          float: left;
          margin: 25px;
          color: #333;
          font-family: 'Helvetica', sans-serif;
          font-size: 45px;
          font-weight: bold;
          line-height: 45px;
          text-align: center;
          }

          .flex-box {
            display: flex;
            flex-direction: column;
            align-items: center;
          }


          .submit-container {
          	float: left;
          	width: 60px;
          	height: 32px;
          	margin: 7px 0 0 7px;
          	padding: 0;
          	cursor: pointer;
          	background: #e63c0d;
          	border: 1px solid #d62700;
          	-moz-border-radius: 6px;
          	-webkit-border-radius: 6px;
          	border-radius: 6px;
          	background-image: -webkit-gradient(linear, left top, left bottom, from(#f55f15), to(#e63c0d));
          	background-image: -webkit-linear-gradient(top, #f55f15, #e63c0d);
          	background-image: -moz-linear-gradient(top, #f55f15, #e63c0d);
          	background-image: -ms-linear-gradient(top, #f55f15, #e63c0d);
          	background-image: -o-linear-gradient(top, #f55f15, #e63c0d);
          	background-image: linear-gradient(top, #f55f15, #e63c0d);
          	-moz-box-shadow: 0 1px 1px #fa8e1f inset, 0 1px 0 #fff;
          	-webkit-box-shadow: 0 1px 1px #fa8e1f inset, 0 1px 0 #fff;
          	box-shadow: 0 1px 1px #fa8e1f inset, 0 1px 0 #fff;
          }

          .submit-container:hover, .submit-container:focus {
          	background-image: -webkit-gradient(linear, left top, left bottom, from(#e63c0d), to(#f55f15));
          	background-image: -webkit-linear-gradient(top, #e63c0d, #f55f15);
          	background-image: -moz-linear-gradient(top, #e63c0d, #f55f15);
          	background-image: -ms-linear-gradient(top, #e63c0d, #f55f15);
          	background-image: -o-linear-gradient(top, #e63c0d, #f55f15);
          	background-image: linear-gradient(top, #e63c0d, #f55f15);
          	-moz-box-shadow: 0 1px 1px #f36215 inset, 0 1px 0 #fff;
          	-webkit-box-shadow: 0 1px 1px #f36215 inset, 0 1px 0 #fff;
          	box-shadow: 0 1px 1px #f36215 inset, 0 1px 0 #fff;
          }

          .submit-container:active {
          	outline: 0;
          	-moz-box-shadow: 0 1px 6px #e4340b inset;
          	-webkit-box-shadow: 0 1px 6px #e4340b inset;
          	box-shadow: 0 1px 6px #e4340b inset;
          }

          .submit {
          	float: left;
          	width: 60px;
          	height: 32px;
          	margin: 0;
          	padding: 0;
          	cursor: pointer;
          	border: 0px solid #000;
          	background: url(images/magnifier.png) 20px 6px no-repeat;
          	-moz-border-radius: 6px;
          	-webkit-border-radius: 6px;
          	border-radius: 6px;
          }
        </style>
    </head>
    <body>
      <div class="flex-box">
        <div class="h1"> MARKETPLACE </div>

        <div class="flexsearch">
          <div class="flexsearch--wrapper">
            <form class="flexsearch--form" action="#" method="post">
              <div class="flexsearch--input-wrapper">
                <input class="flexsearch--input" type="search" placeholder="Enter Customer name">
              </div>
            </form>
          </div>
        </div>

        <div class="flexsearch">
          <div class="flexsearch--wrapper">
            <form class="flexsearch--form" action="#" method="post">
              <div class="flexsearch--input-wrapper">
                <input class="flexsearch--input" type="search" placeholder="Product keyword ">
              </div>
            </form>
          </div>
        </div>

        <div class="submit-container">
				  <input type="submit" value="" class="submit" />
			  </div>
      </div>
    </body>
</html>
