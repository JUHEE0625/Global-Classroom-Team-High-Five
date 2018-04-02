<?php
    include "../include/dbConnect.php";
    /*echo "<pre>";
    echo var_dump($_POST);*/

    $memberId = $_POST['userId'];
    $memberName = $_POST['username'];
    $memberPw = $_POST['password'];
    $memberPw2 = $_POST['password_a'];
    $memberEmailAddress = $_POST['email'];


    //PHP에서 유효성 재확인

    //아이디 중복검사.
    $sql = "SELECT * FROM member WHERE memberId = '{$memberId}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows >= 1){
        echo 'This ID is already here.';
        exit;
    }

    //비밀번호 일치하는지 확인
    if($memberPw !== $memberPw2){
        echo 'Passwords are not corrected.';
        exit;
    }else{
        //비밀번호를 암호화 처리.
        $memberPw = md5($memberPw);
    }

    //닉네임, 생일 그리고 이름이 빈값이 아닌지
    if($memberNickName == '' || $memberBirthDay == '' || $memberName == ''){
        echo 'There is no name.';
        exit;
    }

    //이메일 주소가 올바른지
    $checkEmailAddress = filter_var($memberEmailAddress, FILTER_VALIDATE_EMAIL);

    if($checkEmailAddress != true){
        echo "This is not valid Email.";
        exit;
    }

    //이제부터 넣기 시작
    $sql = "INSERT INTO member VALUES('','{$memberId}','{$memberName}','{$memberNickName}','{$memberPw}','{$memberEmailAddress}','{$memberBirthDay}');";

    if($dbConnect->query($sql)){
        echo 'Success to Sign Up';
    }
?>
