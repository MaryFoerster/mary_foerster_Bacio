

<form method="post" action="formular_danke.php">
    <label for="vorname">Vorname</label>
    <input type="text" id="vorname" name="vorname"> 
    <!-- id ist wichtig fürs ansprechen css js und wichtig für dieses for im label und das name brauchen wir um den inhalt im PHP auslesen zu können  -->
    <br>
    <br>
    <label for="nachname">Nachname</label>
    <input type="text" id="nachname" name="nachname"> 
    <br>
    <br>
    <label for="email">email</label>
    <input type="email" id="email" name="email"> 
    <br>
    <br>
    <label for="nachricht">nachricht</label>
    <textarea id="nachricht" name="nachricht" placeholder="nachricht"></textarea>
    <br>
    <br>
    <input type="checkbox" id="dsgvo-check" name="dsgvo-check" required>
    <label for="dsgvo-check">Ich stimme der DSGVO zu</label>
    <br>
    <br>
    <button type="submit" name="submit">Absenden</button>
</form>

