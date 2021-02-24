<?php
    include_once ("./lib/lib.php");

    if (!$member) {
        alert("회원만 접근 가능합니다.");
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Todo Blog</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/main.css" rel="stylesheet">
</head>
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">

                    <!-- content inner -->
                    <section id="projects">
                        <div class="container">
                            <div class="row">
                                
                                <?php
                                $midx = isset($varray[1]) ? $varray[1] : 'myblogBoard';
                                    if(file_exists("./page/{$midx}.php")) {
                                        include_once("./page/{$midx}.php");
                                    } else {
                                        echo "블로그에 등록된 메뉴가 없습니다.";
                                    }
                                ?>
                            
                            </div>
                        </div>
                    </section>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>