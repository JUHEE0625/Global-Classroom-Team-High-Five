function checkSubmit(){
    var memberId = $('.userId');
    var memberPw = $('.password');

    if(memberId.val() == ''){
        alert('Please input your ID.');
        return false;
    }
    if(memberPw.val() == ''){
        alert('Please input your Password.');
        return false;
    }
    return true;

}
