var t1 = t2 = t3 = t4 = t5 = t6 = n1 = n2 = n3 = n4 = n5 = n6 = 0, count1, count2, count3, count4, count5, count6;
$(document).ready(function(){
  initBanner("#index-new", 0);  
  initBanner("#index-classic", 1);  
  initBanner("#index-media", 2);  
  initBanner("#index-designer", 3);  
  initBanner("#index-brand", 4);  
  initBanner("#index-world", 5);  

})

function initBanner(parentName, num)
{
  count=$(parentName + " .content-banner-list a").length;
  if(num==0) count1 = count;
  if(num==1) count2 = count;
  if(num==2) count3 = count;
  if(num==3) count4 = count;
  if(num==4) count5 = count;
  if(num==5) count6 = count;
  
    
  $(parentName + " .content-banner-list a:not(:first-child)").hide();

$(parentName + " .content-banner li").click(function() {
    var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4
    if(num==0) 
    {
      n1 = i;
      if (i >= count1) return;
    }
    if(num==1) 
    {
      n2 = i;
      if (i >= count2) return;
    }
    if(num==2) 
    {
      n3 = i;
      if (i >= count3) return;
    }
    if(num==3) 
    {
      n4 = i;
      if (i >= count4) return;
    }
    if(num==4) 
    {
      n5 = i;
      if (i >= count5) return;
    }
    if(num==6) 
    {
      n6 = i;
      if (i >= count6) return;
    }

    $(parentName + " .content-banner-list a").filter(":visible").fadeOut(1000).parent().children().eq(i).fadeIn(3000);
    $(parentName + " .content-banner").css("background","");
    
    $(this).toggleClass("on");
    $(this).siblings().removeAttr("class");
  });
  
  if(num==0)
  {
    t1 = setInterval("showAuto1()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t1)
      }, function(){
      t1 = setInterval("showAuto1()", 8000+Math.random());
    });
  }
  if(num==1)
  {
    t2 = setInterval("showAuto2()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t2)
      }, function(){
      t2 = setInterval("showAuto2()", 8000+Math.random());
    });
  }
  if(num==2)
  {
    t3 = setInterval("showAuto3()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t3)
      }, function(){
      t3 = setInterval("showAuto3()", 8000+Math.random());
    });
  }
  if(num==3)
  {
    t4 = setInterval("showAuto4()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t4)
      }, function(){
      t4 = setInterval("showAuto4()", 8000+Math.random());
    });
  }
  if(num==4)
  {
    t5 = setInterval("showAuto5()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t5)
      }, function(){
      t5 = setInterval("showAuto5()", 8000+Math.random());
    });   
  }
  if(num==5)
  {
    t6 = setInterval("showAuto6()", 8000+Math.random());
    $(parentName + " .content-banner").hover(function(){
      clearInterval(t6)
      }, function(){
      t6 = setInterval("showAuto6()", 8000+Math.random());
    });   
  }
}


function showAuto1()
{
    n1 = n1 >=(count1 - 1) ? 0 : ++n1;
    $("#index-new .content-banner li").eq(n1).trigger('click');
}
function showAuto2()
  {
    n2 = n2 >=(count2 - 1) ? 0 : ++n2;
    $("#index-classic .content-banner li").eq(n2).trigger('click');
  }
function showAuto3()
  {
    n3 = n3 >=(count3 - 1) ? 0 : ++n3;
    $("#index-media .content-banner li").eq(n3).trigger('click');
  }
function showAuto4()
  {
    n4 = n4 >=(count4 - 1) ? 0 : ++n4;
    $("#index-designer .content-banner li").eq(n4).trigger('click');
  }
function showAuto5()
  {
    n5 = n5 >=(count5 - 1) ? 0 : ++n5;
    $("#index-brand .content-banner li").eq(n5).trigger('click');
  }
function showAuto6()
  {
    n6 = n6 >=(count6 - 1) ? 0 : ++n6;
    $("#index-world .content-banner li").eq(n6).trigger('click');
  }