$(document).ready(function(){var i=$(".container").width();$(".selector").slider({max:i,slide:function(i,e){var s=$(this).slider("values",0);$(".bubbles li").each(function(i){$(this).position().left-50<=s?$(this).children("div").addClass("pop"):$(this).children("div").removeClass("pop")});var s=$(this).slider("values",0);$(".bubbles li").each(function(i){$(this).position().left+25<=s&&$(this).children("div").removeClass("pop")})}})});