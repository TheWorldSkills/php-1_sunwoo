<?php
    switch ($midx){
        case 'logout':
            session_destroy();
            alert("로그아웃");
            break;

        case 'login':
            if (isset($_POST['login'])) {
                $user = $pdo->query("select * from member where id = '{$_POST['userid']}' and pwd = '{$_POST['password']}'")->fetch();
        
                if ($user) {
                    $_SESSION['member'] = $user;
                    alert("로그인이 되었습니다.");
                } else {
                    alert("아이디와 비밀번호를 다시 확인해주세요.");
                }
            }
            break;
        case 'preferences':
            $pdo->query("insert into menu set memberIdx = '{$member->idx}', menuName = '{$_POST['menuName']}'");
            alert("등록이 되었습니다.", '/page/preferences/');

            break;
    }
?>