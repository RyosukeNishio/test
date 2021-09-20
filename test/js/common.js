// JavaScript Document
// フッターナビ　ゆっくり表示
   $(function() {
     
      var navBox = $("#f_nav");

     
      navBox.hide();

   
      var TargetPos = 350;

      
      $(window).scroll( function() {
        
         var ScrollPos = $(window).scrollTop();
          
         if( ScrollPos > TargetPos ) {
            navBox.fadeIn();
         }
         else {
            navBox.fadeOut();
         }
      });
   }); 
