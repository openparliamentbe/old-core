<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OpenParliament.be API</title>

    <style>
        html:before {
            content: '';
            display: block;
            box-shadow: rgba(0,0,0,.2) 0 0px 2px;
            height: 2px;
            background: linear-gradient(
                to right,
                /* black */
                #000,
                #000 33%,
                /* yellow */
                #ffe936 33%,
                #ffe936 66%,
                /* red */
                #ff0f21 66%,
                #ff0f21
            );
        }
        body {
            margin: 15% 1em;
            background-color: #f5f4f2;
            font-family: Helvetica, sans-serif;
            line-height: 1.2;
            font-weight: normal;
            font-weight: 300;
            color: #333;
        }
        @media screen and (min-width: 40em) {
            body {font-size: 2em;}
        }
        @media screen and (min-width: 60em) {
            body {
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
            }
        }
        h1 {
            font-weight: normal;
            font-weight: 300;
            margin-top: 0;
            margin-bottom: 0;
        }
        p {margin-top: .5em;}
    </style>
</head>
<body>
    <h1>OpenParliament API</h1>
    <p>This is the home page of a work-in-progress REST API aiming at making public domain information related to Belgian parliaments available freely to everybody.</p>
</body>
</html>
