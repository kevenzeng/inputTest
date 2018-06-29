<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>元素的添加与删除</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script type="text/javascript" src="jquery-1.10.1.js"></script>
</head>
<body>
<form>
<table border="1px" width="200px" id="table1">
    <tr style="height: 20px">
        <td>0</td>
        <td ><input type="button" onclick="add(this);" value="添加"></td>
    </tr>
    <tr style="height: 20px">
        <td>1</td>
        <td ><input type="button" onclick="del(this);" value="删除"></td>
     </tr>
    <tr id="tr2" style="height: 20px">
    <td>2</td>
        <td ><b onclick="del(this);">删除</b></td>
    </tr>
</table>
</form>
</body>
<script type="text/javascript">
    var i=3;
function del(e) {
 
    $(e).parent().parent().remove();
    i--;
}

function add() {

    $("#table1").append("<tr style=\"height: 20px\">\n" +
        "        <td>"+i+"</td>\n" +
        "        <td ><input type=\"button\" onclick=\"del(this);\" value=\"删除\"></td>\n" +
        "     </tr>")
    i++;
}

</script>
</html>