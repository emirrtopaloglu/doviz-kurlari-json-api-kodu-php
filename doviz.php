<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döviz Uygulaması</title>
</head>
<body>


    <style>
        html {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 17px;
            background-color:#f0f0f2;
        }
        .wrapper {
            width: 1000px;
            margin: 50px auto;
            background: #fff;
            height: auto;
            padding: 30px;
        }
        h1.title {
            text-align: center;
            margin-bottom: 1.25em;
        }
        table {
            width: 100%;
            text-align: center;
            border: 1px solid #dcdcdc;
            border-radius: 3px;
            border-collapse: collapse;
        }
        th {
            font-weight: bold;
        }
        tr, th, td {
            border: 1px solid #dcdcdc;
        }
        tfoot th {
            font-weight: normal;
        }
    </style>
    <?php 
    
    $JSON = json_decode(file_get_contents('https://finans.truncgil.com/today.json'), 1);
    
    ?>
    <div class="wrapper">
        <h1 class="title">Döviz Kurları</h1>
        <table>
            <thead>
                <tr>
                    <th>KUR</th>
                    <th>ALIŞ</th>
                    <th>SATIŞ</th>
                    <th>DEĞİŞİM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD/TRY</td>
                    <td><?php echo $JSON['USD']['Alış']; ?></td>
                    <td><?php echo $JSON['USD']['Satış']; ?></td>
                    <td><?php echo $JSON['USD']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>EUR/TRY</td>
                    <td><?php echo $JSON['EUR']['Alış']; ?></td>
                    <td><?php echo $JSON['EUR']['Satış']; ?></td>
                    <td><?php echo $JSON['EUR']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>GBP/TRY</td>
                    <td><?php echo $JSON['GBP']['Alış']; ?></td>
                    <td><?php echo $JSON['GBP']['Satış']; ?></td>
                    <td><?php echo $JSON['GBP']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>CAD/TRY</td>
                    <td><?php echo $JSON['CAD']['Alış']; ?></td>
                    <td><?php echo $JSON['CAD']['Satış']; ?></td>
                    <td><?php echo $JSON['CAD']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Ons Altın</td>
                    <td><?php echo $JSON['ons']['Alış']; ?></td>
                    <td><?php echo $JSON['ons']['Satış']; ?></td>
                    <td><?php echo $JSON['ons']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Gram Altın</td>
                    <td><?php echo $JSON['gram-altin']['Alış']; ?></td>
                    <td><?php echo $JSON['gram-altin']['Satış']; ?></td>
                    <td><?php echo $JSON['gram-altin']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Çeyrek Altın</td>
                    <td><?php echo $JSON['ceyrek-altin']['Alış']; ?></td>
                    <td><?php echo $JSON['ceyrek-altin']['Satış']; ?></td>
                    <td><?php echo $JSON['ceyrek-altin']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Yarım Altın</td>
                    <td><?php echo $JSON['yarim-altin']['Alış']; ?></td>
                    <td><?php echo $JSON['yarim-altin']['Satış']; ?></td>
                    <td><?php echo $JSON['yarim-altin']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Tam Altın</td>
                    <td><?php echo $JSON['tam-altin']['Alış']; ?></td>
                    <td><?php echo $JSON['tam-altin']['Satış']; ?></td>
                    <td><?php echo $JSON['tam-altin']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Cumhuriyet Altını</td>
                    <td><?php echo $JSON['cumhuriyet-altini']['Alış']; ?></td>
                    <td><?php echo $JSON['cumhuriyet-altini']['Satış']; ?></td>
                    <td><?php echo $JSON['cumhuriyet-altini']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>22 Ayar Bilezik</td>
                    <td><?php echo $JSON['22-ayar-bilezik']['Alış']; ?></td>
                    <td><?php echo $JSON['22-ayar-bilezik']['Satış']; ?></td>
                    <td><?php echo $JSON['22-ayar-bilezik']['Değişim']; ?></td>
                </tr>
                <tr>
                    <td>Gümüş</td>
                    <td><?php echo $JSON['gumus']['Alış']; ?></td>
                    <td><?php echo $JSON['gumus']['Satış']; ?></td>
                    <td><?php echo $JSON['gumus']['Değişim']; ?></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Son Güncellenme: <em><?php echo $JSON['Update_Date']; ?></em></th>
                </tr>
            </tfoot>
        </table>
    </div>
    
</body>
</html>