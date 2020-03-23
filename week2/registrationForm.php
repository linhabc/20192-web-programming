<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A simple form</title>
    </head>
    <body>
        <form action="http://fit.hut.edu.vn/~trangntt/courses/wp" method="POST">
            Click submit to start our initial PHP program.
            <br/>
            <label for="userName">Email: </label>
            <input type="text" id="userName" name="userName" /><br />

            <label for="class">Password: </label>
            <input type="password" id="class" name="class" /><br />

            <label for="vehicle">Vehicle: </label><br />
            <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike" />
            <label for="vehicle1"> I have a bike</label><br />
            <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car" />
            <label for="vehicle2"> I have a car</label><br />
            <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat" />
            <label for="vehicle3"> I have a boat</label><br />

            <label for="gender">Gender: </label><br />
            <input type="radio" id="gender" name="gender" value="male" /> Male<br />
            <input type="radio" id="gender" name="gender" value="female" />
            Female<br />
            <input type="radio" id="gender" name="gender" value="other" />
            Gayy<br /><br />

            <input type="submit" name="" value="Click to submit">
            <input type="reset" name="" value="Erase and Restart">
        </form>
    </body>
</html>