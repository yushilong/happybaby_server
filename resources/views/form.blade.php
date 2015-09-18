<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="./user/register" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="text" name="name"/>
    <input type="password" name="password"/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>