<!DOCTYPE html>

    <head>
        <title>Project 7 - Madlib</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

    <body>
        <div class="container">
            <h1>Project 7 - Madlib</h1>
            <h2>Let's create a madlib!<br>Fill out the form and see what your crazy story becomes!</h2>

            <div class="content">

                <form action="result.php" method="post">
                    <input type="text" name="name" autocomplete="off" placeholder="Name:"><br />
                    <input type="text" name="adjective" autocomplete="off" placeholder="Adjective:"><br />
                    <input type="text" name="adverb" autocomplete="off" placeholder="Adverb:"><br />
                    <input type="text" name="noun" autocomplete="off" placeholder="Noun:"><br />
                    <input type="text" name="pluralnoun" autocomplete="off" placeholder="Plural Noun:"><br />
                    <input type="text" name="noun2" autocomplete="off" placeholder="Another Noun:"><br />
                    <input type="text" name="adjective2" autocomplete="off" placeholder="Another Adjective:"><br />
                    <input type="text" name="adjective3" autocomplete="off" placeholder="Another Adjective:"><br />
                    <input type="text" name="verb" autocomplete="off" placeholder="Verb:"><br />
                    <input type="text" name="verb2" autocomplete="off" placeholder="Another Verb:"><br />
                    <button class="btnSubmit" type="submit" name="btnSubmit">Create your madlib!</button>
                </form>
            </div>
        </div>
    </body>

</html>