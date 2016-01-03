<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>

<style type="text/javascript">
$(document).ready(function () {
    $('div.tags').find('input:checkbox').live('click', function () {
        if ($(this).prop("checked")) {
            $('.results > li').toggle('show');
            $('div.tags').find('input:checked').each(function () {
                $('.results > li.' + $(this).attr('rel')).toggle('show');
            });
        } else{
           $('.results > li').show();
        }
    });
});
</style>
</head>

<body>





 <div class="tags">
        <label>
            <input type="checkbox" rel="arts" />
            Arts
        </label>
        <label>
            <input type="checkbox" rel="computers" />
            Computers
        </label>
        <label>
            <input type="checkbox" rel="health" />
            Health
        </label>
        <label>
            <input type="checkbox" rel="video-games" />
            Video Games
        </label>
    </div>
    <ul class="results">
        <li class="arts computers">Result 1</li>
        <li class="video-games">Result 2</li>
        <li class="computers health video-games">Result 3</li>
        <li class="arts video-games">Result 4</li>
    </ul>    
    
    
    
    
    
</body>
</html>
