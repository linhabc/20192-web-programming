<html>

<head>
    <title>Web Info System</title>
</head>

<body>
    <h1>Bài kiểm tra số 1</h1>

    <a href="https://users.soict.hust.edu.vn/hoangph/courses/IT3402/it3402_syllabus.pdf" download>
        <img src="http://storage.googleapis.com/hust-edu.appspot.com/images/347519313-1553408625211-logo_hust.png" style="width:100px;height:150px;" />
    </a>

    <h2>Introduction</h2>
    <p>Brief history of Internet and World Wide Web, What is NOT a web system, Typical application, Social impact</p>

    <h2>HTTP</h2>
    <p>Server-client model, Protocol stack, TCP/IP, DNS, URL or URI
        Request and response, character encoding, media type, request methods, request header fields, response header fields</p>

    <h2>HTML</h2>
    <p>Markup and rendering, Syntax of HTML</p>

    <h2>CSS</h2>
    <p>Stylesheet, Separating structure and presentation, Syntax of CSS</p>

    <h2>Overview of dynamics pages</h2>
    <p>Examples of dynamic pages, Client-side and server-side, 3-tier system</p>

    <h2>Client-side dynamics pages</h2>
    <p>Client-side dynamic pages, JavaScript</p>

    <h2>Server-side dynamic pages with Ruby</h2>
    <p>Introduction & Ruby Basic, Ruby Basic</p>

    <h2>Server-side dynamic pages with Ruby (2)</h2>
    <p>Ruby Advance: #1: Class, Number, String, Array, Hash
        Ruby Advance: #2: Ranges, Symbols, Booleans, Objects, Variables, Operators, Conditionals, Loops
        Ruby Advance: #3: Methods, Blocks, Procs, Lambdas, Closures, Classes, Exception handling</p>

    <h2>Server-side dynamic pages with Ruby (3)</h2>
    <p>Ruby on Rails: introduction & deployment</p>

    <h2>Server-side dynamic pages with Ruby (4)</h2>
    <p>Static page, layout and modeling, sign up</p>

    <h2>Server-side dynamic pages with Ruby (5)</h2>
    <p>Log in, log out, Updating, Showing</p>

    <h2>Server-side dynamic pages with Ruby (6)</h2>
    <p>Account Activation</p>

    <h2>Advanced topic 3: Web 3.0</h2>
    <p>Metadata, Semantic web, RDF, OWL, SPARQL</p>

    <h2>Mini project</h2>
    <p></p>

    <h2>Mini project</h2>
    <p></p>

    <form action="./hanler.php" method="post" id="form">
        <input type="radio" name="feedback" id="agree" value="agree">agree<br />
        <input type="radio" name="feedback" id="notAgree" value="notAgree">not agree<br />

        Additional Info: <input type="text" name="textFeedback" id="textFeedback"> <br />

        UserName:
        <select name="userName" id="uName">
            <?php
            $userNames = array('Name1', 'Name2', 'Name3', 'Name4', 'Name5');
            foreach ($userNames as  $userName) {
                print("<option id={$userName} value={$userName}>{$userName}</option><br />");
            }
            ?>
        </select><br />


        Password: <input type="password" name="password" id="password"> <br />

        <input type="submit" value="submit">
    </form>
</body>


</html>