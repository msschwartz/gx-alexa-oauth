<html>
<body>
    <form method="post" action="/ppd">
        <input type="hidden" name="redirect_uri" value="<?php echo $_REQUEST['redirect_uri'] ?>" />
        <p>By clicking accept, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.<p>
        <input type="submit" value="accept" />
    </form>
</body>
</html>
