<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>chaine</th>
            <th>function</th>
            <th>résultat</th>
            <th>explication</th>
        </thead>
        <tbody>
            <tr>
                <td>toto</td>
                <td>strlen()</td>
                <td><?php echo strlen("toto") ?></td>
                <td>une fonction qui retourn le nombre des caracteres</td>
            </tr>
            <tr>
                <td>bonjour tout le monde</td>
                <td>str_word_count()</td>
                <td><?php echo str_word_count("bonjour tout le monde") ?></td>
                <td></td>
            </tr>
            <tr>
                <td>salut</td>
                <td>strrev()</td>
                <td><?php echo strrev("salut") ?></td>
                <td></td>
            </tr>
            <tr>
                <td>bonjour tout le monde</td>
                <td>strpos()</td>
                <td><?php echo strpos("bonjour tout le monde" ,"tout") ?></td>
                <td></td>
            </tr>
            <tr>
                <td>chaine</td>
                <td>substr()</td>
                <td><?php echo substr("chaine" ,0,2) ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>