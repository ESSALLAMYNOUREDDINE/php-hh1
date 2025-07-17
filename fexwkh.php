<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyseur de mots</title>
</head>
<body>
    <form method="post" action="fexwkh.php">
        <label for="word">Saisissez un mot de 7 caractères :</label>
        <input type="text" id="word" name="word" required>
        <input type="submit" name="submit" value="Valider">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $word = $_POST['word'];
        $vowels = 0;
        $palindrome = true;
        $word_without_vowels = '';

        // Vérifier si le mot a 7 caractères
        $word_length = strlen($word);
        if ($word_length != 7) {
            echo "Le mot doit avoir exactement 7 caractères.";
        } else {
            // Compter le nombre de voyelles
            for ($i = 0; $i < $word_length; $i++) {
                if (in_array(strtolower($word[$i]), ['a', 'e', 'i', 'o', 'u', 'y'])) {
                    $vowels++;
                }
            }

            // Vérifier si le mot est un palindrome
            for ($i = 0; $i < $word_length / 2; $i++) {
                if (strtolower($word[$i]) != strtolower($word[$word_length - 1 - $i])) {
                    $palindrome = false;
                    break;
                }
            }

            // Retirer les voyelles du mot
            for ($i = 0; $i < $word_length; $i++) {
                if (!in_array(strtolower($word[$i]), ['a', 'e', 'i', 'o', 'u', 'y'])) {
                    $word_without_vowels .= $word[$i];
                }
            }
        }

        // Afficher le nombre de voyelles
        echo "Nombre de voyelles : " . $vowels . "<br>";

        // Afficher si le mot est un palindrome
        echo "Est-ce que le mot est un palindrome : " . ($palindrome ? "Oui" : "Non") . "<br>";

        // Afficher le mot sans voyelles
        echo "Mot sans voyelles : " . $word_without_vowels;
    }
    ?>
</body>
</html>
