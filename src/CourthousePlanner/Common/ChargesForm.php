<form action = form.php method = "post">
    <div>
        <label for = "Case ID"> Case ID: </label>
        <input type = "number" name = "caseID" required = "required" placeholder = "001-001"/>
    </div>
    <div>
        <label for = "Penal Code"> Penal Code: </label>
        <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
    </div>
    <div>
        <label for = "Found"> Found: </label>
        <p>
            <input type="radio" id="guilty" name="outcome" value="True">
            <label for="guilty">Guilty</label><br>
            <input type="radio" id="not_guilty" name="outcome" value="False">
            <label for="not_guilty">Not Guilty</label><br>
        </p>

    </div>
</form>
