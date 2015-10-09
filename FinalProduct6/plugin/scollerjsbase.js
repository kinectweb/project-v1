  jQuery(function($){

      function getAlignedText(text){
          text = text.split('\n');
          while(text.length > 0 && $.trim(text[0]) == ''){
              text.shift();
          }
          var tabs = (text[0] || '').replace(/^(\s+).+$/, '$1');
          for(var i=0; i<text.length; i++){
              text[i] = text[i].replace(tabs, '');
          }
          if(text.length > 0 && text[text.length - 1].match(/^\s*$/)){
              text.pop();
          }
          return text.join('\n');
      }

      $('.container').each(function(){

          var content =  $(this).find('.content');
          var controls = $(this).find('.controls');

          $('<pre></pre>').addClass('prettyprint linenums lang-html').text(getAlignedText(content.find('.demo').html())).appendTo(content.find('.html'));
          $('<pre></pre>').addClass('prettyprint linenums lang-css').text(getAlignedText($('#css-common').html()) + "\n" + getAlignedText(content.find('style').html())).appendTo(content.find('.css'));
          $('<pre></pre>').addClass('prettyprint linenums lang-js').text(getAlignedText(content.find('script').html())).appendTo(content.find('.js'));

          controls.on('click', 'span', function(){
              content.find('.' + $(this).removeClass('active').attr('class')).show().siblings('div').hide();
              $(this).addClass('active').siblings('span').removeClass('active');
          });
          controls.find('.demo').click();
      });

      $('.container').on('click', '.add-content', function(){
          $('#lorem-ipsum').clone().removeAttr('id').appendTo($(this).closest('.container').find('.scroll-content'));
          return false;
      });
      $('.container').on('click', '.remove-content', function(){
          $(this).closest('.container').find('.scroll-content').find('p').not('.permanent').last().remove();
          return false;
      });

      window.prettyPrint && prettyPrint();
      $('.wrapper').scrollbar();
  });
