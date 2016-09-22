<?php
class ShowAction extends Action{

    public function feedback(){
        header("Content-Type:text/html; charset=utf-8");
        $Dao = M("enewsfeedback");	// 实例化模型类

        // 构建写入的数据数组
        $data["name"]        = $_POST['name'];
        $data["mycall"]      = $_POST['mycall'];
        $data["saytext"]     = $_POST['saytext'];
        $data["bid"]         = '1';
        $data["title"]       = '信息反馈';

        // 写入数据
        if( $Dao->add($data)){
            echo "1";
        } else {
            echo "0";
        }
    }
}




?>