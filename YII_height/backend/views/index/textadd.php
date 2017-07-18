<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>文章添加</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <a href="?r=index/index">展示文章</a>
            <form action="?r=index/textadd" method="post">
                <table>
                    <tr>
                        <td>文章标题</td>
                        <td><input type="text" name="head" /></td>
                    </tr>
                    <tr>
                        <td>文章内容</td>
                        <td><input type="text" name="content" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="添加文章" /></td>
                        <td><input type="reset" value="取消" /></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
