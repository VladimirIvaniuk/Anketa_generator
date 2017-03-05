<?php

if(isset($_POST['create'])){
    $first_name=$_POST['firstName'];
    $last_name=$_POST['lastName'];
    $email=$_POST['email'];
    $phon_number=$_POST['phon_number'];
    $data_new=$_POST['data_new'];
    $nationality = $_POST["nationality"];
    if($_POST["sex"]=="Female"){
        $sex="Female";
    }
    else
        $sex="Male";
    $company_name=$_POST["company_name"];
    $from=$_POST["from"];
    $to=$_POST["to"];

    $language_pr[0]=$_POST["language_pr"][0];
    $level_pr[]=$_POST["level_pr"];

    $language[0]=$_POST["language"][0];
    $comprehension[]=$_POST["comprehension"];
    $read[]=$_POST["read"];
    $write[]=$_POST["write"];
    if(isset($_POST["drive"]))
        $drive[]=$_POST["drive"];

}
else{
    $first_name="";
    $last_name="";
    $email="";
    $phon_number="";
    $sex="";
    $data_new="";
    $nationality = "";
    $company_name="";
    $from="";
    $to="";

    $language_pr[0]="";
    $level_pr[]="";

    $language[0]="";
    $comprehension="";
    $read[]="";
    $write[]="";

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="libs/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">
    <script type="text/javascript" src="libs/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <title>CV Generator</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary" id="form">
                <div class="panel-heading">
                    <h4>Generator CV</h4>
                </div>
                <div class="panel-body panel-warning">
                    <form name="form" action="index.php" method="post">
                        <!--Панель персональная информация begin -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Personal information</h4>
                            </div>
                            <div class="panel-body panel-warning">
                                <div class="form_block">
                                    <div class="form-group">
                                        <label for="firstName">Name:</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name..." value="<?=$first_name?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name..."value="<?=$last_name?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="e-mail">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="e-mail" placeholder="Enter e-mail..."value="<?=$email?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phon-number">Phon number</label>
                                        <input type="tel" class="form-control" name="phon_number" id="phon-number" placeholder="Phon number..."value="<?=$phon_number?>">
                                    </div>
                                    <label class="radio-inline">
                                        <input  type="radio" name="sex"  value="Female" checked="checked">Female
                                    </label>

                                    <label class="radio-inline">
                                        <input name="sex" type="radio" value="Male" >Male<br />
                                    </label>
                                    <br />
                                    <br />
                                    <div class="form-group">
                                        <label for="data_new">Birth Date:</label>
                                        <input type="data" class="form-control ddata" name="data_new" id="data_new" placeholder="dd/mm/yyyy" value="<?=$data_new?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="nationality">Nationality:</label>
                                        <select id="nationality" name="nationality" class="form-control">
                                            <option>Ukrainian</option>
                                            <option>French</option>
                                            <option>German</option>
                                            <option>Bulgarian</option>
                                            <option>Russian</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Панель персональная информация end -->

                        <!--Панель последнее место работы begin-->
                        <div class=" panel panel-primary">
                            <div class="panel-heading">
                                <h4>Last Work Position</h4>
                            </div>
                            <div class="panel-body panel-warning">
                                <div class="form_block">

                                    <div class="form-group form-inline">
                                        <label for="companyName">Company Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter company name..." name="company_name" id="companyName" value="<?=$company_name?>">
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="from">From:</label>
                                        <input type="date" class="form-control ddata" placeholder="dd/mm/yyyy" name="from" id="from" value="<?=$from?>">
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="to">To:</label>
                                        <input type="date" class="form-control ddata" placeholder="dd/mm/yyyy" name="to" id="to" value="<?=$to?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Панель последнее место работы end-->

                        <!-- Языки программирования begin-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Computer Skills</h4>
                            </div>
                            <div class="panel-body panel-warning">
                                <div class="form-block">
                                    <label for="language_pr">Programming Languages:</label>
                                    <div class="form-group form-inline" id="test">
                                        <input type="text" name="language_pr[]" placeholder="programming languages..." id="language_pr" class="form-control" value="<?=$language_pr[0]?>">
                                        <select id="level_pr" name="level_pr[]" class="form-control">
                                            <option>Beginner</option>
                                            <option>Programmer</option>
                                            <option>Ninja</option>
                                        </select>
                                    </div>
                                    <!--Кнопки-->
                                    <button type="button" class="btn btn-success" id="addProgLan">Add languages</button>
                                    <button type="button" class="btn btn-danger" id="delProgLan">Delete languages</button>
                                </div>
                            </div>
                        </div>
                        <!-- Языки программирования end-->


                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Other Skills</h4>
                            </div>
                            <div class="panel-body panel-warning">
                                <div class="form-block">

                                    <!--Языки begin-->

                                    <label for="language">Languages:</label>
                                    <div class="form-group form-inline" id="language_lang">
                                        <input type="text" name="language[]" placeholder="languages..." id="language" class="form-control" value="<?=$language[0]?>">
                                        <select id="comprehension" name="comprehension[]" class="form-control">
                                            <option>-Comprehension-</option>
                                            <option>intrmediate</option>
                                            <option>advanced</option>
                                        </select>
                                        <select id="read" name="read[]" class="form-control">
                                            <option>-Reading-</option>
                                            <option>beginner</option>
                                            <option>ninja</option>
                                        </select>
                                        <select id="write" name="write[]" class="form-control">
                                            <option>-Writing-</option>
                                            <option>beginner</option>
                                            <option>ninja</option>
                                        </select>
                                    </div>
                                    <!--Языки end-->

                                    <!--Кнопки-->
                                    <button type="button" class="btn btn-success" id="addLan">Добавить язык</button>
                                    <button type="button" class="btn btn-danger" id="delLan">Удалить язык</button>
                                </div>
                                <br>
                                <!--Права -->
                                <div>
                                    <label>
                                        Draver`s Licinse
                                    </label>
                                    <br>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="drive[]" id="inlineCheckbox1" value="A"> A
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="drive[]" id="inlineCheckbox2" value="B"> B
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="drive[]" id="inlineCheckbox3" value="C"> C
                                    </label>

                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-success" name="create" id="create" value="Send">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6" id="Table_gen">
            <div class="panel panel-primary" id="form">
                <div class="panel-heading">
                    <h4>CV</h4>
                </div>
                <div class="panel-body panel-warning">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Personal information</h4>
                        </div>
                        <div class="panel-body panel-warning">
                            <div class="form_block">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?=$first_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?=$last_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?=$email?></td>
                                    </tr>
                                    <tr>
                                        <td>Phon Number</td>
                                        <td><?=$phon_number?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?=$sex?></td>
                                    </tr>
                                    <tr>
                                        <td>Birth Date</td>
                                        <td><?=$data_new?></td>
                                    </tr>
                                    <tr>
                                        <td>Nationality</td>
                                        <td><?=$nationality?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Last Work</h4>
                        </div>
                        <div class="panel-body panel-warning">
                            <div class="form_block">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Company Name</td>
                                        <td><?=$company_name?></td>
                                    </tr>
                                    <tr>
                                        <td>From</td>
                                        <td><?=$from?></td>
                                    </tr>
                                    <tr>
                                        <td>To</td>
                                        <td><?=$to?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Computer Skils</h4>
                        </div>
                        <div class="panel-body panel-warning">
                            <div class="form_block">
                                <table class="table table-striped table-bordered table-hover table-responsive">
                                    <tbody>
                                    <tr>
                                        <th style="vertical-align: middle" rowspan="<?php echo count($_POST['language_pr'])+1?>">Programming Languages</th>
                                        <th>Language</th>
                                        <th>Skill Level</th>
                                    </tr>
                                    <?php if(isset($_POST["language_pr"])):
                                    for($i=0;$i<count($_POST["language_pr"]);$i++):?>
                                    <tr>
                                        <td><?php echo $_POST["language_pr"][$i]?></td>
                                        <td ><?=$_POST["level_pr"][$i];?></td>
                                    </tr>
                                    <?php endfor;
                                    endif;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        <!--Знание языков таблица-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Other Skils</h4>
                        </div>
                        <div class="panel-body panel-warning">
                            <div class="form_block">
                                <table class="table table-striped table-bordered table-hover table-responsive">
                                    <tbody>
                                    <tr>
                                        <th style="vertical-align: middle" rowspan="<?php echo count($_POST['language'])+1?>">Languages</th>
                                        <th>Language</th>
                                        <th>Comprehension</th>
                                        <th>Reading</th>
                                        <th>Writing</th>
                                    </tr>
                                    <?php if(isset($_POST["language"])):
                                        for($i=0;$i<count($_POST["language"]);$i++):?>
                                            <tr>
                                                <td><?php echo $_POST["language"][$i]?></td>
                                                <td ><?=$_POST["comprehension"][$i];?></td>
                                                <td ><?=$_POST["read"][$i];?></td>
                                                <td ><?=$_POST["write"][$i];?></td>
                                            </tr>
                                        <?php endfor;
                                    endif;?>
                                    <tr>
                                        <th>Driver`s License</th>
                                        <td class="info" colspan="4">
                                            <?php
                                            if(isset($_POST["drive"])) {
                                                for ($i = 0; $i < count($_POST["drive"]); $i++) {
                                                    echo $_POST["drive"][$i] . "; ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>