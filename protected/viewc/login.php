<html>
    <head>
        <title>To Doo List Manager :: <?php echo $data['pagetitle']; ?></title>
    </head>
    <body>
        <h1>To Doo List Manager :: <?php echo $data['pagetitle']; ?></h1>

        <p>Please Login</p>

        <form method="post">
            <label for="txt_username">Username</label>
            <input type="text" name="txt_username" /><br />

            <label for="txt_password">Password</label>
            <input type="password" name="txt_password" /><br />
			<p class="error">Error: <?php echo $data['errorMsg']; ?></p>
            <input type="submit" value="Login" />
        </form>
    </body>
</html>