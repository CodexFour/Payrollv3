<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    <link rel="stylesheet" href="./css_final.css">-->
    <title>Fixed table</title>
    <style>
        
        .outer-wrapper {
            margin: 10px 20px;
            border: 1px solid black;
            border-radius: 4px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
            max-width: fit-content;
            max-height: fit-content;

        }
        .table-wrapper {

            overflow-y: auto;
            overflow-x: auto;
            height: fit-content;
            max-height: 66.4vh;
            margin-top: 22px;
            padding-bottom: 20px;

        }


        .summary-table {
            min-width: max-content;
            border-collapse: collapse;
            border-spacing: 0;

        }



        .summary-table th{
            position: sticky;
            top: 0;
            background-color: #133b5c;
            color: rgb(241, 245, 179);
            text-align: center;
            font-weight: normal;
            font-size: 18px;
            outline: 1px solid black;
            border: 2px solid black;

        }



        .summary-table th, .summary-table td {
            padding: 10px 15px;
        }

        .summary-table td {
            text-align: left;

            font-size: 15px;
            border: 1px solid rgb(177, 177, 177);
            padding-left: 20px;

        }
    </style>
</head>

<body>
<div class="outer-wrapper">
    <div class="table-wrapper">
        <table class="summary-table">
            <thead>
            <tr>
                <th>Col1 this is the longest title</th>
                <th>Col2</th>
                <th>Col3</th>
                <th>Col4</th>
                <th>Col5</th>
                <th>Col6</th>
                <th>Col7</th>
                <th>Col8</th>
                <th>Col9</th>
                <th>Col10</th>
                <th>Col11</th>
                <th>Col12</th>
                <th>Col13</th>
                <th>Col14</th>
                <th>Col15</th>
                <th>Col16</th>
                <th>Col17</th>
                <th>Col18</th>
                <th>Col19</th>
                <th>Col20</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
                <td>Value 16</td>
                <td>Value 17</td>
                <td>Value 18</td>
                <td>Value 19</td>
                <td>Value 20</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
</body>

</html>