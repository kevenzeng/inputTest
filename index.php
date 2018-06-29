<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>hangge.comm</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <style>
        #container{
            width:380px;
            margin:20px auto;
            padding:15px;
            background-color:#eee;
          border-radius: 15px;
        }
        /** 新增按钮 **/
        #addVar{
            margin:0 0 0 52px;
            padding:5px;
            display:inline-block;
            background-color:#3A9668;
            color:#f1f1f1;
            border:1px solid #005;
            border-radius: 4px;
        }
        /** 删除按钮 **/
        .removeVar{
            margin:auto;
            padding:5px;
            display:inline-block;
            background-color:#B02109;
            color:#f1f1f1;
            border:1px solid #005;
          border-radius: 4px;
        }
 
        #addVar:hover, .removeVar:hover{
            cursor: pointer;
        }
 
        .alignRight{
            text-align: right;
        }
 
        input, textarea{
            padding:5px;
            font-size: 16px;
        }
    </style>
    <script>
        //初始参数个数
        var varCount = 1;
 
        $(function () {
          //新增按钮点击
            $('#addVar').on('click', function(){
                varCount++;
                $node = '<div><p><label for="var'+varCount+'">名称: </label>'
                  + '<input type="text" name="var1[]" id="var'+varCount+'">'
                  + '</p><p><label for="var'+varCount+'">型号: </label>'
                  + '<input type="text" name="var2[]" id="var'+varCount+'">'
                  + '</p><p><label for="var'+varCount+'">数量: </label>'
                  + '<input type="text" name="var3[]" id="var'+varCount+'">'
                  + '</p><p><label for="var'+varCount+'">备注: </label>'
                  + '<input type="text" name="var4[]" id="var'+varCount+'">'
                  + '<span class="removeVar">删除</span></p></div>';
            //新表单项添加到“新增”按钮前面
                $(this).parent().before($node);
            });
 
          //删除按钮点击
          $('form').on('click', '.removeVar', function(){
        	//varCount--;
            $(this).parent().parent().remove();
            
          });
        });
    </script>
</head>
<body>
    <div id="container">
      <form id="myForm" method="post" action="exe.php">
      <div>
        <p>
          <label for="var1">名称: </label>
          <input type="text" name="var1[]" id="var1">
        </p>
         <p>
          <label for="var1">型号: </label>
          <input type="text" name="var2[]" id="var1">
        </p>
        <p>
          <label for="var1">数量: </label>
          <input type="text" name="var3[]" id="var1">
        </p>
        
        <p>
          <label for="var1">备注: </label>
          <input type="text" name="var4[]" id="var1">
          <span class="removeVar">删除</span>
        </p>
        
        </div>
        <p><span id="addVar">新增工具信息</span></p>
        <p class="alignRight"><input type="submit" value="提交"></p>
      </form>
    </div>
</body>
</html>