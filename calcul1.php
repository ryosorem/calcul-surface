<?php
if (isset($_POST['submit']))
{
    $Largeur = $_POST['Larg'];
    $Longueur = $_POST['Long'];
    $operator = $_POST['operator'];
    $result = $_POST['result'];
  switch ($operator)
  {
       case "Non";
       echo "Selectionner un operateur";
       break;
       case "Multiplication";
           $result = $Larg*$Long;
           break;
        case"Soustraction";
            $result = $Larg-$Long;
            break;
  }
}

?>


<!Doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <title>Mon Site </title>
</head>
<body>

<div class="calcule">
    <form action="" method="POST">
        <label for="">Larg</label>
        <input type="text" name="Larg">
        <label for="">Long</label>
        <input type="text" name="Long">

        <select name="operator" id="">
            <option value="Non">Non</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Soustraction">Soustraction</option>
                    
</select>
<input type="submit" value="Calculer" name="submit">
<input type="text" name="result" id="" value="<?php echo $result; ?>">
    </form>
</div> 

</body>
</html>