<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trying to handel the data from front end to back end</title>
</head>
<body>
    <h1>create account</h1>
    <form action="databass/formhandling.php" method="post">

        <input type="text" name="username" id="username" placeholder="user name">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="email" name="email" id="email" placeholder="email">
        <button type="submit">signup</button>
    </form>
    <h1>change account</h1>
    <form action="databass/userupdate.php" method="post">

        <input type="text" name="username" id="username" placeholder="user name">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="email" name="email" id="email" placeholder="email">
        <button type="submit">update</button>
    </form>
    <h1>delete account</h1>
    <form action="databass/userdelete.php" method="post">

        <input type="text" name="username" id="username" placeholder="user name">
        <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">delete</button>
    </form>
    <h1>search account</h1>
    <form action="databass/search.php" method="post">

        <input type="text" name="searchuser" id="searchuser" placeholder="user name">
      <button type="submit">search</button>
    </form>
</body>
</html>