<h1>Hands-on Activity</h1>
<?php
    $table = array(
            "header" => array(
            "StudentID",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Courses",
            "Yearlevel"
        ),
        "body" => array(
            array(
                "firstname"=>"Ian",
                "middlename"=>"Egmarin",
                "lastname"=>"Llabore",
                "section"=>"IT3A",
                "course"=>"BSIT",
                "yearlevel"=>"3rd"              
            ),
            array(
                "firstname"=>"Lebron",
                "middlename"=>"Leb",
                "lastname"=>"James",
                "section"=>"IT3A",
                "course"=>"BSIT",
                "yearlevel"=>"3rd"              
            ),
            array(
                "firstname"=>"Stephen",
                "middlename"=>"Curry",
                "lastname"=>"Chef",
                "section"=>"IT3A",
                "course"=>"BSIT",
                "yearlevel"=>"3rd"              
            ),
            array(
                "firstname"=>"Kyrie",
                "middlename"=>"Irving",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"BSIT",
                "yearlevel"=>"3rd"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"BSIT",
                "yearlevel"=>"3rd"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"Yearlevel"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"Yearlevel"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"Yearlevel"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"Yearlevel"              
            ),
            array(
                "firstname"=>"Firstname",
                "middlename"=>"Middlename",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"Yearlevel"              
            )
            ),
)

?>

<table border='1'>
    <thead>
        <?php foreach($table["header"] as $header):?>
        <th><?php echo $header; ?></th>
        <?php endforeach;  ?>
    </thead>
    <tbody border='1'>        
           <?php
                for($i = 0; $i <= count($table["body"]) -1; $i++){
                echo "<tr>";
                echo "<td>" .$i."</td>";
                echo "<td>" .$table["body"][$i]["firstname"]."</td>";
                echo "<td>" .$table["body"][$i]["middlename"]."</td>";
                echo "<td>" .$table["body"][$i]["lastname"]."</td>";
                echo "<td>" .$table["body"][$i]["section"]."</td>";
                echo "<td>" .$table["body"][$i]["course"]."</td>";
                echo "<td>" .$table["body"][$i]["yearlevel"]."</td>";
                echo "</tr>";
                } 
           ?>
    </tbody> 
<?php
?>       
