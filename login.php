<html>
<body>
    <form method="post" action="/login">
        <input type="hidden" name="state" value="<?php echo $_REQUEST['state'] ?>" />
        <input type="hidden" name="redirect_uri" value="<?php echo $_REQUEST['redirect_uri'] ?>" />
        <input type="submit" value="login" />
    </form>
</body>
</html>
