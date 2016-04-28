 var $dd  =function(){return document.getElementById("menu_window");}   

  function _scrollHeight (){//返回整个网页内容的高度.
      var a = {};
      a.x = document.documentElement.scrollWidth;
      a.y = document.documentElement.scrollHeight;
      return a ;
    }
  function _getPageScroll () {
        var s;
        if (typeof(window.pageYOffset) != "undefined") {
            s = window.pageYOffset;
        } else if (document.documentElement && document.documentElement.scrollTop) {
            s = document.documentElement.scrollTop;
        } else if (document.body) {
            s = document.body.scrollTop;
        }
        return s;
    }
  function getWindowSize () { //
        var a = {};
        if (window.self && self.innerWidth) {
            a.width = self.innerWidth;
            a.height = self.innerHeight;
            return a;
        }
        if (document.documentElement && document.documentElement.clientHeight) {//标准兼容模式开启
            a.width = document.documentElement.clientWidth;
            a.height = document.documentElement.clientHeight;
            return a;
        }
        a.width = document.body.clientWidth;//标准兼容模式关闭
        a.height = document.body.clientHeight;
        return a;
    }
	
window.onscroll = function () 
{
if (_getPageScroll() >= 330 ){
      $dd("menu_window").style.display = "block";
    }
    else
    {
  $dd("menu_window").style.display = "none";
    }
	
}


