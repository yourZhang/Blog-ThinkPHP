<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
// 应用公共文件
function mailto($to, $title, $content)
{
  Vendor('phpmailer.phpmailer');
  $mail = new PHPMailer(); //实例化

  $mail->IsSMTP(); // 启用SMTP
  $mail->Host = 'smtp.qq.com'; //SMTP服务器 以126邮箱为例子 
  $mail->Port = 465;  //邮件发送端口
  $mail->SMTPAuth = true;  //启用SMTP认证
  $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

  $mail->CharSet = "UTF-8"; //字符集
  $mail->Encoding = "base64"; //编码方式

  $mail->Username = '1169277016@qq.com';  //你的邮箱 
  $mail->Password = 'zgkriozgyulkbaad';  //你的邮箱授权码
  $mail->Subject = $title; //邮件标题  

  $mail->From = '1169277016@qq.com';  //发件人地址（也就是你的邮箱）
  $mail->FromName = '小张';  //发件人姓名



  $mail->AddAddress($to, "亲"); //添加收件人（地址，昵称）
  $mail->IsHTML(true); //支持html格式内容
  $mail->Body = $content; //邮件主体内容

  //发送成功就删除
  if ($mail->Send()) {
    return "发送成功";
  } else {
    return "Mailer Error: " . $mail->ErrorInfo; // 输出错误信息  
  }
}
