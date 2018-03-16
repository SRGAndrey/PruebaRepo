<?php include '../Presentation/Reusable/main_header.php' ?>

<br><br>
<div id="content">                
    <?php
        include '../Business/PersonBusiness.php';
        $personBusiness = new PersonBusiness();
        $allPersons = $personBusiness->getAllRegisteredPersons();
        foreach ($allPersons as $currentPerson) {
            echo "Person name: " . $currentPerson->name .
            ". Person age: " . $currentPerson->age . ".";
            echo "<br>";
        }
    ?>                
</div>

<?php include '../Presentation/Reusable/main_footer.php' ?>