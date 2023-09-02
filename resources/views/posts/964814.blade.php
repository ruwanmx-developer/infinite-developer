@extends('layouts.app')
@section('meta_description', $post->page_meta_data)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-10 post-cnt">
                <h2 class="title-1">Introduction</h2>
                <p class="desc"></p>
                <h2 class="title-1">Create the Database</h2>
                <p class="desc">
                    Run your <span>Apache Server</span> and the <span>MySql Server</span>. Then open your
                    <span>MySql
                        terminal</span> and type this
                    command to connect to MySql. You need to use your <span>MySql username</span> and the
                    <span>password</span>. In my case my
                    username is <span>root</span> and no password.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">mysql -u root -p</code></pre>
                </div>
                <p class="desc">
                    Then this code to create a new database named <span>student_db</span>.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-sql">CREATE DATABASE student_db;</code></pre>
                </div>
                <p class="desc">
                    Next use this code to select the created database.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-sql">USE student_db;</code></pre>
                </div>
                <p class="desc">
                    Finally use this code to create a table named <span>student_details</span> to store our data.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-sql">CREATE TABLE student_details (
    id INT NOT NULL AUTO_INCREMENT ,
    full_name VARCHAR(200) NOT NULL ,
    gender VARCHAR(6) NOT NULL ,
    marks INT NOT NULL ,
    PRIMARY KEY (id)
);</code></pre>
                </div>
                <h2 class="title-1">Create Database Configaration</h2>
                <p class="desc">
                    In your project folder you have to create a file named <span>database_config.php</span> and paste this
                    code. You have to chanage the username and the password of your MySql server. In my case my username is
                    <span>root</span> an <span>no password</span>. Also you have to change the <span>server name</span> too.
                    I run this application in my local
                    machine so my server name is <span>localhost</span>.
                </p>

                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
$__servername = 'localhost';
$__username = 'root';
$__password = '';
$__dbname = 'student_db';

try {
    $__conn = new mysqli($__servername, $__username, $__password, $__dbname);
} catch (mysqli_sql_exception $__e) {
    die("Mysql Error");
}
?></code></pre>
                </div>
                <h2 class="title-1">Create A Page to read and display Data</h2>
                <p class="desc">
                    Create a file named <span>index.php</span> and paste this code in it.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
require_once('database_config.php');
?&gt;
&lt;!doctype html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;Student Management System&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"&gt;
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;div class="container py-5"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-12"&gt;
                &lt;a href="add_data.php" class="btn btn-primary py-0"&gt;Add New Record&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="col-12 mt-4"&gt;
                &lt;table class="table table-striped"&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th scope="col"&gt;#&lt;/th&gt;
                            &lt;th scope="col"&gt;Student Name&lt;/th&gt;
                            &lt;th scope="col"&gt;Gender&lt;/th&gt;
                            &lt;th scope="col"&gt;Marks&lt;/th&gt;
                            &lt;th scope="col"&gt;Action&lt;/th&gt;
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                        &lt;?php
                        $sql = "SELECT * FROM student_details";
                        $result = $__conn-&gt;query($sql);
                        while ($row = $result-&gt;fetch_assoc()) {
                        ?&gt;
                        &lt;tr&gt;
                            &lt;td&gt;&lt;?php echo $row['id']; ?&gt;&lt;/td&gt;
                            &lt;td&gt;&lt;?php echo $row['full_name']; ?&gt;&lt;/td&gt;
                            &lt;td&gt;&lt;?php echo $row['marks']; ?&gt;&lt;/td&gt;
                            &lt;td&gt;&lt;?php echo $row['gender']; ?&gt;&lt;/td&gt;
                            &lt;td&gt;
                                &lt;a href="edit.php?id=&lt;?php echo $row['id']; ?&gt;" class="btn btn-warning py-0"&gt;Edit&lt;/a&gt;
                                &lt;a href="delete.php?id=&lt;?php echo $row['id']; ?&gt;" class="btn btn-danger py-0"&gt;Delete&lt;/a&gt;
                            &lt;/td&gt;
                        &lt;/tr&gt;
                        &lt;?php
                        }
                        ?&gt;
                    &lt;/tbody&gt;
                &lt;/table&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;

&lt;/html&gt;</code></pre>
                </div>
                <h2 class="title-1">Create a form to add data to the database</h2>
                <p class="desc">
                    Create a file named <span>add_data.php</span> and paste this code in it.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
require_once('database_config.php');

if(array_key_exist('add_data', $_POST)){
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $grade = $_POST['grade'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO student_details(id, full_name, gender, marks) VALUES (NULL, '$full_name', '$gender', '$grade', '$marks');";
    if ($__conn-&gt;query($sql) === TRUE) {
        header("location:index.php");
    } else {
        die("Data Not Inserted!");
    }
}

?&gt;
&lt;!doctype html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;Student Management System&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"&gt;
        &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;div class="container py-5"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-12"&gt;
                &lt;a href="index.php" class="btn btn-primary py-0"&gt;Go Back&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="col-12 mt-4"&gt;
                &lt;form action="&lt;?php echo htmlspecialchars($_SERVER['PHP_SELF']);?&gt;" method="POST" class="row"&gt;
                    &lt;div class="mb-3 col-12"&gt;
                        &lt;label for="full_name" class="form-label"&gt;Student Full Name&lt;/label&gt;
                        &lt;input type="text" class="form-control" id="full_name" required&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="gender" class="form-label"&gt;Gender&lt;/label&gt;
                        &lt;select class="form-select" name="gender" id="gender" required&gt;
                            &lt;option value="Male"&gt;Male&lt;/option&gt;
                            &lt;option value="Female"&gt;Female&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="grade" class="form-label"&gt;Grade&lt;/label&gt;
                        &lt;select class="form-select" name="grade" id="grade" required&gt;
                            &lt;option value="Grade 6"&gt;Grade 6&lt;/option&gt;
                            &lt;option value="Grade 7"&gt;Grade 7&lt;/option&gt;
                            &lt;option value="Grade 8"&gt;Grade 8&lt;/option&gt;
                            &lt;option value="Grade 9"&gt;Grade 9&lt;/option&gt;
                            &lt;option value="Grade 10"&gt;Grade 10&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="full_name" class="form-label"&gt;Marks&lt;/label&gt;
                        &lt;input type="number" class="form-control" id="full_name" required&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12 d-flex justify-content-end "&gt;
                        &lt;button class="btn btn-primary py-0" name="add_data" type="submit"&gt;Add Record&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;

&lt;/html&gt;</code></pre>
                </div>
                <h2 class="title-1">Create A Form To Update Data</h2>
                <p class="desc">
                    Create a file named <span>edit.php</span> and paste this code in it.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
require_once('database_config.php');

if (array_key_exists('edit_data', $_POST)) {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $grade = $_POST['grade'];
    $marks = $_POST['marks'];
    $id = $_POST['st_id'];

    $sql = "UPDATE student_details SET full_name='$full_name',gender='$gender',marks='$marks' WHERE id = '$id';";
    if ($__conn-&gt;query($sql) === TRUE) {
        header("location:index.php");
    } else {
        die("Data Not Updated!");
    }
}
$full_name = $gender = $grade = $marks = $id = "";
if (array_key_exists('id', $_GET)) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student_details WHERE id='$id'";
    $result = $__conn-&gt;query($sql);
    $row = $result-&gt;fetch_assoc();

    $full_name = $row['full_name'];
    $gender = $row['gender'];
    $grade = $row['grade'];
    $marks = $row['marks'];
}

?&gt;
&lt;!doctype html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;Student Management System&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"&gt;
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;div class="container py-5"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-12"&gt;
                &lt;a href="index.php" class="btn btn-primary py-0"&gt;Go Back&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="col-12 mt-4"&gt;
                &lt;form action="&lt;?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?&gt;" method="POST" class="row"&gt;
                    &lt;input type="hidden" name="st_id" value="&lt;?php echo $id; ?&gt;"&gt;
                    &lt;div class="mb-3 col-12"&gt;
                        &lt;label for="full_name" class="form-label"&gt;Student Full Name&lt;/label&gt;
                        &lt;input type="text" class="form-control" id="full_name" value="&lt;?php echo $id; ?&gt;" required&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="gender" class="form-label"&gt;Gender&lt;/label&gt;
                        &lt;select class="form-select" name="gender" id="gender" required&gt;
                            &lt;option value="Male" &lt;?php echo ($gender === 'Male') ? 'selected' : ""; ?&gt;&gt;Male
                            &lt;/option&gt;
                            &lt;option value="Female" &lt;?php echo ($gender === 'Female') ? 'selected' : ""; ?&gt;&gt;Female
                            &lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="grade" class="form-label"&gt;Grade&lt;/label&gt;
                        &lt;select class="form-select" name="grade" id="grade" required&gt;
                            &lt;option value="Grade 6" &lt;?php echo ($gender === 'Grade 6') ? 'selected' : ""; ?&gt;&gt;Grade 6
                            &lt;/option&gt;
                            &lt;option value="Grade 7" &lt;?php echo ($gender === 'Grade 7') ? 'selected' : ""; ?&gt;&gt;Grade 7
                            &lt;/option&gt;
                            &lt;option value="Grade 8" &lt;?php echo ($gender === 'Grade 8') ? 'selected' : ""; ?&gt;&gt;Grade 8
                            &lt;/option&gt;
                            &lt;option value="Grade 9" &lt;?php echo ($gender === 'Grade 9') ? 'selected' : ""; ?&gt;&gt;Grade 9
                            &lt;/option&gt;
                            &lt;option value="Grade 10" &lt;?php echo ($gender === 'Grade 10') ? 'selected' : ""; ?&gt;&gt;Grade 10
                            &lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-3 col-6"&gt;
                        &lt;label for="full_name" class="form-label"&gt;Marks&lt;/label&gt;
                        &lt;input type="number" class="form-control" id="full_name" value="&lt;?php echo $marks; ?&gt;" required&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12 d-flex justify-content-end "&gt;
                        &lt;button class="btn btn-primary py-0" name="edit_data" type="submit"&gt;Add Record&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;

&lt;/html&gt;</code></pre>
                </div>
                <h2 class="title-1">Create Delete Functionality</h2>
                <p class="desc">
                    Create a file named <span>delete.php</span> and paste this code in it.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
require_once('database_config.php');

if (array_key_exists('id', $_GET)) {
    $id = $_GET['id'];
    $sql = "DELETE FROM student_details WHERE id='$id'";
    $__conn->query($sql);
    header("location:index.php");
}
</code></pre>
                </div>
                <p class="desc">
                    Now you can save the files and run your applications using this url <a
                        href="http://localhost/"><span>http://localhost/</span></a>. If you have problems with configing
                    in Xammp
                    Server you can follow <a href="how-to-config-xammp-for-development-advance"><span>How To Config Xammp
                            For Development Advance</span></a>
                    post to install
                    and configure the server.
                </p>

            </div>
        </div>
    </div>
@endsection
