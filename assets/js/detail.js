   var oSmallBox = document.getElementById('small-box'),
            oDrag = document.getElementById('drag'),
            oBigBox = document.getElementById('big-box'),
            oBigImg = document.getElementById('big-img'),
            oTitle = document.getElementById('title');

    oSmallBox.onmouseover=function() {
        oDrag.style.display = "block";
        oBigBox.style.display = "block";
        oTitle.style.display="none";
    };
    oSmallBox.onmousemove = function (e) {
        e = e || window.event;
        // var t = oSmallBox.offsetTop;//box相对于视口的位置
        // var l = oSmallBox.offsetLeft;
        var iLeft = e.clientX - oDrag.offsetWidth/2- 225;
        var iTop = e.clientY - oDrag.offsetHeight- 50;


        if(iLeft<0){
            iLeft = 0;
        }else if(iLeft > oSmallBox.offsetWidth-oDrag.offsetWidth){
            iLeft = oSmallBox.offsetWidth-oDrag.offsetWidth;
        }
        if(iTop<0){
            iTop = 0;
        }else if(iTop>oSmallBox.offsetHeight-oDrag.offsetHeight){
            iTop = oSmallBox.offsetHeight-oDrag.offsetHeight;
        }
        oDrag.style.left = iLeft + "px";
        oDrag.style.top = iTop + "px";

        //大图移动

        var scaleX = iLeft/(oSmallBox.offsetWidth - oDrag.offsetWidth);
        var bLeft = scaleX*(oBigImg.offsetWidth - oBigBox.offsetWidth);
        oBigImg.style.left = -bLeft + "px";

        var scaleY = iTop/(oSmallBox.offsetHeight - oDrag.offsetHeight);
        var bTop = scaleY * (oBigImg.offsetHeight - oBigBox.offsetHeight);
        oBigImg.style.top = -bTop + "px";


    };

    oSmallBox.onmouseout = function(){
        oDrag.style.display = "none";
        oBigBox.style.display = "none";
        oTitle.style.display="block";
    };
