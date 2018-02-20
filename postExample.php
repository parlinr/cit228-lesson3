<?php

echo <<<END
<section>
    <form method="post" action="processForm.php">
        <fieldset>
            <legend>Registration Form:</legend>
                <label for="name" id="nameLabel">Name:</label>
                <input class="formEntry" type="text" id="name" name="name"><br>
                <label for="email" id="emailLabel">Email:</label>
                <input class="formEntry" type="text" id="email" name="email"><br>
                <label for="address" id="addressLabel">Address:</label>
                <input class="formEntry" type="text" id="address" name="address"><br>
                <label for="city" id="cityLabel">City:</label>
                <input class="formEntry" type="text" id="city" name="city">
                <label for="state" id="stateLabel">State:</label>
                <select name="state" id="state">
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="OH">OH</option>
                    <option value="PA">PA</option>
                </select>
                <p>Check the newsletters you are interested in subscribing to:</p>
                <input id="letter1" name="letter1" type="checkbox"><label for="letter1" name="letter1Label">Letter 1</label>
                <input id="letter2" name="letter2" type="checkbox"><label for="letter2" name="letter2Label">Letter 2</label><br>
                <input id="letter3" name="letter3" type="checkbox"><label for="letter3" name="letter3Label">Letter 3</label>
                <input id="letter4" name="letter4" type="checkbox"><label for="letter4" name="letter4Label">Letter 4</label><br>



    
END;


?>