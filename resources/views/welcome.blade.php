    <!DOCTYPE html>
    <html>
        <head>
            <title>MemoApp</title>
            <link rel="stylesheet" href="/css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" type="text/css">
            <style>
                html, body {
                    height: 100%;
                }

                body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    display: table;
                    font-weight: 100;
                    font-family: 'Rounded Mplus 1c'
                }

                #header {
                    text-align: center;
                    font-size: -webkit-xxx-large;
                }

                .container {
                    text-align: center;
                    padding: 65px 0 0 60px;
                }

                .memo {
                    margin: 13px auto;
                }

                .content {
                    text-align: center;
                    display: inline-block;
                }

                .title {
                    font-size: 96px;
                }
            </style>
        </head>
        <body>
          <header id="header" class="">MemoApp
          </header>
          <div class="form-control">
          </div>
          @yield('content')
        </body>
    </html>
