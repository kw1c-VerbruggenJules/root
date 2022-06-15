<?php
/**
 * User: J. Verbruggen
 * Date: 15/06/2022
 * File: contactFormulier.php
 */
//header
include '../includes/header.php';
//header
include '../includes/nav.php';
?>
<!--body-->
<body>
    <!--The form containing the questions for the contact form-->
    <h1 id="nieuws">Contactformulier</h1><br><br>
    <form>
        <label for="fAanhef">Aanhef:</label><br>
        <input id="fAanhef" type="text" name="fAanhef" required><br>
        <label for="fNaam">Naam:</label><br>
        <input id="fNaam" type="text" name="fNaam" required><br>
        <label for="fMail">E-mailadres:</label><br>
        <input id="fMail" type="text" name="fMail" required><br>
        <label for="fNummer">Telefoonnummer:</label><br>
        <input id="fNummer" type="text" name="fNummer" required><br>
        <label for="fVO">Vragen/Opmerkingen:</label><br>
        <input type="text" id="fVO" name="fVO" required><br><br>
        <label for="fNieuwsbrief">Aanmelden voor de nieuwsbrief: </label><input type="checkbox" name="fNieuwsbrief"><br>
        <input type="submit" id="submit2" value="Submit">
    </form>
</body>
<!--footer-->
<?php
    include '../includes/footer.php';
?>