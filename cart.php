<?php

$hpage = "Cart";
include "header.php"; ?>

<body>
    <form >
        <h3>Formulaire</h3>
        <label name="quantity">Quantité</label>
        <input inputmode="numeric" type="number" id="quantity" name="quantity"></input>
        <button type="submit">Commander</button>
    </form>

</body>


<?php include "footer.php"; ?>