$(document).ready(function(){$(".js-input").on("focus focusout",function(e){e.preventDefault(),$(e.target).parent().toggleClass("is_focused"),"focusout"==e.type&&$(e.target).val($.trim($(e.target).val()))}),$(".js-input").on("change keyup",function(e){e.preventDefault(),""===$.trim($(e.target).val())||$(e.target).hasClass("is_filled")?$(e.target).parent().removeClass("is_filled"):$(e.target).parent().addClass("is_filled"),$(this).removeClass("error")}),$(".js-phone").on("focusout",function(e){e.preventDefault();var t=$(this).val().replace(/[^0-9]/gi,"");7==t.substr(0,1)&&(t="+7"+t.substr(1,t.length-1)),$(this).val(t)}),$("#callback__form").on("submit",function(e){console.log("here");var t=$("#name"),a=$("#phone"),s=new RegExp(/\d{11}/),n=!1;if(new RegExp(/.+/).test(t.val())||(t.addClass("error"),n=!0),s.test(a.val())||(a.addClass("error"),n=!0),n)return!1;var r={name:t.val(),phone:a.val()};$.ajax({url:"ajax-handler/",type:"POST",data:{data:r},success:function(e){UIkit.offcanvas.hide([force=!1]),UIkit.notify({message:"success"==e?"Ваше сообщение успешно отправлено":"Ошибка отправки сообщения",status:e,timeout:3e3,pos:"bottom-center"})},error:function(e){UIkit.notify({message:"Ошибка отправки сообщения",status:"warning",timeout:3e3,pos:"bottom-center"})}}),e.preventDefault()})});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInRlbXBsYXRlLmpzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwib24iLCJlIiwicHJldmVudERlZmF1bHQiLCJ0YXJnZXQiLCJwYXJlbnQiLCJ0b2dnbGVDbGFzcyIsInR5cGUiLCJ2YWwiLCJ0cmltIiwiaGFzQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImFkZENsYXNzIiwidGhpcyIsInJlcGxhY2UiLCJzdWJzdHIiLCJsZW5ndGgiLCJjb25zb2xlIiwibG9nIiwibmFtZV9maWxlZCIsInBob25lX2ZpbGVkIiwicmVnZXhfcGhvbmUiLCJSZWdFeHAiLCJoYXNFcnIiLCJ0ZXN0IiwiZGF0YSIsIm5hbWUiLCJwaG9uZSIsImFqYXgiLCJ1cmwiLCJzdWNjZXNzIiwicmVzdWx0IiwiVUlraXQiLCJvZmZjYW52YXMiLCJoaWRlIiwiZm9yY2UiLCJub3RpZnkiLCJtZXNzYWdlIiwic3RhdHVzIiwidGltZW91dCIsInBvcyIsImVycm9yIl0sIm1hcHBpbmdzIjoiQUFHQUEsRUFBRUMsVUFBVUMsTUFBTSxXQUVkRixFQUFFLGFBQWFHLEdBQUcsaUJBQWtCLFNBQVNDLEdBQ3pDQSxFQUFFQyxpQkFDRkwsRUFBRUksRUFBRUUsUUFBUUMsU0FBU0MsWUFBWSxjQUNwQixZQUFWSixFQUFFSyxNQUNEVCxFQUFFSSxFQUFFRSxRQUFRSSxJQUFJVixFQUFFVyxLQUFLWCxFQUFFSSxFQUFFRSxRQUFRSSxVQUczQ1YsRUFBRSxhQUFhRyxHQUFHLGVBQWdCLFNBQVNDLEdBQ3ZDQSxFQUFFQyxpQkFDK0IsS0FBOUJMLEVBQUVXLEtBQUtYLEVBQUVJLEVBQUVFLFFBQVFJLFFBQWtCVixFQUFFSSxFQUFFRSxRQUFRTSxTQUFTLGFBR3pEWixFQUFFSSxFQUFFRSxRQUFRQyxTQUFTTSxZQUFZLGFBRmpDYixFQUFFSSxFQUFFRSxRQUFRQyxTQUFTTyxTQUFTLGFBSWxDZCxFQUFFZSxNQUFNRixZQUFZLFdBRXhCYixFQUFFLGFBQWFHLEdBQUcsV0FBWSxTQUFTQyxHQUNuQ0EsRUFBRUMsaUJBQ0YsSUFBSUssRUFBTVYsRUFBRWUsTUFBTUwsTUFBTU0sUUFBUSxXQUFXLElBQ3BCLEdBQXBCTixFQUFJTyxPQUFPLEVBQUcsS0FDYlAsRUFBTSxLQUFPQSxFQUFJTyxPQUFPLEVBQUdQLEVBQUlRLE9BQVMsSUFFNUNsQixFQUFFZSxNQUFNTCxJQUFJQSxLQUdoQlYsRUFBRSxtQkFBbUJHLEdBQUcsU0FBVSxTQUFVQyxHQUN4Q2UsUUFBUUMsSUFBSSxRQUNaLElBQUlDLEVBQWFyQixFQUFFLFNBQ2ZzQixFQUFjdEIsRUFBRSxVQUVoQnVCLEVBQWMsSUFBSUMsT0FBTyxVQUd6QkMsR0FBUyxFQVViLEdBWmlCLElBQUlELE9BQU8sTUFJWkUsS0FBS0wsRUFBV1gsU0FDNUJXLEVBQVdQLFNBQVMsU0FDcEJXLEdBQVMsR0FFUkYsRUFBWUcsS0FBS0osRUFBWVosU0FDOUJZLEVBQVlSLFNBQVMsU0FDckJXLEdBQVMsR0FFVEEsRUFDQSxPQUFPLEVBR1gsSUFBSUUsRUFBTyxDQUNQQyxLQUFNUCxFQUFXWCxNQUNqQm1CLE1BQU9QLEVBQVlaLE9BR3ZCVixFQUFFOEIsS0FBSyxDQUNIQyxJQUFLLGdCQUNMdEIsS0FBTSxPQUNOa0IsS0FBTSxDQUFDQSxLQUFNQSxHQUNiSyxRQUFTLFNBQVVDLEdBQ2ZDLE1BQU1DLFVBQVVDLEtBQUssQ0FBQ0MsT0FBUSxJQUM5QkgsTUFBTUksT0FBTyxDQUNUQyxRQUFvQixXQUFWTixFQUF1QixvQ0FBc0MsNEJBQ3ZFTyxPQUFRUCxFQUNSUSxRQUFTLElBQ1RDLElBQUssbUJBR2JDLE1BQU8sU0FBVVYsR0FDYkMsTUFBTUksT0FBTyxDQUNUQyxRQUFTLDRCQUNUQyxPQUFRLFVBQ1JDLFFBQVMsSUFDVEMsSUFBSyxxQkFNakJ0QyxFQUFFQyIsImZpbGUiOiJ0ZW1wbGF0ZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKlxuICogQ3JlYXRlZCBieSB2bGFkaW1pcmxvemtpbiBvbiAwNS4wOC4xOC5cbiAqL1xuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgLy8g0KHQvtCx0YvRgtC40LUg0L/RgNC4INGE0L7QutGD0YHQtSDQuNC90L/Rg9GC0L7QslxuICAgICQoJy5qcy1pbnB1dCcpLm9uKCdmb2N1cyBmb2N1c291dCcsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAkKGUudGFyZ2V0KS5wYXJlbnQoKS50b2dnbGVDbGFzcygnaXNfZm9jdXNlZCcpO1xuICAgICAgICBpZihlLnR5cGUgPT0gJ2ZvY3Vzb3V0Jykge1xuICAgICAgICAgICAgJChlLnRhcmdldCkudmFsKCQudHJpbSgkKGUudGFyZ2V0KS52YWwoKSkpO1xuICAgICAgICB9XG4gICAgfSk7XG4gICAgJCgnLmpzLWlucHV0Jykub24oJ2NoYW5nZSBrZXl1cCcsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBpZigkLnRyaW0oJChlLnRhcmdldCkudmFsKCkpICE9PSAnJyAmJiAhJChlLnRhcmdldCkuaGFzQ2xhc3MoJ2lzX2ZpbGxlZCcpKSB7XG4gICAgICAgICAgICAkKGUudGFyZ2V0KS5wYXJlbnQoKS5hZGRDbGFzcygnaXNfZmlsbGVkJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKGUudGFyZ2V0KS5wYXJlbnQoKS5yZW1vdmVDbGFzcygnaXNfZmlsbGVkJyk7XG4gICAgICAgIH1cbiAgICAgICAgJCh0aGlzKS5yZW1vdmVDbGFzcyhcImVycm9yXCIpO1xuICAgIH0pO1xuICAgICQoJy5qcy1waG9uZScpLm9uKCdmb2N1c291dCcsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB2YXIgdmFsID0gJCh0aGlzKS52YWwoKS5yZXBsYWNlKC9bXjAtOV0vZ2ksJycpO1xuICAgICAgICBpZih2YWwuc3Vic3RyKDAsIDEpID09IDcpIHtcbiAgICAgICAgICAgIHZhbCA9ICcrNycgKyB2YWwuc3Vic3RyKDEsIHZhbC5sZW5ndGggLSAxKTtcbiAgICAgICAgfVxuICAgICAgICAkKHRoaXMpLnZhbCh2YWwpO1xuICAgIH0pO1xuXG4gICAgJChcIiNjYWxsYmFja19fZm9ybVwiKS5vbignc3VibWl0JywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgY29uc29sZS5sb2coXCJoZXJlXCIpO1xuICAgICAgICB2YXIgbmFtZV9maWxlZCA9ICQoXCIjbmFtZVwiKTtcbiAgICAgICAgdmFyIHBob25lX2ZpbGVkID0gJChcIiNwaG9uZVwiKTtcblxuICAgICAgICB2YXIgcmVnZXhfcGhvbmUgPSBuZXcgUmVnRXhwKC9cXGR7MTF9Lyk7XG4gICAgICAgIHZhciByZWdleF9uYW1lID0gbmV3IFJlZ0V4cCgvLisvKTtcblxuICAgICAgICB2YXIgaGFzRXJyID0gZmFsc2U7XG5cbiAgICAgICAgaWYgKCFyZWdleF9uYW1lLnRlc3QobmFtZV9maWxlZC52YWwoKSkpIHtcbiAgICAgICAgICAgIG5hbWVfZmlsZWQuYWRkQ2xhc3MoXCJlcnJvclwiKTtcbiAgICAgICAgICAgIGhhc0VyciA9IHRydWU7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKCFyZWdleF9waG9uZS50ZXN0KHBob25lX2ZpbGVkLnZhbCgpKSkge1xuICAgICAgICAgICAgcGhvbmVfZmlsZWQuYWRkQ2xhc3MoXCJlcnJvclwiKTtcbiAgICAgICAgICAgIGhhc0VyciA9IHRydWU7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKGhhc0Vycikge1xuICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgICAgICB9XG5cbiAgICAgICAgdmFyIGRhdGEgPSB7XG4gICAgICAgICAgICBuYW1lOiBuYW1lX2ZpbGVkLnZhbCgpLFxuICAgICAgICAgICAgcGhvbmU6IHBob25lX2ZpbGVkLnZhbCgpXG4gICAgICAgIH07XG5cbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHVybDogXCJhamF4LWhhbmRsZXIvXCIsXG4gICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICBkYXRhOiB7ZGF0YTogZGF0YX0sXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzdWx0KSB7XG4gICAgICAgICAgICAgICAgVUlraXQub2ZmY2FudmFzLmhpZGUoW2ZvcmNlID0gZmFsc2VdKTtcbiAgICAgICAgICAgICAgICBVSWtpdC5ub3RpZnkoe1xuICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAocmVzdWx0ID09IFwic3VjY2Vzc1wiKSA/ICfQktCw0YjQtSDRgdC+0L7QsdGJ0LXQvdC40LUg0YPRgdC/0LXRiNC90L4g0L7RgtC/0YDQsNCy0LvQtdC90L4nIDogJ9Ce0YjQuNCx0LrQsCDQvtGC0L/RgNCw0LLQutC4INGB0L7QvtCx0YnQtdC90LjRjycsXG4gICAgICAgICAgICAgICAgICAgIHN0YXR1czogcmVzdWx0LFxuICAgICAgICAgICAgICAgICAgICB0aW1lb3V0OiAzMDAwLFxuICAgICAgICAgICAgICAgICAgICBwb3M6ICdib3R0b20tY2VudGVyJ1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAocmVzdWx0KSB7XG4gICAgICAgICAgICAgICAgVUlraXQubm90aWZ5KHtcbiAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ9Ce0YjQuNCx0LrQsCDQvtGC0L/RgNCw0LLQutC4INGB0L7QvtCx0YnQtdC90LjRjycsXG4gICAgICAgICAgICAgICAgICAgIHN0YXR1czogJ3dhcm5pbmcnLFxuICAgICAgICAgICAgICAgICAgICB0aW1lb3V0OiAzMDAwLFxuICAgICAgICAgICAgICAgICAgICBwb3M6ICdib3R0b20tY2VudGVyJ1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgIH0pO1xuXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICB9KTtcbn0pOyJdfQ==
