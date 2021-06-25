<html>
<head>

</head>
<body>
    <form action="<?php base_url() ?>virtualAccount/submit" method="post">
    <input type="text" name="external_id" value="ovo-ewallet">
    <input type="text" name="amount">
    <input type="text" name="phone">
    <input type="text" name="ewallet_type" value="OVO">
    <button type="submit">Submit</button>
    </form>
</body>
</html>