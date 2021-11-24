<form action = form.php method = "post">
    <div>
        <label for = "Penal Code"> Penal Code: </label>
        <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
    </div>
    <div>
        <p>
            <label for = "Crime_Type"> Crime Type: </label>
            <input type="radio" id="Felony" name="crime_type" value="Felony">
            <label for="Felony">Felony</label><br>
            <input type="radio" id="Misdemeanor" name="crime_type" value="Misdemeanor">
            <label for="Misdemeanor">Misdemeanor</label><br>
            <input type="radio" id="Civil" name="crime_type" value="Civil">
            <label for="Civil">Civil</label>
        </p>
    </div>
    <div>
        <label for = "Law Description"> Law Description: </label>
        <input type = "text" name = "lawDesc" required = "required" placeholder = "Description of the Law"/>
    </div>
</form>
