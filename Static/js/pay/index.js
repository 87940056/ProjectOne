$(function(){
    var num=0;
    $(".password li").on('click',function(){
        $(".password li input").eq(num).focus();
    })
    // var now=$(".password li input").eq(num);
    // now.change(function(){
    //     console.log(1)
    // })


    setInterval(jc,10)
    function jc(){
        var now=$(".password li input").eq(num);
        if(now.val()!=""){
            now.blur();
            num++;
            $(".password li").click().trigger("click")
        }

        if($(".password li input").eq(5).val()!=''&&$(".password li input").eq(5).val()=="9"){
            $(".success").css({display:"block"})
        }else if($(".password li input").eq(5).val()!=''&&$(".password li input").eq(5).val()!="9"){
            $(".fail").css({display:"block"})
        }
    }
})