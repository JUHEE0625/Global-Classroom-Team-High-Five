$(function(){

    //아이디 중복 확인 소스
    var memberIdCheck = $('.memberIdCheck');
    var memberId = $('.userId');
    var memberIdComment = $('.memberIdComment');
    var memberPw = $('.password');
    var memberPw2 = $('.password_a');
    var memberPw2Comment = $('.memberPw2Comment');
    var memberNickName = $('.username');
    var memberNickNameComment = $('.memberNickNameComment');
    var memberEmailAddress = $('.email');
    var memberEmailAddressComment = $('.memberEmailAddressComment');

    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var eMailCheck = $('.eMailCheck');

    memberIdCheck.click(function(){
        console.log(memberId.val());
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '../member/memberIdCheck.php',
            data: {memberId: memberId.val()},

            success: function (json) {
                if(json.res == 'good') {
                    console.log(json.res);
                    memberIdComment.text('This ID is valid.');
                    idCheck.val('1');
                }else{
                    memberIdComment.text('This ID is not valid.');
                    memberId.focus();
                }
            },

            error: function(){
              console.log('failed');

            }
        })
    });

    //비밀번호 동일 한지 체크
    memberPw2.blur(function(){
       if(memberPw.val() == memberPw2.val()){
           memberPw2Comment.text('Password is matched');
           pwCheck2.val('1');
       }else{
           memberPw2Comment.text('Password is not matched.');

       }
    });

    //이메일 유효성 검사
    memberEmailAddress.blur(function(){
        var regex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        if(regex.test(memberEmailAddress.val()) === false){
            memberEmailAddressComment.text('This email is not valid.');
            eMailCheck.val('1');
        }else{
            memberEmailAddressComment.text('This email is valid.');
        }
    });

});

function checkSubmit(){
    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var eMailCheck = $('.eMailCheck');
    var memberName = $('.username');


    if(idCheck.val() == '1'){
        res = true;
    }else{
        res = false;
    }
    if(pwCheck2.val() == '1'){
        res = true;
    }else{
        res = false;
    }
    if(eMailCheck.val() == '1'){
        res = true;
    }else{
        res = false;
    }

    if(memberName.val() != ''){
        res = true;
    }else{
        res = false;
    }
    if(memberBirthDay.val() != ''){
        res = true;
    }else{
        res = false;
    }
    if(memberNickName.val() != ''){
        res = true;
    }else{
        res = false;
    }

    if(res == false){
        alert('You have to fill all information.');
    }
    return res;

}
