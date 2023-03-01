<?php
//Check if the ID number already exists in the database
//If it does, display an error message
//Check if the ID number is 13 characters long
//If it is not, display an error message
//Check if the date of birth is in the correct format
//If it is not, display an error message
//Check if the name and surname contain any characters that can cause
// a record not to be inputted into the database
declare(strict_types=1);
/**
 * @return PDO
 */
function getPdo(): PDO
{
    $host = 'localhost';//Your DB host here, e.g. localhost
    $db = 'proxserver';//Your DB name here, e.g. proxserver
    $user = 'gundo';//Your DB username
    $pass = '1234';//Your DB password
    $port = "8889";//"3306"
    $charset = 'utf8mb4';//Your DB charset, e.g. utf8mb4
    $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
        $pdo = new \PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    return $pdo;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $idNo = $_POST['id_no'];
    $dob = $_POST['dob'];
    $time = time();
    $pdo = getPdo();


    if (empty($name) || empty($surname) || empty($idNo) || empty($dob)) {
        $errors[] = 'Please fill in all fields';
    } else {
        $sql = "SELECT * FROM proxserver WHERE idno = :idno";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['idno' => $idNo]);
        $user = $stmt->fetch();
        if ($user) {
            $errors[] = 'ID number already exists';
        }
        if (strlen($idNo) != 13) {
            $errors[] = 'ID number must be 13 characters long';
        }
        if (!preg_match("/^[0-9]*$/", $idNo)) {
            $errors[] = 'ID number must be a number';
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors[] = 'Name must contain letters and spaces only';
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $surname)) {
            $errors[] = 'Surname must contain letters and spaces only';
        }
        if (!preg_match("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/", $dob)) {
            $errors[] = 'Date of birth must be in the format dd/mm/YYYY';
        }


        if (empty($errors)) {
            $sql = "INSERT INTO `proxserver` (`name`, `surname`, `idno`, `dob`, `timeOfSign`) VALUES (:name,
                 :surname, :idno, :dob, :timeOfSign)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'surname' => $surname, 'idNo' => $idNo, 'dob' => $dob,
                'timeOfSign' => $time]);
            $success = 'Record saved successfully';
            header('Location: index.php?success=' . $success);
        }
        }
}


?>
<!--Create an HTML form with the following input fields to allow for the capturing of
data into a database:
Name, Surname, Id No, Date of Birth, POST button, CANCEL button
Create a database with a relevant schema to store the input fields in.
REQUIREMENTS:
• Save 3 records into the database without duplicating the Id No. The ability to
capture a duplicate Id No in the database table is an immediate fail.
• If a duplicate Id No is found up on capturing, the user must be informed about
this and the form repopulated. People do not like to input their information in
twice.
• Validate the Id No field to make sure it is a number and that it is only 13
characters long.
• Validate the Date of birth field to make sure that the input date is in the
format dd/mm/YYYY.
• There must be a valid data in the name and surname fields and no characters
that can cause a record not to be inputted into the database.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProxServer</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--import fancy icons -->
    <script src="https://kit.fontawesome.com/6680624b05.js" crossorigin="anonymous"></script>
    <!--import jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="description" content="ProxServer , Save: Name, Surname, Id No, Date of Birth,
     POST button, CANCEL button">
    <meta name="keywords" content="Whatsapp, Manager, WhatsappMan">
    <meta name="author" content="Gundo">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="English">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

</head>

<body>
<?php include_once "includes/navbar.php"; ?>

<!-- jumbotron -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to Test 1</h1>
                <p class="lead">PHP Proficiency Test</p>
                <hr class="my-4">
                <p>"Talk Is Cheap, Show Me The Code..."</p>
                <a class="btn btn-primary btn-lg" href="http://gundo.ml" target="_blank" role="button">Learn more</a>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_GET['success'])): ?>

<div class="alert alert-success">
    <?php echo $_GET['success']; ?>
    <?php unset($_GET['success']); ?>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger">
        <?php echo $_GET['error']; ?>
        <?php unset($_GET['error']); ?>
        <?php endif; ?>
        <?php if (isset($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
             <li><?php echo $error; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

                    <h3 class="text-center">Sign Up</h3>
                </div>

                    </div>
                <div class="card-body">
                   <!--- Name, Surname, Id No, Date of Birth, POST button, CANCEL button -->

                    <form action="index.php" method="post" class="form form-group form-control form-control-lg">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            <?php if (isset($_POST['name'])): ?>
                                value="<?php echo $_POST['name']; ?>"
                            <?php endif; ?>
                            >
                        </div>
                        <div class="form-group">
                            <label for="name">Surname</label>
                            <input type="text" name="surname" id="surname" class="form-control"
                                   placeholder="Enter your Surname"
                            <?php if (isset($_POST['surname'])): ?>
                                value="<?php echo $_POST['surname']; ?>"
                            <?php endif; ?>
                            >
                        </div>
                        <div class="form-group">
                            <label for="name">Id No</label>
                            <input type="number" name="id_no" id="id_no" class="form-control"
                                   placeholder="Enter your Id No"
                            <?php if (isset($_POST['id_no'])): ?>
                                value="<?php echo $_POST['id_no']; ?>"
                            <?php endif; ?>
                            >
                        </div>
                        <div class="form-group">
                            <label for="name">Date of Birth</label>
                            <input type="date" placeholder="dd-mm-yyyy" value=""
                                   min="1960-01-01" max="2030-12-31" name="dob" id="dob" class="form-control"
                            <?php if (isset($_POST['dob'])): ?>
                                value="<?php echo $_POST['dob']; ?>"
                            <?php endif; ?>
                            >
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary
                            btn-block">Post</button>
                            <button type="reset" class="btn btn-danger btn-block">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- end sign up form -->

<!-- footer -->
<?php include_once 'includes/footer.php'; ?>
<!-- end footer -->

</body>
</html>